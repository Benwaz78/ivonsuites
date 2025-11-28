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

                    <div class="col">

                        <div id="googlemaps" class="google-map m-0" style="height: 500px;"></div>

                    </div>

                </div>

            </div>
        </div>
            
        <?php get_template_part("template-parts/sub-footer") ?>
    </div>



<?php get_template_part("template-parts/main-footer") ?>