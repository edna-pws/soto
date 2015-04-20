<?php get_header(); ?>

<section class="section skin-gray section-single">
	<div class="container">
		<h2 class="section-title">promos offer</h2>

		<div class="l-content">
			
			<div class="post-block post-item post-item-secondary">
				<div class="col-md-5 section-promos-single-left">
					<div class="post-img section-promos-single-img">
					<?php 
	  				while(have_posts()):the_post();
						$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); 
						?>
						<img src="<?php echo $img[0]; ?>" alt="">
					</div>
				</div>
				<div class="col-md-6 section-promos-single-right">
					<h2 class="post-name single-head2">The Queen  City of the South Cebu</h2>
					<div class="copy single-par">
						<div class="post-content p-left"><?php the_content(); ?></div>
						<div class="gap gap-2em"></div>
						<h4>email add</h4>
						<a href="mailto:info@sotograndehotelresort.com" class="a-link single-link-decor">info@sotograndehotelresort.com</a>
						<a href="mailto:reservations@sotograndehotelresort.com" class="a-link single-link-decor"><span class="single-link-decor-reserve">reservations@sotograndehotelresort.com</span></a>

						<div class="copy-actions">
							Call <?php echo (get_field('phone_number')?get_field('phone_number') : '');?> to book by <a href="" class="a-link single-link-decor">phone</a> or <a href="" class="a-link single-link-decor">inquire</a>
						</div>
					</div>
					<?php endwhile; ?>
					<div class="post-actions">
						<a href="#" class="btn btn-default single-button"> Book Now</a>
					</div>
				</div>
			</div>

		</div>
			<a class="btn btn-default single-return" href="<?php bloginfo('url'); ?>/promos/" role="button"><i class="fa fa-angle-double-left"></i> Return to promo package page</a>
	</div>
</section>

<?php get_footer(); ?>