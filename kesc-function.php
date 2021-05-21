<?php

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