<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Knoxweb
 */

?>

<article id="post-<?php the_ID(); ?>" 

<?php post_class();?>>


	<?php if (has_post_thumbnail( $post->ID ) ) {
		?>
		<header class="entry-header light" style="background-image: url('<?php 
		echo wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
		} 
		else {
		?><header class="entry-header"	
		<?php
		}
	?>')">


		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'knoxweb' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'knoxweb' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

