<?php 
/*
Template Name: Rooms
*/
get_template_part("template-parts/header");
?>


<div role="main" class="main">
    <section class="page-header page-header-modern page-header-background parallax overlay overlay-color-dark overlay-show overlay-op-5 m-0 py-0" data-plugin-parallax data-plugin-options="{'speed': 1.2}" data-image-src="<?php echo get_template_directory_uri()  ?>/assets/img/demos/hotel/backgrounds/background-5.jpg">
        <div class="container py-4">
            <div class="row py-5">
                <div class="col-md-12 align-self-center p-static text-center">
                    <h1 class="text-light mt-4 mb-0 pb-0 font-weight-bold text-8">Rooms & Rates</h1>
                    <div class="divider divider-primary divider-small my-3 text-center">
                        <hr class="mt-2 mx-auto">
                    </div>								
                </div>
                <div class="col-md-12 align-self-center">
                    <ul class="breadcrumb breadcrumb-light d-block mb-4 text-center">
                        <li><a href="#">Home</a></li>
                        <li class="active">Rooms & Rates</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">

        <div class="row">

            <div class="col">

                <ul class="nav nav-pills nav-pills-center sort-source text-2 text-uppercase mb-4 mt-0" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                    <li class="nav-item active" data-option-value="*"><a class="nav-link text-uppercase font-weight-bold text-3 active" href="#">Show All</a></li>
                    <li class="nav-item" data-option-value=".rooms"><a class="nav-link text-uppercase font-weight-bold text-3" href="#">Rooms</a></li>
                    <li class="nav-item" data-option-value=".suites"><a class="nav-link text-uppercase font-weight-bold text-3" href="#">Suites</a></li>
                </ul>

                <div class="sort-destination-loader sort-destination-loader-showing mb-0">
                    <div class="row portfolio-list sort-destination" data-sort-id="portfolio">
                        <div class="col-md-6 col-lg-4 isotope-item rooms mb-0 pb-0">
                            <img src="<?php echo get_template_directory_uri()  ?>/assets/img/demos/hotel/rooms/room-1.jpg" class="img-fluid" alt="">
                            <h5 class="text-transform-none text-4 font-weight-bold mt-3 mb-0">Standard Room</h5>
                            <div class="custom-room-suite-info mb-5 mb-lg-0">
                                <ul>
                                    <li><label>BEDS</label>	<span>1 Double Bed</span></li>
                                    <li><label>OCCUPANCY</label> <span>2 Persons</span></li>
                                    <li><label>SIZE</label>	<span>40 sqm.</span></li>
                                    <li><label>VIEW</label>	<span>Porto Bay</span></li>
                                    <li><label>RATES FROM</label> <strong>USD 199</strong></li>
                                    <li>
                                        <a href="<?php echo get_permalink( get_page_by_path("single-room")) ?>" class="room-suite-info-book" title="">Book Now</i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 isotope-item rooms mb-0 pb-0">
                            <img src="<?php echo get_template_directory_uri()  ?>/assets/img/demos/hotel/rooms/room-2.jpg" class="img-fluid" alt="">
                            <h5 class="text-transform-none text-4 font-weight-bold mt-3 mb-0">Premium Room</h5>
                            <div class="custom-room-suite-info mb-5 mb-lg-0">
                                <ul>
                                    <li><label>BEDS</label>	<span>1 Double Bed</span></li>
                                    <li><label>OCCUPANCY</label> <span>2 Persons</span></li>
                                    <li><label>SIZE</label>	<span>50 sqm.</span></li>
                                    <li><label>VIEW</label>	<span>Porto Bay</span></li>
                                    <li><label>RATES FROM</label> <strong>USD 299</strong></li>
                                    <li>
                                        <a href="<?php echo get_permalink( get_page_by_path("single-room")) ?>" class="room-suite-info-book" title="">Book Now</i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 isotope-item suites mb-0 pb-0">
                            <img src="<?php echo get_template_directory_uri()  ?>/assets/img/demos/hotel/rooms/room-3.jpg" class="img-fluid" alt="">
                            <h5 class="text-transform-none text-4 font-weight-bold mt-3 mb-0">Deluxe Suite</h5>
                            <div class="custom-room-suite-info mb-5 mb-lg-0">
                                <ul>
                                    <li><label>BEDS</label>	<span>2 Double Beds</span></li>
                                    <li><label>OCCUPANCY</label> <span>3 Persons</span></li>
                                    <li><label>SIZE</label>	<span>80 sqm.</span></li>
                                    <li><label>VIEW</label>	<span>Porto Bay</span></li>
                                    <li><label>RATES FROM</label> <strong>USD 399</strong></li>
                                    <li>
                                        <a href="<?php echo get_permalink( get_page_by_path("single-room")) ?>" class="room-suite-info-book" title="">Book Now</i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>



    <?php get_template_part("template-parts/sub-footer") ?>

</div>



<?php get_template_part("template-parts/main-footer") ?>