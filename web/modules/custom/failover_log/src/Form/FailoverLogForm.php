<?php

declare(strict_types=1);

namespace Drupal\failover_log\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Formulaire pour créer et modifier des entités Failover Log.
 */
class FailoverLogForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state): array {
    $form = parent::buildForm($form, $form_state);

    /** @var \Drupal\failover_log\Entity\FailoverLog $entity */
    $entity = $this->entity;

    // Personnalisation du formulaire.
    $form['#theme'] = 'failover_log_form';

    // Optionnel : Ajouter des descriptions ou des validations supplémentaires.
    $form['message']['widget'][0]['value']['#description'] = $this->t('Entrez un message détaillé décrivant l’événement de basculement.');
    $form['interface']['widget'][0]['value']['#description'] = $this->t('Saisissez le nom technique de l’interface.');
    $form['interface_label']['widget'][0]['value']['#description'] = $this->t('Saisissez un nom convivial pour l’interface.');
    $form['status']['widget'][0]['value']['#description'] = $this->t('Indiquez le statut de l’événement (ex. succès, échec).');
    $form['duration']['widget'][0]['value']['#description'] = $this->t('Indiquez la durée en minutes (optionnel, calculé automatiquement par le cron si vide).');

    // Champ 'created' en lecture seule, car il est géré automatiquement.
    $form['created']['#access'] = FALSE;

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state): int {
    $entity = $this->entity;
    $is_new = $entity->isNew();

    $entity->save();

    $this->messenger()->addStatus($this->t('L’entité Failover Log %label a été @action.', [
      '%label' => $entity->label(),
      '@action' => $is_new ? $this->t('créée') : $this->t('mise à jour'),
    ]));

    $form_state->setRedirect('entity.failover_log.collection');

    return $is_new ? SAVED_NEW : SAVED_UPDATED;
  }
}
