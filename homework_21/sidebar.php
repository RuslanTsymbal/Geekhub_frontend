<section id="sidebar">
    <div class="sidebar-form">
               <form method="POST" action="#">
                <?php
                if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : endif;
                ?>
               </form>
    </div>
    <div class="popular">
        <div class="popular-title">
            <h2>Most Popular</h2>
        </div>
        <?php query_posts('category_name=LATEST BLOG POST&showposts=5'); ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="popular-text">
                <p>
            <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a> </div>
        <?php endwhile; ?>

<!--        --><?php
//        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(3) ) : endif;
//        ?>

    <div class="categories">
        <?php
        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(4)) : endif;
        ?>
    </section><!--#sidebar-->
</div><!--.container-fluid-->
</section><!--.wrapper-->
