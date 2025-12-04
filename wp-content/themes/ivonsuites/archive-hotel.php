<?php 
get_template_part("template-parts/header");
?>


<div role="main" class="main bg-grey">
    <section class="page-header page-header-modern bg-primary m-0 py-0">
                <div class="container py-2">
                    <div class="row py-3">
                        <div class="col-md-12 align-self-center p-static text-center">
                            <h1 class="text-light mt-4 mb-0 pb-0 font-weight-bold text-8">Apartments</h1>
                            <div class="divider divider-light divider-small my-3 text-center">
                                <hr class="mt-2 mx-auto">
                            </div>								
                        </div>
                        <div class="col-md-12 text-center text-white align-self-center">
                            Choose between our serene Ivon Apartments and premium Golden Tulip Apartments, each equipped with modern amenities for your comfort. Select your location and find the perfect stay.
                        </div>
                    </div>
                </div>
            </section>

    <div class="container py-5">

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
    <?php echo get_template_part("template-parts/hotel-video") ?>


   

    <?php get_template_part("template-parts/sub-footer") ?>

</div>



<?php get_template_part("template-parts/main-footer") ?>