<?php

declare(strict_types=1);

namespace Drupal\failover_log\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\EntityChangedTrait;
use Drupal\Core\Entity\EntityPublishedTrait;

/**
 * Defines the Failover Log entity.
 *
 * @ContentEntityType(
 *   id = "failover_log",
 *   label = @Translation("Failover Log"),
 *   handlers = {
 *     "storage" = "Drupal\Core\Entity\Sql\SqlContentEntityStorage",
 *     "list_builder" = "Drupal\failover_log\FailoverLogListBuilder",
 *     "form" = {
 *       "add" = "Drupal\failover_log\Form\FailoverLogForm",
 *       "edit" = "Drupal\failover_log\Form\FailoverLogForm",
 *       "delete" = "Drupal\Core\Entity\ContentEntityDeleteForm"
 *     },
 *     "access" = "Drupal\Core\Entity\EntityAccessControlHandler",
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\DefaultHtmlRouteProvider"
 *     }
 *   },
 *   base_table = "failover_log",
 *   admin_permission = "access failover log overview",
 *   entity_keys = {
 *     "id" = "id",
 *     "uuid" = "uuid",
 *     "label" = "message"
 *   },
 *   links = {
 *     "canonical" = "/admin/content/failover-log/{failover_log}",
 *     "add-form" = "/admin/content/failover-log/add",
 *     "edit-form" = "/admin/content/failover-log/{failover_log}/edit",
 *     "delete-form" = "/admin/content/failover-log/{failover_log}/delete",
 *     "collection" = "/admin/content/failover-logs"
 *   },
 * )
 */
class FailoverLog extends ContentEntityBase implements ContentEntityInterface {
    use EntityChangedTrait;

    /**
     * {@inheritdoc}
     */
    public static function baseFieldDefinitions(EntityTypeInterface $entity_type): array {
        $fields = parent::baseFieldDefinitions($entity_type);

        $fields['message'] = BaseFieldDefinition::create('string_long')
            ->setLabel(t('Message'))
            ->setDescription(t('Le message détaillant l’événement de basculement.'))
            ->setRequired(TRUE)
            ->setDisplayOptions('view', [
                'label' => 'hidden',
                'type' => 'string_textarea',
                'weight' => 0,
            ])
            ->setDisplayOptions('form', [
                'type' => 'string_textarea',
                'weight' => 0,
            ])
            ->setDisplayConfigurable('view', TRUE)
            ->setDisplayConfigurable('form', TRUE);

        $fields['interface'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Interface'))
            ->setDescription(t('Le nom technique de l’interface concernée.'))
            ->setRequired(FALSE)
            ->setDisplayOptions('view', [
                'label' => 'above',
                'type' => 'string',
                'weight' => 1,
            ])
            ->setDisplayOptions('form', [
                'type' => 'string_textfield',
                'weight' => 1,
            ])
            ->setDisplayConfigurable('view', TRUE)
            ->setDisplayConfigurable('form', TRUE);

        $fields['interface_label'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Libellé de l’interface'))
            ->setDescription(t('Le nom convivial de l’interface.'))
            ->setRequired(FALSE)
            ->setDisplayOptions('view', [
                'label' => 'above',
                'type' => 'string',
                'weight' => 2,
            ])
            ->setDisplayOptions('form', [
                'type' => 'string_textfield',
                'weight' => 2,
            ])
            ->setDisplayConfigurable('view', TRUE)
            ->setDisplayConfigurable('form', TRUE);

        $fields['status'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Statut'))
            ->setDescription(t('Le statut de l’événement (ex. succès, échec).'))
            ->setRequired(FALSE)
            ->setDisplayOptions('view', [
                'label' => 'above',
                'type' => 'string',
                'weight' => 3,
            ])
            ->setDisplayOptions('form', [
                'type' => 'string_textfield',
                'weight' => 3,
            ])
            ->setDisplayConfigurable('view', TRUE)
            ->setDisplayConfigurable('form', TRUE);

        $fields['duration'] = BaseFieldDefinition::create('integer')
            ->setLabel(t('Durée'))
            ->setDescription(t('La durée de l’événement en minutes.'))
            ->setRequired(FALSE)
            ->setDisplayOptions('view', [
                'label' => 'above',
                'type' => 'number_integer',
                'weight' => 4,
            ])
            ->setDisplayOptions('form', [
                'type' => 'number',
                'weight' => 4,
            ])
            ->setDisplayConfigurable('view', TRUE)
            ->setDisplayConfigurable('form', TRUE);

        $fields['created'] = BaseFieldDefinition::create('created')
            ->setLabel(t('Créé le'))
            ->setDescription(t('La date de création de l’entrée.'))
            ->setRequired(TRUE)
            ->setDisplayOptions('view', [
                'label' => 'above',
                'type' => 'timestamp',
                'weight' => 5,
            ])
            ->setDisplayConfigurable('view', TRUE);

        return $fields;
    }
}
