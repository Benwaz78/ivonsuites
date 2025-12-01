<?php
function hm_save_hotel_metaboxes($post_id) {

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // Text fields
    $text_fields = [
        'hm_beds',
        'hm_occupancy',
        'hm_size',
        'hm_price',
        'hm_gallery'
    ];

    // Checkbox fields (single yes/no)
    $checkbox_fields = [
        'hm_wifi',
        'hm_tv',
        'hm_fridge',
        'hm_air',
        'hm_power'
    ];

    // Save text fields
    foreach ($text_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        } else {
            update_post_meta($post_id, $field, '');
        }
    }

    // Save checkbox fields as yes/no
    foreach ($checkbox_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, 'yes');
        } else {
            update_post_meta($post_id, $field, 'no');
        }
    }
}
add_action('save_post', 'hm_save_hotel_metaboxes');
