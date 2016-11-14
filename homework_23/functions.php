<?php
/**
 * Rex functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Rex
 */

if ( ! function_exists( 'rex_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rex_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Rex, use a find and replace
	 * to change 'rex' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'rex', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'rex' ),
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
	add_theme_support( 'custom-background', apply_filters( 'rex_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'rex_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rex_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rex_content_width', 640 );
}
add_action( 'after_setup_theme', 'rex_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

/**
 * Enqueue scripts and styles.
 */
function rex_scripts() {
	wp_enqueue_style( 'rex-style', get_stylesheet_uri() );

	wp_enqueue_script( 'rex-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'rex-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rex_scripts' );

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



/*--------------------------------------------------------*/

show_admin_bar(false);

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

/*---------виджет логотип-----------*/

if ( function_exists('register_sidebar') ) {

	register_sidebar(array(
		'name' => 'Логотип',
		'before_widget' => '',
		'before_title' => '',
		'after_title' => '',
		'after_widget' => ''
	));

	register_sidebar(array(
		'name' => 'Форма поиска',
		'before_widget' => '',
		'before_title' => '',
		'after_title' => '',
		'after_widget' => ''

	));

	register_sidebar(array(
		'name' => 'Портфолио',
		'before_widget' => '<li class="filter">',
		'before_title' => '',
		'after_title' => '',
		'after_widget' => '</li>'
	));

	register_sidebar(array(
		'name' => 'Form',
		'before_widget' => '',
		'before_title' => '',
		'after_title' => '',
		'after_widget' => ''
	));

	register_sidebar(array(
		'name' => 'Coц сети',
		'before_widget' => '',
		'before_title' => '',
		'after_title' => '',
		'after_widget' => ''
	));

	register_sidebar(array(
		'name' => 'Карта',
		'before_widget' => '',
		'before_title' => '',
		'after_title' => '',
		'after_widget' => ''
	));

	register_sidebar(array(
		'name' => 'Coц сети-2',
		'before_widget' => '',
		'before_title' => '',
		'after_title' => '',
		'after_widget' => ''
	));

	register_sidebar(array(
		'name' => 'comment',
		'before_widget' => '',
		'before_title' => '',
		'after_title' => '',
		'after_widget' => ''
	));

	register_sidebar(array(
		'name' => 'Searcht',
		'before_widget' => '',
		'before_title' => '',
		'after_title' => '',
		'after_widget' => ''
	));

	register_sidebar(array(
		'name' => 'Popular post',
		'before_widget' => '',
		'before_title' => '',
		'after_title' => '',
		'after_widget' => ''
	));

}



/*--------------------portfolio------------------------*/

 add_action('init','portfolio');
 function portfolio() {
 	register_post_type('portfolio', array (
 		'public'=> true,
 		'taxonomies' => array( 'category' ),
 		'supports'=> array('title','thumbnail', 'comments','editor', 'description','custom-fields','excerpt','page-attributes','page-attributes'  ),
 		'labels' => array(
 			'name' => 'Портфолио',
 			'all_items' => 'Все записи',
 			'add_new' => 'Добавить новую',
 			'add_new_item' => 'Добавить запись'
 		)
 	)
   );
 }

add_action('init','slider');
 function slider() {
 	register_post_type('slider', array (
 		'public'=> true,
 		'taxonomies' => array( 'category' ),
 		'supports'=> array('title','thumbnail', 'comments','editor', 'description','custom-fields','excerpt','page-attributes' ),
 		'labels' => array(
 			'name' => 'Слайдер',
 			'all_items' => 'Все записи',
 			'add_new' => 'Добавить новую',
 			'add_new_item' => 'Добавить запись'
 		)
 	)
   );
 }

 /*------------------------Menu Social Icons----------------------------*/

add_filter( 'storm_social_icons_networks', 'storm_social_icons_networks');

function storm_social_icons_networks( $networks ) {

     $extra_icons = array (

        '/feed' => array(                  // Включаем эту иконку для любой ссылки, содержащей 
            'name' => 'RSS',               // Метка элемента меню по-умолчанию
            'class' => 'rss',              // Произвольный класс
            'icon' => 'icon-rss',          // Класс FontAwesome
            'icon-sign' => 'icon-rss-sign' // Может оказаться недоступной. Проверить в FontAwesome.
        ),
    );
    $extra_icons = array_merge( $networks, $extra_icons );
    return $extra_icons;
 }



// //Фильтр от спама
// add_filter('pre_comment_on_post', 'verify_spam');
// function verify_spam($commentdata) {
//       $spam_test_field = trim($_POST['comment']);
//   if(!empty($spam_test_field)) wp_die('Спаму нет!');
//       $comment_content = trim($_POST['real-comment']);
//       $_POST['comment'] = $comment_content;
//   return $commentdata;
// }
