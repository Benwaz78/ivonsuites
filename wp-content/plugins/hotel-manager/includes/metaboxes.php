<?php

if ( ! defined('ABSPATH') ) exit;

function hm_add_hotel_metaboxes() {
    add_meta_box(
        'hm_hotel_details',
        'Hotel Room Details',
        'hm_hotel_details_callback',
        'hotel',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'hm_add_hotel_metaboxes');


function hm_hotel_details_callback($post) {

    // Get saved fields
    $beds  = get_post_meta($post->ID, 'hm_beds', true);
    $occupancy = get_post_meta($post->ID, 'hm_occupancy', true);
    $size = get_post_meta($post->ID, 'hm_size', true);
    $price = get_post_meta($post->ID, 'hm_price', true);
    $gallery = get_post_meta($post->ID, 'hm_gallery', true);

    // Amenities
    $wifi = get_post_meta($post->ID, 'hm_wifi', true);
    $tv = get_post_meta($post->ID, 'hm_tv', true);
    $fridge = get_post_meta($post->ID, 'hm_fridge', true);
    $air = get_post_meta($post->ID, 'hm_air', true);
    $power = get_post_meta($post->ID, 'hm_power', true);

    ?>
    <label>Beds:</label>
    <input type="number" name="hm_beds" value="<?php echo esc_attr($beds); ?>" class="widefat">

    <label>Occupancy:</label>
    <input type="number" name="hm_occupancy" value="<?php echo esc_attr($occupancy); ?>" class="widefat">

    <label>Room Size (sqm):</label>
    <input type="text" name="hm_size" value="<?php echo esc_attr($size); ?>" class="widefat">

    <label>Price:</label>
    <input type="number" name="hm_price" value="<?php echo esc_attr($price); ?>" class="widefat">

    <label><strong>Room Gallery:</strong></label>
    <p><button id="hm_add_images" class="button">Add Images</button></p>

    <div id="hm_gallery_wrapper" style="display:flex; gap:10px; flex-wrap:wrap;">
        <?php
        if (!empty($gallery)) {
            $images = explode(',', $gallery);
            foreach ($images as $img_id):
                $img_url = wp_get_attachment_thumb_url($img_id);
        ?>
            <div class="hm-gallery-item" data-id="<?php echo $img_id; ?>">
                <img src="<?php echo $img_url; ?>">
                <span class="hm-remove">&times;</span>
            </div>
        <?php endforeach; } ?>
    </div>

<input type="hidden" id="hm_gallery_input" name="hm_gallery" value="<?php echo esc_attr($gallery); ?>">
<p class="description">
    Upload unlimited images. Drag to reorder.<br>
    Recommended Image Size: <strong>1200 × 800px (Landscape)</strong>.
</p>


    <h3>Amenities</h3>

    <label><input type="checkbox" name="hm_wifi" <?php checked($wifi, 'yes'); ?>> WiFi</label><br>
    <label><input type="checkbox" name="hm_tv" <?php checked($tv, 'yes'); ?>> TV</label><br>
    <label><input type="checkbox" name="hm_fridge" <?php checked($fridge, 'yes'); ?>> Fridge</label><br>
    <label><input type="checkbox" name="hm_air" <?php checked($air, 'yes'); ?>> Air Condition</label><br>
    <label><input type="checkbox" name="hm_power" <?php checked($power, 'yes'); ?>> 24/7 Power</label><br>

    <?php
}
