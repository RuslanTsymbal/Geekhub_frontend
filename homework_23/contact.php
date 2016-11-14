 <?php
/*
Template Name: contact
*/
; ?>

 <!-- Start Contact section -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="contact-left wow fadeInLeft">
            <h2><?php echo get_cat_name(19);?></h2>
                 <?php if (have_posts()) : ?>
               <?php if ( have_posts() )
                 query_posts('cat=19');
                 while (have_posts()) : the_post(); ?>
                <address class="single-address">
                  <h4><?php the_title();?></h4>
                    <?php the_content();?>
                </address>
               <?php endwhile; endif; ?>
          </div>
        </div>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <div class="contact-right wow fadeInRight">
            <h2><?php echo get_cat_name(20);?></h2>
            <?php
                if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(4) ) : endif; 
              ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->
  <!-- Start Google Map -->
  <section id="google-map">
  <?php
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(6) ) : endif; 
  ?>  
  </section>
  <!-- End Google Map -->