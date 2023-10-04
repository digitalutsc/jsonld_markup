<?php

namespace Drupal\jsonld_markup\Controller;

use Drupal\Core\Controller\ControllerBase;

class JsonLDMarkupPage extends ControllerBase{
    public function content(){
        return [
            '#type' => 'markup',
            '#markup' => $this->t('Hello')
        ];
    }
}