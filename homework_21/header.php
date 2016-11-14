<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
	<meta charset="utf-8" />
	<title>Blog</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
 	<link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/linea/styles.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/animate/animate.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<?php wp_head(); ?>
</head>
<body>
<header>
	<div class="container-fluid row">
		<div class="header-top row">
			<div class="logo col-lg-6">
				<h1>Blog</h1><span>Name</span>
			</div>
			<div class="search col-lg-6">
				<?php
				if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : endif;
				?>

<!--				<form class="form">-->
<!--					<input type="text" placeholder="Search">-->
<!--					<button type="submit" class="fa fa-search">-->
<!--					</button>-->
<!--				</form>-->
			</div>
		</div>
		<nav class="header-bottom">
			<?php if ( function_exists( 'wp_nav_menu' ) )
			wp_nav_menu(
			array(
			'theme_location' => 'custom-menu',
			'fallback_cb'=> 'custom_menu',
			'container' => 'ul',
			'menu_id' => 'nav',
			'menu_class' => 'nav')
			);
			else custom_menu();
			?>
		</nav>
	</div>
</header>