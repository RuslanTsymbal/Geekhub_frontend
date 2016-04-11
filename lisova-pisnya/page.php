
<?php get_header(); ?>
 <?php echo "we are hea"?>

	<div class="content">

		<?php if (have_posts('&showposts=5')) : ?>
			<div class="container-fluid">
				<div class="text">
					<h1><?php single_tag_title(); ?></h1>
				</div>
			</div>
		<?php while (have_posts()) : the_post('cat=5'); ?>

				<div class="container-fluid">
					<div class="text">

						<div class="aside">
							<div class="aside-img">
								<?php the_post_thumbnail(); ?>
								<p><?php the_field( 'name' ); ?></p>
							</div>
							<div class="aside-text">
								<span class="first"><?php the_title(); ?></span>
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>

			<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
		<?php else : ?>
		<?php endif; ?>
		<div class="container-fluid">
			<div class="pagination-conteiner">
				<ul class="pagination">
					<li>
						<!--       Пагинация	-->
						<?php


						$big = 999999999;

						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages ) ); ?>
					</li>
				</ul>
			</div>
		</div>
	</div>


<?php get_footer(); ?>