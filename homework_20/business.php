<?php /*
Template Name: Business
*/ ?>

<?php get_header(); ?>

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
<div class="container-fluid">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) :
    the_post(); ?>
    <div class="news-text">
        <h1><?php the_title(); ?></h1>
        <p>
        <p><?php the_content(); ?></p>
        <?php endwhile;
        endif; ?>
    </div>
</div>
<?php get_footer(); ?>
