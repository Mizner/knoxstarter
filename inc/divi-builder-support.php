<?php
// Check for Divi Builder
$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );if ($is_page_builder_used ) {echo 'divi';};
// Check for Featured Image
if ( has_post_thumbnail()) { echo ' featured-image'; }
?>