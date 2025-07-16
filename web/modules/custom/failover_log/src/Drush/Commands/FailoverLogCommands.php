<?php

namespace Drupal\failover_log\Drush\Commands;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\failover_log\Entity\FailoverLog;
use Drupal\Component\Datetime\TimeInterface;
use Drush\Attributes as CLI;
use Drush\Commands\DrushCommands;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Drush commands for the Failover Log module.
 *
 * Provides commands to update durations and manage log entities.
 */
final class FailoverLogCommands extends DrushCommands {

  /**
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  private readonly EntityTypeManagerInterface $entityTypeManager;

  /**
   * @var \Drupal\Component\Datetime\TimeInterface
   */
  private readonly TimeInterface $time;

  /**
   * Constructs a new FailoverLogCommands object.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entityTypeManager
   *   The entity type manager service.
   * @param \Drupal\Component\Datetime\TimeInterface $time
   *   The time service for current timestamp retrieval.
   */
  public function __construct(EntityTypeManagerInterface $entityTypeManager, TimeInterface $time) {
    parent::__construct();
    $this->entityTypeManager = $entityTypeManager;
    $this->time = $time;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container): static {
    return new static(
      $container->get('entity_type.manager'),
      $container->get('datetime.time')
    );
  }

  /**
   * Updates the `duration` field for all active failover logs.
   *
   * @command failover_log:update-durations
   * @aliases fl-update
   */
  #[CLI\Command(name: 'failover_log:update-durations', aliases: ['fl-update'])]
  public function updateDurations(): void {
    // Query active logs (duration set to 'active') without access checks.
    $query = $this->entityTypeManager->getStorage('failover_log')->getQuery();
    $query->condition('duration', 'active');
    $query->accessCheck(FALSE);
    $ids = $query->execute();

    if (empty($ids)) {
      $this->output()->writeln($this->formatter()->formatString('No active connections found.'));
      return;
    }

    $storage = $this->entityTypeManager->getStorage('failover_log');
    $entities = $storage->loadMultiple($ids);
    $now = $this->time->getCurrentTime();

    foreach ($entities as $log) {
      assert($log instanceof FailoverLog);
      // Retrieve created timestamp from the base field.
      $created = (int) $log->get('created')->value;
      // Compute elapsed minutes.
      $elapsed = $now - $created;
      $minutes = (int) round($elapsed / 60);
      $log->set('duration', $minutes . ' min');
      $log->save();
    }

    $this->output()->writeln($this->formatter()->formatString('Updated durations for @count log(s).', ['@count' => count($ids)]));
  }

  /**
   * Deletes all failover logs.
   *
   * @command failover_log:delete-all
   * @aliases fl-delete-all
   */
  #[CLI\Command(name: 'failover_log:delete-all', aliases: ['fl-delete-all'])]
  public function deleteAll(): void {
    $storage = $this->entityTypeManager->getStorage('failover_log');
    $query = $storage->getQuery();
    $query->accessCheck(FALSE);
    $ids = $query->execute();

    if (empty($ids)) {
      $this->output()->writeln($this->formatter()->formatString('No logs found to delete.'));
    }
    else {
      $storage->delete($storage->loadMultiple($ids));
      $this->output()->writeln($this->formatter()->formatString('All logs have been deleted.'));
    }
  }

  /**
   * Deletes failover logs with status KO.
   *
   * @command failover_log:delete-ko
   * @aliases fl-delete-ko
   */
  #[CLI\Command(name: 'failover_log:delete-ko', aliases: ['fl-delete-ko'])]
  public function deleteKO(): void {
    $storage = $this->entityTypeManager->getStorage('failover_log');
    $query = $storage->getQuery()
      ->condition('status', 'KO');
    $query->accessCheck(FALSE);
    $ids = $query->execute();

    if (empty($ids)) {
      $this->output()->writeln($this->formatter()->formatString('No KO logs to delete.'));
    }
    else {
      $storage->delete($storage->loadMultiple($ids));
      $this->output()->writeln($this->formatter()->formatString('KO logs have been deleted.'));
    }
  }

  /**
   * Deletes failover logs with status OK.
   *
   * @command failover_log:delete-ok
   * @aliases fl-delete-ok
   */
  #[CLI\Command(name: 'failover_log:delete-ok', aliases: ['fl-delete-ok'])]
  public function deleteOK(): void {
    $storage = $this->entityTypeManager->getStorage('failover_log');
    $query = $storage->getQuery()
      ->condition('status', 'OK');
    $query->accessCheck(FALSE);
    $ids = $query->execute();

    if (empty($ids)) {
      $this->output()->writeln($this->formatter()->formatString('No OK logs to delete.'));
    }
    else {
      $storage->delete($storage->loadMultiple($ids));
      $this->output()->writeln($this->formatter()->formatString('OK logs have been deleted.'));
    }
  }
}
