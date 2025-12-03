<?php
if (!defined('ABSPATH')) exit;

$current_id = get_the_ID();

$args = [
    'post_type'      => 'hotel',
    'posts_per_page' => 6,
    'post__not_in'   => [$current_id], // Exclude current room
];

$other_rooms = new WP_Query($args);

if ($other_rooms->have_posts()) : ?>
<section class="py-5 bg-grey">
    <div class="container">
        <h3 class="mb-0 pb-0">Other Rooms</h3>

        <div class="divider divider-primary divider-small my-3">
            <hr class="mt-2 me-auto">
        </div>

        <div class="row">
            <div class="owl-carousel owl-theme full-width nav-style-1 nav-arrows-thin nav-font-size-lg custom-nav-1 custom-nav-1-pos-2 p-relative mb-0"
                 data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 2}, '1199': {'items': 3}}, 'loop': true, 'nav': true, 'dots': false, 'margin': 40}">

                <?php while ($other_rooms->have_posts()) : $other_rooms->the_post(); ?>

                    <?php
                        $room_id = get_the_ID();
                        $title = get_the_title();
                        $permalink = get_permalink();
                        $beds = get_post_meta($room_id, 'hm_beds', true);
                        $occupancy = get_post_meta($room_id, 'hm_occupancy', true);
                        $size = get_post_meta($room_id, 'hm_size', true);
                        $price = get_post_meta($room_id, 'hm_price', true);
                        $formatted_price = number_format($price, 2, '.', ',');
                        $thumb = get_the_post_thumbnail_url($room_id, 'large');
                    ?>
                    
                    <div class="mb-4 pb-0">
                        <?php if ($thumb): ?>
                            <img src="<?php echo esc_url($thumb); ?>" class="img-fluid" alt="<?php echo esc_attr($title); ?>">
                        <?php endif; ?>

                        <div class="bg-light p-3">
                            <h5 class="text-transform-none text-4 font-weight-bold mt-0 mb-3 mb-0">
                                <?php echo esc_html($title); ?>
                            </h5>

                            <div class="custom-room-suite-info mb-5 mb-lg-0">
                                <ul>
                                    <?php if ($beds): ?>
                                        <li><label>BEDS</label><span><?php echo esc_html($beds); ?> Bedroom</span></li>
                                    <?php endif; ?>

                                    <?php if ($occupancy): ?>
                                        <li><label>OCCUPANCY</label><span><?php echo esc_html($occupancy); ?> Persons or more</span></li>
                                    <?php endif; ?>

                                    <?php if ($size): ?>
                                        <li><label>SIZE</label><span><?php echo esc_html($size); ?> sqm.</span></li>
                                    <?php endif; ?>

                                    <li><label>RATES FROM</label><strong>&#8358; <?php echo esc_html($formatted_price); ?></strong></li>
                                    
                                    <li>
                                        <a href="<?php echo esc_url($permalink); ?>" class="room-suite-info-book">View More</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                <?php endwhile; wp_reset_postdata(); ?>

            </div>
        </div>
    </div>
</section>
<?php endif; ?>
