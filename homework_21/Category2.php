<?php /*
Template Name: Category 2
*/ ?>
<?php get_header(); ?>

<section id="wrapper">
    <div class="container-fluid">
        <section id="content-left">
            <div class="gallery">
                <div class="title-gallery">
                    <h1><?php echo get_cat_name(8); ?></h1>
                </div>
                <?php if (have_posts()) : ?>
                    <?php if (have_posts())
                        query_posts('cat=8');
                    while (have_posts()) : the_post(); ?>
                        <div class="gallery-img">
                            <?php the_post_thumbnail(); ?>
                            <div class="description">
                                <span><?php the_field('description-2'); ?></span>
                            </div>
                            <div class="active-gallery">
                                <a href="http://www.lipsum.com/"><p><?php the_field('description'); ?></p></a>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
            </div>
            <div class="pagination-page">
                <ul class="pagination">
                    <?php if (function_exists('wp_pagenavi')) {
                        wp_pagenavi();
                    } ?>
                </ul>
            </div>
        </section><!--#content-->
        <?php get_sidebar(); ?>
        <?php get_footer(); ?>
