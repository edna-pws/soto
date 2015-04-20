<?php 
/*
Template Name: Homepage
*/
get_header(); ?>

<section class="section-carousel l-banner">
	<div id="banner-slider" class="carousel slide banner-slider" data-ride="carousel">

	  <div class="carousel-inner" role="listbox">
	  <?php
	  		$i = 0;
  			if (have_rows('home_slider')): 
  				while(have_rows('home_slider')): the_row();
  				$i++;
	  ?>
	    <div class="item <?php echo ($i == 1 ? 'active' : ''); ?>">
	    <?php if (get_sub_field('slide_image')): ?>
	      <div class="banner-img">
	      	<img src="<?php echo get_sub_field('slide_image'); ?>" alt="<?php echo get_sub_field('slide_title'); ?>" class="img-responsive">
	      </div>
	      <div class="banner-caption">
	      		<img class "banner-img-custom" src="<?php echo IMG; ?>title-sm.png" alt="">
	      		<h1 class="banner-title title-thin">SotoGrande</h1>
	      		<div class="banner-sub">
	      			<h3 class="banner-subtitle">hotel &amp; resort</h3>
	      		</div>
	      	</div>
	    
			<?php elseif (get_sub_field('slide_video')): ?>
	      <video preload="auto" autoplay class="video-slider" id="video-frame">
					<source src="<?php echo get_sub_field('slide_video'); ?>" type="video/mp4">
					<source src="http://sotogrande.philwebservicesdev.com/media/video.ogv" type="video/ogg">
				</video>
			<?php endif; ?>
		</div><!--/.item -->
		<?php endwhile; endif; ?>

	  </div>
				<a class="carousel-control left photos-control-left home-control-left" href="#banner-slider" data-slide="prev">‹</a>

        <a class="carousel-control right photos-control-right home-control-right" href="#banner-slider" data-slide="next">›</a>
	</div>
</section>

<section class="section-featured skin-white clearfix">
<?php
	$args = array('post_type' => 'properties', 'posts_per_page' => 3);
	$loop = new WP_Query($args);
	while ($loop->have_posts()):$loop->the_post();
	$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID ), 'full');
?>
	<div class="col-md-4 p-0">
		<div class="post">
			<div class="post-heading">
				<h4 class="post-title" id="post-title-new"><?php the_title(); ?></h4>
			</div>
			<div class="post-wrapper">
				<div class="post-wrapper-img">
					<img src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>">
				</div>
				<h4 class="post-body-title live-font"><?php the_title(); ?></h4>
				<div class="copy copy-left">
					<div class="copy-left-center"><?php the_content(); ?></div>
				</div>
				<div class="post-actions body-button">
					<a href="<?php the_permalink(); ?>" class="btn btn-default">view property</a>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
</section>
<?php while(have_posts()):the_post(); ?>
<section class="section section-about">
	<div class="container">
		<div class="section-img">
			<img src="<?php echo IMG; ?>logo-md.png" alt="">
		</div>
		<div class="copy">
			<?php $post_about = get_post(94); ?>
			<p class="copy-subtitle"><?php echo get_field('subtitle', 94); ?></p>

			<p><?php echo $post_about->post_content; ?>
			<a href="<?php echo get_permalink(94); ?>" class="a-link">Read more</a>
			</p>
		</div>
	</div>
</section>
<?php endwhile; ?>
<section class="section-gallery">
	<ul class="section-horizontal-gallery">
		<li class="gallery-wrapper">
			<img src="<?php echo IMG; ?>img1.jpg" alt="">
		</li>
		<li class="gallery-wrapper">
			<img src="<?php echo IMG; ?>img2.jpg" alt="">
		</li>
		<li class="gallery-wrapper">
			<img src="<?php echo IMG; ?>img3.jpg" alt="">
		</li>
		<li class="gallery-wrapper">
			<img src="<?php echo IMG; ?>img4.jpg" alt="">
		</li>
		<li class="gallery-wrapper">
			<img src="<?php echo IMG; ?>img5.jpg" alt="">
		</li>
	</ul>
</section>

<section class="section-map">
	<div class="map-wrapper">
		 <div id="map" style="height:600px; position: relative;"></div>
	        <div id="pointsList" class="map-controls">
	            <ul id="mapLegend" class="mapLegend">
	            </ul>
	        </div>
	</div>
</section>

<?php get_footer(); ?>
