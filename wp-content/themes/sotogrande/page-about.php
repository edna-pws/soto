<?php 
/*
 Template Name: About
 */
get_header(); ?>
<?php while(have_posts()):the_post(); ?>
<section class="section skin-gray section-about">
	<div class="container">
		<h2 class="section-title"><?php the_title(); ?></h2>

		<div class="l-content">
			<div class="section-img">
			<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>
				<img src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>">
			</div>
			<div class="copy">
				<div class="copy-subtitle"><?php the_content(); ?></div>
				<a href="" class="a-link">Read more</a>
				</p>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>
