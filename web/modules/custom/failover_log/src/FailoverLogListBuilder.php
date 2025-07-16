<?php

declare(strict_types=1);

namespace Drupal\failover_log;

use Drupal\Core\Datetime\DateFormatterInterface;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\EntityStorageInterface;

/**
 * Construit la liste des entités Failover Log.
 */
class FailoverLogListBuilder extends EntityListBuilder {

    /**
     * Le service de formatage des dates.
     *
     * @var \Drupal\Core\Datetime\DateFormatterInterface
     */
    protected $dateFormatter;

    /**
     * Construit le list builder.
     *
     * @param \Drupal\Core\Entity\EntityTypeInterface $entity_type
     *   Le type d'entité.
     * @param \Drupal\Core\Entity\EntityStorageInterface $storage
     *   Le stockage de l'entité.
     * @param \Drupal\Core\Datetime\DateFormatterInterface $date_formatter
     *   Le service de formatage des dates.
     */
    public function __construct(EntityTypeInterface $entity_type, EntityStorageInterface $storage, DateFormatterInterface $date_formatter) {
        parent::__construct($entity_type, $storage);
        $this->dateFormatter = $date_formatter;
    }

    /**
     * {@inheritdoc}
     */
    public static function createInstance(\Symfony\Component\DependencyInjection\ContainerInterface $container, EntityTypeInterface $entity_type) {
        return new static(
            $entity_type,
            $container->get('entity_type.manager')->getStorage($entity_type->id()),
            $container->get('date.formatter')
        );
    }

    /**
     * {@inheritdoc}
     */
    public function buildHeader(): array {
        return [
                'message' => $this->t('Message'),
                'interface' => $this->t('Interface'),
                'interface_label' => $this->t('Libellé de l’interface'),
                'status' => $this->t('Statut'),
                'duration' => $this->t('Durée (min)'),
                'created' => $this->t('Créé le'),
            ] + parent::buildHeader();
    }

    /**
     * {@inheritdoc}
     */
    public function buildRow(EntityInterface $entity): array {
        $row = [
            'message' => $entity->get('message')->value ?? '',
            'interface' => $entity->get('interface')->value ?? '',
            'interface_label' => $entity->get('interface_label')->value ?? '',
            'status' => $entity->get('status')->value ?? '',
            'duration' => $entity->get('duration')->value ? $entity->get('duration')->value . ' min' : '',
            'created' => $this->dateFormatter->format($entity->get('created')->value, 'medium'),
        ];

        return $row + parent::buildRow($entity);
    }
}
