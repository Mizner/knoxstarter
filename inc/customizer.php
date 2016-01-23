<?php
/**
 * Knoxweb Theme Customizer.
 *
 * @package Knoxweb
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function knoxweb_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	// Add Social Media Section
	$wp_customize->add_section( 'owner-info' , array(
	    'title' => __( 'Owner Info', 'knoxweb' ),
	    'priority' => 30,
	    'description' => __( 'Enter details here.', 'knoxweb' )
	) );
	// Add Design Section
	$wp_customize->add_section( 'design-options' , array(
	    'title' => __( 'Design Options', 'knoxweb' ),
	    'priority' => 30,
	    'description' => __( 'Click to enable fixed header', 'knoxweb' )
	) );
	// Add Phone Field
	$wp_customize->add_setting( 'phone' , array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'phone', array(
	    'label' => __( 'Phone', 'knoxweb' ),
	    'section' => 'owner-info',
	    'settings' => 'phone',
	) ) );
	// Add Twitter Field
	$wp_customize->add_setting( 'twitter' , array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter', array(
	    'label' => __( 'Twitter', 'knoxweb' ),
	    'section' => 'owner-info',
	    'settings' => 'twitter',
	) ) );	
	// Add Facebook Field
	$wp_customize->add_setting( 'facebook' , array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook', array(
	    'label' => __( 'Facebook', 'knoxweb' ),
	    'section' => 'owner-info',
	    'settings' => 'facebook',
	) ) );	
	// Add Google Field
	$wp_customize->add_setting( 'google' , array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'google', array(
	    'label' => __( 'Google', 'knoxweb' ),
	    'section' => 'owner-info',
	    'settings' => 'google',
	) ) );	
	// Add Linked In Field
	$wp_customize->add_setting( 'linkedin' , array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'linkedin', array(
	    'label' => __( 'Linked In', 'linkedin' ),
	    'section' => 'owner-info',
	    'settings' => 'linkedin',
	) ) );	
	// Add Pinterest In Field
	$wp_customize->add_setting( 'pinterest' , array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pinterest', array(
	    'label' => __( 'Pinterest', 'pinterest' ),
	    'section' => 'owner-info',
	    'settings' => 'pinterest',
	) ) );	
	// Add Instagram In Field
	$wp_customize->add_setting( 'instagram' , array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram', array(
	    'label' => __( 'Instagram', 'instagram' ),
	    'section' => 'owner-info',
	    'settings' => 'instagram',
	) ) );	
	// Add Fixed Option
	$wp_customize->add_setting( 'fixed-header' , array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fixed-header', array(
	    'label'    => __( 'Fixed Header' ),
	    'section'  => 'design-options',
	    'type'     => 'checkbox',
	    'settings' => 'fixed-header',
	) ) );
	$wp_customize->add_setting( 'gfont1' , array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gfont1', array(
	    'label'    => __( 'Body Google Font' ),
	    'section'  => 'design-options',
	    'settings' => 'gfont1',
	) ) );
	$wp_customize->add_setting( 'gfont2' , array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gfont2', array(
	    'label'    => __( 'Header Google Font' ),
	    'section'  => 'design-options',
	    'settings' => 'gfont2',
	) ) );
	// Setting.
	$wp_customize->add_setting( 'knoxweb_logo' , array(
		'transport' => 'postMessage',
	));

	// Control.
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'kapowing_logo',
			array(
				'label'       => __( 'Site Logo', 'knoxweb' ),
				'description' => __( 'Upload a custom logo for your site which can be retrieved for use in a template by using get_theme_mod( \'knoxweb_logo\' ) to fetch the image source URL.', 'knoxweb' ),
				'section'     => 'title_tagline',
				'settings'    => 'knoxweb_logo',
				'priority'    => 10,
			)
		)
	);
}
add_action( 'customize_register', 'knoxweb_customize_register' );



/**
 * Upload a custom site logo. Resides in the 'Site Identity' section.
 *
 * Use <?php echo get_theme_mod( 'knoxweb_logo' ); ?> to use this in the theme.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function knoxweb_customize_preview_js() {
	wp_enqueue_script( 'knoxweb_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'knoxweb_customize_preview_js' );




