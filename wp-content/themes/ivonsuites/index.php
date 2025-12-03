<?php get_template_part("template-parts/header") ?>

<div role="main" class="main">
    <div class="video-wrapper">
        <div 
            class="video section section-video overlay overlay-show overlay-op-8" 
            data-video-path="<?php echo get_template_directory_uri() ?>/assets/videos/ivon-video.mp4" 
            data-plugin-video-background
            data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%', 'overlay': true}"
            style="height: 800px;">
        </div>

        <!-- Overlay Text -->
        <div class="video-overlay-text">
            <h2 class="porto-big-title text-color-light font-weight-extra-bold mb-3" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 250, 'animationName': 'fadeInRightShorterOpacity', 'letterClass': 'd-inline-block'}">Ivon Apartment</h2>
			<p class="text-4 text-color-light font-weight-light text-center mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 2000, 'minWindowWidth': 0}">Experience Luxury & Comfort</p>
        </div>
    </div>


    <section class="section section-no-background section-no-border m-0">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-6">

                    <div class="micro-map box-shadow-custom my-4 clearfix">
                        <div class="micro-map-map">
                            <div id="googleMapsMicro" class="google-map m-0" style="height: 260px;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.291321922553!2d3.2973431740456527!3d6.484743023614467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8f3d5a8977e3%3A0x14c8f0c057dc6a16!2sIvon%20suites!5e0!3m2!1sen!2sng!4v1764505395689!5m2!1sen!2sng"  style="width:100%; height:310px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="micro-map-info">
                            <div class="micro-map-info-detail">
                                <h4>Ivon Apartment</h4>
                                <label class="opacity-7 d-block text-2">ADDRESS</label>
                                <p class="text-dark text-3 font-weight-bold line-height-5 mb-4">
                                   No  7, ekeolere off enugukwu street, Lakeview Estate, phase 2, Lagos <br> 
                                   <a class="font-weight-bold text-color-primary text-color-hover-secondary text-uppercase mt-2 text-1" href="#"><u>Get Directions</u></a>
                                </p>

                                <label class="opacity-7 d-block text-2">PHONE</label>
                                <p class="text-dark text-4 font-weight-bold line-height-5 mb-1">+234 913 669 4028</p>
                                 <label class="opacity-7 d-block text-2">Email</label>
                                <p class="text-dark text-4 font-weight-bold line-height-5 mb-1">info@ivonsuites.com</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="micro-map box-shadow-custom my-4 clearfix">
                        <div class="micro-map-map">
                            <div id="googleMapsMicro" class="google-map m-0 bg-primary d-flex align-content-center justify-content-center" style="height: 330px">
                                <h4 class="text-white w-75" style="margin-top: 120px;">Our Apartments in Golden Tulip</h4>
                            </div>
                        </div>
                        <div class="micro-map-info">
                            <div class="micro-map-info-detail">
                                <label class="opacity-7 d-block text-2">ADDRESS</label>
                                <p class="text-dark text-3 font-weight-bold line-height-5 mb-4">
                                   Diamond Estate, Janet Fajemigbesin St, off Festac Link Bridge, Amuwo Odofin Estate, Lagos 102102, Lagos <br> 
                                   <a class="font-weight-bold text-color-primary text-color-hover-secondary text-uppercase mt-2 text-1" href="#"><u>Get Directions</u></a>
                                </p>

                                <label class="opacity-7 d-block text-2">PHONE</label>
                                <p class="text-dark text-4 font-weight-bold line-height-5 mb-1">+234 913 669 4028</p>
                                <label class="opacity-7 d-block text-2">Email</label>
                                <p class="text-dark text-4 font-weight-bold line-height-5 mb-1">info@ivonsuites.com</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <?php echo get_template_part("template-parts/hotel-video") ?>
    
    <section class="bg-grey py-4">
        <div class="container">
            <h3 class="mt-4 pt-1 mb-0 pb-0">Our Apartments</h3>
            <div class="col-md-12 text-left pt-3 text-dark align-self-center">
                Choose between our serene Ivon Apartments and premium Golden Tulip Apartments, each equipped with modern amenities for your comfort. Select your location and find the perfect stay.
            </div>
            <div class="divider divider-primary divider-small">
                <hr class="mt-2 me-auto">
            </div>
            <div class="row">

                <div class="col">

                    <ul class="nav nav-pills nav-pills-center sort-source text-2 text-uppercase mb-4 mt-0" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                        <li class="nav-item active" data-option-value="*"><a class="nav-link text-uppercase font-weight-bold text-3 active" href="#">Show All</a></li>
                        <li class="nav-item" data-option-value=".ivon-apartments"><a class="nav-link text-uppercase font-weight-bold text-3" href="#">Ivon Apartments</a></li>
                        <li class="nav-item" data-option-value=".golden-tulip-apartments"><a class="nav-link text-uppercase font-weight-bold text-3" href="#">Golden Tulip Apartments</a></li>
                    </ul>

                    <div class="sort-destination-loader sort-destination-loader-showing mb-0">
                        <?php  get_template_part('template-parts/rooms/room', 'loop');  ?>
                    </div>

                </div>

            </div>
        </div>

    </section>
    
    

    <section class="section section-no-background section-no-border m-0">
        <div class="container">
            <div class="row mb-2">
                <div class="col-lg-4">

                    <div class="owl-carousel owl-carousel-mini-dots owl-theme dots-inside box-shadow-custom mt-4" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
                        <div>
                            <img alt="" class="img-fluid" src="<?php  echo get_template_directory_uri() ?>/assets/img/about/about-img1.jpg">
                        </div>
                        <div>
                            <img alt="" class="img-fluid" src="<?php  echo get_template_directory_uri() ?>/assets/img/about/about-img2.jpg">
                        </div>
                    </div>

                </div>
                <div class="col-lg-8">

                    <h3 class="mt-4 pt-1 mb-0 pb-0">Hotel Overview</h3>
                    <div class="divider divider-primary divider-small my-3">
                        <hr class="mt-2 me-auto">
                    </div>

                    <p class="mt-4 mb-2">
                        Ivon Apartments offers a blend of comfort, convenience, and a serene living experience across its premium locations. With five well-designed apartments located in Lakeview Estate Phase 2 and two beautifully furnished apartments in Golden Tulip, Ivon Apartments provides a perfect choice for both short and long-term stays.
                    </p>
                    <a href="<?php echo get_permalink( get_page_by_path("about-us") ) ?>" class="room-suite-info-book fw-bolder" title="Read More">View More</a>

                    <div class="row mt-4 pt-2">
                        <div class="col-lg-4">
                            <ul class="list list-icons list-primary text-uppercase font-weight-bold text-color-dark text-2">
                                <li><i class="fas fa-check"></i> Kitchen</li>
                                <li><i class="fas fa-check"></i> TV Set</li>
                                <li><i class="fas fa-check"></i> Nice and Cozy Bed</li>
                                <li><i class="fas fa-check"></i> Solar/Inverter</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <ul class="list list-icons list-primary text-uppercase font-weight-bold text-color-dark text-2">
                                <li><i class="fas fa-check"></i> Cocktail Bar</li>
                                <li><i class="fas fa-check"></i> Bathroom with Toilet</li>
                                <li><i class="fas fa-check"></i> Housekeeper</li>
                                <li><i class="fas fa-check"></i> Generator</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <ul class="list list-icons list-primary text-uppercase font-weight-bold text-color-dark text-2">
                                <li><i class="fas fa-check"></i> Reception</li>
                                <li><i class="fas fa-check"></i> Pool at Golden Tulip</li>
                                <li><i class="fas fa-check"></i> Free Wi-Fi</li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="bg-grey py-5">
        <div class="container container-xl-custom">
            <h3 class="mb-0 pb-0">Gallery</h3>
            <div class="divider divider-primary divider-small">
                <hr class="mt-2 mb-5 me-auto">
            </div>
            <?php get_template_part("template-parts/gallery-parts") ?>

        </div>
    </section>

 

    <?php get_template_part("template-parts/sub-footer") ?>


</div>




<?php get_template_part("template-parts/main-footer") ?>