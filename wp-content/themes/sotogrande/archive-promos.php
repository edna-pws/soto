<?php get_header(); ?>

<section class="banner banner-sm section-banner section-promos-banner">
	<div class="banner-sub banner-promos">
		<h3 class="banner-subtitle">promos</h3>
	</div>
</section>
<div class="container">
	<h1 class="promos-heading-title">SotoGrande Package Tour Offers</h1>
	<p class="promos-heading-content">
	<?php echo (get_post(184)->post_content); ?>
	</p>
</div>
<section class="section skin-white section-promos section-bottom-line">
	<div class="carousel-container">
	  <div id="carousel-promo" class="owl-carousel owl-theme">
	  <?php
	  	$args = array('post_type' => 'promos');
	  	$loop = new WP_Query($args);
	  	while($loop->have_posts()):$loop->the_post();
	  	$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
	  	$terms = wp_get_post_terms( $post->ID, 'promos-category', array("fields" => "names") );
	  	?>
	    <div class="item">
			<div class="thumbnail promos-thumbnail">
			  <div class="thumbnail-banner"><h1><?php echo $terms[0];?></h1></div>
			  <img src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>">
			  <div class="caption promos-caption">
			    <h3 class="promos-caption-header"><?php the_title(); ?></h3>
			    <div class="promos-par2"><?php the_content(); ?></div>
				<p class="promos-btn-wrapper"><a href="<?php the_permalink(); ?>" class="btn btn-primary promos-btn" role="button">learn more</a></p>
			  </div>
			</div>
	    </div><!--/.item -->
	  	<?php endwhile;?>
	  </div><!-- /#carousel-promo -->
	</div><!--/.container -->
</section>

<?php get_footer(); ?>