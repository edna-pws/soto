<?php get_header(); ?>
<section class="banner banner-sm section-about properties-banner">
	<div class="banner-sub properties-sub-banner">
		<h3 class="banner-subtitle properties">properties</h3>
	</div>
</section>
<section class="section skin-white section-list section-bottom-line">
	<div class="container">
	<?php 
		$args = array('post_type' => 'properties');
	  	$loop = new WP_Query($args);
	  	while($loop->have_posts()):$loop->the_post();
	  	$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
	?>
		<div class="post-block post-item properties-item">
			<div class="col-md-5 properties-col-left">
				<div class="post-img properties-img">
					<img src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>">
				</div>
			</div>
			<div class="col-md-7 properties-col-right">
				<h2 class="post-name"><?php the_title(); ?></h2>
				<div class="copy properties-justify"><?php the_content(); ?></div>
				
				<div class="post-actions">
					<a href="<?php the_permalink(); ?>" class="btn btn-default">view property</a>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>