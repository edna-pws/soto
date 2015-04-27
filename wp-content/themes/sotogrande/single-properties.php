<?php get_header(); ?>
<?php while (have_posts()): the_post(); ?>
<?php $i = 0; if (have_rows('properties_slider')): ?>
<section class="section-carousel l-banner">
	<div id="banner-slider" class="carousel slide banner-slider banner-slider-md" data-ride="carousel">

	<ol class="carousel-indicators">
	    <li data-target="#banner-slider" data-slide-to="0" class="active"></li>
	    <li data-target="#banner-slider" data-slide-to="1"></li>
	    <li data-target="#banner-slider" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner" role="listbox">
	  	<?php 
				while(have_rows('properties_slider')):the_row();
				$image = get_sub_field('properties_slide_image');
				$caption = get_sub_field('properties_slide_caption');
				$i++;
			?>
	    <div class="item <?php echo ($i == 1? 'active' : ''); ?>">
	      <div class="banner-img">
	      	<img src="<?php echo $image; ?>" alt="<?php echo $caption; ?>">
	      </div>
	    </div>
	  	<?php endwhile; ?>
	  </div><!--/.carousel-inner -->
	 <a class="left carousel-control" href="#banner-slider" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#banner-slider" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</section>
<?php endif; ?>


<div class="gap gap6em"></div>

<section class="section section-single skin-white section-single-properties">
	<div class="container">
		<div class="row">
			<div class="col-md-7 skin-white-services">
				<div class="title-heading">
					<h2 class="title"><?php the_title(); ?></h2>
				</div>

				<div class="copy properties-body">
					<div class="properties-body-gap"><?php the_content(); ?></div>
				
				</div>

				<ul class="nav nav-tabs nav-tabs-primary" role="tablist" id="myTab">
					<?php if (have_rows('facilities_information')): ?>
					  <li role="presentation" class="active"><a href="#facilities" aria-controls="facilities" role="tab" data-toggle="tab">facilities</a></li>
					<?php endif; ?>	
					<?php if(have_rows('services_information')): ?>
					  <li role="presentation"><a href="#services" aria-controls="services" role="tab" data-toggle="tab">services</a></li>
					<?php endif; ?>	
					</ul>
					<?php if (have_rows('facilities_information') || have_rows('services_information')): ?>
					<div class="tab-content section-single-content">
						<?php if (have_rows('facilities_information')): ?>
					  <div role="tabpanel" class="tab-pane active" id="facilities">
					  	<div class="copy">
					  	<?php 
					  		while(have_rows('facilities_information')): the_row(); 
					  			$fac_title = get_sub_field('facilities_title'); 
					  			$fac_content = get_sub_field('facilities_content');
					  	?>
					  		<h4 class="copy-title"><?php echo $fac_title; ?></h4>
					  		<?php echo $fac_content; ?>
					  	<?php endwhile; ?>
					  	</div>
					  </div><!--/#facilities -->
						<?php endif; ?>
						<?php if(have_rows('services_information')): ?>
					  <div role="tabpanel" class="tab-pane" id="services">
					  	<div class="copy">
					  	<?php
					  		while(have_rows('services_information')):the_row();
					  		$ser_title = get_sub_field('services_title'); 
					  		$ser_content = get_sub_field('services_content');
					  	?>
					  		<h4 class="copy-title"><?php echo $ser_title; ?></h4>
					  		<?php echo $ser_content; ?>
					  	<?php endwhile; ?>
					  	</div>
					  </div><!--/#services-->
					<?php endif; ?>
					</div><!--/.tab-content -->
				<?php endif; ?>
			</div>

			<div class="col-md-4 single-properties-next">
			<?php if (get_field('property_details')): ?>
				<h4 class="title-bold">PROPERTY DETAILS</h4>
					<p class="col-md-4-par section-property-par-one"><?php echo get_field('property_details'); ?></p>
			<?php endif; ?>
					<a href="#" class="btn btn-green">View Floor Plan</a>
					<?php if (have_rows('check_list')): ?>
					 <ul class="list-group single-properties-list">
					 <?php 
					 		while(have_rows('check_list')):the_row();
					 		$check_item = get_sub_field('check_list_item');
					 ?>
					    <li class="list-group-item details-prop">
					    <span class="glyphicon glyphicon-ok services-icon" aria-hidden="true">
					    </span> <?php echo $check_item; ?></li>
					<?php endwhile; ?>
					 </ul>
					<?php endif; ?>
						<div class="post-actions">
							<a href="#" class="btn btn-default single-button"> Book Now</a>
						</div>

			</div>
		</div>
	</div>
<?php endwhile; ?>
</section>

<?php get_footer(); ?>