<?php
/*
Template Name: blog
*/
;?>
<!-- Start from blog section -->
  <section id="from-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="from-blog-area">
            <div class="title-area">
              <h2 class="tittle"><?php echo get_cat_name(18);?></h2>
              <span class="tittle-line"></span>
              <p><?php echo category_description (18);?></p>
            </div>
            <!-- From Blog content -->
            <div class="from-blog-content">
              <div class="row">
                <?php if (have_posts()) : ?>
               <?php if ( have_posts() )
                 query_posts('cat=18');
                 while (have_posts()) : the_post(); ?>
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                      <p><?php the_field ('posted');?><a class="blog-admin" href="#"> <?php the_field ('admin');?></a> on <span class="blog-date"><?php the_field ('date');?></span></p>
                    </div>
                    <p><?php the_field('description'); ?></p>
                    <div class="blog-footer">
                      <a href="#"><span class="fa fa-comment"></span> <?php comments_number('0','1','%'); ?> Comments</a>
                      <a href="#"><span class="fa fa-thumbs-o-up"></span> 35 Likes</a>
                    </div>
                  </article>
                </div>
                <?php endwhile; endif; ?>
              </div>    
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End from blog section -->