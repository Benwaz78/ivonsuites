<?php

function hm_enable_thumbnails() {
    add_theme_support('post-thumbnails');
}

function ivon_theme_setup() {
    add_theme_support('title-tag');
}



function ivonsuites_add_favicons() {
    $assets = get_template_directory_uri() . '/assets/img/';
    ?>
    <link rel="shortcut icon" href="<?php echo $assets; ?>favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo $assets; ?>apple-touch-icon.png" />
    <?php
}


function ivonsuites_enqueue_styles() {

    // Google Fonts
    wp_enqueue_style(
        'ivonsuites-google-fonts',
        'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap',
        array(),
        null
    );

    $assets = get_template_directory_uri() . '/assets/';

    // Vendor CSS
    wp_enqueue_style('ivonsuites-bootstrap', $assets . 'vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('ivonsuites-fontawesome', $assets . 'vendor/fontawesome-free/css/all.min.css');
    wp_enqueue_style('ivonsuites-animate', $assets . 'vendor/animate/animate.compat.css');
    wp_enqueue_style('ivonsuites-simple-line-icons', $assets . 'vendor/simple-line-icons/css/simple-line-icons.min.css');
    wp_enqueue_style('ivonsuites-owl-carousel', $assets . 'vendor/owl.carousel/assets/owl.carousel.min.css');
    wp_enqueue_style('ivonsuites-owl-theme', $assets . 'vendor/owl.carousel/assets/owl.theme.default.min.css');
    wp_enqueue_style('ivonsuites-magnific-popup', $assets . 'vendor/magnific-popup/magnific-popup.min.css');
    wp_enqueue_style('ivonsuites-bootstrap-datepicker', $assets . 'vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css');

    // Theme CSS
    wp_enqueue_style('ivonsuites-theme', $assets . 'css/theme.css');
    wp_enqueue_style('ivonsuites-theme-elements', $assets . 'css/theme-elements.css');
    wp_enqueue_style('ivonsuites-theme-blog', $assets . 'css/theme-blog.css');
    wp_enqueue_style('ivonsuites-theme-shop', $assets . 'css/theme-shop.css');

    // Revolution Slider CSS
    wp_enqueue_style('ivonsuites-rs-settings', $assets . 'vendor/rs-plugin/css/settings.css');
    wp_enqueue_style('ivonsuites-rs-layers', $assets . 'vendor/rs-plugin/css/layers.css');
    wp_enqueue_style('ivonsuites-rs-navigation', $assets . 'vendor/rs-plugin/css/navigation.css');

    // Demo CSS
    wp_enqueue_style('ivonsuites-card-slider', $assets . 'css/card-slider.css');
    wp_enqueue_style('ivonsuites-demo-hotel', $assets . 'css/demos/demo-hotel.css');

    // Skin CSS
    wp_enqueue_style('ivonsuites-skin', $assets . 'css/skins/skin-hotel.css');

    // Custom CSS
    wp_enqueue_style('ivonsuites-custom', $assets . 'css/custom.css');
}


function ivonsuites_enqueue_scripts() {


    $assets = get_template_directory_uri() . '/assets/';

    // Vendor JS
    wp_enqueue_script('ivonsuites-plugins', $assets . 'vendor/plugins/js/plugins.min.js', array('jquery'), null, true);
    wp_enqueue_script('ivonsuites-bootstrap-datepicker', $assets . 'vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js', array('jquery'), null, true);


    // Revolution Slider JS
    wp_enqueue_script('ivonsuites-rs-tools', $assets . 'vendor/rs-plugin/js/jquery.themepunch.tools.min.js', array('jquery'), null, true);
    wp_enqueue_script('ivonsuites-rs-revolution', $assets . 'vendor/rs-plugin/js/jquery.themepunch.revolution.min.js', array('jquery'), null, true);
 

    // Theme Base
    wp_enqueue_script('ivonsuites-theme', $assets . 'js/theme.js', array('jquery'), null, true);
    
    // Current Page Vendor and Views
    wp_enqueue_script('ivonsuites-view-contact', $assets . 'js/views/view.contact.js', array('jquery'), null, true);

    // Demo
    wp_enqueue_script('ivonsuites-demo-hotel', $assets . 'js/demos/demo-hotel.js', array('jquery'), null, true);

    // Theme Custom
    wp_enqueue_script('ivonsuites-custom', $assets . 'js/custom.js', array('jquery'), null, true);

    // Theme Initialization
    wp_enqueue_script('ivonsuites-theme-init', $assets . 'js/theme.init.js', array('jquery'), null, true);
}




add_action('after_setup_theme', 'ivon_theme_setup');
add_action('after_setup_theme', 'hm_enable_thumbnails');
add_action('wp_head', 'ivonsuites_add_favicons');
add_action('wp_enqueue_scripts', 'ivonsuites_enqueue_scripts');
add_action('wp_enqueue_scripts', 'ivonsuites_enqueue_styles');
