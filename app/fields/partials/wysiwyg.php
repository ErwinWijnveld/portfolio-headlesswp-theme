<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$wysiwyg = new FieldsBuilder('wysiwyg');
 
$wysiwyg
    ->addGroup('wysiwyg')
        ->addTrueFalse('container', ['label' => 'Maximale breedte geven aan text?', 'ui' => 1])
        ->addWysiwyg('text')
    ->endGroup();

return $wysiwyg;