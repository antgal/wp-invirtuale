<?php
/**
 * The template for the contacts page
 *
 * Template Name: Contacts Page
 *
 * @package LDP
 */

get_header();
?>
<section class="section section-text-light section-center section-box section-header mt-0 border-top-0 p-0" style="background:#ffffff url(<?php ldp_get_theme_base_path(); ?>img/contact_ldp.jpg) no-repeat center center;">
	<div class="section-overlay">
		<div class="container">
				<div class="row center text-center mt-5">
					<h1 class="mx-auto w-100" >Contatti</h1>
					<h2 class="mx-auto w-100" >Ottieni tutte le informazioni di cui hai bisogno dai nostri esperti</h2> 
				</div>
		</div>
	</div>
</section>

<section class="section section-body mt-0 border-top-0 bg-white">
  <div class="container mt70 mb70">
    <div class="text-center">
      <h3 style='font-size:2.6em;text-transform:none !important;'>Le nostre sedi</h3> 
	</div>
		
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12 text-center contact-map-container">
				<div id="googlemaps_salerno" class="contact_map"></div>              
				<p class="contact_title">Salerno</p>
				<p class="contact_text">Piazza Casalbore 25, 84100, Salerno</p>
				<p class="contact_text">Tel : +39 349 692 3244 </p>
				<p class="contact_text">Email : <a class="contact_email" href="mailto:legalitaduepuntozero@gmail.com" >legalitaduepuntozero@gmail.com</a>
				</p>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 text-center contact-map-container">
				<div id="googlemaps_varese" class="contact_map"></div>              
				<p class="contact_title">Varese</p>
				<p class="contact_text">Via dei Bersaglieri 23, 21100, Varese</p>
				<p class="contact_text">Tel : +39 393 434 1020 </p>
				<p class="contact_text">Email : <a class="contact_email" href="mailto:legalitaduepuntozero@gmail.com" >legalitaduepuntozero@gmail.com</a>
				</p>
			</div>
		</div>		
  </div>
</section>


<div id="googlemaps_2"></div>

<script>
	function initMap() 
	{ 
		//Salerno
		var map_salerno_coordinates = {lat: 40.679710, lng: 14.769770};
		var map_salerno = new google.maps.Map(document.getElementById('googlemaps_salerno'), { center: map_salerno_coordinates, zoom: 8 }); 
		var marker_salerno = new google.maps.Marker({ position: map_salerno_coordinates, map: map_salerno, title: 'Sede Salerno!' }); 

		//Varese
		var map_varese_coordinates = {lat: 45.820547, lng: 8.828789};
		var map_varese = new google.maps.Map(document.getElementById('googlemaps_varese'), { center: map_varese_coordinates, zoom: 8 }); 
		var marker_varese = new google.maps.Marker({ position: map_varese_coordinates, map: map_varese, title: 'Sede Varese!' }); 
	}
</script>

<!--Load the API-->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6m5ucetWF4BBRbslbCA0ZioBCcN5J08E&callback=initMap"></script>

<?php
get_footer();



  