<?php

namespace Drupal\failover_log\Commands;

use Drupal\failover_log\Entity\FailoverLog;
use Drush\Commands\DrushCommands;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Component\Datetime\TimeInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Classe Drush pour mettre à jour les durées des connexions actives.
 */
class FailoverLogCommands extends DrushCommands {

  /** @var \Drupal\Core\Entity\EntityTypeManagerInterface */
  protected EntityTypeManagerInterface $entityTypeManager;

  /** @var \Drupal\Component\Datetime\TimeInterface */
  protected TimeInterface $time;

  /**
   * Constructeur utilisant l'injection de dépendances.
   */
  public function __construct(EntityTypeManagerInterface $entityTypeManager, TimeInterface $time) {
    $this->entityTypeManager = $entityTypeManager;
    $this->time = $time;
  }

  /**
   * Méthode statique de construction du service pour Drush.
   */
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
   * @usage drush failover_log:update-durations
   *   Met à jour les entités failover_log avec une durée si elles sont actives.
   */
  public function updateDurations(): void {
    // Requête des entités dont la durée est "active".
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
}
