<?php /*
Template Name: About
*/ ?>

<?php get_header(); ?>
<div class="container-fluid">
    <section id="content-left">
        <div class="title-about">
            <h3> <?php the_title(); ?></h3>
        </div>
        <?php if (have_posts()) :
        query_posts('p=15');
        while (have_posts()) :
        the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <span><?php the_field('description'); ?></span>
        <div class="categoty-text">
            <?php the_content(); ?>
        </div>
    </section>
    <?php endwhile;
    endif; ?>
    <?php get_sidebar(page5); ?>
    <?php get_footer(); ?>
