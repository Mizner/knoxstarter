<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Knoxweb
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
    <?php get_template_part('inc/inline-header-styles'); ?>
</head>
<body <?php // Add "full-width" class if option is checked
if (get_post_meta($post->ID, 'fullwidthcheck_', true)) { body_class('full-width'); } else { body_class(); }; echo '>';?>
<div id="page" class="hfeed site">
    <a class="screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'knoxweb'); ?></a>
    <header id="masthead" style="background: url(<?php echo(get_header_image()); ?>); background-size: cover;">
        <?php
        if (has_nav_menu('top-menu')) {
            wp_nav_menu(array(
                'theme_location' => 'top-menu',
                'container' => 'nav',
                'container_class' => 'topMenu',
                'menu_id' => 'top-menu',
                'menu_class' => '',
            ));
        } ?>
        <h1 id="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php echo get_theme_mod('knoxweb_logo'); ?>"/> </a>
        </h1>
            <section class="contactInfo">

                <?php get_template_part('inc/social-media'); ?>

                <nav id="site-navigation" class="main-navigation mainMenuContainer" role="navigation">
                    <div class="contactInfo">
                    </div>
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa"> </i> <?php esc_html_e('Menu', 'knoxweb'); ?></button>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        'container' => '',
                        'theme_location' => 'primary-menu',
                        'menu_id' => 'primary-menu',
                        'container_class' => 'mainMenuContainer',
                    )); ?>
                </nav>
            </section>
        <?php
        if (has_nav_menu('bottom-menu')) {
            wp_nav_menu(array(
                'theme_location' => 'bottom-menu',
                'container' => 'nav',
                'container_class' => 'bottomMenu',
                'menu_id' => 'bottom-menu',
                'menu_class' => '',
            ));
        } ?>


    </header>
    <!---->

    <?php get_template_part('inc/fixed-header'); ?>
    <div id="content" class="site-content <?php
    get_template_part('inc/divi-builder-support');
    // Check for Featured Image
    echo " ";
    if (has_post_thumbnail()) {
        echo 'featured-image';
    }
    ?>">



