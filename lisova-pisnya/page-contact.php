<?php/*
Template Name: contact
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="content">
	<div class="container-fluid">
		<div class="text">
			<h1><?php the_title();?></h1>
			<div class="aside">
				<?php the_content();?>
			</div>
		</div>
	</div>
</div>

	<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
<?php else : ?>
<?php endif; ?>

</div>
</div>
<?php get_footer(); ?>