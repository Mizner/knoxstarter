<?php
/**
 * Knoxweb functions and definitions.
 *
 * You should check out https://generatewp.com
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Knoxweb
 */

if ( ! function_exists( 'knoxweb_setup' ) ) :

function knoxweb_setup() {

	load_theme_textdomain( 'knoxweb', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary-menu' => esc_html__( 'Primary Menu', 'knoxweb' ),
		'top-menu' => esc_html__( 'Top Menu', 'knoxweb' ),
		'bottom-menu' => esc_html__( 'Bottom Menu', 'knoxweb' ),
	) );

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
		//'image',
		//'video',
		//'quote',
		//'link',
	) );
}
endif; // knoxweb_setup
add_action( 'after_setup_theme', 'knoxweb_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function knoxweb_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'knoxweb_content_width', 640 );
}
add_action( 'after_setup_theme', 'knoxweb_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function knoxweb_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'knoxweb' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'knoxweb_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function knoxweb_scripts() {
	wp_enqueue_style( 'knoxweb-style', get_stylesheet_uri() );

	wp_enqueue_script( 'knoxweb-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'knoxweb-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
    
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:400,700|Neuton:400');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'knoxweb_scripts' );

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

/**
 * Load Meta Box Full Width Option
 */
require get_template_directory() . '/inc/metabox-fullwidth.php';

/**
 * Load Meta Box Full Width Option
 */
require get_template_directory() . '/inc/footer-widgets.php';

/**
 * Add Logo Support.
 */
	$args = array(
    'header-text' => array(
        'site-title',
        'site-description',
    ),
    'size' => 'medium',
);
add_theme_support( 'site-logo', $args );	

// Add Theme Title
// add_theme_support( 'title-tag' );








