<?php
function hm_register_hotel_booking_cpt() {

    $labels = [
        'name'               => 'Hotel Bookings',
        'singular_name'      => 'Hotel Booking',
        'add_new_item'       => 'Add New Booking',
        'edit_item'          => 'Edit Booking',
        'menu_name'          => 'Bookings'
    ];

    $args = [
        'labels'        => $labels,
        'public'        => false,   // Hidden on frontend
        'show_ui'       => true,    // Visible in Admin
        'menu_icon'     => 'dashicons-list-view',
        'supports'      => ['title'],
        'capability_type' => 'post',
        'menu_position' => 25,
    ];

    register_post_type('hotel_booking', $args);
}

add_action('init', 'hm_register_hotel_booking_cpt');
