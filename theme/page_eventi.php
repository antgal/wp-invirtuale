<?php
/**
 * The template for the eventi page
 *
 * Template Name: Eventi Page
 *
 * @package LDP
 */

get_header();
?>

<?php $loop = new WP_Query( array( 'post_type' => 'evento', 'posts_per_page' => 3,'paged' => 1,'orderby' => 'data', 'order' => 'DESC' ) ); ?>

<div class="container">
	<div class="row pt-5 pb-4">

		<div class="col">

			<h1 class="mb-0">Eventi</h1>
			<div class="divider divider-primary divider-small mb-4">
				<hr class="mr-auto">
			</div>
			
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<div class="row mt-4">
					<div class="col">

						<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mt-4">
							<span class="thumb-info-side-image-wrapper p-0 d-none d-md-block">

								<a title="" href="<?echo get_permalink()?>">
									<img src="<?php ldp_get_theme_base_path(); ?>img/demos/law-firm/blog/blog-law-firm-1.jpg" class="img-fluid" alt="" style="width: 195px;">
								</a>
							</span>
							<span class="thumb-info-caption">
								<span class="thumb-info-caption-text">

									<h2 class="mb-3 mt-1"><a title="" class="text-dark" href="<?echo get_permalink()?>"> <?php the_title()?></a></h2>
									<span class="post-meta">
										<span><?echo get_field('data');?></span>
									</span>
									<p class="text-3 px-0 px-md-3"> <?php the_content(); ?>...</p>
									<a class="mt-3" href="<?echo get_permalink()?>">Continua a leggere <i class="fas fa-long-arrow-alt-right"></i></a>
								</span>
							</span>
						</span>

					</div>
				</div>

			<?php endwhile; ?>

		</div>

	</div>

</div>

<?php // usare $_SERVER['REQUEST_URI'] per estrarre il numero di pagina dall'url?>
<div class="container">
	<div class="row pt-5 pb-4">

		<ul class="pagination float-right">
			<li class="page-item"><a class="page-link" href="#">«</a></li>
			<li class="page-item active"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#">»</a></li>
		</ul>	

	</div>
</div>


<?php
get_footer();
