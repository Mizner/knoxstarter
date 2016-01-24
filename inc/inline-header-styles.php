<?php
/*
 * Take 'spaces' in the Google Fonts setting (WP Customizer) and replace with a '+' symbol
 * Use google font variable in <link>
 * Then set fonts in <style>
 */
$header_font = preg_replace( '/\s+/' , '+', get_theme_mod( "gfont1" ) );
$footer_font = preg_replace( '/\s+/' , '+', get_theme_mod( "gfont2" ) );
?>
<!-- Google Font -->
<link href='//fonts.googleapis.com/css?family=<?php echo $header_font; echo '|'; echo $footer_font; ?>' rel='stylesheet' type='text/css'>

<style>html,body,input,textarea,keygen,select,button{font-family:'<?php echo get_theme_mod( 'gfont1' );?>';}h1,h2,h3,h4,h5,h6{font-family:'<?php echo get_theme_mod( 'gfont2' );?>';}</style>

