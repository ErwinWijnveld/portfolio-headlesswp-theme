<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$section__list = new FieldsBuilder('section__list');

$section__list
    ->addGroup('section__list')
    ->addtext('title')
    ->addRepeater('list', ['layout' => 'block'])
    ->addText('title')->setWidth(50)
    ->addText('subtitle')->setWidth(50)
    ->addWysiwyg('content')->setWidth(100)
    ->endRepeater()
    ->endGroup();

return $section__list;