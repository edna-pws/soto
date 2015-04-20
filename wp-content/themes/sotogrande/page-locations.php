<?php
/*
 Template Name: Locations
 */
 get_header();
?>

<section class="section skin-gray section-locations skin-gap">
	<div class="container">
		<div class="locations bottom-gap">
			<h2 class="section-title locations-header">locations</h2>
			<div class="gap gap-3em"></div>
			<div class="tab-content post-locations">
			<?php if (have_rows('property_location')): ?>
			 <div class="row">
			 <?php while (have_rows('property_location')):the_row(); 
			 	$loc_name = get_sub_field('location_name');
			 	$loc_details = get_sub_field('location_details');
			 ?> 
				  <div class="col-xs-12 col-md-12">
				  	<span class="post-locations-header"><?php echo $loc_name; ?></span>
						<p class="post-locations-par"><?php echo $loc_details; ?></p>
				  </div>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
			<section class="section-map">
			<div class="map-wrapper">
				 <div id="map" style="height:600px; position: relative;"></div>
			        <div id="pointsList" class="map-controls">
			            <ul id="mapLegend" class="mapLegend">
			            </ul>
			        </div>
			</div>
			</section>
	  		</div>
  		</div>
	</div>
</section>

<?php get_footer(); ?>	