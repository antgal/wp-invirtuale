<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package INVIRTUALE
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">	

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php invirtuale_get_theme_base_path(); ?>img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php invirtuale_get_theme_base_path(); ?>img/apple-touch-icon.png">	

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">		

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php invirtuale_get_theme_base_path(); ?>vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php invirtuale_get_theme_base_path(); ?>vendor/font-awesome/css/fontawesome-all.min.css">
		<link rel="stylesheet" href="<?php invirtuale_get_theme_base_path(); ?>vendor/animate/animate.min.css">
		<link rel="stylesheet" href="<?php invirtuale_get_theme_base_path(); ?>vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?php invirtuale_get_theme_base_path(); ?>vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php invirtuale_get_theme_base_path(); ?>vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php invirtuale_get_theme_base_path(); ?>vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php invirtuale_get_theme_base_path(); ?>css/theme.css">
		<link rel="stylesheet" href="<?php invirtuale_get_theme_base_path(); ?>css/theme-elements.css">
		<link rel="stylesheet" href="<?php invirtuale_get_theme_base_path(); ?>css/theme-blog.css">
		<link rel="stylesheet" href="<?php invirtuale_get_theme_base_path(); ?>css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?php invirtuale_get_theme_base_path(); ?>vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="<?php invirtuale_get_theme_base_path(); ?>vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="<?php invirtuale_get_theme_base_path(); ?>vendor/rs-plugin/css/navigation.css">
		<link rel="stylesheet" href="<?php invirtuale_get_theme_base_path(); ?>vendor/nivo-slider/nivo-slider.css">
		<link rel="stylesheet" href="<?php invirtuale_get_theme_base_path(); ?>vendor/nivo-slider/default/default.css">		
		
		<!-- Demo CSS -->
		<link rel="stylesheet" href="<?php invirtuale_get_theme_base_path(); ?>css/demos/demo-construction.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php invirtuale_get_theme_base_path(); ?>css/skins/skin-construction.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php invirtuale_get_theme_base_path(); ?>css/custom.css">

		<!-- Head Libs -->
		<script src="<?php invirtuale_get_theme_base_path(); ?>vendor/modernizr/modernizr.min.js"></script>

		<?php wp_head(); ?>

	</head>

	<body data-spy="scroll" data-target="#sidebar" data-offset="120">
		<div class="body">
			<header id="header" class="header-narrow header-semi-transparent-light" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 1, 'stickySetTop': '1'}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<img class="logo-default" alt="Porto" width="324" height="212" src="<?php invirtuale_get_theme_base_path(); ?>img/demos/construction/logo-construction.png">
										<a href="demo-construction.html">
											<img class="logo-small" alt="Porto" width="131" height="48" src="<?php invirtuale_get_theme_base_path(); ?>img/demos/construction/logo-construction-small.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-stripe">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li>
														<a class="nav-link active" href="demo-construction.html">
															Home
														</a>
													</li>
													<li>
														<a class="nav-link" href="demo-construction-company.html">
															Company
														</a>
													</li>
													<li class="dropdown">
														<a class="nav-link dropdown-toggle" href="demo-construction-services.html">
															Services
														</a>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" href="demo-construction-services-detail.html">Pre-Construction</a></li>
															<li><a class="dropdown-item" href="demo-construction-services-detail.html">General Construction</a></li>
															<li><a class="dropdown-item" href="demo-construction-services-detail.html">Plumbing</a></li>
															<li><a class="dropdown-item" href="demo-construction-services-detail.html">Painting</a></li>
														</ul>
													</li>
													<li>
														<a class="nav-link" href="demo-construction-projects.html">
															Projects
														</a>
													</li>
													<li>
														<a class="nav-link" href="demo-construction-blog.html">
															Blog
														</a>
													</li>
													<li>
														<a class="nav-link" href="demo-construction-contact.html">
															Contact
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<ul class="header-social-icons social-icons d-none d-lg-block">
											<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
											<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
										</ul>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">
