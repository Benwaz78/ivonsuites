<?php 
/*
Template Name: Single Room
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
                <h1 class="room-title">Manchester Room</h1>
                <p class="room-subtitle">Comfortable. Spacious. Perfect for Your Stay.</p>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6   mt-0">
                    <form id="bookForm">
                        <div class="bg-color-quaternary p-4">
                            <h3 class="text-5 mt-3 mt-0 mb-4 pt-0 pb-0">Reserve Your Stay</h3>

                            <div class="row">
                                <div class="form-group col mb-4">
                                    <div class="form-control-custom form-control-custom-dark">
                                        <input type="text" class="form-control text-3" id="bookNowFullName" name="bookNowFullName" placeholder="Full Name">
                                    </div>
                                </div>	
                            </div>

                            <div class="row">
                                <div class="form-group col-6 mb-4">
                                    <div class="form-control-custom form-control-custom-dark">
                                        <input type="text" class="form-control text-3" id="bookNowStreetAdd1" name="bookNowStreetAdd1" placeholder="Phone/Whatsapp">
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
                                        <input type="text" value="" class="form-control text-2" data-msg-required="This field is required." placeholder="Check-in" name="bookNowArrival" id="CheckIn" required="">
									</div>
                                </div>	
                                 <div class="form-group col-6 mb-4">
                                    <div class="form-control-custom form-control-custom-dark form-control-datepicker-custom">
                                        <input type="text" value="" class="form-control text-2" data-msg-required="This field is required." placeholder="Check-out" name="bookNowArrival" id="CheckOut" required="">
									</div>
                                </div>	
                            </div>

                           

                           				


                           
                        </div>
                         <button type="submit" class="btn btn-primary font-weight-bold text-uppercase px-5 py-3 mt-4 mb-2 w-100">
                                Book This Room Now
						</button>
                    </form>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-6  position-relative">
                   <div class="tab-pane p-3 tab-pane-navigation active" id="tabsNavigation1">
                        <h3 class="mb-0 pb-0">About This Room</h3>
                        <div class="divider divider-primary divider-small my-3">
                            <hr class="mt-2 me-auto">
                        </div>



                        <div class="row">
                            <div class="col-lg-12">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus ut vel turpis accumsan, efficitur dolor fermentum metus ut vel turpis accumsan.</p>
                                <p>Amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus ut vel turpis accumsan, efficitur dolor fermentum metus ut vel turpis accumsan.</p>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg-4">
                                <ul class="list list-icons list-primary text-uppercase font-weight-bold text-color-dark text-2">
                                    <li><i class="fas fa-check"></i> 24 Rooms, 4 Luxury suites</li>
                                    <li><i class="fas fa-check"></i> Fitness center</li>
                                    <li><i class="fas fa-check"></i> Airport transporation</li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="list list-icons list-primary text-uppercase font-weight-bold text-color-dark text-2">
                                    <li><i class="fas fa-check"></i> 24-Hour In-Room Dining</li>
                                    <li><i class="fas fa-check"></i> Cocktail Bar</li>
                                    <li><i class="fas fa-check"></i> Dog Friendly - Pets Stay Free</li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="list list-icons list-primary text-uppercase font-weight-bold text-color-dark text-2">
                                    <li><i class="fas fa-check"></i> Valet car service</li>
                                    <li><i class="fas fa-check"></i> Pool</li>
                                    <li><i class="fas fa-check"></i> Free Wi-Fi</li>
                                </ul>
                            </div>

                        </div>

                        

                    </div>
                    <div class="tab-pane tab-pane-navigation" id="tabsNavigation2">
                        <h3 class="mt-4 mb-0 pb-0">Services</h3>
                        <div class="divider divider-primary divider-small my-3">
                            <hr class="mt-2 me-auto">
                        </div>

                        <p class="lead font-weight-regular">Donec imperdiet massa tellus, vitae laci nia arcu mollis ac. Lorem ipsum dolor sit amet, consectetur adipiscing elit donec imperdiet ma ssa tellus, vitae lacinia arcu mollis ac. </p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus ut vel turpis accumsan, efficitur dolor fermentum metus ut vel turpis accumsan.</p>

                        <h3 class="text-5 my-4 pb-0 pt-3">Porto Hotel Services</h3>

                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <ul class="list list-icons list-primary text-uppercase font-weight-bold text-color-dark text-2">
                                    <li><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum.</li>
                                    <li><i class="fas fa-check"></i> Orci quis arcu vestibulum vestibulum.</li>
                                    <li><i class="fas fa-check"></i> Quis arcu vestibulum vestibulum.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list list-icons list-primary text-uppercase font-weight-bold text-color-dark text-2">
                                    <li><i class="fas fa-check"></i> Amet orci quis arcu vestibulum vestibulum.</li>
                                    <li><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum.</li>
                                    <li><i class="fas fa-check"></i> Orci quis arcu vestibulum vestibulum.</li>
                                </ul>
                            </div>										
                        </div>

                        <h3 class="text-5 my-4 pb-0">Amenities</h3>

                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <ul class="list list-icons list-primary text-uppercase font-weight-bold text-color-dark text-2">
                                    <li><i class="fas fa-check"></i> Amet orci quis arcu vestibulum vestibulum.</li>
                                    <li><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum.</li>
                                    <li><i class="fas fa-check"></i> Orci quis arcu vestibulum vestibulum.</li>
                                </ul>
                            </div>										
                            <div class="col-lg-6">
                                <ul class="list list-icons list-primary text-uppercase font-weight-bold text-color-dark text-2">
                                    <li><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum.</li>
                                    <li><i class="fas fa-check"></i> Orci quis arcu vestibulum vestibulum.</li>
                                    <li><i class="fas fa-check"></i> Quis arcu vestibulum vestibulum.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane tab-pane-navigation" id="tabsNavigation3">
                        <h3 class="mt-4 mb-0 pb-0">FAQ'S</h3>
                        <div class="divider divider-primary divider-small my-3">
                            <hr class="mt-2 me-auto">
                        </div>

                        <p class="lead font-weight-regular">Consectetur adipiscing elit. Donec imperdiet massa tellus, vitae laci nia arcu mollis ac. Lorem ipsum dolor sit amet, consectetur adipiscing elit donec imperdiet ma ssa tellus, vitae lacinia arcu mollis ac. </p>

                        <div class="toggle toggle-minimal toggle-primary" data-plugin-toggle>
                            <section class="toggle">
                                <a class="toggle-title">Curabitur eget leo at velit imperdiet vague iaculis vitaes?</a>
                                <div class="toggle-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet.</p>
                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title">At imperdiet vague iaculis vitaes?</a>
                                <div class="toggle-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor.</p>
                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title">Leo at velit imperdiet vague iaculis vitaes?</a>
                                <div class="toggle-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>
                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title">Curabitur eget leo at imperdiet vague iaculis vitaes?</a>
                                <div class="toggle-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor.</p>
                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title">Eget leo at velit imperdiet vague iaculis vitaes?</a>
                                <div class="toggle-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>
                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title">Imperdiet vague iaculis vitaes?</a>
                                <div class="toggle-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor.</p>
                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title">Curabitur eget leo at velit imperdiet vague iaculis vitaes?</a>
                                <div class="toggle-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>
                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title">Leo at imperdiet vague iaculis vitaes?</a>
                                <div class="toggle-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor.</p>
                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title">Velit imperdiet vague iaculis vitaes?</a>
                                <div class="toggle-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
		</div>
    

        <?php get_template_part("template-parts/other-rooms") ?>
        <?php get_template_part("template-parts/sub-footer") ?>

   
</div>



<?php get_template_part("template-parts/main-footer") ?>