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
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="profile" href="http://gmpg.org/xfn/11">
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
      <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
      <div id="page" class="hfeed site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'knoxweb' ); ?></a>
        <header id="masthead" class="flexbox" style="background: url(<?php echo( get_header_image() ); ?>); background-size: cover;">
          <?php
          if ( has_nav_menu( 'top-menu' ) ) {
          wp_nav_menu( array(
          'container'       => 'nav',
          'container_class' => 'topMenu',
          'menu_id'         => 'top-menu',
          'menu_class'      => '',
          ));} ?>
          <h1 class="logo flex">
          <div>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo jetpack_the_site_logo(); ?></a>
          </div>
          </h1>
          <section class="mainMenu flex">
            <div class="contactInfo">
              <?php if( get_theme_mod('phone') ): ?>
              <a class="phone" href="#"><i class="fa fa-phone"></i><?php echo get_theme_mod( 'phone' ); ?></a>
              <?php endif; ?>
              <div class="socialIcons">
                <?php if( get_theme_mod('facebook') ): ?>
                <a href="<?php echo get_theme_mod( 'facebook' ); ?>"><i class="fa fa-facebook"></i></a>
                <?php else: endif; ?>
                <?php if( get_theme_mod('twitter') ): ?>
                <a href="<?php echo get_theme_mod( 'twitter' ); ?>"><i class="fa fa-twitter"></i></a>
                <?php endif; ?>
                <?php if( get_theme_mod('linkedin') ): ?>
                <a href="<?php echo get_theme_mod( 'linkedin' ); ?>"><i class="fa fa-linkedin"></i></a>
                <?php endif; ?>
                <?php if( get_theme_mod('google') ): ?>
                <a href="<?php echo get_theme_mod( 'google' ); ?>"><i class="fa fa-google"></i></a>
                <?php endif; ?>
              </div>
              <nav id="site-navigation" class="main-navigation mainMenuContainer" role="navigation">
                <div class="contactInfo">
                </div>
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa"> </i> <?php esc_html_e( 'Menu', 'knoxweb' ); ?></button>
                <?php
                wp_nav_menu( array(
                'container'       => '',
                'theme_location' => 'primary-menu',
                'menu_id' => 'primary-menu',
                'container_class' => 'mainMenuContainer',
                ) ); ?>
              </nav>
            </div>
          </section>
          <?php
          if ( has_nav_menu( 'bottom-menu' ) ) {
          wp_nav_menu( array(
          'container'       => 'nav',
          'container_class' => 'bottomMenu',
          'menu_id'         => 'bottom-menu',
          'menu_class'      => '',
          ));} ?>
     <?php if( get_theme_mod('fixed-header') ): ?>
      <script>
        (function($) {
          $(document).ready(function(){
          var headHeight = $("header").outerHeight();
          $("body").css({"margin-top": headHeight});
            $("header").css({
            "position": "fixed",
              "z-index": "999",
              "top": "0",
              "width": "100%"
          });
          });
        })(jQuery);
      </script>
    <?php else : ?>
    <?php endif; ?>
        </header>
        <div id="content" class="site-content">