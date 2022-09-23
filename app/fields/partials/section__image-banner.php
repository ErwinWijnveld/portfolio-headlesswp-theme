<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$section__image__banner = new FieldsBuilder('section__image-banner');
 
$section__image__banner
    ->addGroup('section__image-banner')
        ->addTrueFalse('set_height', ['label' => 'Hoogte instellen', 'ui' => 1])
            ->setWidth(50)
        ->addNumber('height', ['label' => 'Hoogte van de foto instellen in pixels'])
            ->conditional('set_height', '==', 1)
            ->setWidth(50)

        ->addTrueFalse('container', ['label' => 'Maximale breedte geven aan foto?', 'ui' => 1])

        ->addImage('image', ['label' => 'Foto'])
    ->endGroup();
   
return $section__image__banner;