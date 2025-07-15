<?php

namespace Drupal\failover_log\Commands;

use Drupal\failover_log\Entity\FailoverLog;
use Drush\Commands\DrushCommands;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Component\Datetime\TimeInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Classe Drush pour interagir avec les entités failover_log.
 */
class FailoverLogCommands extends DrushCommands {

  protected EntityTypeManagerInterface $entityTypeManager;
  protected TimeInterface $time;

  public function __construct(EntityTypeManagerInterface $entityTypeManager, TimeInterface $time) {
    $this->entityTypeManager = $entityTypeManager;
    $this->time = $time;
  }

  public static function create(ContainerInterface $container): self {
    return new static(
      $container->get('entity_type.manager'),
      $container->get('datetime.time')
    );
  }

  /**
   * Met à jour la durée des connexions actives.
   *
   * @command failover_log:update-durations
   * @aliases fl-update
   */
  public function updateDurations(): void {
    $query = $this->entityTypeManager->getStorage('failover_log')->getQuery();
    $query->condition('duration', 'active');
    $ids = $query->execute();

    if (empty($ids)) {
      $this->output()->writeln("Aucune connexion active trouvée.");
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

    $this->output()->writeln("Mise à jour terminée pour " . count($ids) . " log(s).");
  }

  /**
   * Supprime tous les logs.
   *
   * @command failover_log:delete-all
   * @aliases fl-delete-all
   */
  public function deleteAll(): void {
    $storage = $this->entityTypeManager->getStorage('failover_log');
    $ids = $storage->getQuery()->execute();
    if ($ids) {
      $storage->delete($storage->loadMultiple($ids));
      $this->output()->writeln("Tous les logs ont été supprimés.");
    }
    else {
      $this->output()->writeln("Aucun log à supprimer.");
    }
  }

  /**
   * Supprime les logs avec un statut KO.
   *
   * @command failover_log:delete-ko
   * @aliases fl-delete-ko
   */
  public function deleteKO(): void {
    $storage = $this->entityTypeManager->getStorage('failover_log');
    $ids = $storage->getQuery()->condition('status', 'KO')->execute();
    if ($ids) {
      $storage->delete($storage->loadMultiple($ids));
      $this->output()->writeln("Logs KO supprimés.");
    }
    else {
      $this->output()->writeln("Aucun log KO à supprimer.");
    }
  }

  /**
   * Supprime les logs avec un statut OK.
   *
   * @command failover_log:delete-ok
   * @aliases fl-delete-ok
   */
  public function deleteOK(): void {
    $storage = $this->entityTypeManager->getStorage('failover_log');
    $ids = $storage->getQuery()->condition('status', 'OK')->execute();
    if ($ids) {
      $storage->delete($storage->loadMultiple($ids));
      $this->output()->writeln("Logs OK supprimés.");
    }
    else {
      $this->output()->writeln("Aucun log OK à supprimer.");
    }
  }
}
