<?php 
/*
Template Name: About Us
*/
get_template_part("template-parts/header");
?>


<div role="main" class="main">
       <div class="slider-container bg-transparent rev_slider_wrapper" style="height: 530px;">
            <div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
                
                <ul>
                    <li data-transition="boxfade">

                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/demos/hotel/slides/slide-hotel-1.jpg"  
                                alt=""
                                data-bgposition="center bottom"
                                data-bgfit="cover"
                                data-bgrepeat="no-repeat"
                                data-bgparallax="10"
                                class="rev-slidebg"
                                data-no-retina>
                      
                    </li>
                    <li data-transition="boxfade">

                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/demos/hotel/slides/slide-hotel-2.jpg"  
                                alt=""
                                data-bgposition="center bottom"
                                data-bgfit="cover"
                                data-bgrepeat="no-repeat"
                                data-bgparallax="10"
                                class="rev-slidebg"
                                data-no-retina>
                    </li>
                </ul>
            </div>
             <!-- 🔥 PERMANENT TEXT OVERLAY (this stays always) -->
            <div class="slider-text-overlay">
                <h1 class="room-title">About Us</h1>
            </div>
        </div>

        <div class="container py-5">

					<div class="row">

						<div class="col-lg-9 order-2 order-lg-1 mt-0">

							<div class="tab-pane tab-pane-navigation active" id="tabsNavigation1">
								<h3 class="mt-4 mb-0 pb-0">Overview</h3>
								<div class="divider divider-primary divider-small my-3">
									<hr class="mt-2 me-auto">
								</div>

								<p class="mt-4">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. 
                                    Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum.
                                </p>

								<div class="row">
									<div class="col-lg-12">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. 
                                            Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus ut vel turpis accumsan, 
                                            efficitur dolor fermentum metus ut vel turpis accumsan.</p>
										<p>Amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus ut vel turpis accumsan, efficitur dolor fermentum metus ut vel turpis accumsan.</p>
									</div>
								</div>
							</div>
							
						</div>

						<!-- Sidebar -->
						<div class="col-lg-3 order-1 order-lg-2 position-relative">
							<aside class="sidebar" id="sidebar">
                                <h3 class="mt-4 mb-0 pb-0">Rooms</h3>
								<div class="divider divider-primary divider-small my-3">
									<hr class="mt-2 me-auto">
								</div>
								<ul class="nav custom-nav-sidebar list flex-column text-3-5 font-weight-medium mb-4">
									<li class="nav-item border border-color-grey-1 border-top-0 border-end-0 border-start-0 mb-0">
										<a class="nav-link font-weight-bold text-color-dark text-uppercase text-2 py-3 ps-0 active" data-hash data-hash-offset="0" data-hash-offset-lg="150" href="#tabsNavigation1" data-bs-toggle="tab">
											<i class="fas fa-chevron-right text-1 position-relative top-1 pe-3-5"></i>
											Manchester Room
										</a>
									</li>
									<li class="nav-item border border-color-grey-1 border-top-0 border-end-0 border-start-0 mb-0">
										<a class="nav-link font-weight-bold text-color-dark text-uppercase text-2 py-3 ps-0" data-hash data-hash-offset="0" data-hash-offset-lg="150" href="#tabsNavigation2" data-bs-toggle="tab">
											<i class="fas fa-chevron-right text-1 position-relative top-1 pe-3-5"></i>
											Chelsea Room
										</a>
									</li>
									<li class="nav-item border-0 mb-0">
										<a class="nav-link font-weight-bold text-color-dark text-uppercase text-2 py-3 ps-0" data-hash data-hash-offset="0" data-hash-offset-lg="150" href="#tabsNavigation3" data-bs-toggle="tab">
											<i class="fas fa-chevron-right text-1 position-relative top-1 pe-3-5"></i>
											Arsenal Room
										</a>
									</li>
								</ul>

								<a href="#" class="mb-4 d-block text-center">
									<img alt="" class="img-fluid" src="img/demos/hotel/banners/banner-1.jpg">
								</a>

							</aside>
						</div>
					</div>

				</div>

       
    

        <?php get_template_part("template-parts/sub-footer") ?>

   
</div>



<?php get_template_part("template-parts/main-footer") ?>