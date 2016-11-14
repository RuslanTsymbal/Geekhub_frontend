<?php get_header();?>
  <body>

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div class="loader">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->  
  <header id="header">
    <div class="header-inner">
      <!-- Header image -->
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-bg.jpg" alt="img">
      <div class="header-overlay">
        <div class="header-content">
        <!-- Start header content slider -->
        <?php if (have_posts()) : query_posts('p=218');
        while (have_posts()) : the_post(); ?>
        <h2 class="header-slide"><?php the_title(); ?>
          <span><?php the_field('description'); ?></span>
          <span><?php the_field('description-2'); ?></span>
          <span><?php the_field('description-3'); ?></span>
          <?php the_field('description-4'); ?></h2>
          <?php endwhile; endif; ?>
        <!-- End header content slider -->  
        <!-- Header btn area -->
        <div class="header-btn-area">
             <?php if (have_posts()) : query_posts('p=31');
              while (have_posts()) : the_post(); ?>
          <a class="knowmore-btn" href="#"><?php the_field('description'); ?></a>
          <a class="download-btn" href="#"><?php the_field('description-2'); ?></a>
              <?php endwhile; endif; ?>
        </div>
      </div>
      </div>      
    </div>
  </header>
  <!-- End header section -->
  <section id="text-index">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?> 

              <?php the_title(); ?>   

              <?php the_content(); ?> 

      <?php endwhile; endif; ?> 

        </div>
      </div>
    </div>

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

 <?php get_footer();?>