<?php

namespace Drupal\failover_log;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Component\Datetime\TimeInterface;

/**
 * Cron callback for Failover Log durations.
 */
class FailoverLogCron {

  /**
   * Entity type manager service.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected EntityTypeManagerInterface $entityTypeManager;

  /**
   * Time service.
   *
   * @var \Drupal\Component\Datetime\TimeInterface
   */
  protected TimeInterface $time;

  /**
   * Constructs the cron service.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entityTypeManager
   *   The entity type manager.
   * @param \Drupal\Component\Datetime\TimeInterface $time
   *   The time service.
   */
  public function __construct(EntityTypeManagerInterface $entityTypeManager, TimeInterface $time) {
    $this->entityTypeManager = $entityTypeManager;
    $this->time = $time;
  }

  /**
   * Run method called on cron.
   */
  public function run() : void {
    $storage = $this->entityTypeManager->getStorage('failover_log');
    $query = $storage->getQuery()
      ->condition('duration', 'active')
      ->accessCheck(FALSE);
    $ids = $query->execute();

    if (empty($ids)) {
      return;
    }

    $entities = $storage->loadMultiple($ids);
    $now = $this->time->getCurrentTime();

    foreach ($entities as $log) {
      $created = (int) $log->get('created')->value;
      $elapsed = $now - $created;
      $minutes = (int) round($elapsed / 60);
      $log->set('duration', $minutes . ' min');
      $log->save();
    }
  }

}
