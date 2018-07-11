<?php
/**
 * The template for the Chi Siamo Team page
 *
 * Template Name: Chi Siamo Team Page
 *
 * @package LDP
 */

get_header();
?>

<section class="section section-text-light section-center section-box section-header mt-0 border-top-0 p-0" style="background:#ffffff url(<?php ldp_get_theme_base_path(); ?>img/team_top.jpg) no-repeat center center;">
	<div class="section-overlay">
		<div class="container">
				<div class="row center text-center mt-5">
					<h1 class="mx-auto w-100" >Team</h1>
					<h2 class="mx-auto w-100" >I nostri professionisti</h2> 
				</div>
		</div>
	</div>
</section>
<section class="section section-body mt-0 border-top-0 bg-white">
	<div class="container mt70 mb70">

    <div class="text-center">
      <h3 style='font-size:2.6em;text-transform:none !important;'>Scopri i membri del nostro Team</h3> 
	</div>	

		<ul class="nav nav-pills sort-source" data-sort-id="team" data-option-key="filter">
			<li class="nav-item" data-option-value="*"><a class="nav-link active" href="#">Tutti</a></li>
			<li class="nav-item" data-option-value=".presidenza"><a class="nav-link" href="#">Presidenza</a></li>
			<li class="nav-item" data-option-value=".segreteria"><a class="nav-link" href="#">Segreteria</a></li>
			<li class="nav-item" data-option-value=".comunicazione"><a class="nav-link" href="#">Comunicazione</a></li>
			<li class="nav-item" data-option-value=".bandi-e-progetti"><a class="nav-link" href="#">Bandi e progetti</a></li>
			<li class="nav-item" data-option-value=".comitato-scientifico"><a class="nav-link" href="#">Comitato scientifico</a></li>
		</ul>

		<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
			<div class="row team-list sort-destination" data-sort-id="team">
				<div class="col-12 col-sm-6 col-lg-3 isotope-item presidenza">
					<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
						<span class="thumb-info-wrapper">
							<a>
								<img src="<?php ldp_get_theme_base_path(); ?>img/team/team-1.jpg" class="img-fluid" alt="">
							</a>
						</span>
						<span class="thumb-info-caption">
							<span class="thumb-info-caption-text">
								<h5>Avv. Maddalena Corbisiero</h5>
								<h6>Presidente</h6>
							</span>
						</span>
					</span>
				</div>
				<div class="col-12 col-sm-6 col-lg-3 isotope-item presidenza">
					<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
						<span class="thumb-info-wrapper">
							<a>
								<img src="<?php ldp_get_theme_base_path(); ?>img/team/team-2.jpg" class="img-fluid" alt="">
							</a>
						</span>
						<span class="thumb-info-caption">
							<span class="thumb-info-caption-text">
								<h5>Dott.ssa Maria  Beccio</h5>
								<h6>Vice presidente</h6>
							</span>
						</span>
					</span>
				</div>
				<div class="col-12 col-sm-6 col-lg-3 isotope-item segreteria">
					<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
						<span class="thumb-info-wrapper">
							<a>
								<img src="<?php ldp_get_theme_base_path(); ?>img/team/team-3.jpg" class="img-fluid" alt="">
							</a>
						</span>
						<span class="thumb-info-caption">
							<span class="thumb-info-caption-text">
								<h5>Avv. Luigia Di Mauro</h5>
								<h6>Segretario generale</h6>
							</span>
						</span>
					</span>
				</div>
				<div class="col-12 col-sm-6 col-lg-3 isotope-item segreteria">
					<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
						<span class="thumb-info-wrapper">
							<a>
								<img src="<?php ldp_get_theme_base_path(); ?>img/team/team-3.jpg" class="img-fluid" alt="">
							</a>
						</span>
						<span class="thumb-info-caption">
							<span class="thumb-info-caption-text">
								<h5>Avv. Settimia Bonani</h5>
								<h6>Vice segretario</h6>
							</span>
						</span>
					</span>
				</div>			
				<div class="col-12 col-sm-6 col-lg-3 isotope-item comunicazione">
					<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
						<span class="thumb-info-wrapper">
							<a>
								<img src="<?php ldp_get_theme_base_path(); ?>img/team/team-4.jpg" class="img-fluid" alt="">
							</a>
						</span>
						<span class="thumb-info-caption">
							<span class="thumb-info-caption-text">
								<h5>Dott.ssa Annachiara  Bellino </h5>
								<h6>Addetto stampa e social manager</h6>
							</span>
						</span>
					</span>
				</div>
				<div class="col-12 col-sm-6 col-lg-3 isotope-item comunicazione">
					<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
						<span class="thumb-info-wrapper">
							<a>
								<img src="<?php ldp_get_theme_base_path(); ?>img/team/team-5.jpg" class="img-fluid" alt="">
							</a>
						</span>
						<span class="thumb-info-caption">
							<span class="thumb-info-caption-text">
								<h5>Avv.  Sara  Romanelli</h5>
								<h6>Responsabile  rapporti  con le istituzioni</h6>
							</span>
						</span>
					</span>
				</div>
				<div class="col-12 col-sm-6 col-lg-3 isotope-item bandi-e-progetti">
					<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
						<span class="thumb-info-wrapper">
							<a>
								<img src="<?php ldp_get_theme_base_path(); ?>img/team/team-6.jpg" class="img-fluid" alt="">
							</a>
						</span>
						<span class="thumb-info-caption">
							<span class="thumb-info-caption-text">
								<h5>Avv. Giuliano Autuori</h5>
								<h6>Bandi e progetti</h6>
							</span>
						</span>
					</span>
				</div>
				<div class="col-12 col-sm-6 col-lg-3 isotope-item bandi-e-progetti">
					<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
						<span class="thumb-info-wrapper">
							<a>
								<img src="<?php ldp_get_theme_base_path(); ?>img/team/team-6.jpg" class="img-fluid" alt="">
							</a>
						</span>
						<span class="thumb-info-caption">
							<span class="thumb-info-caption-text">
								<h5>Avv.  Angelo  Mangeri</h5>
								<h6>Bandi e progetti</h6>
							</span>
						</span>
					</span>
				</div>			
				<div class="col-12 col-sm-6 col-lg-3 isotope-item bandi-e-progetti">
					<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
						<span class="thumb-info-wrapper">
							<a>
								<img src="<?php ldp_get_theme_base_path(); ?>img/team/team-6.jpg" class="img-fluid" alt="">
							</a>
						</span>
						<span class="thumb-info-caption">
							<span class="thumb-info-caption-text">
								<h5>Avv. Luigi Tortorella</h5>
								<h6>Bandi e progetti</h6>
							</span>
						</span>
					</span>
				</div>	

				<div class="col-12 col-sm-6 col-lg-3 isotope-item comitato-scientifico">
					<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
						<span class="thumb-info-wrapper">
							<a>
								<img src="<?php ldp_get_theme_base_path(); ?>img/team/team-6.jpg" class="img-fluid" alt="">
							</a>
						</span>
						<span class="thumb-info-caption">
							<span class="thumb-info-caption-text">
								<h5>Avv. Marco De Caro</h5>
								<h6>Comitato scientifico giuridico</h6>
							</span>
						</span>
					</span>
				</div>		

				<div class="col-12 col-sm-6 col-lg-3 isotope-item comitato-scientifico">
					<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
						<span class="thumb-info-wrapper">
							<a>
								<img src="<?php ldp_get_theme_base_path(); ?>img/team/team-6.jpg" class="img-fluid" alt="">
							</a>
						</span>
						<span class="thumb-info-caption">
							<span class="thumb-info-caption-text">
								<h5>Avv. Giovanni Torre</h5>
								<h6>Comitato scientifico giuridico</h6>
							</span>
						</span>
					</span>
				</div>		

				<div class="col-12 col-sm-6 col-lg-3 isotope-item comitato-scientifico">
					<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
						<span class="thumb-info-wrapper">
							<a>
								<img src="<?php ldp_get_theme_base_path(); ?>img/team/antonio-gallucci.jpeg" class="img-fluid" alt="">
							</a>
						</span>
						<span class="thumb-info-caption">
							<span class="thumb-info-caption-text">
								<h5>Dott. Antonio Gallucci</h5>
								<h6>Comitato  scientifico  informatico</h6>
							</span>
						</span>
					</span>
				</div>		

				<div class="col-12 col-sm-6 col-lg-3 isotope-item comitato-scientifico">
					<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
						<span class="thumb-info-wrapper">
							<a>
								<img src="<?php ldp_get_theme_base_path(); ?>img/team/team-6.jpg" class="img-fluid" alt="">
							</a>
						</span>
						<span class="thumb-info-caption">
							<span class="thumb-info-caption-text">
								<h5>Dott.ssa Tiziana Liguori</h5>
								<h6>Comitato  scientifico  socio  psicologico</h6>
							</span>
						</span>
					</span>
				</div>		

				<div class="col-12 col-sm-6 col-lg-3 isotope-item comitato-scientifico">
					<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
						<span class="thumb-info-wrapper">
							<a>
								<img src="<?php ldp_get_theme_base_path(); ?>img/team/team-6.jpg" class="img-fluid" alt="">
							</a>
						</span>
						<span class="thumb-info-caption">
							<span class="thumb-info-caption-text">
								<h5>Dott. Luciano Pasca</h5>
								<h6>Comitato  scientifico  economico</h6>
							</span>
						</span>
					</span>
				</div>			

				<div class="col-12 col-sm-6 col-lg-3 isotope-item segreteria">
					<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
						<span class="thumb-info-wrapper">
							<a>
								<img src="<?php ldp_get_theme_base_path(); ?>img/team/team-6.jpg" class="img-fluid" alt="">
							</a>
						</span>
						<span class="thumb-info-caption">
							<span class="thumb-info-caption-text">
								<h5>Avv. Simona Cuozzo </h5>
								<h6>Coordinatrice Sezione Milano</h6>
							</span>
						</span>
					</span>
				</div>															
			</div>
		</div>
	</div>
</section>

<section class="section mb-0">
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-12">
				<h2 class="mt-5 mb-0">Hai domande o cerchi informazioni?</h2>
				<p>Scrivici o chiamaci e otterrai tutte le informazioni di cui hai bisogno</p>
				<div class="form-row">
					<div class="form-group col">
						<a class="btn btn-primary btn-bordered mb-5" href="<?php ldp_get_base_path(); ?>contatti">Contattaci</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
