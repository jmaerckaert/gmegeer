<?php

declare(strict_types=1);

namespace Drupal\ethpillar_monitoring\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;

/**
 * Defines the EthpillarIncident entity.
 *
 * @ContentEntityType(
 *   id = "ethpillar_incident",
 *   label = @Translation("Ethpillar Incident"),
 *   base_table = "ethpillar_incident",
 *   admin_permission = "administer ethpillar incidents",
 *   handlers = {
 *     "list_builder" = "Drupal\ethpillar_monitoring\EthpillarIncidentListBuilder",
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "form" = {
 *       "add" = "Drupal\ethpillar_monitoring\Form\EthpillarIncidentForm",
 *       "edit" = "Drupal\ethpillar_monitoring\Form\EthpillarIncidentForm",
 *       "delete" = "Drupal\Core\Entity\ContentEntityDeleteForm"
 *     }
 *   },
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "created"
 *   },
 *   links = {
 *     "canonical" = "/admin/ethpillar_incident/{ethpillar_incident}",
 *     "collection" = "/admin/content/ethpillar_incident",
 *     "add-form" = "/admin/content/ethpillar_incident/add",
 *     "edit-form" = "/admin/content/ethpillar_incident/{ethpillar_incident}/edit",
 *     "delete-form" = "/admin/content/ethpillar_incident/{ethpillar_incident}/delete"
 *   }
 * )
 */
class EthpillarIncident extends ContentEntityBase {

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type): array {
    $fields = parent::baseFieldDefinitions($entity_type);

    $fields['hostname'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Hostname'))
      ->setRequired(TRUE)
      ->setSettings(['max_length' => 255])
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => -10,
      ])
      ->setDisplayConfigurable('form', TRUE);

    $fields['status'] = BaseFieldDefinition::create('list_string')
      ->setLabel(t('Status'))
      ->setRequired(TRUE)
      ->setSettings([
        'allowed_values' => [
          'active' => 'Active',
          'inactive' => 'Inactive',
          // Ajouter d'autres états si nécessaire
        ],
      ])
      ->setDisplayOptions('form', [
        'type' => 'options_select',
        'weight' => -5,
      ])
      ->setDisplayConfigurable('form', TRUE);

    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(t('Timestamp'));

    return $fields;
  }
}
