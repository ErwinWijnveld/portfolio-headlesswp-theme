<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$section__hero = new FieldsBuilder('section__hero');
 
$section__hero
    ->addGroup('section__hero')
        ->addWysiwyg('content', ['label' => 'Tekst'])
    ->endGroup();
   
return $section__hero;