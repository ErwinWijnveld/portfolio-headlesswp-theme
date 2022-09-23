<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$section__image_grid = new FieldsBuilder('section__image-grid');
 
$section__image_grid
    ->addGroup('section__image-grid')
    
        ->addNumber('columns', ['label' => 'Aantal kolommen'])
            ->setWidth(50)
        ->addNumber('mobile_columns', ['label' => 'Aantal kolommen op mobiel'])
            ->setWidth(50)

        ->addGallery('images', ['label' => 'Fotos'])
      
    ->endGroup();

return $section__image_grid;