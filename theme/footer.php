<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package INVIRTUALE
 */

?>

		</div> <!-- <div role="main" class="main"> -->
		<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<a href="demo-construction.html">
								<img alt="Porto" class="img-fluid logo" width="110" src="<?php invirtuale_get_theme_base_path(); ?>img/demos/construction/logo-construction-small.png">
							</a>
						</div>
						<div class="col-lg-4">
							<div class="row">
								<div class="col-lg-6 mb-2">
									<h4>Navigation</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 mb-0">
									<ul class="list list-footer-nav">
										<li>
											<a href="demo-construction.html">
												Home
											</a>
										</li>
										<li>
											<a href="demo-construction-company.html">
												Company
											</a>
										</li>
										<li>
											<a href="demo-construction-services.html">
												Services
											</a>
										</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list list-footer-nav">
										<li>
											<a href="demo-construction-projects.html">
												Projects
											</a>
										</li>
										<li>
											<a href="demo-construction-blog.html">
												Blog
											</a>
										</li>
										<li>
											<a href="demo-construction-contact.html">
												Contact
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-5">
							<h4>Newsletter</h4>

							<div class="newsletter">

								<div class="alert alert-success d-none" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>

								<div class="alert alert-danger d-none" id="newsletterError"></div>

								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
									<div class="input-group">
										<input class="form-control form-control-sm" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-append">
											<button class="btn btn-light" type="submit"><i class="icon-paper-plane icons"></i></button>
										</span>
									</div>
								</form>

							</div>

							<p><i class="fas fa-phone"></i> (123) 456-789 <i class="far fa-envelope ml-2"></i> <a href="mailto:mail@example.com">mail@example.com</a></p>

						</div>
					</div>

					<div class="footer-copyright">
						<div class="row">
							<div class="col-lg-12 text-center">
								<p>© Copyright 2018. All Rights Reserved.</p>
							</div>
						</div>
					</div>

				</div>
			</footer>
			
		</div> <!-- <div class="body"> -->

		<!-- Vendor -->
		<script src="<?php invirtuale_get_theme_base_path(); ?>vendor/jquery/jquery.min.js"></script>
		<script src="<?php invirtuale_get_theme_base_path(); ?>vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?php invirtuale_get_theme_base_path(); ?>vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?php invirtuale_get_theme_base_path(); ?>vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="<?php invirtuale_get_theme_base_path(); ?>vendor/popper/umd/popper.min.js"></script>
		<script src="<?php invirtuale_get_theme_base_path(); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php invirtuale_get_theme_base_path(); ?>vendor/common/common.min.js"></script>
		<script src="<?php invirtuale_get_theme_base_path(); ?>vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="<?php invirtuale_get_theme_base_path(); ?>vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php invirtuale_get_theme_base_path(); ?>vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?php invirtuale_get_theme_base_path(); ?>vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="<?php invirtuale_get_theme_base_path(); ?>vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?php invirtuale_get_theme_base_path(); ?>vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?php invirtuale_get_theme_base_path(); ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?php invirtuale_get_theme_base_path(); ?>vendor/vide/vide.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?php invirtuale_get_theme_base_path(); ?>js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="<?php invirtuale_get_theme_base_path(); ?>vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="<?php invirtuale_get_theme_base_path(); ?>vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="<?php invirtuale_get_theme_base_path(); ?>vendor/nivo-slider/jquery.nivo.slider.min.js"></script>
		<script src="<?php invirtuale_get_theme_base_path(); ?>js/views/view.contact.js"></script>

		<!-- Demo -->
		<script src="<?php invirtuale_get_theme_base_path(); ?>js/demos/demo-construction.js"></script>	

		<!-- Theme Custom -->
		<script src="<?php invirtuale_get_theme_base_path(); ?>js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php invirtuale_get_theme_base_path(); ?>js/theme.init.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-12345678-1', 'auto');
		ga('send', 'pageview');
		</script>
		-->

		<!-- Vendor -->


		<?php wp_footer(); ?>
	</body>
</html>
