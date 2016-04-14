 <?php
/*
Template Name: about
*/
; ?>


 <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Start welcome area -->
          <div class="welcome-area">
            <div class="title-area">
              <h2 class="tittle"><?php echo get_cat_name(2);?><span> Nex</span></h2>
              <span class="tittle-line"></span>
              <?php echo category_description (2);?> 
            </div>
            <div class="welcome-content">
              <ul class="wc-table">
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <?php if (have_posts()) : query_posts('p=13');
                      while (have_posts()) : the_post(); ?>
                        <span class="fa fa-users wc-icon"></span>       
                         <h4 class="wc-tittle"><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                      <?php endwhile; endif; ?>
                    </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <?php if (have_posts()) : query_posts('p=16');
                      while (have_posts()) : the_post(); ?>
                        <span class="fa fa-sellsy wc-icon"></span>       
                         <h4 class="wc-tittle"><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                      <?php endwhile; endif; ?>
                    </div>
                </li>
                <li>
                    <div class="single-wc-content wow fadeInUp">
                    <?php if (have_posts()) : query_posts('p=18');
                      while (have_posts()) : the_post(); ?>
                        <span class="fa fa-line-chart wc-icon"></span>       
                         <h4 class="wc-tittle"><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                      <?php endwhile; endif; ?>
                    </div>
                </li>
                <li>
                    <div class="single-wc-content wow fadeInUp">
                    <?php if (have_posts()) : query_posts('p=20');
                      while (have_posts()) : the_post(); ?>
                        <span class="fa fa-bus wc-icon"></span>       
                         <h4 class="wc-tittle"><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                      <?php endwhile; endif; ?>
                    </div>
                  </li>
              </ul>
            </div>
          </div>
          <!-- End welcome area -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="about-area">
            <div class="row">
                <?php if (have_posts()) : query_posts('p=22');
                      while (have_posts()) : the_post(); ?>
              <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="about-left wow fadeInLeft">
                   <?php the_post_thumbnail(); ?>
                  <a class="introduction-btn" href="#"><?php the_field('description-2'); ?></a>
                </div>
              </div>
              <div class="col-md-7 col-sm-6 col-xs-12">
                <div class="about-right wow fadeInRight">
                  <div class="title-area">
                    <h2 class="tittle"><?php the_title(); ?> <span><?php the_field('description-3'); ?></span> <?php the_field('description-4'); ?></h2>
                    <span class="tittle-line"></span>
                    <?php the_content(); ?>
                    <?php the_field('description'); ?>
                    <div class="about-btn-area">
                      <a href="#" class="button button-default" data-text="KNOW MORE"><span><?php the_field('button'); ?></span></a>
                    </div>                    
                  </div>
                </div>
              </div>
               <?php endwhile; endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 

   <!-- Start call to action -->
  <section id="call-to-action">
    <?php if (have_posts()) : query_posts('p=29');
    while (have_posts()) : the_post(); ?>
    <?php the_post_thumbnail();?>
    <div class="call-to-overlay">
      <div class="container">
        <div class="call-to-content wow fadeInUp">
          <h2><?php the_title();?></h2>
          <a href="#" class="button button-default" data-text="GET IT NOW"><span><?php the_field('description'); ?></span></a>
        </div>
      </div>
    </div>
     <?php endwhile; endif; ?> 
  </section>
  <!-- End call to action -->

