<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta charset="UTF-8"/>
<!--	<title>Thanol</title>-->
	<title><?php wp_title(''); ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css"/>
	<!--	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
	<!--	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">-->
	<!--	</script>-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div id="header">
	<div class="container-fluid">
		<a href="<?php echo home_url(); ?>"><?php
			if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 1 ) ) : endif;
			?></a>
		<div>
			<h1><?php echo bloginfo( 'description' ); ?></h1>
			<ul>
				<?php wp_nav_menu( array ( 'kind' => 'Логотип', 'menu_class' => 'nav-menu' ) ); ?>
			</ul>
		</div>
	</div>
</div>
