<?php get_header(); ?>


<div class="dlog-post single-top">
	<div class="container-fluid">

	<div class="dlog-post-content">

		<?php if (have_posts()) : ?>
		<?php if ( have_posts() )
				while (have_posts()) : the_post(); ?>
		<div class="dlog-post-text">
			<h4 id="text-single"><?php the_title(); ?></h4>
			<p>
				<?php the_content();  ?></p>
		</div>
				<?php endwhile; endif; ?>
	</div>
</div>

<?php get_footer();?>
