<?php
/**
 * Plugin Name: Hotel Manager
 * Description: Custom Post Type for Hotel Rooms with custom fields (images, beds, occupancy, etc.)
 * Version: 1.0
 * Author: Benedict Uwazie 
 */


if ( ! defined('ABSPATH') ) exit;

// Include CPT
require_once plugin_dir_path(__FILE__) . 'includes/cpt-hotel.php';

// Include meta boxes
require_once plugin_dir_path(__FILE__) . 'includes/metaboxes.php';

// Include meta box save handler
require_once plugin_dir_path(__FILE__) . 'includes/save-metaboxes.php';
require_once plugin_dir_path(__FILE__) . 'includes/cpt-booking.php';

require_once plugin_dir_path(__FILE__) . 'includes/hotel-form.php';



function hm_admin_assets($hook) {
    global $post;

    // Load only on hotel CPT pages
    if ($hook == 'post-new.php' || $hook == 'post.php') {
        if ($post->post_type == 'hotel') {
            wp_enqueue_media(); // WP media uploader
            wp_enqueue_script('hm-gallery', plugin_dir_url(__FILE__) . 'includes/assets/js/gallery.js', ['jquery'], false, true);
            wp_enqueue_style('hm-gallery-css', plugin_dir_url(__FILE__) . 'includes/assets/css/gallery.css');
        }
    }
}
add_action('admin_enqueue_scripts', 'hm_admin_assets');

