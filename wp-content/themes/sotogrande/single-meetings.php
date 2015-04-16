<?php get_header(); ?>
<?php while (have_posts()): the_post(); ?>
<section class="section skin-gray section-meeting">
	<div class="container">
		<h2 class="section-title">meeting</h2>

		<div class="l-content">
		<?php $i = 0; if (have_rows('meeting_slider')): ?>
			<div id="slider-featured" class="carousel slide slider-featured" data-ride="carousel">  
			  <div class="carousel-inner" role="listbox">
			  
			  	<?php
		  			while (have_rows('meeting_slider')): the_row();
		  			$image = get_sub_field('meeting_slide_image');
		  			$caption = get_sub_field('meeting_slide_caption');
		  			$i++;
			  	?>
					    <div class="item <?php echo ($i == 1? 'active' : ''); ?>">
					      <div class="img-wrapper">
					      	<img src="<?php echo $image; ?>" class="img-responsive" alt="<?php echo $caption; ?>">
					      </div>
					      <div class="carousel-caption">
					       	<?php echo $caption; ?>
					      </div>
					    </div>
			  			<?php endwhile; ?>	
			  </div><!--/.carousel-inner -->

			  <!-- Controls -->
			  <a class="left carousel-control" href="#slider-featured" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#slider-featured" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		<?php endif; ?>
			<div class="copy">
				<h3 class="copy-title"><?php the_title(); ?></h3>

				<?php the_content(); ?>

				<div class="copy-actions">
					Call +6332-238-6593 | +6332-266-4589 to book by <a href="tel:63322386593" class="a-link">phone</a> or <a href="mailto:info@sotograndehotelresort.com" class="a-link">inquire</a>
				</div>

			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>
