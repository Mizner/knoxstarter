<?php
/**
 * Detect plugin. For use on Front End only.
 */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

// check for divi builder
if ( is_plugin_active( 'divi-builder/divi-builder.php' ) ) {
    $is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );if ($is_page_builder_used ) {echo 'divi';};
}
?>