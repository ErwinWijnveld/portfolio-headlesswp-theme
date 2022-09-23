<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$section__image_text = new FieldsBuilder('section__image-text');
 
$section__image_text
    ->addGroup('section__image-text')
        ->addImage('image')
            ->setWidth(50)
        ->addGroup('info')
            ->setWidth(50)
            ->addText('title')
            ->addWysiwyg('text')
            ->addLink('cta')
        ->endGroup()
    ->endGroup();

return $section__image_text;