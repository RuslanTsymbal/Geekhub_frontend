<?php /*
Template Name: Header
*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Classic</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
          href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/linea/styles.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/magnific-popup.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/animate/animate.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <?php wp_head(); ?>
</head>
<body>
<header id="header">
    <div class="container-fluid">
        <div class="menu-top">
            <div class="logo col-lg-6">
                <h1><a href="http://classic/"><?php echo get_bloginfo('name'); ?></a></h1>
            </div>
            <div class="menu col-lg-6">
                <span><a href="http://classic/" class="fa fa-home"></a></span>
                <?php
                if (function_exists('wp_nav_menu'))
                    wp_nav_menu(
                        array(
                            'theme_location' => 'custom-menu',
                            'fallback_cb' => 'custom_menu',
                            'container' => 'ul')
                    );
                else custom_menu();
                ?>
            </div>
        </div>
    </div>
</header>
