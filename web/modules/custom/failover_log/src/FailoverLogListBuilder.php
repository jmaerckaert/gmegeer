<?php

declare(strict_types=1);

namespace Drupal\failover_log;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;

/**
 * Construit la liste des entités Failover Log.
 */
class FailoverLogListBuilder extends EntityListBuilder {

    /**
     * {@inheritdoc}
     */
    public function buildHeader(): array {
        return [
                'message' => $this->t('Message'),
                'interface' => $this->t('Interface'),
                'interface_label' => $this->t('Libellé de l’interface'),
                'status' => $this->t('Statut'),
                'duration' => $this->t('Durée (ms)'),
                'created' => $this->t('Créé le'),
            ] + parent::buildHeader();
    }

    /**
     * {@inheritdoc}
     */
    public function buildRow(EntityInterface $entity): array {
        return [
                'message' => $entity->get('message')->value,
                'interface' => $entity->get('interface')->value,
                'interface_label' => $entity->get('interface_label')->value,
                'status' => $entity->get('status')->value,
                'duration' => $entity->get('duration')->value,
                'created' => $entity->get('created')->view(['type' => 'timestamp']),
            ] + parent::buildRow($entity);
    }
}
