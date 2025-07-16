<?php

declare(strict_types=1);

namespace Drupal\failover_log\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;

/**
 * Définit l'entité Failover Log pour enregistrer les événements de basculement.
 *
 * @ContentEntityType(
 *   id = "failover_log",
 *   label = @Translation("Failover Log"),
 *   label_collection = @Translation("Failover Logs"),
 *   label_singular = @Translation("failover log"),
 *   label_plural = @Translation("failover logs"),
 *   label_count = @PluralTranslation(
 *     singular = "@count failover log",
 *     plural = "@count failover logs",
 *   ),
 *   handlers = {
 *     "list_builder" = "Drupal\failover_log\FailoverLogListBuilder",
 *     "access" = "Drupal\Core\Entity\EntityAccessControlHandler",
 *     "form" = {
 *       "default" = "Drupal\failover_log\Form\FailoverLogForm",
 *       "edit" = "Drupal\failover_log\Form\FailoverLogForm",
 *       "delete" = "Drupal\Core\Entity\ContentEntityDeleteForm",
 *     },
 *   },
 *   base_table = "failover_log",
 *   admin_permission = "administer failover logs",
 *   entity_keys = {
 *     "id" = "id",
 *     "uuid" = "uuid",
 *     "label" = "message",
 *   },
 *   links = {
 *     "canonical" = "/failover-log/{failover_log}",
 *     "edit-form" = "/failover-log/{failover_log}/edit",
 *     "delete-form" = "/failover-log/{failover_log}/delete",
 *     "collection" = "/admin/content/fai
lver-logs",
 *   },
 * )
 */
class FailoverLog extends ContentEntityBase {

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
