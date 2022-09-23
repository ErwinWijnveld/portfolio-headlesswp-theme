<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$menu_options = new FieldsBuilder('options_menu');


$menu_options
    ->setLocation('options_page', '==', 'options-menu');

$menu_options
    ->addTab('login_page')
        ->addImage('login_background_image')
        ->addImage('login_logo')

    ->addTab('Header')
        ->addGroup('header')
            ->addImage('logo')
        ->endGroup()

    ->addTab('Footer')
        ->addGroup('footer')
            ->addImage('logo')
                ->setWidth(50)

            ->addGroup('sitemap')
                ->setWidth(50)
                ->addText('title')
                ->addRepeater('links')
                    ->addLink('link')
                ->endRepeater()
            ->endGroup()

            ->addGroup('contact')
                ->setWidth(50)
                ->addText('title')
                ->addRepeater('links')
                    ->addLink('link')
                ->endRepeater()
            ->endGroup()
            
            ->addGroup('socials')
                ->setWidth(50)
                ->addText('title')
                ->addRepeater('links')
                    ->addLink('link')
                    ->addImage('icon')
                ->endRepeater()
            ->endGroup()
            
        ->endGroup()

    ->addTab('404')
        ->addGroup('404')
            ->addText('title')
            ->addText('text')
            ->addLink('button_left')
                ->setWidth(50)
            ->addLink('button_right')
                ->setWidth(50)
        ->endGroup()
        
;return $menu_options;