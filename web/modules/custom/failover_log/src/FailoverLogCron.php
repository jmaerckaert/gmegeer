<?php

namespace Drupal\failover_log;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Component\Datetime\TimeInterface;

/**
 * Service de cron pour mettre à jour les durées des logs de basculement.
 */
class FailoverLogCron {

  /**
   * Gestionnaire de types d'entités.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected EntityTypeManagerInterface $entityTypeManager;

  /**
   * Service de gestion du temps.
   *
   * @var \Drupal\Component\Datetime\TimeInterface
   */
  protected TimeInterface $time;

  /**
   * Construit le service de cron.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entityTypeManager
   *   Le gestionnaire de types d'entités.
   * @param \Drupal\Component\Datetime\TimeInterface $time
   *   Le service de gestion du temps.
   */
  public function __construct(EntityTypeManagerInterface $entityTypeManager, TimeInterface $time) {
    $this->entityTypeManager = $entityTypeManager;
    $this->time = $time;
  }

  /**
   * Met à jour les durées des logs de basculement actifs.
   *
   * Cette méthode est appelée lors de l'exécution du cron et calcule la durée
   * écoulée pour les logs de basculement qui n'ont pas encore de durée définie
   * (duration = NULL).
   */
  public function run(): void {
    $storage = $this->entityTypeManager->getStorage('failover_log');
    $query = $storage->getQuery()
      ->condition('duration', NULL, 'IS NULL') // Logs actifs sans durée définie
      ->accessCheck(FALSE);
    $ids = $query->execute();

    if (empty($ids)) {
      return;
    }

    $entities = $storage->loadMultiple($ids);
    $now = $this->time->getCurrentTime();

    foreach ($entities as $log) {
      try {
        $created = (int) $log->get('created')->value;
        $elapsed = $now - $created;
        $minutes = (int) round($elapsed / 60);
        $log->set('duration', $minutes); // Valeur entière en minutes
        $log->save();
      } catch (\Exception $e) {
        \Drupal::logger('failover_log')->error('Erreur lors de la mise à jour du log @id : @message', [
          '@id' => $log->id(),
          '@message' => $e->getMessage(),
        ]);
      }
    }
  }
}
