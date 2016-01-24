<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Knoxweb
*/
?>
</div><!-- #content -->


<div id="footer-widgets">
    <?php
        $footer_sidebars = array( 'Footer One', 'Footer Two', 'Footer Three', 'Footer Four' );

        foreach ( $footer_sidebars as $key => $footer_sidebar ) :
            if ( is_active_sidebar( $footer_sidebar ) ) :
                echo '<div class="footer-widget' . ( 3 === $key ? ' last' : '' ) . '">';
                dynamic_sidebar( $footer_sidebar );
                echo '</div> <!-- end .footer-widget -->';
            endif;
        endforeach;
    ?>
    </div> <!-- #footer-widgets -->
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info">
		<?php bloginfo('name'); ?>
		<span class="sep"> | </span>
		<span>All Rights Reserved &copy; <?php echo date("Y") ?></span>
		<span class="sep"> | </span>
		<a href="http://www.knoxweb.com">

        <?php get_template_part( 'inc/logo' )?>
        </a>
		
		
		</div><!-- .site-info -->
		</footer><!-- #colophon -->
		</div><!-- #page -->
		<?php wp_footer(); ?>

	</body>
</html>