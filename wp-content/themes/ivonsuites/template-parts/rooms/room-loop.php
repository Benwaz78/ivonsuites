<?php
$args = [
    'post_type'      => 'hotel',   // Your CPT slug
    'posts_per_page' => -1
];

$rooms = new WP_Query($args);

if ($rooms->have_posts()) :
    echo '<div class="row portfolio-list sort-destination" data-sort-id="portfolio">';

    while ($rooms->have_posts()) : $rooms->the_post();
        get_template_part('template-parts/rooms/room', 'card');
    endwhile;

    echo '</div>';

else :
    echo '<p>No rooms found.</p>';
endif;

wp_reset_postdata();
?>
