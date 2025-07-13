<?php

namespace Drupal\failover_log\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\EntityStorageInterface;

/**
 * Defines the FailoverLog entity.
 *
 * @ContentEntityType(
 *   id = "failover_log",
 *   label = @Translation("Failover Log"),
 *   base_table = "failover_log",
 *   entity_keys = {
 *     "id" = "id",
 *     "uuid" = "uuid",
 *     "label" = "message"
 *   },
 *   handlers = {
 *     "list_builder" = "Drupal\failover_log\FailoverLogListBuilder"
 *   },
 *   admin_permission = "access failover log overview",
 *   links = {
 *     "collection" = "/admin/content/failover-logs"
 *   }
 * )
 */
class FailoverLog extends ContentEntityBase {

  public static function baseFieldDefinitions(EntityTypeInterface $entity_type): array {
    $fields = parent::baseFieldDefinitions($entity_type);

    $fields['message'] = BaseFieldDefinition::create('string_long')
      ->setLabel(t('Message'))
      ->setRequired(TRUE)
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'string_textarea',
        'weight' => 0,
      ])
      ->setDisplayConfigurable('form', TRUE);

    $fields['interface'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Interface (nom technique)'))
      ->setDisplayConfigurable('form', TRUE);

    $fields['interface_label'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Interface (nom lisible)'))
      ->setDisplayConfigurable('form', TRUE);

    $fields['status'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Statut'))
      ->setDisplayConfigurable('form', TRUE);

    $fields['duration'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Duration'))
      ->setDisplayConfigurable('form', TRUE);

    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(t('Créé le'));

    return $fields;
  }
}
