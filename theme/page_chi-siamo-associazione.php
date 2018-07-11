<?php
/**
 * The template for the Chi Siamo Associazione page
 *
 * Template Name: Chi Siamo Associazione Page
 *
 * @package LDP
 */

get_header();
?>

<section class="section section-text-light section-center section-header mt-0 mb-0 border-top-0 p-0" style="background: radial-gradient(circle, #78b4d2 0%, #165b77 100%);">
	<div class="section-header-text">
		<div class="container">
			<img alt="Logo" class="img-fluid" src="<?php ldp_get_theme_base_path(); ?>img/logo-ldp0.png" style="height:220px;">
			<div class="row center text-center mt-5" >
				<h1 class="mx-auto w-100" style="color:#0c0c0c !important; font-size:5em;">Legalit&agrave; 2.0</h1>
				<h2 class="mx-auto w-100" style="color:#0c0c0c !important">Associazione vittime reati online</h2> 
			</div>
		</div>
	</div>
</section>

<div class="container mt-5" >
	<div class="row">
		<div class="col-lg-12 text-center">
			<p style="font-size:22px; line-height:1.4em;">
			In uno scenario caratterizzato da un continuo incremento dei reati on-line, causa la scarsa informazione e la continua evoluzione, 
			l'Associazione Legalità 2.0 ha realizzato una macchina organizzativa di professionisti capace di offrire concreto supporto alla vittima attraverso: 
			<br/>
			<br/>
			la sensibilizzazione e la responsabilizzazione dell' utenza sui rischi cui è possibile incorrere con l'uso degli strumenti informatici, 
			la prevenzione in istituti scolastici, 
			e la completa assistenza della vittima.
			</p>

		<a class="btn btn-primary btn-bordered mb-5 mt-3" href="<?php ldp_get_base_path(); ?>chi-siamo-team">Conosci il team</a>		
		</div>
	</div>
</div>

<section class="section section-default section-no-border mt-0 mb-0 pb-0">
	<div class="container pt-3 text-center">
		<h2>Dove Siamo</h2>

		<img alt="Locations" class="img-fluid" src="<?php ldp_get_theme_base_path(); ?>img/map-ldp0.png"></img>

		<h2 style="font-size:22px;">Salerno e Varese</h2>

		<a class="btn btn-primary btn-bordered mb-5" href="<?php ldp_get_base_path(); ?>contatti">Contattaci</a>		

	</div>
</section>

<div class="container pt-3 pb-4 text-center">
	<h2 style="font-size:30px;">I nostri numeri</h2>

	<div class="container">
		<div class="row counters">
			<div class="col-lg-3 col-sm-6">
				<div class="counter mb-4 mt-4">
					<i class="icon-user-following icons"></i>
					<strong>15</strong>
					<label>Membri</label>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="counter mb-4 mt-4">
					<i class="icon-diamond icons"></i>
					<strong>1+</strong>
					<label>Anni di attività</label>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="counter mb-4 mt-4">
					<i class="icon-badge icons"></i>
					<strong>20+</strong>
					<label>Convegni</label>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="counter mb-4 mt-4">
					<i class="icon-paper-plane icons"></i>
					<strong>500+</strong>
					<label>Persone raggiunte</label>
				</div>
			</div>
		</div>
	</div>		
</div>



<?php
get_footer();

