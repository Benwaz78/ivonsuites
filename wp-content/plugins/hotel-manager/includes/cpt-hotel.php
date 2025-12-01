<?php

if ( ! defined('ABSPATH') ) exit;

function hm_register_hotel_cpt() {

    $labels = [
        'name' => 'Hotels',
        'singular_name' => 'Hotel Room',
        'add_new_item' => 'Add New Hotel Room',
        'edit_item' => 'Edit Hotel Room',
    ];

    $args = [
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-building',
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => ['slug' => 'rooms'],
    ];

    register_post_type('hotel', $args);
}

function hm_register_room_categories() {

    $labels = array(
        'name'              => 'Room Categories',
        'singular_name'     => 'Room Category',
        'search_items'      => 'Search Categories',
        'all_items'         => 'All Categories',
        'edit_item'         => 'Edit Category',
        'update_item'       => 'Update Category',
        'add_new_item'      => 'Add New Category',
        'new_item_name'     => 'New Category Name',
        'menu_name'         => 'Categories',
    );

    $args = array(
        'hierarchical'      => true, // behaves like standard WP categories
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'room-category'),
        'show_in_rest'      => true,
    );

    register_taxonomy('room_category', array('hotel'), $args);
}


add_action('init', 'hm_register_room_categories');
add_action('init', 'hm_register_hotel_cpt');


add_filter('manage_hotel_booking_posts_columns', function ($columns) {

    $new_columns = [];

    // Keep checkbox
    $new_columns['cb'] = $columns['cb'];

    // Your custom columns
    $new_columns['applicant']     = __('Guest Name', 'textdomain');
    $new_columns['phone']         = __('Phone', 'textdomain');
    $new_columns['email']         = __('Email', 'textdomain');
    $new_columns['hotel']         = __('Hotel / Room', 'textdomain');
    $new_columns['checkin']       = __('Check-in', 'textdomain');
    $new_columns['checkout']      = __('Check-out', 'textdomain');
    $new_columns['date']          = $columns['date']; // Keep default “Date”

    return $new_columns;
});


add_action('manage_hotel_booking_posts_custom_column', function ($column, $post_id) {

    switch ($column) {

        case 'applicant':
            echo esc_html(get_post_meta($post_id, '_full_name', true));
            break;

        case 'phone':
            echo esc_html(get_post_meta($post_id, '_phone', true));
            break;

        case 'email':
            echo esc_html(get_post_meta($post_id, '_email', true));
            break;

        case 'hotel':
            $hotel_id = get_post_meta($post_id, '_hotel_id', true);
            if ($hotel_id) {
                echo '<a href="' . esc_url(get_edit_post_link($hotel_id)) . '">'
                     . esc_html(get_the_title($hotel_id)) . 
                     '</a>';
            } else {
                echo '—';
            }
            break;

        case 'checkin':
            echo esc_html(get_post_meta($post_id, '_check_in', true));
            break;

        case 'checkout':
            echo esc_html(get_post_meta($post_id, '_check_out', true));
            break;
    }
}, 10, 2);
