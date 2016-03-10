<?php/*
Template Name: Footer
*/?>
<section id="footer" class="navbar-fixed-bottom">
    <div class="container-fluid">
        <div class="footer-centre">
            <div class="menu-footer col-lg-4 row">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Archive</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="social-footer col-lg-4">
                <ul>

                    <?php if ( have_posts() ) : query_posts('p=47');
                    while (have_posts()) : the_post(); ?>
                        <li><a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>" target="_blank" title="<?php the_title(); ?>"><i class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></i></a></li>
                    <?php endwhile; endif; ?>
                    <?php if ( have_posts() ) : query_posts('p=51');
                        while (have_posts()) : the_post(); ?>
                            <li><a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>" target="_blank" title="<?php the_title(); ?>"><i class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></i></a></li>
                        <?php endwhile; endif; ?>
                    <?php if ( have_posts() ) : query_posts('p=53');
                        while (have_posts()) : the_post(); ?>
                            <li><a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>" target="_blank" title="<?php the_title(); ?>"><i class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></i></a></li>
                        <?php endwhile; endif; ?>
                    <?php if ( have_posts() ) : query_posts('p=56');
                        while (have_posts()) : the_post(); ?>
                            <li><a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>" target="_blank" title="<?php the_title(); ?>"><i class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></i></a></li>
                        <?php endwhile; endif; ?>
                </ul>
            </div>
            <div class="footer-right col-lg-4">
                <span>&copy; Copyright 2013
                    <?php if ( have_posts() ) : query_posts('p=58');
                        while (have_posts()) : the_post(); ?>
                            <a href="<?php echo get_post_meta($post->ID, 'designerfirs_url', true); ?>" target="_blank"> <?php the_title(); ?></a>
                        <?php endwhile; endif; ?>
                    </span>
            </div>
        </div>
    </div><!--.container-fluid-->
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/parallax/parallax.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/mixitup/mixitup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/scroll2id/PageScroll2id.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/waypoints/waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/animate/animate-css.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/jqBootstrapValidation/jqBootstrapValidation.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/myjs.js"></script>
</body>
</html>