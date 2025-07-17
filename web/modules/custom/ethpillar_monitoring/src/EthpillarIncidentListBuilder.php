<?php
namespace Drupal\ethpillar_monitoring\ListBuilder;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;

/**
 * Defines a class to build a listing of EthpillarIncident entities.
 */
class EthpillarIncidentListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader(): array {
    $header['id'] = $this->t('ID');
    $header['hostname'] = $this->t('Hostname');
    $header['created'] = $this->t('Date');
    $header['status'] = $this->t('Status');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity): array {
    /* @var \Drupal\ethpillar_monitoring\Entity\EthpillarIncident $entity */
    $row['id'] = $entity->id();
    $row['hostname'] = $entity->hostname->value;
    $row['created'] = \Drupal::service('date.formatter')->format($entity->getCreatedTime(), 'short');
    $row['status'] = $entity->status->value;
    return $row + parent::buildRow($entity);
  }
}
