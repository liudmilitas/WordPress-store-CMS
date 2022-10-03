<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?php echo get_bloginfo('template_directory'); ?>/store-wp.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="navigation-container">

        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'left-main-menu'
            )
        );
        ?>

        <div class="site-title-navbar">
            <h1><a href="/"><?= get_bloginfo('name'); ?></a></h1>
        </div>

    </div>