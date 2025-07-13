<?php

use Drupal\failover_log\Entity\FailoverLog;
use Drupal\Core\Datetime\DrupalDateTime;

/**
 * Script to update 'duration' for the latest active connection.
 * Run periodically via cron.
 */

$storage = \Drupal::entityTypeManager()->getStorage('failover_log');

// Get the latest OK status log.
$query = $storage->getQuery()
  ->condition('status', 'OK')
  ->sort('created', 'DESC')
  ->range(0, 1);
$ids = $query->execute();

if (!empty($ids)) {
  $log = $storage->load(reset($ids));
  if ($log) {
    $created = $log->get('created')->value;
    $created_time = new DrupalDateTime($created);
    $now = new DrupalDateTime();
    $interval = $now->getTimestamp() - $created_time->getTimestamp();
    $duration = gmdate('H:i:s', $interval);
    $log->set('duration', $duration);
    $log->save();
  }
}
?>
