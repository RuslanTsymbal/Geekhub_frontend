<?php
function load_style_script() {
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
//	wp_enqueue_style('media', get_template_directory_uri() . '/css/media.css');
	wp_enqueue_style( 'ie6', get_template_directory_uri() . '/css/ie6.css' );
	// wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.min.js');
	// wp_enqueue_script('myjs', get_template_directory_uri() . '/myjs/myjs.js');
}


/*загружаймые стили*/
add_action( 'wp_enqueue_scripts', 'load_style_script' );

//Произвольное меню
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array (
			'custom-menu' => __( 'Custom menu' ),
		)
	);
}
//Виджет под лого
if ( function_exists( 'register_sidebar' ) ) {

	register_sidebar( array (
		'name'          => 'Логотип',
		'before_widget' => '',
		'before_title'  => '',
		'after_title'   => '',
		'after_widget'  => ''
	) );

	register_sidebar( array (
		'name'          => 'Соц.мережі',
		'before_widget' => '',
		'before_title'  => '',
		'after_title'   => '',
		'after_widget'  => ''
	) );
	register_sidebar( array (
		'name'          => 'Адреса',
		'before_widget' => '',
		'before_title'  => '',
		'after_title'   => '',
		'after_widget'  => ''
	) );
	register_sidebar( array (
		'name'          => 'Календар',
		'before_widget' => '',
		'before_title'  => '',
		'after_title'   => '',
		'after_widget'  => ''
	) );
}

show_admin_bar( false );
add_theme_support( 'post-thumbnails' );
add_filter( 'excerpt_more', function ( $more ) {
	return '...';
} );
