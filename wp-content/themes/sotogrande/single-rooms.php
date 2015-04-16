<?php get_header(); ?>
<?php $i = 0; if (have_rows('rooms_slider')): ?>
<section class="section-carousel l-banner">
	<div id="banner-slider" class="carousel slide banner-slider banner-slider-md" data-ride="carousel">

	<ol class="carousel-indicators">
	    <li data-target="#banner-slider" data-slide-to="0" class="active"></li>
	    <li data-target="#banner-slider" data-slide-to="1"></li>
	    <li data-target="#banner-slider" data-slide-to="2"></li>
	  </ol>

	  <div class="carousel-inner" role="listbox">
			<?php 
				while(have_rows('rooms_slider')):the_row();
				$rm_slide = get_sub_field('room_slide_image');
				$rm_caption = get_sub_field('room_slide_caption');
				$i++;
			?>
	    <div class="item <?php echo ($i == 1?'active':''); ?>">
	      <div class="banner-img">
	      	<img src="<?php echo $rm_slide; ?>" alt="<?php echo $rm_caption; ?>">
	      </div>
	    </div>
	  <?php endwhile; ?>
	  </div>

	 <!--  <a class="left carousel-control" href="#banner-slider" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#banner-slider" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a> -->
	</div>
</section>
<?php endif; ?>
<div class="gap gap6em"></div>

<section class="section skin-white section-rooms section-bottom-line">
	<div class="container-fluid section-rooms-container">
		<div class="row">
			<div class="col-md-7 skin-white-services">
				<div class="title-heading">
				<?php while(have_posts()): the_post(); ?>
					<h2 class="title rooms-header"><?php the_title(); ?></h2>
				<?php endwhile; ?>
				</div>

				<ul class="nav nav-tabs nav-tabs-primary" role="tablist" id="myTab">
					<?php if (get_field('room_info_details')): ?>
					  <li role="presentation" class="active rooms-tabs"><a href="#room" aria-controls="room" role="tab" data-toggle="tab">room</a></li>
					<?php endif; ?>
					<?php if (get_field('room_rate_details')): ?>
					  <li role="presentation" class="rooms-tabs"><a href="#rates" aria-controls="rates" role="tab" data-toggle="tab">rates</a></li>
					<?php endif; ?>
					</ul>
					<div class="tab-content section-rooms-minimum">
					<?php if (get_field('room_info_details')): ?>
					  <div role="tabpanel" class="tab-pane active" id="room">
					  	<div class="copy">
					  	<p><?php the_field('room_info_details'); ?></p>
					  	</div>
					<?php endif; ?>
					  </div><!--/#room -->
					<?php if (get_field('room_rate_details')): ?>
					  <div role="tabpanel" class="tab-pane" id="rates">
					  	<p><?php the_field('room_rate_details'); ?></p>
					  </div><!-- /#rates -->
					<?php endif; ?>
					</div><!--/.section-rooms-minimum -->
			</div><!--/.skin-white-services -->

			<div class="col-md-4">
				<h4 class="title-bold rooms-details">ROOM DETAILS</h4>
					<?php if (have_rows('rooms_check_list')): ?>
					 <ul class="list-group rooms-details-list">
					 	<?php while(have_rows('rooms_check_list')):the_row(); ?>
					    <li class="list-group-item details-prop">
					    	<span class="glyphicon glyphicon-ok services-icon" aria-hidden="true"></span>
					    	<?php echo get_sub_field('room_check_item'); ?>
					    </li>
					 	<?php endwhile; ?>
					 </ul>
					<?php endif; ?>
						<div class="post-actions">
							<a href="#" class="btn btn-default single-button"> Book Now</a>
						</div>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
