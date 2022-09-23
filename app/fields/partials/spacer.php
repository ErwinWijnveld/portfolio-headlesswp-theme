<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$spacer = new FieldsBuilder('spacer');
 
$spacer
    ->addGroup('spacer')
        ->addNumber('spacer_amount', ['label' => 'hoogte van spacer in pixels(px)'])
    ->endGroup();

return $spacer;