<?php/*
Template Name: Blog
*/?>

<?php get_header(); ?>
	<section id="text-blog">
		<div class="menu-bottom">
			<div class="container-fluid">
				<div class="menu-bottom-nav col-lg-6">
					<ul>
						<li><a href="#">Business</a></li>
						<li><a href="#">Mobile</a></li>
						<li><a href="#">Social Media</a></li>
						<li><a href="#">Technology</a></li>
					</ul>
				</div>
			</div>
		</div><!--.menu-bottom-->
	</section>
	<section>
			<div class="content-top">
				<div class="container-fluid">
					<div class="title">
						<h1><?php echo get_cat_name(4);?></h1>
						<span><?php echo category_description( 4 ); ?></span>
						<?php if ( have_posts() ) : query_posts('p=85');
							while (have_posts()) : the_post(); ?>
							<div class="img-top">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="content-top-text">
								<p><?php the_content(); ?></p>
								<?php endwhile; endif; ?>
							</div>
								<?php if ( have_posts() ) : query_posts('p=88');
									while (have_posts()) : the_post(); ?>
							<div class="image-center">
								<?php the_post_thumbnail(); ?>
							</div>
							<?php endwhile; endif; ?>
					</div>
					<div class="content-top-bottom">
						<?php if ( have_posts() ) : query_posts('p=91');
							while (have_posts()) : the_post(); ?>
						<h2><?php the_title(); ?></h2>
						<p><?php the_content(); ?></p>
							<div class="image-bottom">
								<?php the_post_thumbnail(); ?>
							</div>
							<?php endwhile; endif; ?>
						<?php if ( have_posts() ) : query_posts('p=94');
							while (have_posts()) : the_post(); ?>
								<p><?php the_content(); ?></p>
							<?php endwhile; endif; ?>
						<div class="social"> 
							<p><?php echo category_description( 5 ); ?></p>
							<ul>
								<?php if ( have_posts() ) : query_posts('p=47');
									while (have_posts()) : the_post(); ?>
										<li><a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>" target="_blank" title="<?php the_title(); ?>"><i class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></i></a><span class="number">1250</span></li>
									<?php endwhile; endif; ?>
								<?php if ( have_posts() ) : query_posts('p=51');
									while (have_posts()) : the_post(); ?>
										<li><a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>" target="_blank" title="<?php the_title(); ?>"><i class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></i></a><span class="number">1250</span></li>
									<?php endwhile; endif; ?>
								<?php if ( have_posts() ) : query_posts('p=53');
									while (have_posts()) : the_post(); ?>
										<li><a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>" target="_blank" title="<?php the_title(); ?>"><i class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></i></a><span class="number">1250</span></li>
									<?php endwhile; endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="comments">
			<div class="container-fluid">
				<h1><?php echo get_cat_name(6);?></h1>

				<div class="coment">
					<?php if ( have_posts() ) : query_posts('p=98');
						while (have_posts()) : the_post(); ?>
					<div class="coment-img">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="coment-text">
						<h2><?php the_title(); ?></h2>
						<span><?php the_field('date'); ?></span>
						<p><?php the_content(); ?></p>
						<div class="coment-text-bottom">
							<a href="#" class="fa fa-reply"> Click to Reply</a>
						</div>
					</div>
					<?php endwhile; endif; ?>
				</div>

				<div class="coment even">
					<?php if ( have_posts() ) : query_posts('p=102');
						while (have_posts()) : the_post(); ?>
							<div class="coment-img">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="coment-text">
								<h2><?php the_title(); ?></h2>
								<span><?php the_field('date'); ?></span>
								<p><?php the_content(); ?></p>
								<div class="coment-text-bottom">
									<a href="#" class="fa fa-reply"> Click to Reply</a>
								</div>
							</div>
						<?php endwhile; endif; ?>
				</div>

				<div class="coment">
					<?php if ( have_posts() ) : query_posts('p=105');
						while (have_posts()) : the_post(); ?>
							<div class="coment-img">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="coment-text">
								<h2><?php the_title(); ?></h2>
								<span><?php the_field('date'); ?></span>
								<p><?php the_content(); ?></p>
								<div class="coment-text-bottom">
									<a href="#" class="fa fa-reply"> Click to Reply</a>
								</div>
							</div>
						<?php endwhile; endif; ?>
				</div>
			</div>
		</section>
		<section id="form-blog">
			<div class="container-fluid">
				<h1><?php echo get_cat_name(7); ?></h1>
				<form role="form">
  					<div class="form-group">
					    <label for="name">Name *</label>
					    <input type="text" class="form-control" id="name" required>
 						<label for="email">Email *</label>
					    <input type="email" class="form-control" id="email" required>
						<label for="message">Your Comment *</label>
					    <textarea class="form-control" rows="7" id="message" required></textarea>
					</div>
					<button type="button" class="btn btn-default"> send</button>
				</form>
			</div>
		</section>
<?php get_footer(); ?>