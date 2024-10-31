<?php
/*
Plugin Name: Save Me
Plugin URI: http://wordpress.org/extend/plugins/save-me/
Description: Saves JavaScript and other inline code from distortion by the WordPress rich text editor. Add code in the editor's VISUAL mode, bracketing it with the shortcode [saveme][/saveme].
Author: David F. Carr
Version: 1.1
Author URI: http://www.carrcommunications.com/
*/

function saveme_shortcode($atts = NULL, $content = NULL ) {

	//check for numeric references, variants on quotation marks entities
	$content = preg_replace('/(&#8220;|&#8221;|&#8243;|&quot;|&ldquo;|&rdquo;)/','"',$content);
	$content = preg_replace('/(&#8216;|&#8217;|&apos;|&lsquo;|&rsquo;)/',"'",$content);
	//convert standard entities including <>
	
	//adwords tweak
	$content = str_replace('&#215;',"x",$content);
	$content = str_replace('&lt;!&#8211;',"<!-- \n",$content);
	$content = str_replace('&#8211;&gt;',"-->\n",$content);
	$content = str_replace('/*',"\n/* ",$content);
	$content = str_replace('*/'," */ \n",$content);
	
	$content = html_entity_decode($content);
	// sometimes missed on first pass?
	
	//optionally, add a surrounding div that can be styled to add margins or padding
	if($atts["style"])
		$content = '<div style="'.$atts["style"].'">'.$content.'</div>';

	return $content;
}
add_shortcode('saveme', 'saveme_shortcode');
?>