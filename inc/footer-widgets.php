<?php

// Register Footer Widget Sidebars
function footer_widgets() {

	$args = array(
		'id'            => 'footer-one',
		'class'         => 'footer-widget',
		'name'          => __( 'Footer One', 'text_domain' ),
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'footer-two',
		'class'         => 'footer-widget',
		'name'          => __( 'Footer Two', 'text_domain' ),
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'footer-three',
		'class'         => 'footer-widget',
		'name'          => __( 'Footer Three', 'text_domain' ),
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'footer-four',
		'class'         => 'footer-widget',
		'name'          => __( 'Footer Four', 'text_domain' ),
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'footer_widgets' );

