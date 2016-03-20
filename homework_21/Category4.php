<?php /*
Template Name: Category 4
*/ ?>

<?php get_header(); ?>
    <div class="container-fluid">
    <section id="content-left">
        <div class="title-dlog-post">
            <h3> <?php the_title(); ?></h3>
        </div>
        <?php if (have_posts()) : query_posts('p=140');
            while (have_posts()) : the_post(); ?>
                <div class="categoty-text">
                    <?php the_content(); ?>
                </div>
            <?php endwhile;
        endif; ?>
    </section>
<?php get_sidebar(page5); ?>
<?php get_footer(); ?>