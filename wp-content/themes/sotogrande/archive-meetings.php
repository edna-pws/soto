<?php get_header(); ?>

<section class="banner banner-sm section-banner section-meeting-banner">
	<div class="banner-sub section-meeting-banner-sub">
		<h3 class="banner-subtitle">meeting and banquet</h3>
	</div>
</section>
<div class="section-meeting section-bottom-line bottom-gap">
	<div class="container">
	<?php 
		$args = array(
			'post_type' => 'meetings' 
			); 
		$loop = new WP_Query($args);
		while($loop->have_posts()): $loop->the_post();
		$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
	?>
		<section class="section skin-white section-list meeting-with-space">
		<div class="post-block post-item">
				<div class="row meeting-row">
					<div class="col-md-5 section-media-space">
						<div class="post-img meeting-img">
							<img src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>">
						</div>
					</div>
					<div class="col-md-7 media meeting-col">
						<h4 class="media-heading"><?php the_title(); ?></h4>
						<div class="media-par section-meeting-par"><?php the_content(); ?></div>
						
						<div class="post-actions">
							<a href="<?php the_permalink(); ?>" class="btn btn-default meeting-view">View More</a>
						</div>
					</div>
				</div>
		</div>
		</section>
	<?php endwhile; ?>
	</div>
</div>
<?php get_footer(); ?>