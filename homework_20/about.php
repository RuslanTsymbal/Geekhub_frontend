<?php /*
Template Name: About
*/ ?>

<?php get_header(); ?>
    <section id="about-terxt-top">
        <div class="container-fluid">
            <div class="title">
                <?php if (have_posts()) : query_posts('p=65');
                    while (have_posts()) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>
                    <?php endwhile; endif; ?>
            </div><!--.title-->
        </div><!--.container-fluid-->
    </section>
    <section id="about-terxt">
        <div class="container-fluid">
            <div class="about-content-top">
                <h1><?php echo get_cat_name(3); ?></h1>
                <div class="about-description col-lg-4">
                    <?php if (have_posts()) : query_posts('p=68');
                        while (have_posts()) : the_post(); ?>
                            <div class="about-img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="description">
                                <h2><?php the_title(); ?></h2>
                                <span><?php the_field('description'); ?></span>
                                <p><?php the_content(); ?></p>
                            </div>
                        <?php endwhile; endif; ?>
                </div>
                <div class="about-description col-lg-4">
                    <?php if (have_posts()) : query_posts('p=73');
                        while (have_posts()) : the_post(); ?>
                            <div class="about-img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="description">
                                <h2><?php the_title(); ?></h2>
                                <span><?php the_field('description'); ?></span>
                                <p><?php the_content(); ?></p>
                            </div>
                        <?php endwhile; endif; ?>
                </div>
                <div class="about-description col-lg-4">
                    <?php if (have_posts()) : query_posts('p=76');
                        while (have_posts()) : the_post(); ?>
                            <div class="about-img" id="about-img-right">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="description">
                                <h2><?php the_title(); ?></h2>
                                <span><?php the_field('description'); ?></span>
                                <p><?php the_content(); ?></p>
                            </div>
                        <?php endwhile; endif; ?>
                </div>
            </div><!--about-content-top-->
            <div class="about-content-bottom">
                <div class="about-description col-lg-4 col-lg-offset-2">
                    <?php if (have_posts()) : query_posts('p=79');
                        while (have_posts()) : the_post(); ?>
                            <div class="about-img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="description">
                                <h2><?php the_title(); ?></h2>
                                <span><?php the_field('description'); ?></span>
                                <p><?php the_content(); ?></p>
                            </div>
                        <?php endwhile; endif; ?>
                </div>
                <div class="about-description col-lg-4">
                    <?php if (have_posts()) : query_posts('p=82');
                        while (have_posts()) : the_post(); ?>
                            <div class="about-img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="description">
                                <h2><?php the_title(); ?></h2>
                                <span><?php the_field('description'); ?></span>
                                <p><?php the_content(); ?></p>
                            </div>
                        <?php endwhile; endif; ?>
                </div>
            </div><!--.about-content-bottom-->
        </div><!--.container-fluid-->
    </section>
<?php get_footer(); ?>