<!DOCTYPE html>
<html <?php language_attributes(); ?> class="sticky-header-reveal">
	<head>
		<!-- Basic -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
        <?php wp_head() ?>
	</head>
	<body <?php body_class(); ?>>

		<div class="body">

			<header id="header" class="header-effect-reveal" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'reveal', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 220, 'stickySetTop': '-66px'}">
				<div class="header-body border-top-0">
					<div class="header-top header-top-simple-border-bottom bg-color-tertiary">
						<div class="container h-100 px-0">
							<div class="header-row h-100">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<ul class="header-extra-info d-flex align-items-center pt-3 pb-3 ms-0">
											<li class="ms-0">
												<div class="header-extra-info-icon">
													<i class="icon-phone icons text-color-primary"></i>
												</div>
												<div class="header-extra-info-text">
													<label class="text-light opacity-7">CALL US</label>
													<strong class="text-uppercase"><a href="tel:8001234567" class="text-light">(800) 123-4567</a></strong>
												</div>
											</li>
											<li class="d-none d-md-inline-flex">
												<div class="header-extra-info-icon">
													<i class="icon-location-pin icons text-color-primary"></i>
												</div>
												<div class="header-extra-info-text">
													<label class="text-light opacity-7">ADDRESS</label>
													<strong class="text-light">1234 Street Name, Los Angeles - CA<a class="font-weight-bold text-color-primary text-color-hover-secondary text-uppercase ms-2 text-1 p-relative bottom-1" href="#"><u>Get Directions</u></a></strong>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										<ul class="header-social-icons social-icons social-icons-clean social-icons-icon-light d-lg-flex m-0 ms-lg-2">
											<li class="social-icons-instagram mx-1"><a href="http://www.instagram.com/" target="_blank" class="text-3" title="Instagram"><i class="fab fa-instagram"></i></a></li>
											<li class="social-icons-x mx-1"><a href="http://www.twitter.com/" target="_blank" class="text-3" title="Twitter"><i class="fab fa-x-twitter"></i></a></li>
											<li class="social-icons-facebook mx-1"><a href="http://www.facebook.com/" target="_blank" class="text-3" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="<?php echo esc_html(home_url("/")) ?>">
											<img alt="Porto" width="122" height="50" src="<?php echo get_template_directory_uri()?>/assets/img/demos/hotel/logo.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-line header-nav-bottom-line">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li>
														<a class="nav-link font-weight-bold active" href="<?php echo esc_html(home_url("/")) ?>">
															Home
														</a>
													</li>
													<li>
														<a class="nav-link font-weight-bold" href="<?php echo get_permalink( get_page_by_path("about-us") ) ?>">
															About Us
														</a>
													</li>
													<li>
														<a class="nav-link font-weight-bold" href="<?php echo get_permalink( get_page_by_path("rooms") ) ?>">
															Rooms 
														</a>
													</li>
													<li>
														<a class="nav-link font-weight-bold" href="<?php echo get_permalink( get_page_by_path("gallery") ) ?>">
															Gallery 
														</a>
													</li>
													
													<li>
														<a class="nav-link font-weight-bold" href="<?php echo get_permalink( get_page_by_path("contact-us") ) ?>">
															Contact Us
														</a>
													</li>
													
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>