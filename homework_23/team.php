 <?php
/*
Template Name: team
*/
; ?>

 <!-- Start Team action -->
  <section id="team">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="team-area">
            <div class="title-area">
              <h2 class="tittle"><?php echo get_cat_name(3);?></h2>
              <span class="tittle-line"></span>
              <p><?php echo category_description (3);?></p>
            </div>
            <!-- Start team content -->
            <div class="team-content">
              <ul class="team-grid">
                 <li>
                   <?php if (have_posts()) : query_posts('p=33');
                   while (have_posts()) : the_post(); ?>
                  <div class="team-item team-img-1 wow fadeInUp">
                    <div class="team-info">
                      <?php the_content();?>
                      <?php
                      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(5) ) : endif; 
                      ?>
                    </div>
                  </div>
                  <div class="team-address">
                    <p><?php the_title();?></p>
                    <span><?php the_field ('description');?></span>
                  </div>
                  <?php endwhile; endif; ?> 
                </li>
                <li>
                <?php if (have_posts()) : query_posts('p=39');
                   while (have_posts()) : the_post(); ?>
                  <div class="team-item team-img-2 wow fadeInUp">
                    <div class="team-info">
                      <?php the_content();?>
                      <?php
                      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(5) ) : endif; 
                      ?>
                    </div>
                  </div>
                  <div class="team-address">
                     <p><?php the_title();?></p>
                     <span><?php the_field ('description');?></span>               
                  </div>
                   <?php endwhile; endif; ?> 
                </li>
                <li>
                  <?php if (have_posts()) : query_posts('p=41');
                   while (have_posts()) : the_post(); ?>
                  <div class="team-item team-img-3 wow fadeInUp">
                    <div class="team-info">
                      <?php the_content();?>
                      <?php
                      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(5) ) : endif; 
                      ?>
                    </div>
                  </div>
                  <div class="team-address">
                     <p><?php the_title();?></p>
                     <span><?php the_field ('description');?></span> 
                  </div>
                   <?php endwhile; endif; ?> 
                </li>
                <li>
                  <?php if (have_posts()) : query_posts('p=43');
                   while (have_posts()) : the_post(); ?>
                  <div class="team-item team-img-4 wow fadeInUp">
                    <div class="team-info">
                      <?php the_content();?>
                      <?php
                      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(5) ) : endif; 
                      ?>
                    </div>
                  </div>
                  <div class="team-address">
                    <p><?php the_title();?></p>
                    <span><?php the_field ('description');?></span> 
                  </div>
                   <?php endwhile; endif; ?> 
                </li>
              </ul>
            </div>
            <!-- End team content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start Team action -->

