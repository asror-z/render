<?php
/*
Plugin Name: GSpeech
Plugin URI: http://creative-solutions.net/wordpress/gspeech
Description: GSpeech is a text to speech solution which allows to listen any selected text on your site! Please use <a href="http://creative-solutions.net/forum/gspeech-wordpress/">GSpeech Forum</a> for your support requests. See <a href="http://creative-solutions.net/wordpress/gspeech/demo">GSpeech Demo</a>. 
Author: Creative-Solutions
Author URI: http://creative-solutions.net
Version: 2.5.0
*/

$plugin_folder_name = 'gspeech';
$plugin_version = '2.0.1';
$wpgs_options = get_option('wpgs_settings');

$default_bcp1 = '#ffffff';
$default_cp1 =  '#111111';
$default_bca1 = '#545454';
$default_ca1 =  '#ffffff';
$default_spop1 = 90;
$default_spop1_ = 0.9;
$default_spoa1 = 100;
$default_spoa1_ = 1;
$default_animation_time_1 = 400;
$default_speaker_type_1 = 16;
$default_speaker_size_1 = 1;
$default_tooltip_1 = 'black';

$default_bcp2 = '#ffffff';
$default_cp2 =  '#3284c7';
$default_bca2 = '#3284c7';
$default_ca2 =  '#ffffff';
$default_spop2 = 80;
$default_spop2_ = 0.8;
$default_spoa2 = 100;
$default_spoa2_ = 1;
$default_animation_time_2 = 300;
$default_speaker_type_2 = 32;
$default_speaker_size_2 = 1;
$default_tooltip_2 = 'dark-midnight-blue';

$default_bcp3 = '#ffffff';
$default_cp3 =  '#fc0000';
$default_bca3 = '#ff3333';
$default_ca3 =  '#ffffff';
$default_spop3 = 90;
$default_spop3_ = 0.9;
$default_spoa3 = 100;
$default_spoa3_ = 1;
$default_animation_time_3 = 400;
$default_speaker_type_3 = 33;
$default_speaker_size_3 = 1;
$default_tooltip_3 = 'sienna';

$default_bcp4 = '#ffffff';
$default_cp4 =  '#0d7300';
$default_bca4 = '#0f8901';
$default_ca4 =  '#ffffff';
$default_spop4 = 90;
$default_spop4_ = 0.9;
$default_spoa4 = 100;
$default_spoa4_ = 1;
$default_animation_time_4 = 400;
$default_speaker_type_4 = 35;
$default_speaker_size_4 = 1;
$default_tooltip_4 = 'apple-green';

$default_bcp5 = '#ffffff';
$default_cp5 =  '#ea7d00';
$default_bca5 = '#ea7d00';
$default_ca5 =  '#ffffff';
$default_spop5 = 70;
$default_spop5_ = 0.7;
$default_spoa5 = 100;
$default_spoa5_ = 1;
$default_animation_time_5 = 400;
$default_speaker_type_5 = 20;
$default_speaker_size_5 = 1;
$default_tooltip_5 = 'carrot-orange';

/******************************
* includes
******************************/

include('includes/scripts.php'); // this controls all JS / CSS
include('includes/data-processing.php'); // this controls all saving of data
include('includes/display-functions.php'); // display content functions
include('includes/admin-page.php'); // the plugin options page HTML and save functions

function wpgs_on_uninstall() {
	delete_option('wpgs_settings');
}

register_uninstall_hook(__FILE__, 'wpgs_on_uninstall');
