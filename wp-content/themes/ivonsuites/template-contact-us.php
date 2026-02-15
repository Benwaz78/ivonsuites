<?php 
/*
Template Name: Contact Us
*/
get_template_part("template-parts/header");
?>


<div role="main" class="main">
    	<div role="main" class="main">
            <section class="page-header page-header-modern bg-primary m-0 py-0">
                <div class="container py-2">
                    <div class="row py-3">
                        <div class="col-md-12 align-self-center p-static text-center">
                            <h1 class="text-light mt-4 mb-0 pb-0 font-weight-bold text-8">Location</h1>
                            <div class="divider divider-light divider-small my-3 text-center">
                                <hr class="mt-2 mx-auto">
                            </div>								
                        </div>
                        <div class="col-md-12 align-self-center">
                            <ul class="breadcrumb breadcrumb-light d-block mb-4 text-center">
                                <li><a href="#">Home</a></li>
                                <li class="active">Location</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container p-0 m-0 w-100 mw-100">

                <div class="row">

                    <div class="col-6">
                        <div class="row">
                            <div class="col-12 p-4 mt-4">
                                <h3>Ivon Apartment Location</h3>
                                <p class="p-0"><strong>Address: </strong> Ivon Apartment, No 7 ekeolere street, Lakeview estate Phase 2, Amuwo Odofin Lagos, Nigeria.</p>
                                <p class="p-0"><strong>Phone: </strong> +234 913 669 4028</p>
                                <p class="p-0"><strong>Email: </strong> ibe1.ifeke@gmail.com</p>
                            </div>
                        </div>

                        <div id="googlemaps" class="google-map m-0" style="height: 500px;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.291321922553!2d3.2973431740456527!3d6.484743023614467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8f3d5a8977e3%3A0x14c8f0c057dc6a16!2sIvon%20suites!5e0!3m2!1sen!2sng!4v1764505395689!5m2!1sen!2sng" style="width:100%;height:500px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>
                     <div class="col-6">
                        <div class="row">
                            <div class="col-12 p-4 mt-4">
                                <h3>Golden Tulip Apartment </h3>
                                <p class="p-0"><strong>Address: </strong> Diamond Estate, Janet Fajemigbesin St, off Festac Link Bridge, Amuwo Odofin Estate, Lagos 102102, Lagos</p>
                                <p class="p-0"><strong>Phone: </strong> +234 913 669 4028</p>
                                <p class="p-0"><strong>Email: </strong> info@ivonsuites.com</p>
                            </div>
                        </div>

                        <div id="googlemaps" class="google-map m-0 bg-dark" style="height: 500px;">
                            <img style="width: 100%; height:auto" src="<?php echo get_template_directory_uri() ?>/assets/img/about/golden-tulip.jpg" alt="">
                        </div>

                    </div>

                </div>

            </div>
        </div>
            
        <?php get_template_part("template-parts/sub-footer") ?>
    </div>



<?php get_template_part("template-parts/main-footer") ?>