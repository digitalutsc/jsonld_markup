<?php


namespace Drupal\jsonld_markup\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class JsonLDMarkupSettingsForm extends FormBase{

    public function getFormId()
    {
        return 'jsonld_markup_settings_page';
    }

    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form = [];

        $form['base_schema_type'] = [
            '#type' => 'textfield',
            '#title' => $this->t("Base Schema Type"),
            '#description' => $this->t("The base schema type"),
            '#required' => FALSE,
            '#default_value' => '',

        ];

        return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        
    }
}