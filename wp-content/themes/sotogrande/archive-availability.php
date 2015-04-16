<?php get_header(); ?>
<?php
	$args = array('post_type' => 'availability' );
	$loop = new WP_Query($args);
?>
<section class="section skin-white section-list section-bottom-line skin-gap section-avail">
	<div class="container">
		<h2 class="section-title avail-title">Check Availability</h2>
	<?php 
		while($loop->have_posts()): $loop->the_post(); 
		$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
	?>
		<div class="post-block post-item">
			<div class="col-md-5 avail-col-left">
				<div class="post-img avail-img">
					<img src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>">
				</div>
			</div>
			<div class="col-md-6 avail-col-right">
				<h2 class="post-name"><?php the_title(); ?></h2>
				<div class="copy section-avail-copy">
					<div><?php the_content(); ?></div>
					<a href="#" class="post-terms">Policy</a>
					<?php if(get_field('price')):?>
					<span class="avail-price">PHP <?php the_field('price'); ?> / Night</span>
				<?php endif; ?>
					<p>Rate No Breakfast (3 Pax)</p>
				</div>
				
				<div class="post-actions">
					<a href="#" class="btn btn-default avail-button btn2"> Book Now</a>
				</div>
			</div>
		</div><!--/.post-item -->
		<?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>