<?php

/*our display functions for outputting information*/

function wpgs_prepare_html($content) {

	global $plugin_version;
	global $wpgs_options;;
	global $plugin_folder_name;
	
		global  $default_bcp1,
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
	
	//get all parameters
	$gspeech_lang = $wpgs_options['language'] == '' ? 'en' : $wpgs_options['language'];
	$speak_any_text = $wpgs_options['speak_any_text'] == '' ? 1 : $wpgs_options['speak_any_text'];
	 
	//$speech_engine = $wpgs_options['speech_engine'];
	$tr_tool = 'g';
	$speech_lenght = '100';
	 
	$greeting_text = $wpgs_options['greeting_text'];
	$greeting_text = $greeting_text == '' ? '{gspeech style=1 language=en autoplay=1 speechtimeout=0 registered=2 hidespeaker=1}Welcome to SITENAME{/gspeech}{gspeech style=2 language=en autoplay=1 speechtimeout=0 registered=1 hidespeaker=1}Welcome REALNAME{/gspeech}' : ($greeting_text == 'blank' ? '' : $greeting_text);
	 
	$bcp1 = $wpgs_options['bcp1'] == '' ? $default_bcp1 : $wpgs_options['bcp1'];
	$cp1 = $wpgs_options['cp1'] == '' ? $default_cp1 : $wpgs_options['cp1'];
	$bca1 = $wpgs_options['bca1'] == '' ? $default_bca1 : $wpgs_options['bca1'];
	$ca1 = $wpgs_options['ca1'] == '' ? $default_ca1 : $wpgs_options['ca1'];
	$spop1 = $wpgs_options['spop1'] == '' ? $default_spop1 : $wpgs_options['spop1'];
	$spop1_ =  $spop1 / 100;
	$spoa1 = $wpgs_options['spoa1'] == '' ? $default_spoa1 : $wpgs_options['spoa1'];
	$animation_time_1 = $wpgs_options['animation_time_1'] == '' ? $default_animation_time_1 : $wpgs_options['animation_time_1'];
	$speaker_type_1 = $wpgs_options['speaker_type_1'] == '' ? 'speaker_'.$default_speaker_type_1 : $wpgs_options['speaker_type_1'];
	$speaker_size_1 = $wpgs_options['speaker_size_1'] == '' ? $default_speaker_size_1 : $wpgs_options['speaker_size_1'];
	$tooltip_1 = $wpgs_options['tooltip_1'] == '' ? $default_tooltip_1 : $wpgs_options['tooltip_1'];
	
	$bcp2 = $wpgs_options['bcp2'] == '' ? $default_bcp2 : $wpgs_options['bcp2'];
	$cp2 = $wpgs_options['cp2'] == '' ? $default_cp2 : $wpgs_options['cp2'];
	$bca2 = $wpgs_options['bca2'] == '' ? $default_bca2 : $wpgs_options['bca2'];
	$ca2 = $wpgs_options['ca2'] == '' ? $default_ca2 : $wpgs_options['ca2'];
	$spop2 = $wpgs_options['spop2'] == '' ? $default_spop2 : $wpgs_options['spop2'];
	$spop2_ =  $spop2 / 100;
	$spoa2 = $wpgs_options['spoa2'] == '' ? $default_spoa2 : $wpgs_options['spoa2'];
	$animation_time_2 = $wpgs_options['animation_time_2'] == '' ? $default_animation_time_2 : $wpgs_options['animation_time_2'];
	$speaker_type_2 = $wpgs_options['speaker_type_2'] == '' ? 'speaker_'.$default_speaker_type_2 : $wpgs_options['speaker_type_2'];
	$speaker_size_2 = $wpgs_options['speaker_size_2'] == '' ? $default_speaker_size_2 : $wpgs_options['speaker_size_2'];
	$tooltip_2 = $wpgs_options['tooltip_2'] == '' ? $default_tooltip_2 : $wpgs_options['tooltip_2'];
	 
	$bcp3 = $wpgs_options['bcp3'] == '' ? $default_bcp3 : $wpgs_options['bcp3'];
	$cp3 = $wpgs_options['cp3'] == '' ? $default_cp3 : $wpgs_options['cp3'];
	$bca3 = $wpgs_options['bca3'] == '' ? $default_bca3 : $wpgs_options['bca3'];
	$ca3 = $wpgs_options['ca3'] == '' ? $default_ca3 : $wpgs_options['ca3'];
	$spop3 = $wpgs_options['spop3'] == '' ? $default_spop3 : $wpgs_options['spop3'];
	$spop3_ =  $spop3 / 100;
	$spoa3 = $wpgs_options['spoa3'] == '' ? $default_spoa3 : $wpgs_options['spoa3'];
	$animation_time_3 = $wpgs_options['animation_time_3'] == '' ? $default_animation_time_3 : $wpgs_options['animation_time_3'];
	$speaker_type_3 = $wpgs_options['speaker_type_3'] == '' ? 'speaker_'.$default_speaker_type_3 : $wpgs_options['speaker_type_3'];
	$speaker_size_3 = $wpgs_options['speaker_size_3'] == '' ? $default_speaker_size_3 : $wpgs_options['speaker_size_3'];
	$tooltip_3 = $wpgs_options['tooltip_3'] == '' ? $default_tooltip_3 : $wpgs_options['tooltip_3'];
	 
	$bcp4 = $wpgs_options['bcp4'] == '' ? $default_bcp4 : $wpgs_options['bcp4'];
	$cp4 = $wpgs_options['cp4'] == '' ? $default_cp4 : $wpgs_options['cp4'];
	$bca4 = $wpgs_options['bca4'] == '' ? $default_bca4 : $wpgs_options['bca4'];
	$ca4 = $wpgs_options['ca4'] == '' ? $default_ca4 : $wpgs_options['ca4'];
	$spop4 = $wpgs_options['spop4'] == '' ? $default_spop4 : $wpgs_options['spop4'];
	$spop4_ =  $spop4 / 100;
	$spoa4 = $wpgs_options['spoa4'] == '' ? $default_spoa4 : $wpgs_options['spoa4'];
	$animation_time_4 = $wpgs_options['animation_time_4'] == '' ? $default_animation_time_4 : $wpgs_options['animation_time_4'];
	$speaker_type_4 = $wpgs_options['speaker_type_4'] == '' ? 'speaker_'.$default_speaker_type_4 : $wpgs_options['speaker_type_4'];
	$speaker_size_4 = $wpgs_options['speaker_size_4'] == '' ? $default_speaker_size_4 : $wpgs_options['speaker_size_4'];
	$tooltip_4 = $wpgs_options['tooltip_4'] == '' ? $default_tooltip_4 : $wpgs_options['tooltip_4'];
	 
	$bcp5 = $wpgs_options['bcp5'] == '' ? $default_bcp5 : $wpgs_options['bcp5'];
	$cp5 = $wpgs_options['cp5'] == '' ? $default_cp5 : $wpgs_options['cp5'];
	$bca5 = $wpgs_options['bca5'] == '' ? $default_bca5 : $wpgs_options['bca5'];
	$ca5 = $wpgs_options['ca5'] == '' ? $default_ca5 : $wpgs_options['ca5'];
	$spop5 = $wpgs_options['spop5'] == '' ? $default_spop5 : $wpgs_options['spop5'];
	$spop5_ =  $spop5 / 100;
	$spoa5 = $wpgs_options['spoa5'] == '' ? $default_spoa5 : $wpgs_options['spoa5'];
	$animation_time_5 = $wpgs_options['animation_time_5'] == '' ? $default_animation_time_5 : $wpgs_options['animation_time_5'];
	$speaker_type_5 = $wpgs_options['speaker_type_5'] == '' ? 'speaker_'.$default_speaker_type_5 : $wpgs_options['speaker_type_5'];
	$speaker_size_5 = $wpgs_options['speaker_size_5'] == '' ? $default_speaker_size_5 : $wpgs_options['speaker_size_5'];
	$tooltip_5 = $wpgs_options['tooltip_5'] == '' ? $default_tooltip_5 : $wpgs_options['tooltip_5'];
	
	$speaker_types_array = array("1" => $speaker_type_1, "2" => $speaker_type_2, "3" => $speaker_type_3, "4" => $speaker_type_4, "5" => $speaker_type_5);
	$speaker_sizes_array = array("1" => $speaker_size_1, "2" => $speaker_size_2, "3" => $speaker_size_3, "4" => $speaker_size_4, "5" => $speaker_size_5);
	$tooltips_array = array("1" => $tooltip_1, "2" => $tooltip_2, "3" => $tooltip_3, "4" => $tooltip_4, "5" => $tooltip_5);
	
	$code_path =  plugins_url() . '/'. $plugin_folder_name .'/';
	$gspeech_js = $speak_any_text == 1 ? '<script src="'.$code_path.'includes/js/gspeech.js?ver='.$plugin_version.'"></script>' : '';
	
	//$speech_title = _e('Click to listen highlighted text!', 'wpgs_domain');
	//$speech_powered_by = _e('Powered By', 'wpgs_domain');
	$speech_title = 'Click to listen highlighted text!';
	$speech_powered_by = 'Powered By';
	$gspeech_content = <<<EOM
        <span id="sexy_tooltip_title"><span class="the-tooltip top left {$tooltip_2}"><span class="tooltip_inner">{$speech_title}</span></span></span>
        <span id="sexy_tooltip"><span class="the-tooltip bottom left dark-midnight-blue"><span class="tooltip_inner powered_by_3 powered_by">{$speech_powered_by} <a href="http://creative-solutions.net/wordpress/gspeech" target="_blank" class="backlink_a">GSpeech</a></span></span></span>
        <div id="sound_container" class="sound_div sound_div_basic size_$speaker_size_2 $speaker_type_2" title="" style=""><div id="sound_text"></div>
        </div><div id="sound_audio"></div>
        <script type="text/javascript">
        	var players = new Array(),
            	blink_timer = new Array(),
            	rotate_timer = new Array(),
            	lang_identifier = '{$gspeech_lang}',
            	selected_txt = '',
            	sound_container_clicked = false,
            	sound_container_visible = true,
            	blinking_enable = true,
            	basic_plg_enable = true,
            	pro_container_clicked = false,
            	streamerphp_folder = '{$code_path}',
            	translation_tool = '{$tr_tool}',
            	//translation_audio_type = 'audio/x-wav',
            	translation_audio_type = 'audio/mpeg',
            	speech_text_length = {$speech_lenght},
            	blink_start_enable_pro = true,
            	createtriggerspeechcount = 0,
				speechtimeoutfinal = 0,
				speechtxt = '',
            	userRegistered = "{$userRegistered}",
            	gspeech_bcp = ["{$bcp1}","{$bcp2}","{$bcp3}","{$bcp4}","{$bcp5}"],
		    	gspeech_cp = ["{$cp1}","{$cp2}","{$cp3}","{$cp4}","{$cp5}"],
		    	gspeech_bca = ["{$bca1}","{$bca2}","{$bca3}","{$bca4}","{$bca5}"],
		    	gspeech_ca = ["{$ca1}","{$ca2}","{$ca3}","{$ca4}","{$ca5}"],
		    	gspeech_spop = ["{$spop1}","{$spop2}","{$spop3}","{$spop4}","{$spop5}"],
		    	gspeech_spoa = ["{$spoa1}","{$spoa2}","{$spoa3}","{$spoa4}","{$spoa5}"],
		    	gspeech_animation_time = ["{$animation_time_1}","{$animation_time_2}","{$animation_time_3}","{$animation_time_4}","{$animation_time_5}"];
        </script>
        <script type="text/javascript" src="{$code_path}includes/js/gspeech_pro.js?ver={$plugin_version}"></script>
        {$gspeech_js}
        <!--[if (gte IE 6)&(lte IE 8)]>
		<script defer src="{$code_path}includes/js/nwmatcher-1.2.4-min.js"></script>
		<script defer src="{$code_path}includes/js/selectivizr-min.js"></script>
		<![endif]-->
        <style type="text/css">.gspeech_style_,.gspeech_style_1{background-color:{$bcp1};color:{$cp1};}.gspeech_style_2{background-color:{$bcp2};color:{$cp2};}.gspeech_style_3{background-color:{$bcp3};color:{$cp3};}.gspeech_style_4{background-color:{$bcp4};color:{$cp4};}.gspeech_style_5{background-color:{$bcp5};color:{$cp5};}</style>
        <style type="text/css">.gspeech_style_.active,.gspeech_style_1.active{background-color:{$bca1} !important;color:{$ca1} !important;}.gspeech_style_2.active{background-color:{$bca2} !important;color:{$ca2} !important;}.gspeech_style_3.active{background-color:{$bca3} !important;color:{$ca3} !important;}.gspeech_style_4.active{background-color:{$bca4} !important;color:{$ca4} !important;}.gspeech_style_5.active{background-color:{$bca5} !important;color:{$ca5} !important;}</style>
        <style type="text/css">.sound_div_,.sound_div_1{opacity:{$spop1_};filter: alpha(opacity = {$spop1})}.sound_div_2{opacity:{$spop2_};filter: alpha(opacity = {$spop2})}.sound_div_3{opacity:{$spop3_};filter: alpha(opacity = {$spop3})}.sound_div_4{opacity:{$spop4_};filter: alpha(opacity = {$spop4})}.sound_div_5{opacity:{$spop5_};filter: alpha(opacity = {$spop5})}</style>
        <style type="text/css">
           ::selection {
				background: {$bca2};
				color: {$ca2};
			}
			::-moz-selection {
				background: {$bca2};
				color: {$ca2};
			}
        </style>
EOM;
        
        // Makes appropriate changes to the HTML
        function wpgs_strip_htm($matches,$a) {
        	
			$speech_title = 'Click to listen highlighted text!';
			$speech_powered_by = 'Powered By';
        
        	$sitename = get_bloginfo('name');
        	
        	global $current_user;
        	$userRegistered =  $current_user->ID == 0 ? 0 : 1;
        	get_currentuserinfo();
        	
        	$username =  $current_user->user_login;
        	$realname = $current_user->display_name;
        	 
        	if($userRegistered == 0 && $matches[10] == 1) {
        		if($matches[16] != 1) {
        			return $matches[17];
        		}
        		else return null;
        	}
        	if($userRegistered == 1 && $matches[10] == 2) {
        		if($matches[16] != 1) {
        			return $matches[17];
        		}
        		else return null;
        	}
        	 
        	$htm = strip_tags($matches[17]);
        	$htm = preg_replace('/<script\b[^>]*>(.*?)<\/script>/si', "", $htm);
        	$htm = preg_replace('/<style\b[^>]*>(.*?)<\/style>/si', "", $htm);
        	$htm = str_replace(array("\"","'"),"",$htm);
        	 
        	$htm = str_replace("SITENAME",$sitename,$htm);
        	if($userRegistered == 1) {
        		$htm = str_replace("USERNAME",$username,$htm);
        		$htm = str_replace("REALNAME",$realname,$htm);
        	}
        	 
        	$htm_original = str_replace("SITENAME",$sitename,$matches[17]);
        	if($userRegistered == 1) {
        		$htm_original = str_replace("USERNAME",$username,$htm_original);
        		$htm_original = str_replace("REALNAME",$realname,$htm_original);
        	}
        	 
        	$hidespeaker_pre = $matches[16] == 1 ? '<div style="display:none">' : '';
        	$hidespeaker_af = $matches[16] == 1 ? '</div>' : '';
        	
        	$style_index = $matches[2] == '' ? 1 : $matches[2];

        	return $hidespeaker_pre.'
        	<span class="gspeech_selection gspeech_style_'.$style_index.'" roll="'.$style_index.'">'.$htm_original.'</span>
        	<span class="gspeech_pro_main_wrapper">&nbsp;
        	<span class="sexy_tooltip"><span class="the-tooltip top left sexy_tooltip_'.$style_index.'"><span class="tooltip_inner">'.$speech_title.'</span></span></span>
        	<span class="sound_container_pro sound_div_'.$style_index.'" language="'.$matches[4].'" roll="'.$style_index.'" autoplaypro="'.$matches[6].'" speechtimeout="'.$matches[8].'" selector="'.$matches[12].'" eventpro="'.$matches[14].'" title="" style=""><span class="sound_text_pro">'.$htm.'</span></span>
        	<span class="sexy_tooltip"><span class="the-tooltip bottom left dark-midnight-blue"><span class="tooltip_inner powered_by_3 powered_by">'.$speech_powered_by.' <a href="http://creative-solutions.net/wordpress/gspeech" target="_blank" class="backlink_a">GSpeech</a></span></span></span>
        	</span>'.$hidespeaker_af;
        }
        
	 	$greeting_text = preg_replace_callback('/{gspeech( style=([\d]*?))?( language=([\S]*?))?( autoplay=([\d]*?))?( speechtimeout=([\d]*?))?( registered=([\d]*?))?( selector=(.*?))?( event=(.*?))?( hidespeaker=([\d]*?))?[\s]?}(.*?){\/gspeech}/si', 'wpgs_strip_htm', $greeting_text, 2);
        $greeting_text = preg_replace('/{gspeech[^}]*?}/si', '', $greeting_text);
        $greeting_text = preg_replace('/{\/gspeech}/si', '', $greeting_text);
        $greeting_text = str_replace('sound_container_pro','sound_container_pro greeting_block',$greeting_text);
        
        $content = preg_replace_callback('/{gspeech( style=([\d]*?))?( language=([\S]*?))?( autoplay=([\d]*?))?( speechtimeout=([\d]*?))?( registered=([\d]*?))?( selector=(.*?))?( event=(.*?))?( hidespeaker=([\d]*?))?[\s]?}(.*?){\/gspeech}/si', 'wpgs_strip_htm', $content, 1);
        $content = preg_replace('/{gspeech[^}]*?}/si', '', $content);
        $content = preg_replace('/{\/gspeech}/si', '', $content);
        
        $style_index = 1;
        $speaker_type = $speaker_types_array[$style_index];
        $speaker_size = $speaker_sizes_array[$style_index];
        $replace_val1 = 'sound_div_1';
        $replace_val2 = 'sound_div_1 size_'.$speaker_size.' '.$speaker_type;
        $content = str_replace($replace_val1, $replace_val2, $content);
        $tooltip = $tooltips_array[$style_index];
        $content = str_replace('sexy_tooltip_1', $tooltip, $content);
        
        $style_index = 2;
        $speaker_type = $speaker_types_array[$style_index];
        $speaker_size = $speaker_sizes_array[$style_index];
        $replace_val1 = 'sound_div_2';
        $replace_val2 = 'sound_div_2 size_'.$speaker_size.' '.$speaker_type;
        $content = str_replace($replace_val1, $replace_val2, $content);
        $tooltip = $tooltips_array[$style_index];
        $content = str_replace('sexy_tooltip_2', $tooltip, $content);
        
        $style_index = 3;
        $speaker_type = $speaker_types_array[$style_index];
        $speaker_size = $speaker_sizes_array[$style_index];
        $replace_val1 = 'sound_div_3';
        $replace_val2 = 'sound_div_3 size_'.$speaker_size.' '.$speaker_type;
        $content = str_replace($replace_val1, $replace_val2, $content);
        $tooltip = $tooltips_array[$style_index];
        $content = str_replace('sexy_tooltip_3', $tooltip, $content);
        
        $style_index = 4;
        $speaker_type = $speaker_types_array[$style_index];
        $speaker_size = $speaker_sizes_array[$style_index];
        $replace_val1 = 'sound_div_4';
        $replace_val2 = 'sound_div_4 size_'.$speaker_size.' '.$speaker_type;
        $content = str_replace($replace_val1, $replace_val2, $content);
        $tooltip = $tooltips_array[$style_index];
        $content = str_replace('sexy_tooltip_4', $tooltip, $content);
        
        $style_index = 5;
        $speaker_type = $speaker_types_array[$style_index];
        $speaker_size = $speaker_sizes_array[$style_index];
        $replace_val1 = 'sound_div_5';
        $replace_val2 = 'sound_div_5 size_'.$speaker_size.' '.$speaker_type;
        $content = str_replace($replace_val1, $replace_val2, $content);
        $tooltip = $tooltips_array[$style_index];
        $content = str_replace('sexy_tooltip_5', $tooltip, $content);
        
        $is_htm = strpos($content, '<body');
        if($is_htm)
        	$content = preg_replace('/<body([^>]*)?>/si', "<body$1>" . $greeting_text, $content);
       	$content = str_replace('</body>', $gspeech_content . '</body>', $content);
	return $content;
}

function is_login_page() {
	return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}

function wpgs_start_speeching() {
	//return on admin
	if(is_admin() || is_login_page())
		return null;
	ob_start("wpgs_prepare_html");
}

function wpgs_make_ob_end_flush() {
	if (ob_get_level() != 0) 
		ob_end_flush();
}
register_shutdown_function('wpgs_make_ob_end_flush');
add_action('wp_loaded', 'wpgs_start_speeching');

?>
