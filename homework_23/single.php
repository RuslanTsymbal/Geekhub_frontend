
<?php get_header();?>
 
<?php get_header('blog');?>


<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?> 


  <!-- Start blog section -->
  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-area">
            <div class="row">
              <div class="col-lg-8 col-md-7 col-sm-12">
                <div class="blog-left blog-details">
                  <!-- Start single blog post -->
                  <article class="single-from-blog" id="single-from">                    
                    <div class="blog-title">
                      <h2><?php the_title ()?></h2>
                      <p><?php the_field ('posted');?><a href="#" class="blog-admin"> <?php the_field ('admin');?></a><span class="blog-date"> <?php the_field ('date');?></span></p>
                      </div>
                    <figure>
                      <a href="blog-single.html"><?php the_post_thumbnail(); ?></a>
                    </figure>
                   <div class="blog-details-content">
                      <p><?php the_field ('description-2');?></p>  
                      <blockquote>
                        <?php the_content ();?> 
                      </blockquote>
                      <p><?php the_field ('description-3');?></p>
                      <span>Tag : </span><a href="#">Good,</a><a href="#">Nice,</a><a href="#">Post</a>
                      <h1><?php the_field ('h1 title');?></h1>
                      <h2><?php the_field ('h2 title');?></h2>
                      <h3><?php the_field ('h3 title');?></h3>
                      <h4><?php the_field ('h4 title');?></h4>
                      <h5><?php the_field ('h5 title');?></h5>
                      <h6><?php the_field ('h6 title');?></h6>
                   </div> 
                                                  
                  </article>
                   <?php comments_template(); ?> 
                   
                </div>
                    
              </div>
            <?php get_sidebar();?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End blog section -->
 <?php endwhile; endif; ?> 
   
 <?php get_footer();?>