<?php get_header(); ?>
<section class="banner banner-sm section-banner section-rooms">
  <div class="banner-sub">
    <h3 class="banner-subtitle main-rooms">rooms</h3>
  </div>
</section>

<section class="section-mainrooms section-bottom-line">
  <div class="container">
    <div class="section-mainrooms-copy">
      <p class="copy-par1">
        <?php echo get_field('rooms_header', 205); ?>
      </p>
      <p class="copy-par2">     
        <?php echo get_post(205)->post_content; ?>
      </p>
    </div>
    <div class="mainrooms-list">
    <?php
      $args = array('post_type' => 'rooms' );
      $loop = new WP_Query($args);
    ?>
      <div class="row">
      <?php 
        $count = 0;
        while ($loop->have_posts()): $loop->the_post();
        $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
      ?>
        <?php if ($count % 3 == 0 && $count !== 0): ?>
          </div>
          
        <div class="row section-mainrooms-row">
        <?php endif; ?>
         <div class="col-xs-6 col-md-3 mainrooms-max mainrooms-center">
          <a href="<?php the_permalink(); ?>" class="thumbnail mainrooms-bg">
            <img class="mainrooms-bg-img" src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>">
            <p class="rooms-caption"><?php the_title(); ?></p>
          </a>
        </div><!--/.mainrooms-max -->
      <?php 
        $count++;
        endwhile;
      ?>
      </div><!-- /.row -->
    </div>
  </div>
</section>
<?php get_footer(); ?>