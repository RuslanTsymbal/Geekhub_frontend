<?php
/*
Template Name: table
*/
;?>

<!-- Start Pricing Table section -->
  <section id="pricing-table">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pricing-table-area">
            <div class="title-area">
              <h2 class="tittle"><?php echo get_cat_name(17);?></h2>
              <span class="tittle-line"></span>
              <?php echo category_description (17);?>
            </div>
            <!-- service content -->
            <div class="pricing-table-content">
                <ul class="price-table">
                 <?php query_posts('cat=17'); ?>
                  <?php while (have_posts()) : the_post(); ?> 
                  <li class="wow slideInUp">
                    <div class="single-price">
                      <h4 class="price-header"><?php the_title(); ?></h4>
                      <span class="price-amount"><?php the_field ('price');?></span>
                      <p><?php the_field ('storage');?></p>
                      <p><?php the_field ('ram');?></p>
                      <p><?php the_field ('bandwidth');?></p>
                      <p><?php the_field ('address');?></p>
                      <p><?php the_field ('unlimited');?></p>
                      <p><?php the_field ('forumh');?></p>
                      <a data-text="SIGN UP" class="button button-default" href="#"><span><?php the_field ('sing');?></span></a>
                    </div>
                  </li>
                   <?php endwhile; ?>
               </ul>     
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Pricing Table section -->