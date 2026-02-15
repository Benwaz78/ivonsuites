<?php
// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) exit;

// Get room data
$room_id   = get_the_ID();
$title     = get_the_title();
$permalink = get_permalink();
$beds      = get_post_meta($room_id, 'hm_beds', true);
$occupancy = get_post_meta($room_id, 'hm_occupancy', true);
$size      = get_post_meta($room_id, 'hm_size', true);

$price_raw = get_post_meta($room_id, 'hm_price', true);
$price     = floatval($price_raw); // Convert safely to float
$formatted_price = number_format($price, 2, '.', ',');


// Featured image URL
$thumb_url = get_the_post_thumbnail_url($room_id, 'medium');

// Get categories (taxonomy: room_category)
$terms = get_the_terms($room_id, 'room_category');
$cat_classes = '';
if ($terms && ! is_wp_error($terms)) {
    foreach ($terms as $term) {
        // Use slug as class
        $cat_classes .= ' ' . $term->slug;
    }
}
?>
<div class="col-md-6 col-lg-4 mb-3 pb-0 isotope-item <?php echo esc_attr($cat_classes); ?>">
    <?php if ($thumb_url): ?>
        <img src="<?php echo esc_url($thumb_url); ?>" class="img-fluid" alt="<?php echo esc_attr($title); ?>">
    <?php endif; ?>
    <div class="bg-light p-3">
        <h5 class="text-transform-none text-4 font-weight-bold mb-0"><?php echo esc_html($title); ?></h5>
        <div class="custom-room-suite-info mb-5 mb-lg-0">
            <ul>
                <?php if ($beds): ?>
                    <li><label>BEDS</label> <span><?php echo esc_html($beds); ?> Bedroom</span></li>
                <?php endif; ?>
                <?php if ($occupancy): ?>
                    <li><label>OCCUPANCY</label> <span><?php echo esc_html($occupancy); ?> Person or more</span></li>
                <?php endif; ?>
                <?php if ($size): ?>
                    <li><label>SIZE</label> <span><?php echo esc_html($size); ?> sqm.</span></li>
                <?php endif; ?>
                <li><label>RATES FROM</label> <strong>&#8358; <?php echo esc_html($formatted_price); ?></strong></li>
                <li>
                    <a href="<?php echo esc_url($permalink); ?>" class="room-suite-info-book" title="View More">View More</a>
                </li>
            </ul>
        </div>
    </div>
</div>
