<?php
/*//
// Run script to create the following files:
// Blade template partial
// SCSS partial
// ACF fields partial
//
// Header partials
// Usage: php -r 'require "app/create-partials.php"; CreatePartials::create_files_header("name-name");'  
// Body partials
// Usage: php -r 'require "app/create-partials.php"; CreatePartials::create_files("name-name");'   
//*/

class CreatePartials
{
    public static function create_files($partial_name) 
    {
        $theme_root = dirname(__DIR__, 1);

        $underscore_partial_name = str_replace("-", "_", $partial_name);
        $prefixed_partial_name = 'section__' . $partial_name;
        $prefixed_underscore_partial_name = 'section__' . $underscore_partial_name;

        $data_acf = 
        "<?php 
        namespace App;
        
        use StoutLogic\AcfBuilder\FieldsBuilder;
        
        $$prefixed_underscore_partial_name = new FieldsBuilder('$prefixed_partial_name');
         
        $$prefixed_underscore_partial_name
            ->addGroup('$prefixed_partial_name')
            ->endGroup();
        
        return $$prefixed_underscore_partial_name;

        ";

        $data_scss = "section.$partial_name {}";

        $data_blade = "
        @group('$prefixed_partial_name')
            <section class='$partial_name'>
            </section>
        @endgroup
        ";

        if( $partial_name ){

            $layout_file_root = $theme_root . '/app/fields/flexible-layout.php';

            $new_layout_file = str_replace(
                '// Load layouts',
                '// Load layouts' . "\n" .
                '    ->addLayout($' . $prefixed_underscore_partial_name . ')', 

                str_replace(
                    '// Load content partials', 

                    '// Load content partials' . "\n" . 
                    '$' . $prefixed_underscore_partial_name . ' = get_field_partial(\'' . 'partials.' .  $prefixed_partial_name  . '\');', 

                file_get_contents($layout_file_root))
            );

            file_put_contents($layout_file_root, $new_layout_file);


            // Add imports to main scss file

            $scss_file_root = $theme_root . '/resources/assets/styles/main.scss';

            $new_scss_file = str_replace(
                '//import partials',
                '//import partials' . "\n" .
                '@import "partials/' . $prefixed_partial_name . '";',

                file_get_contents($scss_file_root)
            );
            file_put_contents($scss_file_root, $new_scss_file);



            // Add imports to acf template file
                        
            $template_file_root = $theme_root . '/resources/views/flexible-layout.blade.php';

            $new_template_file = str_replace(
                '{{-- Import partials --}}',
                '{{-- Import partials --}}' . "\n" . "\n" .
                "\t" . '@layout(\'' . $prefixed_partial_name . '\')' . "\n" .
                "\t" . '@include(\'' . 'partials.' . $prefixed_partial_name . '\')' . "\n" .
                "\t" . '@endlayout',

                file_get_contents($template_file_root)
            );
            file_put_contents($template_file_root, $new_template_file);

            file_put_contents( $theme_root . '/app/fields/partials/' . $prefixed_partial_name . '.php', $data_acf );
            file_put_contents( $theme_root . '/resources/assets/styles/partials/' . '_'. $prefixed_partial_name . '.scss', $data_scss );
            file_put_contents( $theme_root . '/resources/views/partials/' . $prefixed_partial_name . '.blade.php', $data_blade );

            return 'files_created';
        }
    }

    public static function create_files_header($partial_name) 
    {
        $theme_root = dirname(__DIR__, 1);

        $underscore_partial_name = str_replace("-", "_", $partial_name);
        $prefixed_partial_name = 'section__' . $partial_name;
        $prefixed_underscore_partial_name = 'section__' . $underscore_partial_name;

        $data_acf = 
        "<?php 
        namespace App;
        
        use StoutLogic\AcfBuilder\FieldsBuilder;
        
        $$prefixed_underscore_partial_name = new FieldsBuilder('$prefixed_partial_name');
         
        $$prefixed_underscore_partial_name
            ->addGroup('$prefixed_partial_name')
            ->endGroup();
        
        return $$prefixed_underscore_partial_name;

        ";

        $data_scss = "section.$partial_name {}";

        $data_blade = "
        @group('$prefixed_partial_name')
            <section class='$partial_name'>
            </section>
        @endgroup
        ";

        if( $partial_name ){

            $layout_file_root = $theme_root . '/app/fields/flexible-layout.php';

            $new_layout_file = str_replace(
                '// Load layouts header',
                '// Load layouts header' . "\n" .
                '    ->addLayout($' . $prefixed_underscore_partial_name . ')', 

                str_replace(
                    '// Load content partials', 

                    '// Load content partials' . "\n" . 
                    '$' . $prefixed_underscore_partial_name . ' = get_field_partial(\'' . 'partials.' .  $prefixed_partial_name  . '\');', 

                file_get_contents($layout_file_root))
            );

            file_put_contents($layout_file_root, $new_layout_file);


            // Add imports to main scss file

            $scss_file_root = $theme_root . '/resources/assets/styles/main.scss';

            $new_scss_file = str_replace(
                '//import partials',
                '//import partials' . "\n" .
                '@import "partials/' . $prefixed_partial_name . '";',

                file_get_contents($scss_file_root)
            );
            file_put_contents($scss_file_root, $new_scss_file);



            // Add imports to acf template file
                        
            $template_file_root = $theme_root . '/resources/views/flexible-layout.blade.php';

            $new_template_file = str_replace(
                '{{-- Import partials header --}}',
                '{{-- Import partials header --}}' . "\n" . "\n" .
                "\t" . '@layout(\'' . $prefixed_partial_name . '\')' . "\n" .
                "\t" . '@include(\'' . 'partials.' . $prefixed_partial_name . '\')' . "\n" .
                "\t" . '@endlayout',

                file_get_contents($template_file_root)
            );
            file_put_contents($template_file_root, $new_template_file);

            file_put_contents( $theme_root . '/app/fields/partials/' . $prefixed_partial_name . '.php', $data_acf );
            file_put_contents( $theme_root . '/resources/assets/styles/partials/' . '_'. $prefixed_partial_name . '.scss', $data_scss );
            file_put_contents( $theme_root . '/resources/views/partials/' . $prefixed_partial_name . '.blade.php', $data_blade );

            return 'files_created';
        }
    }
}
