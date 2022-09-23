<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$section__featured_projects = new FieldsBuilder('section__featured-projects');
 
$section__featured_projects
    ->addGroup('section__featured-projects')
        ->addPostObject('featured_projects', [
            'label' => 'Featured Projects',
            'post_type' => ['project'],
            'multiple' => 1,
            'return_format' => 'object',
            'ui' => 1,
        ])
    ->endGroup();
   
return $section__featured_projects;