<?php /*
Template Name: Home
*/ ?>
<?php get_header(); ?>
    <section id="text-blog">
        <div class="menu-bottom">
            <div class="container-fluid">
                <div class="menu-bottom-nav col-lg-6">
                    <?php
                    if (function_exists('wp_nav_menu'))
                        wp_nav_menu(
                            array(
                                'theme_location' => 'header__bot_menu',
                                'fallback_cb' => 'header__bot_menu',
                                'container' => 'ul')
                        );
                    else custom_menu();
                    ?>
                </div>
            </div>
        </div><!--.menu-bottom-->
        <div class="content-home">
            <div class="container-fluid">
                <div class="title">
                    <?php if (have_posts()) : query_posts('p=29');
                        while (have_posts()) : the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                            <span><?php the_field('description'); ?></span>
                            <div class="img-home">
                                <?php the_post_thumbnail(); ?>
                            </div><p><?php the_content(); ?></p>
                            <div class="text-home-bottom">
                                <i class="fa fa-arrow-circle-o-right"></i><a href="#">Read More</a>
                            </div>
                        <?php endwhile; endif; ?>
                </div>

                <div class="title">
                    <?php if (have_posts()) : query_posts('p=31');
                        while (have_posts()) : the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                            <span><?php the_field('description'); ?></span>
                            <div class="img-home">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <p><?php the_content(); ?></p>
                            <div class="text-home-bottom">
                                <i class="fa fa-arrow-circle-o-right"></i><a href="#">Read More</a>
                            </div>
                        <?php endwhile; endif; ?>
                </div>

                <div class="title">
                    <?php if (have_posts()) : query_posts('p=33');
                        while (have_posts()) : the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                            <span><?php the_field('description'); ?></span>
                            <div class="img-home">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <p><?php the_content(); ?></p>
                            <div class="text-home-bottom bottom-line">
                                <i class="fa fa-arrow-circle-o-right"></i><a href="#">Read More</a>
                            </div>
                        <?php endwhile; endif; ?>
                </div>
            </div><!--.content-top-->
            <div class="pagination-home">
                <ul>
                    <li><a href="#" class="fa fa-chevron-left" id="color"></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#" class="fa fa-chevron-right" id="color-2"></a></li>
                </ul>
            </div>
        </div><!--.container-fluid-->
    </section>
<?php get_footer(); ?>