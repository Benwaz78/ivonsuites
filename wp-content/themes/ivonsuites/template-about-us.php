<?php 
/*
Template Name: About Us
*/
get_template_part("template-parts/header");
?>


<div role="main" class="main">
       <div class="video-wrapper">
        <div 
            class="video section section-video overlay overlay-show overlay-op-8" 
            data-video-path="<?php echo get_template_directory_uri() ?>/assets/videos/ivon-about.mp4" 
            data-plugin-video-background
            data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%', 'overlay': true}"
            style="height: 800px;">
        </div>

        <!-- Overlay Text -->
        <div class="video-overlay-text">
            <h2 class="porto-big-title text-color-light font-weight-extra-bold mb-3" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 250, 'animationName': 'fadeInRightShorterOpacity', 'letterClass': 'd-inline-block'}">About Us</h2>
        </div>
    </div>

        <div class="container py-5">

					<div class="row">

						<div class="col-lg-9 order-2 order-lg-1 mt-0">

							<div>
								<h3 class="mt-4 mb-0 pb-0">Overview</h3>
								<div class="divider divider-primary divider-small my-3">
									<hr class="mt-2 me-auto">
								</div>

								<p class="mt-4">
                                    Ivon Apartments offers a blend of comfort, convenience, and a serene living experience across its premium locations. With five well-designed apartments located in Lakeview Estate Phase 2 and two beautifully furnished apartments in Golden Tulip, Ivon Apartments provides a perfect choice for both short and long-term stays.
                                </p>
                                <p class="mt-4">
                                    Each apartment is fully equipped with modern amenities including a functional kitchen, air-conditioning (AC), high-speed WiFi, flat-screen TV, 
                                    and a fridge for everyday comfort. Guests also enjoy a clean, safe, and peaceful environment, making Ivon Apartments ideal for families, couples, business travelers, or anyone seeking a homely and relaxing space.
                                </p>
                                <p class="mt-4">
                                    Whether you choose the tranquil setting of Lakeview Estate Phase 2 or the premium comfort of Golden Tulip, Ivon Apartments guarantees a pleasant and enjoyable stay.
                                </p>

							
							</div>
							
						</div>

						<!-- Sidebar -->
						<div class="col-lg-3 order-1 order-lg-2 position-relative">
							<aside class="sidebar" id="sidebar">
                                <h3 class="mt-4 mb-0 pb-0">Apartments</h3>
								<div class="divider divider-primary divider-small my-3">
									<hr class="mt-2 me-auto">
								</div>
								<ul class="nav custom-nav-sidebar list flex-column text-3-5 font-weight-medium mb-4">
									<?php
// Fetch all rooms in both "rooms" and "apartment" categories
$args = [
    'post_type'      => 'hotel',         // Your CPT slug
    'posts_per_page' => -1,
    'tax_query'      => [
        [
            'taxonomy' => 'room_category',
            'field'    => 'slug',
            'terms'    => ['ivon-apartments', 'golden-tulip-apartments'], // both categories
        ]
    ],
    'orderby' => 'title',
    'order'   => 'ASC'
];

$rooms = new WP_Query($args);
?>

<ul class="nav custom-nav-sidebar list flex-column text-3-5 font-weight-medium mb-4">

    <?php if ($rooms->have_posts()) : ?>

        <?php while ($rooms->have_posts()) : $rooms->the_post(); ?>
           
            
            <li class="nav-item border border-color-grey-1 border-top-0 border-end-0 border-start-0 mb-0">
                <a class="nav-link font-weight-bold text-color-dark text-uppercase text-2 py-3 ps-0" 
                    href="<?php echo get_permalink(); ?>"
                    data-hash>
                    <i class="fas fa-chevron-right text-1 position-relative top-1 pe-3-5"></i>
                    <?php echo esc_html(get_the_title()); ?>
                </a>
            </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    
    <?php else : ?>

        <li class="nav-item">
            <a class="nav-link text-uppercase text-2 py-3 ps-0">
                No rooms found
            </a>
        </li>

    <?php endif; ?>

</ul>


									
								</ul>

								<a href="#" class="mb-4 d-block text-center">
									<img alt="" class="img-fluid" src="img/demos/hotel/banners/banner-1.jpg">
								</a>

							</aside>
						</div>
					</div>

				</div>

       
    

        <?php get_template_part("template-parts/hotel-video") ?>
        <?php get_template_part("template-parts/sub-footer") ?>

   
</div>



<?php get_template_part("template-parts/main-footer") ?>