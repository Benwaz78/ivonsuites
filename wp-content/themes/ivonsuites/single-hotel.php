
<?php 
get_template_part("template-parts/header");
?>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();

        $room_id   = get_the_ID();
        $title     = get_the_title();
        $content   = get_the_content();
        $thumb_url = get_the_post_thumbnail_url($room_id, 'full');

        $sub_heading = get_post_meta($room_id, 'sub_heading', true);
        $beds      = get_post_meta($room_id, 'hm_beds', true);
        $occupancy = get_post_meta($room_id, 'hm_occupancy', true);
        $size      = get_post_meta($room_id, 'hm_size', true);
        $price     = get_post_meta($room_id, 'hm_price', true);

    endwhile;
endif;
?>



<?php
$gallery = get_post_meta(get_the_ID(), 'hm_gallery', true);

$gallery_images = [];
if (!empty($gallery)) {
    $image_ids = explode(',', $gallery);
    foreach ($image_ids as $img_id) {
        $img_url = wp_get_attachment_url($img_id); // Full-size image
        if ($img_url) {
            $gallery_images[] = $img_url;
        }
    }
}
?>




<div role="main" class="main">
    <div class="position-relative">
      <div id="ivonCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <!-- Indicators -->
        <div class="carousel-indicators">
            <?php 
            $count = !empty($gallery_images) ? count($gallery_images) : 2;
            for ($i = 0; $i < $count; $i++): ?>
                <button type="button" data-bs-target="#ivonCarousel" data-bs-slide-to="<?php echo $i; ?>" 
                    class="<?php echo $i === 0 ? 'active' : ''; ?>" aria-current="true"></button>
            <?php endfor; ?>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">

            <?php if (!empty($gallery_images)) : ?>
                <?php foreach ($gallery_images as $index => $img_url) : 
                    $image_info = @getimagesize($img_url);
                    $is_portrait = ($image_info && $image_info[1] > $image_info[0]); // height > width
                ?>
                    <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                        <img src="<?php echo esc_url($img_url); ?>" class="d-block w-100 carousel-img <?php echo $is_portrait ? 'portrait' : ''; ?>" alt="Room Image">
                    </div>
                <?php endforeach; ?>

            <?php else: ?>
                <!-- Fallback 1 -->
                <div class="carousel-item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/demos/hotel/slides/slide-hotel-1.jpg" class="d-block w-100" alt="">
                </div>

                <!-- Fallback 2 -->
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/demos/hotel/slides/slide-hotel-2.jpg" class="d-block w-100" alt="">
                </div>
            <?php endif; ?>

        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#ivonCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#ivonCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

        <!-- 🔥 Static Overlay Text -->
        <div class="slider-text-overlay">
            <h1 class="room-title"><?php echo esc_html($title); ?></h1>
            <a href="#moreImages" class="mt-5 slider-scroll-button position-absolute top-30 left-50pct transform3dx-n50" data-hash="" data-hash-offset="0" data-hash-offset-lg="80">View the rooms</a>

        </div>



      </div>
    </div>



        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6   mt-0">
                    <form id="bookForm" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
                        <input type="hidden" name="action" value="pf_submit_hotel_form">
                        <input type="hidden" name="hotel_id" value="<?php echo get_the_ID(); ?>">
                        <?php wp_nonce_field('hotel_booking_nonce_action', 'hotel_booking_nonce'); ?>
                        <div class="bg-color-quaternary p-4">
                            <h3 class="text-5 mt-3 mt-0 mb-4 pt-0 pb-0">Reserve Your Stay</h3>

                            <div class="row">
                                <div class="form-group col mb-4">
                                    <div class="form-control-custom form-control-custom-dark">
                                        <input type="text" class="form-control text-3"  name="bookNowFullName" placeholder="Full Name">
                                    </div>
                                </div>	
                            </div>

                            <div class="row">
                                <div class="form-group col-6 mb-4">
                                    <div class="form-control-custom form-control-custom-dark">
                                        <input type="text" class="form-control text-3"  name="phoneNumber" placeholder="Phone/Whatsapp">
                                    </div>
                                </div>	
                                <div class="form-group col-6 mb-4">
                                    <div class="form-control-custom form-control-custom-dark">
                                        <input type="email" class="form-control text-3" name="email" placeholder="Email">
                                    </div>
                                </div>						
                            </div>	

                            <div class="row">						
                                <div class="form-group col-6 mb-4">
                                    <div class="form-control-custom form-control-custom-dark form-control-datepicker-custom">
                                        <input type="date" data-msg-required="This field is required."  class="form-control text-2"  placeholder="Check-in" name="checkIn" id="bookNowDeparture" required="">
									</div>
                                </div>	
                                 <div class="form-group col-6 mb-4">
                                    <div class="form-control-custom form-control-custom-dark form-control-datepicker-custom">
                                        <input type="date" name="checkOut" class="form-control text-2"  placeholder="Check-out"  id="bookNowArrival" required="">
									</div>
                                </div>	
                            </div>

                           

                           				


                           
                        </div>
                         <button type="submit" class="btn btn-primary font-weight-bold text-uppercase px-5 py-3 mt-4 mb-2 w-100">
                                Book This Room Now
						</button>
                         <div id="hotelDiv"></div>
                        <?php if (isset($_GET['booking_status']) && $_GET['booking_status'] === 'success') : ?>
                            <div class="alert alert-success">Your room has been reserved! We will contact you shortly.</div>
                        <?php endif; ?>
                    </form>
                </div>
           
                <!-- Sidebar -->
                <div class="col-lg-6  position-relative">
                   <div class="tab-pane p-3 tab-pane-navigation active">
                        <?php if ($title) : ?>
                            <h3 class="mb-0 pb-0"> <?php echo esc_html($title); ?></h3>
                        <?php endif; ?>

                        <div class="divider divider-primary divider-small my-3">
                            <hr class="mt-2 me-auto">
                        </div>



                        <div class="row">
                            <div class="col-lg-12">
                                 <?php echo wp_kses_post($content); ?>
                            </div>
                        </div>

                      <?php
                            $formatted_price = number_format($price, 2, '.', ',');
                            // Prepare room info
                            $room_info = [];

                            if ($beds) {
                                $room_info[] = '<li><i class="fas fa-bed"></i> ' . esc_html($beds) . ' Bedroom</li>';
                            }
                            if ($occupancy) {
                                $room_info[] = '<li><i class="fas fa-user-friends"></i> Occupancy: ' . esc_html($occupancy) . ' Person or more</li>';
                            }
                            if ($size) {
                                $room_info[] = '<li><i class="fas fa-ruler-combined"></i> Size: ' . esc_html($size) . ' sqm</li>';
                            }
                            $room_info[] = '<li><i class="fas fa-dollar-sign"></i> From: &#8358;  ' . esc_html($formatted_price) . '</li>';

                            // Split array into 2 columns
                            $columns = array_chunk($room_info, ceil(count($room_info)/2));
                    ?>

                        <div class="row mt-3">
                            <?php foreach ($columns as $col): ?>
                                <div class="col-lg-6">
                                    <ul class="list list-icons list-primary text-uppercase font-weight-bold text-color-dark text-2">
                                        <?php foreach ($col as $item): ?>
                                            <?php echo $item; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endforeach; ?>
                        </div>


                        <h5 class="mb-0 pb-0">Amenities</h5>
                        <div class="divider divider-primary divider-small">
                            <hr class="me-auto">
                        </div>

                       <?php
                            // Get amenities
                            $amenities = [
                                'WiFi' => get_post_meta(get_the_ID(), 'hm_wifi', true),
                                'TV' => get_post_meta(get_the_ID(), 'hm_tv', true),
                                'Fridge' => get_post_meta(get_the_ID(), 'hm_fridge', true),
                                'Air Condition' => get_post_meta(get_the_ID(), 'hm_air', true),
                                '24/7 Power Supply' => get_post_meta(get_the_ID(), 'hm_power', true),
                            ];

                            // Filter only selected amenities
                            $amenities = array_filter($amenities, function($val) {
                                return $val === 'yes';
                            });

                            if (!empty($amenities)) {
                                // Split into 3 columns
                                $chunks = array_chunk(array_keys($amenities), 2);
                                echo '<div class="row mt-3">';
                                foreach ($chunks as $chunk) {
                                    echo '<div class="col-lg-4">';
                                    echo '<ul class="list list-icons list-primary text-uppercase font-weight-bold text-color-dark text-2">';
                                    foreach ($chunk as $amenity) {
                                        echo '<li><i class="fas fa-check"></i> ' . esc_html($amenity) . '</li>';
                                    }
                                    echo '</ul></div>';
                                }
                                echo '</div>';
                            }
                        ?>


                        

                    </div>
                   
                </div>
            </div>
		</div>
<?php echo get_template_part("template-parts/hotel-video") ?>

<section id="moreImages" class="bg-dark py-5">
    <div class="container container-xl-custom">
        <h3 class="mb-0 pb-0 text-white">Different Views</h3>
        <div class="divider divider-primary divider-small">
            <hr class="mt-2 mb-5 me-auto">
        </div>

        <div class="container container-xl-custom py-4 my-3">
            <div class="lightbox"
                data-plugin-options="{
                    'delegate': 'a',
                    'type': 'image',
                    'gallery': { 'enabled': true },
                    'mainClass': 'mfp-with-zoom',
                    'zoom': { 'enabled': true, 'duration': 300 }
                }">

                <div class="masonry-loader masonry-loader-showing">
                    <div class="masonry row"
                        data-plugin-masonry
                        data-plugin-options="{
                            'layoutMode': 'packery',
                            'itemSelector': '.masonry-item',
                            'sortBy': 'original-order'
                        }">

                        <?php if (!empty($gallery_images)) : ?>
                            <?php foreach ($gallery_images as $img_url) : ?>
                                <div class="masonry-item no-default-style col-6 col-lg-3 overflow-hidden px-0">
                                    <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0"
                                        href="<?php echo esc_url($img_url); ?>">
                                        <img src="<?php echo esc_url($img_url); ?>"
                                            class="img-fluid rounded-0" alt="Gallery Image">
                                    </a>
                                </div>
                            <?php endforeach; ?>

                        <?php else : ?>
                            <!-- Fallback → Only if no gallery images -->
                            <div class="col-12 text-center text-white py-5">
                                <p>No images available for this room.</p>
                            </div>
                        <?php endif; ?>

                    </div><!-- masonry -->
                </div><!-- loader -->

            </div><!-- lightbox -->
        </div><!-- container inner -->

    </div>
</section>
    

        <?php get_template_part("template-parts/other-rooms") ?>
        <?php get_template_part("template-parts/sub-footer") ?>
</div>



<?php get_template_part("template-parts/main-footer") ?>