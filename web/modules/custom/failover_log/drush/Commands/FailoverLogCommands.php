<?php

namespace Drupal\failover_log\Commands;

use Drupal\failover_log\Entity\FailoverLog;
use Drush\Commands\DrushCommands;
use Drupal\Core\Datetime\DateFormatterInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class FailoverLogCommands extends DrushCommands {

  /**
   * Met à jour la durée des connexions actives.
   *
   * @command failover_log:update-durations
   * @aliases fl-update
   */
  public function updateDurations() {
    $storage = \Drupal::entityTypeManager()->getStorage('failover_log');
    $query = \Drupal::entityQuery('failover_log')
      ->condition('duration', 'active');

    $ids = $query->execute();
    $entities = $storage->loadMultiple($ids);

    foreach ($entities as $log) {
      /** @var \Drupal\failover_log\Entity\FailoverLog $log */
      $created = $log->getCreatedTime();
      $now = \Drupal::time()->getCurrentTime();
      $elapsed = $now - $created;
      $minutes = round($elapsed / 60);
      $log->set('duration', $minutes . ' min');
      $log->save();
    }

    $this->output()->writeln("Mise à jour terminée pour " . count($ids) . " log(s).");
  }
}
