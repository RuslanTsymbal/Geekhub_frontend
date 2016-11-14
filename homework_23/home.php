<?php
/*
Template Name: home
*/
;?>

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

  <!-- Start menu section -->
  <section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                               
           <a class="navbar-brand logo" href="<?php echo home_url();?>">
              <?php
                  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : endif; 
                ?>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="#about">ABOUT</a></li> 
            <li><a href="#team">TEAM</a></li>                    
            <li><a href="#service">SERVICE</a></li> 
            <li><a href="#portfolio">PORTFOLIO</a></li>
            <li><a href="#pricing-table">PRICE </a></li>             
            <li><a href="#from-blog">BLOG </a></li>      
            <li><a href="#contact">CONTACT</a></li>
          </ul>                            
        </div><!--/.nav-collapse -->
       <div class="search-area">
          <form action="">
            <?php
                  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : endif; 
                ?>
          </form>
        </div>         
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->

  <!-- Start about section -->
      <?php get_template_part( 'about' ); ?>
  <!-- End about section -->

 
  <!-- Start Team action -->
        <?php get_template_part( 'team' ); ?>
  <!-- Start Team action -->

  <!-- Start service section -->
        <?php get_template_part( 'servise' ); ?>
  <!-- End service section -->

  <!-- Start Portfolio section -->
      <?php get_template_part( 'portfolio' ); ?>
  <!-- End Portfolio section -->

  <!-- Start counter section -->
        <?php get_template_part( 'counter' ); ?>
  <!-- End counter section -->

  <!-- Start Pricing Table section -->
        <?php get_template_part( 'table' ); ?>
  <!-- End Pricing Table section -->

  <!-- Start Testimonial section -->
        <?php get_template_part( 'testimonial' ); ?>
  <!-- End Testimonial section -->

  <!-- Start from blog section -->
        <?php get_template_part( 'blog' ); ?>
  <!-- End from blog section -->
         <?php get_template_part( 'client' ); ?>
  <!-- Start Contact section -->
         <?php get_template_part( 'contact' ); ?> 
  <!-- End Contact section -->

 <?php get_footer();?>