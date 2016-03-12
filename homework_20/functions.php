<?php
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

show_admin_bar(false);

function logo_widget_init() {
    register_sidebar( array(
        'name'          => 'Classic',
        'id'            => 'logo',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<span class="hidden">',
        'after_title'   => '</span>',
    ) );
}
add_action( 'widgets_init', 'logo_widget_init' );

add_theme_support('post-thumbnails');

add_theme_support( 'menus' );

//Произвольное меню
if ( function_exists( 'register_nav_menus' ) )
{
    register_nav_menus(
        array(
            'custom-menu'=>__('Custom menu'),
        )
    );
}


register_nav_menus( array(
    'primary' => __( 'Menu', 'classic' ),
    'footer_menu' => 'Меню в футере',
    'header_top_menu' => 'Меню в шапке',
));


if ( function_exists( 'register_nav_menus' ) )
{
    register_nav_menus(
        array(
            'header__bot_menu'=>__('header__bot_menu'),
        )
    );
}

function wp_corenavi() {
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;
    $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $a['total'] = $max;
    $a['current'] = $current;

    $total = 0; //1 - выводить текст "Страница N из N", 0 - не выводить
    $a['mid_size'] = 1; //сколько ссылок показывать слева и справа от текущей
    $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
    $a['prev_text'] = ''; //текст ссылки "Предыдущая страница"
    $a['next_text'] = ''; //текст ссылки "Следующая страница"

    if ($max > 1) echo '<nav class="navigation">';
    if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
    echo $pages . paginate_links($a);
    if ($max > 1) echo '</nav>';
}