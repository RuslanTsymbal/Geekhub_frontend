<?php/*
Template Name: page404
*/?>
<?php get_header(); ?>
    <div class="container-fluid">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="content-404">

                <h1><?php the_title(); ?></h1>
                    <p><?php the_field('description'); ?></p>
                    <div class="img-404">
                        <?php the_post_thumbnail(); ?>
                    </div>
            </div>
            <?php endwhile; endif; ?>
    </div>
<?php get_footer(); ?>