<?php
/**
 * The template for the Cookie Policy page
 *
 * Template Name: Cookie Policy Page
 *
 * @package LDP
 */

get_header();
?>

<div class="container">
	<?php
		// TO SHOW THE PAGE CONTENTS
		while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->

			<?php the_content(); ?> <!-- Page Content -->


		<?php
		endwhile; //resetting the page loop
		wp_reset_query(); //resetting the page query
		?>	

	</div>
<?php
get_footer();