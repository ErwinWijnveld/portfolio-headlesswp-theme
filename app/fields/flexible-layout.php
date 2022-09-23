<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$flexible_layout = new FieldsBuilder('flexible_layout');

// Load header partials

// Load content partials
$section__image_grid = get_field_partial('partials.section__image-grid');
$spacer = get_field_partial('partials.spacer');
$wysiwyg = get_field_partial('partials.wysiwyg');
$section__image_text = get_field_partial('partials.section__image-text');
$section__image_banner = get_field_partial('partials.section__image-banner');
$section__image_slider = get_field_partial('partials.section__image-slider');
$section__hero = get_field_partial('partials.section__hero');
$section__featuredProjects = get_field_partial('partials.section__featuredProjects');
$section__about = get_field_partial('partials.section__about');
$section__list = get_field_partial('partials.section__list');


$flexible_layout
    ->addFlexibleContent('flex_content', ['button_label' => 'Add Content Row'])

    // Load layouts
    ->addLayout($section__image_grid)
    ->addLayout($spacer)
    ->addLayout($wysiwyg)
    ->addLayout($section__image_text)
    ->addLayout($section__image_banner)
    ->addLayout($section__image_slider)
    ->addLayout($section__hero)
    ->addLayout($section__featuredProjects)
    ->addLayout($section__about)
    ->addLayout($section__list)

    ->endFlexibleContent();
return $flexible_layout;