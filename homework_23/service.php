<?php
/*
Template Name: servise
*/
;?>

 <!-- Start service section -->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="service-area">
            <div class="title-area">
              <h2 class="tittle"><?php echo get_cat_name(7);?></h2>
              <span class="tittle-line"></span>
              <?php echo category_description (7);?>
            </div>
              <div class="service-content">
              <ul class="service-table">
                <?php $args = array('cat' => 7);
                 $category_posts = new WP_Query($args);
 
                 if($category_posts->have_posts()) : 
                 while($category_posts->have_posts()) : 
                 $category_posts->the_post();
                 ?>

                  <li class="col-md-3 col-sm-6">
                       <div class="single-service wow slideInUp">
                          <span class="<?php echo get_post_meta($post->ID, 'icon', true); ?> service-icon"></span>
                          <h4 class="service-title"><?php the_title(); ?></h4>
                          <p><?php the_content();?></p>
                          </div>
                    </li> 

                <?php endwhile;else: ?>Записей не найдено!<?php endif;?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service section -->