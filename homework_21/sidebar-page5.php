<section id="sidebar2">
        <?php if (have_posts()) : query_posts('p=138');
        while (have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div class="contact-tel"><span><?php the_field('tel'); ?></span></div>
        <div class="contact-text-right"><p><?php the_field('description-2'); ?></p></div>
        <div class="contact-email"><span><?php the_field('email'); ?></span></div>
        <?php endwhile; endif; ?>
</section><!--#sidebar-->
</div><!--.container-fluid-->
</section><!--.wrapper-->
