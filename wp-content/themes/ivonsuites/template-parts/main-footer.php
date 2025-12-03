
</div>
<div class="footer-copyright bg-tertiary pt-3 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-4 pb-3 py-lg-0">
                <ul class="nav justify-content-center justify-content-lg-start">
                    <li class="nav-item pe-4">
                        <a 
                        class="nav-link p-0 text-2 text-uppercase font-weight-bold text-light" 
                        href="<?php echo get_permalink( get_page_by_path("about-us") ) ?>">
                        About</a>
                    </li>
                    <li class="nav-item pe-4">
                        <a 
                        class="nav-link p-0 text-2 text-uppercase font-weight-bold text-light" 
                        href="<?php echo get_post_type_archive_link('hotel'); ?>">Rooms & Rates</a>
                    </li>
                    <li class="nav-item pe-4">
                        <a 
                        class="nav-link p-0 text-2 text-uppercase font-weight-bold text-light" 
                        href="<?php echo get_permalink( get_page_by_path("contact-us") ) ?>">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 text-center text-lg-end">
                <p class="text-2 m-0 p-relative bottom-2">© Copyright 2025. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>

<?php wp_footer() ?>

</body>
</html>



