<?php
/**
 * This is the main part, just for defining the functions inside the theme
 * along with this one, we got 'setup-codes' that define the ID values for the shortcodes
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function get_category_shortcode($catbannum){
	echo do_shortcode( '[elementor-template id="' . $catbannum . '"]' );
}


function get_site_part_shortcode($catpartnum){
	echo do_shortcode( '[elementor-template id="' . $catpartnum . '"]' );
}
?>