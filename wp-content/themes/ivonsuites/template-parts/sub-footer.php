    <section class="section section-tertiary section-no-border m-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 mt-1 pt-2">

                    <p class="lead p-0 m-0 text-3 opacity-7 text-uppercase">Sign Up Now For</p>
                    <h4 class="mb-1 mt-0 text-light font-weight-bold text-5-5 p-relative bottom-4">Exclusive Special Offers:</h4>

                </div>
                <div class="col-lg-9">

                    <div class="alert alert-success d-none" id="newsletterSuccess">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>

                    <div class="alert alert-danger d-none" id="newsletterError"></div>

                    <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
                        <div class="row">
                            <div class="form-group col-md-5">
                                <div class="form-control-custom">
                                    <input type="text" class="form-control form-control-lg py-3 text-2 mt-2" id="newsletterName" placeholder="Full Name *" required>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-control-custom">
                                    <input type="email" class="form-control form-control-lg py-3 text-2 mt-2" id="newsletterEmail" placeholder="Email Address *" 
                                    required>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <button type="submit" class="btn btn-primary font-weight-bold text-uppercase py-3 w-100 mt-2">Subscribe Now</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
   
   <footer id="footer" class="color bg-primary mt-0 py-5">
        <div class="container">
            <div class="row align-items-center my-3">
                <div class="col-lg-3">
                    <a href="demo-hotel.html">
                        <img alt="Porto" class="img-fluid logo" style="max-width: 122px;" src="<?php echo get_template_directory_uri()  ?>/assets/img/demos/hotel/logo-footer.png">
                    </a>
                </div>
                <div class="col-lg-6">

                    <div class="d-lg-flex">
                        <div class="my-4 my-lg-0 feature-box feature-box-style-5">
                            <div class="feature-box-icon p-0 m-0">
                                <i class="icon-phone icons text-color-light text-8"></i>
                            </div>
                            <div class="feature-box-info p-0 ms-2">
                                <label class="text-light opacity-7 d-block line-height-5">CALL US</label>
                                <strong class="text-uppercase text-5"><a href="tel:8001234567" class="text-light ws-nowrap">(800) 123-4567</a></strong>
                            </div>
                        </div>

                        <div class="my-4 my-lg-0 feature-box feature-box-style-5 ms-lg-4">
                            <div class="feature-box-icon p-0 m-0">
                                <i class="icon-location-pin icons text-color-light text-8"></i>
                            </div>
                            <div class="feature-box-info p-0 ms-2">
                                <label class="text-light opacity-7 d-block line-height-5">ADDRESS</label>
                                <strong class="text-light text-4 line-height-5">1234 Street Name, Los Angeles - CA<a class="d-block font-weight-bold text-color-light text-uppercase text-1" href="#"><u>Get Directions</u></a></strong>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 text-lg-end">
                    <ul class="header-social-icons social-icons social-icons-clean social-icons-icon-light">
                        <li class="social-icons-instagram mx-1"><a href="http://www.instagram.com/" target="_blank" class="text-3" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                        <li class="social-icons-x mx-1"><a href="http://www.twitter.com/" target="_blank" class="text-3" title="Twitter"><i class="fab fa-x-twitter"></i></a></li>
                        <li class="social-icons-facebook mx-1"><a href="http://www.facebook.com/" target="_blank" class="text-3" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>