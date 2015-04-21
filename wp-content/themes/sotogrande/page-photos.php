<?php 
/*
Template Name: Photos
 */
get_header(); ?>
<?php while(have_posts()):the_post(); ?>
<section class="section skin-gray skin-gap section-photos">
  <div class="container bottom-gap">
    <h2 class="section-title photos-header">photos</h2>
    <div class="gap gap-3em"></div>
  <div class="section-photos-banner">
  
    <!-- main slider carousel -->
      <div class="row">
        <div class="col-md-12" id="slider">
                <div class="col-md-12" id="carousel-bounding-box">
                    <div id="myCarousel" class="carousel slide">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner section-photos-img-border">
                        <?php
                          $i = 0;
                          while (have_rows('photo_slider')):the_row();
                          $id = get_sub_field('photo_slide_image');
                          $img = wp_get_attachment_image_src( $id, 'full');
                        ?>
                            <div class="<?php echo ($i == 0? 'active' : ''); ?> item" data-slide-number="<?php echo $i; ?>">
                                <img src="<?php echo $img[0]; ?>" class="img-responsive">
                            </div>
                        <?php $i++; endwhile; ?>
                        </div>
                        <!-- main slider carousel nav controls -->
                        <a class="carousel-control left photos-control-left" href="#myCarousel" data-slide="prev">‹</a>

                        <a class="carousel-control right photos-control-right" href="#myCarousel" data-slide="next">›</a>
                    </div>
                </div>

        </div>
    </div>
    <!--/main slider carousel-->
    <!-- thumb navigation carousel -->
    <div class="row section-photos-row">
        <div class="col-md-12 hidden-sm hidden-xs photos-indicator-border" id="slider-thumbs">
          <ul class="list-inline section-photos-list">
              <?php
                $sid = 0;
                while (have_rows('photo_slider')):the_row();
                $id = get_sub_field('photo_slide_image');
                $img_thumb = wp_get_attachment_image_src( $id, 'thumbnail');
              ?>
              <li class="photos-no-pad"> 
              <a id="carousel-selector-<?php echo $sid; ?>">
                <img src="<?php echo $img_thumb[0]; ?>" class="img-responsive">
              </a></li>
            <?php $sid++; endwhile; ?>
          </ul>
        </div><!--/#slider-thumbs -->
    </div>
    <div class="section-photo-par">
      <?php //the_content(); ?>
    </div>
  </div><!--/.section-photos-banner -->
</div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>