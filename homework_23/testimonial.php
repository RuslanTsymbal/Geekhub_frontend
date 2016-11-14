<?php
/*
Template Name: testimonial
*/
;?>

<!-- Start Testimonial section -->
  <section id="testimonial">
    <img class="img" src="http://rex/wp-content/uploads/2016/04/testimonial-bg.jpg" width="1800px" height="609px" alt="img">
    <div class="counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Start Testimonial area -->
            <div class="testimonial-area">
              <div class="title-area">
                <h2 class="tittle"><?php echo get_cat_name(22);?></h2>
                <span class="tittle-line"></span>              
              </div>
              <div class="testimonial-conten">
                <!-- Start testimonial slider -->
                <div class="testimonial-slider">
                  <!-- single slide -->
                <?php $slider = new WP_Query(array('post_type' => 'slider', 'posts_per_page' => -1, 'order' => 'ASC')); ?>

                  <?php if ( $slider->have_posts() ) : ?>

                  <?php while ( $slider->have_posts() ) : $slider->the_post(); ?>
                  
                  <div class="single-slide">
                    <?php the_content();?>
                    <div class="single-testimonial">                      
                       <?php the_post_thumbnail(); ?>
                      <p><?php the_field ('description');?></p>
                      <span><?php the_field ('description-2');?></span>
                    </div>
                  </div>
                  <?php endwhile; ?>
              
                  <?php else: ?>
                    <p>Место под слайдер</p>
                  <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section>
  <!-- End Testimonial section -->