<?php 

// Post Options
class Full_Width_Meta_Box {

	public function __construct() {

		if ( is_admin() ) {
			add_action( 'load-post.php',     array( $this, 'init_metabox' ) );
			add_action( 'load-post-new.php', array( $this, 'init_metabox' ) );
		}

	}

	public function init_metabox() {

		add_action( 'add_meta_boxes', array( $this, 'add_metabox'  )        );
		add_action( 'save_post',      array( $this, 'save_metabox' ), 10, 2 );

	}

	public function add_metabox() {

		add_meta_box(
			'full-width',
			__( 'Display Options', 'text_domain' ),
			array( $this, 'render_metabox' ),
			array( 'page' ),
			'side',
			'high'
		);

	}

	public function render_metabox( $post ) {

		// Retrieve an existing value from the database.
		$fullwidthcheck_ = get_post_meta( $post->ID, 'fullwidthcheck_', true );

		// Set default values.

		// Form fields.
		echo '<table class="form-table">';

		echo '	<tr>';
		echo '		<th><label for="fullwidthcheck_full-width-id" class="fullwidthcheck_full-width-id_label">' . __( 'Full Width', 'text_domain' ) . '</label></th>';
		echo '		<td>';
		echo '			<input type="checkbox" name="fullwidthcheck_" class="fullwidthcheck_full-width-id_field" value="' . $fullwidthcheck_ . '" ' . checked( $fullwidthcheck_, 'checked', false ) . '> ' . __( '', 'text_domain' ) . '<br>';
		echo '		</td>';
		echo '	</tr>';

		echo '</table>';

	}

	public function save_metabox( $post_id, $post ) {

		// Sanitize user input.
		$fullwidthcheck_new_ = isset( $_POST[ 'fullwidthcheck_' ] ) ? 'checked' : '';

		// Update the meta field in the database.
		update_post_meta( $post_id, 'fullwidthcheck_', $fullwidthcheck_new_ );

	}

}

new Full_Width_Meta_Box;