<?php /*
Template Name: Contact
*/ ?>

<?php get_header(); ?>
<section id="wrapper">
    <div class="container-fluid">
        <section id="content-left">
            <div class="contact-text">
                <?php if (have_posts()) : query_posts('p=128');
                    while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                        <span><?php the_field('description'); ?></span>
                        <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
            <div class="contact-img">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="contact-form">
                <?php
                if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(6) ) : endif;
                ?>
            </div>
        </section><!--#content-->

        <?php get_sidebar(page5); ?>
        <?php get_footer(); ?>

