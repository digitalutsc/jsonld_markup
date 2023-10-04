<?php


namespace Drupal\jsonld_markup\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class JsonLDMarkupSettingsForm extends FormBase{

    const JSONLD_MARKUP_SETTINGS_PAGE = 'jsonld_markup_settings_page:values';

    public function getFormId()
    {
        return 'jsonld_markup_settings_page';
    }

    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $values = \Drupal::state()->get(self::JSONLD_MARKUP_SETTINGS_PAGE);
        $form = [];

        $form['schema_field'] = [
            '#type' => 'textfield',
            '#title' => $this->t("Schema Field"),
            '#description' => $this->t("The field type the the schema type will be pulled from"),
            '#required' => TRUE,
            '#default_value' => $values['schema_field'],

        ];

        $form['actions']['#type'] = 'actions';
        $form['actions']['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Save'),
            '#button_type' => 'primary'
        ];

        return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $submitted_values = $form_state->cleanValues()->getValues();

        \Drupal::state()->set(self::JSONLD_MARKUP_SETTINGS_PAGE, $submitted_values);
        $messenger = \Drupal::service('messenger');
        $messenger->addMessage($this->t("Configuration Saved"));        
    }
}