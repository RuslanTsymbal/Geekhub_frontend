<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>"/>
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>"/>
    <link rel="alternate" type="application/rss+xml" title="Comments RSS"
          href="<?php bloginfo('comments_rss2_url'); ?>"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <title>
        <?php // Генерируем тайтл в зависимости от контента с разделителем " | "
        global $page, $paged;
        wp_title('|', true, 'right');
        bloginfo('name');
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page()))
            echo " | $site_description";
        if ($paged >= 2 || $page >= 2)
            echo ' | ' . sprintf(__('Page %s', ''), max($paged, $page));
        ?>
    </title>
    <?php
    wp_head(); // Необходимо для работы плагинов и функционала wp
    ?>
</head>
<body>
<body <?php body_class(); ?>>
<?php if (get_option('show_header')) { ?>
    <header id="header">
        <div class="container-fluid">
            <div class="header">
                <div class="header-top row">
                    <div class="logo col-lg-6">
                        <a href="#"><img src="http://deliver.ua/wp-content/uploads/2016/02/logo.png" alt="logo"></a>
                    </div>
                    <div class="social col-lg-6">
                        <ul>
                            <li><a href="#" class="fa fa-rss"></a></li>
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="menu row">
                    <nav class="col-lg-10">
                        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                    </nav>
                    <div class="search class=" col-lg-2
                    "">
                    <a href="#" class="glyphicon glyphicon-search"></a>
                </div>
            </div>
        </div>
        </div>
        <div class="band">
            <div class="container-fluid">
                <h1> <?php wp_title('', true, 'right'); ?> </h1>
            </div>
            <img src="http://deliver.ua/wp-content/uploads/2016/03/band.jpg">
        </div>
        <div class="menu-portfolio">
            <div class="container-fluid">
                <ul>
                    <?php
                    $args = array(
                    'show_option_all'    => '',
                    'show_option_none'   => __('No categories'),
                    'orderby'            => 'name',
                    'order'              => 'ASC',
                    'show_last_update'   => 0,
                    'style'              => 'list',
                    'show_count'         => 0,
                    'hide_empty'         => 1,
                    'use_desc_for_title' => 1,
                    'child_of'           => 0,
                    'feed'               => '',
                    'feed_type'          => '',
                    'feed_image'         => '',
                    'exclude'            => '',
                    'exclude_tree'       => '',
                    'include'            => '',
                    'hierarchical'       => true,
                    'title_li'           => '',
                    'number'             => NULL,
                    'echo'               => 1,
                    'depth'              => 0,
                    'current_category'   => 0,
                    'pad_counts'         => 0,
                    'taxonomy'           => 'category',
                    'walker'             => 'Walker_Category',
                    'hide_title_if_empty' => false,
                    'separator'          => '<p></p>',
                    );

                    wp_list_categories( $args );
                    ?>

                </ul>
            </div>
        </div>
    </header>
<?php } // конец конструкции if ?>
<body <?php body_class(); ?>>
