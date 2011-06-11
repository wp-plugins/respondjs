<?php
/*
Plugin Name: Respond.js
Plugin URI: http://www.ramoonus.nl/wordpress/respondjs/
Description: Respond.js is a fast and lightweight polyfill for min/max-width CSS3 Media Queries (for IE 6-8, and more).
Version: 1.0.0
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/

// Install
function rw_respondjs() {
		wp_deregister_script('respondjs'); // deregister
		// wp_register_script( $handle, $src, $deps, $ver, $in_footer );
		wp_register_script('respondjs', plugins_url('/js/respond.min.js', __FILE__), false, '1.0.0', false); // re register // false for not in footer
		wp_enqueue_script('respondjs'); // load
}
// init
add_action('init', 'rw_respondjs'); 
?>