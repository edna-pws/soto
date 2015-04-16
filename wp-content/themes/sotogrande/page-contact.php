<?php 
/*
 Template Name: Contact
 */
get_header(); ?>
<section class="section skin-gray section-contact skin-gap">
		<div class="container">
		<h2 class="section-title contact-header">Contact Us</h2>
		<div class="gap gap-3em"></div>
		<ul class="nav nav-tabs nav-tabs-primary contact" role="tablist" id="myTab">
			<li role="presentation" class="active"><a href="#facilities" aria-controls="SOTOGRANDE" role="tab" data-toggle="tab">SOTOGRANDE</a></li>
			<li role="presentation"><a href="#La Mirada Hotel" aria-controls="La Mirada Hotel" role="tab" data-toggle="tab">La Mirada Hotel</a></li>
			<li role="presentation"><a href="#Vista Mar" aria-controls="Vista Mar" role="tab" data-toggle="tab">Vista Mar</a></li>
			<li role="presentation"><a href="#La Breza Hotel" aria-controls="La Breza Hotel" role="tab" data-toggle="tab">La Breza Hotel</a></li>
			<li role="presentation"><a href="# Stradella Hotel" aria-controls=" Stradella Hotel" role="tab" data-toggle="tab"> Stradella Hotel</a></li>
		</ul>
		<div class="tab-content white">
					  <div role="tabpanel" class="tab-pane active" id="facilities">
					  	<div class="contactform">
					  		<div class="row">
								  <div class="col-md-6 contact-form-margin">
									 	<?php echo do_shortcode('[contact-form-7 id="50" title="Contact form 1"]' ); ?>
									</div>
			<div class="col-md-5 post-addinfo">
				<span class="col-md-5-header contact-header">Sotogrande Hotel and Resort</span>
				<p class="col-md-5-header-par">Dapdap, Mactan Island, Lapu-Lapu City, Cebu, Philippines</p>
				<p class="col-md-5-header-par"><strong>RESERVATIONS</strong>
					<br /><span class="col-md-5-header-pars">+63 32.238.6592</span>
				</p>
				<p class="col-md-5-header-par"><strong>reception</strong>
					<br /><span class="col-md-5-header-pars">+ 63 32.238.6590 I +63 32.238.6591</span>
				</p>
				<p class="col-md-5-header-par"><strong>bannquet sales</strong>
					<br /><span class="col-md-5-header-pars">+ 63 32.266.4589</span>
				</p>
				<p class="col-md-5-header-par"><strong class="email-marg">email add</strong>
					<br /><span class="col-md-5-header-pars email-height">info@sotograndehotelresort.com</span>
					<br /><span class="reserve-par">reservations@sotograndehotelresort.com</span>
				</p>
				<button type="button" class="btn btn-default btn-lg post-viewmap" href="#">
				  <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> View Google Map
				</button>
			</div>
		</div>
					  	</div>
					  </div>
					  <div role="tabpanel" class="tab-pane" id="services">
					  	
					  </div>
					</div>
	</div>
	<div class="bottom-gap"></di>
</section>
<?php get_footer(); ?>