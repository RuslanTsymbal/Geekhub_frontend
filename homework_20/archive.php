<?php/*
Template Name: Archive
*/?>

<?php get_header(); ?>
    <div class="container-fluid">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="news-text">
            <h1><?php the_title(); ?></h1>
            <p><p><?php the_content(); ?></p>
            <?php endwhile; endif; ?>
        </div>
    </div>
<?php get_footer(); ?>