<?php
/*
Template Name: counter
*/
;?>

 <!-- Start counter section -->
  <section id="counter">
    <img src="http://rex/wp-content/uploads/2016/04/counter-bg.jpg" alt="img">
    <div class="counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Start counter area -->
            <div class="counter-area">
            <?php query_posts('cat=16'); ?>
            <?php while (have_posts()) : the_post(); ?>     
                <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                <span class="<?php echo get_post_meta($post->ID, 'icon', true); ?>"></span>
                  <div class="counter-count">
                    <span class="counter"><?php the_field ('description');?></span>
                    <p><?php the_title(); ?></p>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
              </div>
          </div>
        </div>
      </div>
    </div> 
  </section>
  <!-- End counter section -->