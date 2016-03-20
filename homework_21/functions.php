<?php
/**
 * blog functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blog
 */

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

show_admin_bar(false);

if ( ! function_exists( 'blog_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function blog_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on blog, use a find and replace
	 * to change 'blog' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'blog', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'blog' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'blog_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function blog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blog_content_width', 640 );
}
add_action( 'after_setup_theme', 'blog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
if ( function_exists('register_sidebar') ) {

	register_sidebar(array(
		'name' => 'Поле поиска',
		'before_widget' => '<div class="search-header">',
		'before_title' => '<h2 class="">',
		'after_title' => '</h2><div class="text">',
		'after_widget' => '</div></div><hr />'
	));

	register_sidebar(array(
		'name' => 'Name-Email',
		'before_widget' => '<div class="widget">',
		'before_title' => '<h2 class="sidebar-header">',
		'after_title' => '</h2><div class="text">',
		'after_widget' => '</div></div>'
	));

	register_sidebar(array(
		'name' => 'MOST POPULAR',
		'before_widget' => '<div class="popular-title">',
		'before_title' => '<h2>',
		'after_title' => '</h2><div class="popular-text">',
		'after_widget' => '</div></div>'
	));

	register_sidebar(array(
	'name' => 'CATEGORIES',
	'before_widget' => '<div class="categories">',
	'before_title' => '<h2>',
	'after_title' => '</h2><div class="popular-text-bottom">',
	'after_widget' => '</div></div>'
));

	register_sidebar(array(
		'name' => 'social',
		'before_widget' => '<div class="footer-right">',
		'before_title' => '<h2>',
		'after_title' => '</h2><div>',
		'after_widget' => '</div></div>'
	));

	register_sidebar(array(
		'name' => 'contact-form',
		'before_widget' => '<div class="contact-form">',
		'before_title' => '<h2>',
		'after_title' => '</h2><div class="">',
		'after_widget' => '</div></div>'
	));

}


add_theme_support( 'post-thumbnails' );





/**
 * Enqueue scripts and styles.
 */
function blog_scripts() {
	wp_enqueue_style( 'blog-style', get_stylesheet_uri() );

	wp_enqueue_script( 'blog-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'blog-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blog_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/*-----------------------------------------------------------------------*/

add_filter('excerpt_more', function($more) {
	return '...';
});

if ( function_exists( 'register_nav_menus' ) )
{
	register_nav_menus(
		array(
			'custom-menu'=>__('Custom menu'),
		)
	);
}




