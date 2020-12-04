<?php

/******************************
* script control
******************************/

function wpgs_load_scripts() {
	wp_enqueue_style('wpgs-styles1', plugin_dir_url( __FILE__ ) . 'css/gspeech.css');
	wp_enqueue_style('wpgs-styles12', plugin_dir_url( __FILE__ ) . 'css/the-tooltip.css');
	wp_enqueue_script("jquery");
	wp_enqueue_script('wpgs-script4', plugin_dir_url( __FILE__ ) . 'js/color.js');
	wp_enqueue_script('wpgs-script5', plugin_dir_url( __FILE__ ) . 'js/jQueryRotate.2.1.js');
	wp_enqueue_script('wpgs-script7', plugin_dir_url( __FILE__ ) . 'js/easing.js');
	wp_enqueue_script('wpgs-script6', plugin_dir_url( __FILE__ ) . 'js/mediaelement-and-player.min.js');
}

add_action('wp_enqueue_scripts', 'wpgs_load_scripts');
