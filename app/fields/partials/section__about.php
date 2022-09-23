<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$section__about = new FieldsBuilder('section__about');

$section__about
    ->addGroup('section__about')
    ->addtext('title')
    ->addWysiwyg('subtitle')->setWidth(50)
    ->addWysiwyg('content')->setWidth(50)
    ->addLink('cta')
    ->endGroup();

return $section__about;