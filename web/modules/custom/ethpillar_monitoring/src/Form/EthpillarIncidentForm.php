<?php
namespace Drupal\ethpillar_monitoring\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for EthpillarIncident edit forms.
 */
class EthpillarIncidentForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildForm($form, $form_state);
    // Custom alterations can go here.
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = $this->entity;
    $status = parent::save($form, $form_state);
    if ($status == SAVED_NEW) {
      $this->messenger()->addMessage($this->t('Created the %label Ethpillar incident.', ['%label' => $entity->label()]));
    }
    else {
      $this->messenger()->addMessage($this->t('Saved the %label Ethpillar incident.', ['%label' => $entity->label()]));
    }
  }
}
