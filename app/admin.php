<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});


/**
 * Admin css and js
 */

add_action('login_enqueue_scripts', function () {
    wp_enqueue_style(
        'styles/admin-login.css',
        asset_path('styles/dash.css'),
        false,
        null
    );
    wp_enqueue_script('sage/login.js', asset_path('scripts/login.js'), null, null, true);
}, 100);


/**
 *  Login page 
 */

add_action( 'login_header', function () {

    // Check if ACF field background is selected otherwise use backup
    if (get_field('login_background_image', 'option')) {
        $background_image_url = get_field('login_background_image', 'option')['url'];
    }
    else {
        $background_image_url = asset_path('images/background.jpeg');
    }

    // Check if ACF field logo is selected otherwise use backup

    if (get_field('login_logo', 'option')) {
        $logo_url = get_field('login_logo', 'option')['url'];
    }
    else {
        $logo_url = asset_path('images/booom-logo.png');
    }
?>
<style>
    .login #login h1 a {
        background-image: url(<?php echo $logo_url; ?>);
    }
</style>
<div class="background">
    <img src="<?php echo $background_image_url; ?>" alt="">
</div>

<?php
} );
