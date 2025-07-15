<?php

namespace Drupal\failover_log;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;

class FailoverLogListBuilder extends EntityListBuilder {

  public function buildHeader(): array {
    $header['id'] = $this->t('ID');
    $header['created'] = $this->t('Date');
    $header['interface'] = $this->t('Interface');
    $header['interface_label'] = $this->t('Nom lisible');
    $header['status'] = $this->t('Statut');
    $header['duration'] = $this->t('Duration');
    $header['message'] = $this->t('Message');
    return $header + parent::buildHeader();
  }

  public function buildRow(EntityInterface $entity): array {
    /** @var \Drupal\failover_log\Entity\FailoverLog $entity */
    $row['id'] = $entity->id();
    $row['created'] = \Drupal::service('date.formatter')->format($entity->get('created')->value);
    $row['interface'] = $entity->get('interface')->value;
    $row['interface_label'] = $entity->get('interface_label')->value;
    $row['status'] = $entity->get('status')->value;
    $row['duration'] = $entity->get('duration')->value;
    $row['message'] = $entity->get('message')->value;
    return $row + parent::buildRow($entity);
  }

  public function getOperations(EntityInterface $entity): array {
    return parent::getOperations($entity);
  }
}
