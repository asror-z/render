<?php

function wpgs_options_page() {

	global $wpgs_options;
	
	global $default_bcp1,
			$default_cp1,
			$default_bca1,
			$default_ca1,
			$default_spop1,
			$default_spop1,
			$default_spoa1,
			$default_spoa1_,
			$default_animation_time_1,
			$default_speaker_type_1,
			$default_speaker_size_1,
			$default_tooltip_1,
			
			$default_bcp2,
			$default_cp2,
			$default_bca2,
			$default_ca2,
			$default_spop2,
			$default_spop2_,
			$default_spoa2,
			$default_spoa2_,
			$default_animation_time_2,
			$default_speaker_type_2,
			$default_speaker_size_2,
			$default_tooltip_2,
			
			$default_bcp3,
			$default_cp3,
			$default_bca3,
			$default_ca3,
			$default_spop3,
			$default_spop3_,
			$default_spoa3,
			$default_spoa3_,
			$default_animation_time_3,
			$default_speaker_type_3,
			$default_speaker_size_3,
			$default_tooltip_3,
			
			$default_bcp4,
			$default_cp4,
			$default_bca4,
			$default_ca4,
			$default_spop4,
			$default_spop4_,
			$default_spoa4,
			$default_spoa4_,
			$default_animation_time_4,
			$default_speaker_type_4,
			$default_speaker_size_4,
			$default_tooltip_4,
			
			$default_bcp5,
			$default_cp5,
			$default_bca5,
			$default_ca5,
			$default_spop5,
			$default_spop5_,
			$default_spoa5,
			$default_spoa5_,
			$default_animation_time_5,
			$default_speaker_type_5,
			$default_speaker_size_5,
			$default_tooltip_5;
	
			$tooltips = array("apple-green" => "Apple Green","apricot" => "Apricot","black" => "Black","bright-lavender" => "Bright Lavender","carrot-orange" => "Carrot Orange","dark-midnight-blue" => "Dark Midnight Blue","eggplant" => "Eggplant","forest-green" => "Forest Green","magic-mint" => "Magic Mint","mustard" => "Mustard","sienna" => "Sienna","sky-blue" => "Sky Blue");
			$speech_title = 'Click to listen highlighted text!';
	ob_start(); ?>
	<div class="wrap" style="overflow: hidden;margin-bottom: 10px">
		<div class="purchase_block">
			<div class="purchase_block_txt">Get GSpeech Pro and gain access to unlimited TTS blocks, no copyright, more features and professional support.</div>
		    <a href="http://creative-solutions.net/wordpress/gspeech" id="scf_buy_pro" target="_blank">Get GSpeech PRO</a>
		</div>

		<div class="ext_info_wrapper" >
			<div class="ext_title_wrapper">
				<a href="http://creative-solutions.net/wordpress/gspeech" target="_blank">
					<img src="<?php echo plugins_url( '/images/32/speaker32.png' , __FILE__ );?>" />
					<?php _e('GSpeech Options','wpgs_domain');?>
				</a>
			</div>
		</div>
		
		<form method="post" action="options.php">
			<?php settings_fields('wpgs_settings_group'); ?>
			<div id="wpgs_tabs">
			 	<ul>
			    	<li><a href="#wpgs_tabs-1">Basic</a></li>
			    	<li><a href="#wpgs_tabs-2">Style Options</a></li>
			  	</ul>
			  	<div id="wpgs_tabs-1">
			  		<?php include('tab1.php');?>
			  	</div>
			  	<div id="wpgs_tabs-2">
			  		<?php include('tab2.php');?>
			    </div>
			</div>
			<div class="old_p" class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Save Options', 'wpgs_domain'); ?>" />
			</div>
	</form>
</div>
	<?php
	echo ob_get_clean();
}

function wpgs_add_options_link() {
	$icon_url=plugins_url( '/images/16/speaker32.png' , __FILE__ );
	$page = add_menu_page('GSpeech Plugin Options', 'GSpeech', 'manage_options', 'wpgs-options', 'wpgs_options_page',$icon_url);
	add_action('admin_print_scripts-' . $page, 'wpgs_load_admin_scripts');
}

function wpgs_register_settings() {
	// creates our settings in the options table
	register_setting('wpgs_settings_group', 'wpgs_settings');
}

function wpgs_load_admin_scripts() {
	wp_enqueue_style('wpgs-styles9', plugin_dir_url( __FILE__ ) . 'css/ui-lightness/jquery-ui-1.10.1.custom.css');
	wp_enqueue_style('wpgs-styles10', plugin_dir_url( __FILE__ ) . 'css/admin.css');
	wp_enqueue_style('wpgs-styles11', plugin_dir_url( __FILE__ ) . 'css/colorpicker.css');
	wp_enqueue_style('wpgs-styles12', plugin_dir_url( __FILE__ ) . 'css/layout.css');
	wp_enqueue_style('wpgs-styles13', plugin_dir_url( __FILE__ ) . 'css/the-tooltip.css');
	
	wp_enqueue_script('wpgs-script14', plugin_dir_url( __FILE__ ) . 'js/colorpicker.js', array('jquery'));
	wp_enqueue_script('wpgs-script12', plugin_dir_url( __FILE__ ) . 'js/eye.js', array('jquery'));
	wp_enqueue_script('wpgs-script13', plugin_dir_url( __FILE__ ) . 'js/utils.js', array('jquery'));
	wp_enqueue_script('wpgs-script15', plugin_dir_url( __FILE__ ) . 'js/admin.js',array('jquery','jquery-ui-core','jquery-ui-accordion','jquery-ui-tabs','jquery-ui-slider'));
}

add_action('admin_menu', 'wpgs_add_options_link');
add_action('admin_init', 'wpgs_register_settings');