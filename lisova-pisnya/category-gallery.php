
<?php get_header(); ?>
<?php if (have_posts()) : ?>
<div class="content">
	<div class="container-fluid">
		<div class="text">
			<h1><?php single_tag_title(); ?></h1>
		</div>

		<?php while (have_posts('showposts=5')) : the_post(); ?>

			<div id="gal" class="gallery-img col-lg-3 col-md-4 col-sm-6">
				<?php the_post_thumbnail(); ?>
			</div>

		<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
		<?php else : ?>
		<?php endif; ?>
	</div>

	<div class="container-fluid">
		<div class="pagination-conteiner">
			<ul class="pagination">
				<li>
					<?php
					global $wp_query;

					$big = 999999999;

					echo paginate_links( array (
						'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format'  => '?paged=%#%',
						'current' => max( 1, get_query_var( 'paged' ) ),
						'total'   => $wp_query->max_num_pages
					) ); ?>
				</li>
			</ul>
		</div>
	</div>
</div>
<?php get_footer(); ?>
