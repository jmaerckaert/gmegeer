<?php

namespace Drupal\failover_log\Drush\Commands;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\failover_log\Entity\FailoverLog;
use Drupal\Component\Datetime\TimeInterface;
use Drush\Attributes as CLI;
use Drush\Commands\AutowireTrait;
use Drush\Commands\DrushCommands;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Drush commands for the Failover Log module.
 */
final class FailoverLogCommands extends DrushCommands {

  use AutowireTrait;

  public function __construct(
    private readonly EntityTypeManagerInterface $entityTypeManager,
    private readonly TimeInterface $time,
  ) {
    parent::__construct();
  }

  public static function create(ContainerInterface $container): static {
    return new static(
      $container->get('entity_type.manager'),
      $container->get('datetime.time'),
    );
  }

  /**
   * Updates the duration field for all active failover logs.
   */
  #[CLI\Command(name: 'failover_log:update-durations', aliases: ['fl-update'])]
  public function updateDurations(): void {
    $query = $this->entityTypeManager->getStorage('failover_log')->getQuery();
    $query->condition('duration', 'active');
    $ids = $query->execute();

    if (empty($ids)) {
      $this->output()->writeln("No active connections found.");
      return;
    }

    $storage = $this->entityTypeManager->getStorage('failover_log');
    $entities = $storage->loadMultiple($ids);
    $now = $this->time->getCurrentTime();

    foreach ($entities as $log) {
      assert($log instanceof FailoverLog);
      $created = $log->getCreatedTime();
      $elapsed = $now - $created;
      $minutes = (int) round($elapsed / 60);
      $log->set('duration', $minutes . ' min');
      $log->save();
    }

    $this->output()->writeln("Updated durations for " . count($ids) . " log(s).\n");
  }

  /**
   * Deletes all failover logs.
   */
  #[CLI\Command(name: 'failover_log:delete-all', aliases: ['fl-delete-all'])]
  public function deleteAll(): void {
    $storage = $this->entityTypeManager->getStorage('failover_log');
    $ids = $storage->getQuery()->execute();

    if ($ids) {
      $storage->delete($storage->loadMultiple($ids));
      $this->output()->writeln("All logs have been deleted.");
    }
    else {
      $this->output()->writeln("No logs found to delete.");
    }
  }

  /**
   * Deletes all failover logs with status KO.
   */
  #[CLI\Command(name: 'failover_log:delete-ko', aliases: ['fl-delete-ko'])]
  public function deleteKO(): void {
    $storage = $this->entityTypeManager->getStorage('failover_log');
    $ids = $storage->getQuery()->condition('status', 'KO')->execute();

    if ($ids) {
      $storage->delete($storage->loadMultiple($ids));
      $this->output()->writeln("KO logs have been deleted.");
    }
    else {
      $this->output()->writeln("No KO logs to delete.");
    }
  }

  /**
   * Deletes all failover logs with status OK.
   */
  #[CLI\Command(name: 'failover_log:delete-ok', aliases: ['fl-delete-ok'])]
  public function deleteOK(): void {
    $storage = $this->entityTypeManager->getStorage('failover_log');
    $ids = $storage->getQuery()->condition('status', 'OK')->execute();

    if ($ids) {
      $storage->delete($storage->loadMultiple($ids));
      $this->output()->writeln("OK logs have been deleted.");
    }
    else {
      $this->output()->writeln("No OK logs to delete.");
    }
  }
}
