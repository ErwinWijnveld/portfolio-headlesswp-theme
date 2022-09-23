<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$section__image__slider = new FieldsBuilder('section__image-slider');
 
$section__image__slider
    ->addGroup('section__image-slider')
        ->addTrueFalse('set_height', ['label' => 'Hoogte instellen', 'ui' => 1])
        ->addNumber('height', ['label' => 'Hoogte van de foto instellen in pixels'])
            ->conditional('set_height', '==', 1)
        ->addGallery('images', ['label' => 'Fotos voor in de slider'])
    ->endGroup();
   
return $section__image__slider;