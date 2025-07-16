<?php
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
 *     "list_builder" = "Drupal\\ethpillar_monitoring\\ListBuilder\\EthpillarIncidentListBuilder",
 *     "form" = {
 *       "add" = "Drupal\\ethpillar_monitoring\\Form\\EthpillarIncidentForm",
 *       "edit" = "Drupal\\ethpillar_monitoring\\Form\\EthpillarIncidentForm",
 *       "delete" = "Drupal\\Core\\Entity\\ContentEntityDeleteForm"
 *     },
 *     "view_builder" = "Drupal\\Core\\Entity\\EntityViewBuilder",
 *     "route_provider" = {
 *       "html" = "Drupal\\Core\\Entity\\Routing\\DefaultHtmlRouteProvider",
 *     }
 *   },
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "timestamp"
 *   },
 *   links = {
 *     "canonical" = "/admin/ethpillar_incident/{ethpillar_incident}",
 *     "collection" = "/admin/ethpillar_incident",
 *     "add-form" = "/admin/ethpillar_incident/add",
 *     "edit-form" = "/admin/ethpillar_incident/{ethpillar_incident}/edit",
 *     "delete-form" = "/admin/ethpillar_incident/{ethpillar_incident}/delete"
 *   }
 * )
 */
class EthpillarIncident extends ContentEntityBase {

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields = parent::baseFieldDefinitions($entity_type);

    $fields['hostname'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Hostname'))
      ->setRequired(TRUE)
      ->setSettings([
        'max_length' => 255,
      ]);

    $fields['status'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Status'))
      ->setRequired(TRUE)
      ->setSettings([
        'max_length' => 50,
      ]);

    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(t('Timestamp'));

    return $fields;
  }
}
