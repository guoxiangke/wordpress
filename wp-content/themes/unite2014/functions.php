<?php
add_action( 'unite2014_footer', 'unite2014_footer_info', 30 );
/**
 * function to show the footer info, copyright information
 */
function unite2014_footer_info() {
   $output = '<a href="###" title="Unite 2014">Unite 2014</a> powered by <a href="http://wordpress.org" title="WordPress" target="_blank">WordPress</a>.';
   echo $output;
}