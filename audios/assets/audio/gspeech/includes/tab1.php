<div class="old_p">
	<h4 style="margin-bottom: -3px;"><?php _e('Language', 'wpgs_domain'); ?><span class="title" style="display:block;font-weight: normal"><?php echo _e('Your site native language', 'wpgs_domain')?></span></h4>
	<div class="old_p">
		<?php $languages = array('af' => 'Afrikaans','sq' => 'Albanian','ar' => 'Arabic','hy' => 'Armenian','eu' => 'Basque','be' => 'Belarusian','bg' => 'Bulgarian','zh-CN' => 'Chinese (Simplified)','zh-TW' => 'Chinese (Traditional)','hr' => 'Croatian','cs' => 'Czech','da' => 'Danish','nl' => 'Dutch','en' => 'English','et' => 'Estonian','tl' => 'Filipino','fi' => 'Finnish','fr' => 'French','gl' => 'Galician','ka' => 'Georgian','de' => 'German','el' => 'Greek','ht' => 'Haitian Creole','iw' => 'Hebrew','hi' => 'Hindi','hu' => 'Hungarian','is' => 'Icelandic','id' => 'Indonesian','it' => 'Italian','ja' => 'Japanese','ko' => 'Korean','lv' => 'Latvian','lt' => 'Lithuanian','mk' => 'Macedonian','ms' => 'Malay','mt' => 'Maltese','no' => 'Norwegian','fa' => 'Persian','pl' => 'Polish','pt' => 'Portuguese','ro' => 'Romanian','ru' => 'Russian','sr' => 'Serbian','sk' => 'Slovak','sl' => 'Slovenian','es' => 'Spanish','sw' => 'Swahili','sv' => 'Swedish','th' => 'Thai','uk' => 'Ukrainian','ur' => 'Urdu','vi' => 'Vietnamese','cy' => 'Welsh','yi' => 'Afrikaans','yi' => 'Yiddish'); ?>
		<select name="wpgs_settings[language]" id="wpgs_settings[language]">
			<?php foreach($languages as $key => $language) { ?>
				<?php if($wpgs_options['language'] == $key) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
				<?php if($key == 'en' && $wpgs_options['language'] == '') { $selected = 'selected="selected"'; }?>
				<option value="<?php echo $key; ?>" <?php echo $selected; ?>><?php echo $language; ?></option>
			<?php } ?>
		</select>
	</div>
	
	<h4 style="margin-bottom: -3px;"><?php _e('Speak Any Text', 'wpgs_domain'); ?><span class="title" style="display:block;font-weight: normal"><?php echo _e('Show speaker when visitors highlighted text from the site', 'wpgs_domain')?></span></h4>
	<div class="old_p">
		<?php $checked1 = ($wpgs_options['speak_any_text'] == '' || $wpgs_options['speak_any_text'] == 1) ? 'checked="checked"' : ''; ?>
		<?php $checked2 = (isset($wpgs_options['speak_any_text']) && $wpgs_options['speak_any_text'] == 0) ? 'checked="checked"' : ''; ?>
		<input id="wpgs_settings[speak_any_text1]" name="wpgs_settings[speak_any_text]" type="radio" value="1" <?php echo $checked1;?> /> 
		<label class="title" for="wpgs_settings[speak_any_text1]"><?php _e('Yes', 'wpgs_domain'); ?></label>
		<input id="wpgs_settings[speak_any_text2]" name="wpgs_settings[speak_any_text]" type="radio" value="0" <?php echo $checked2;?> /> 
		<label class="title" for="wpgs_settings[speak_any_text2]"><?php _e('No', 'wpgs_domain'); ?></label>
	</div>
	
	<h4 style="margin-bottom: -3px;"><?php _e('Greeting Text', 'wpgs_domain'); ?></h4>
	<div class="old_p">
		<?php $value = $wpgs_options['greeting_text'] == '' ? '{gspeech style=1 language=en autoplay=1 speechtimeout=0 registered=2 hidespeaker=1}Welcome to SITENAME{/gspeech}{gspeech style=2 language=en autoplay=1 speechtimeout=0 registered=1 hidespeaker=1}Welcome REALNAME{/gspeech}' : $wpgs_options['greeting_text']?>
		<textarea style="height: 120px;width: 460px;" id="wpgs_settings[greeting_text]" name="wpgs_settings[greeting_text]" type="text" ><?php echo $value; ?></textarea>
		<label style="display: block" class="title" for="wpgs_settings[greeting_text]"><?php _e('Greeting text to speech. Write blank to not use greeting. Use SITENAME to get the site name, USERNAME to get username, REALNAME to get user real name.<br />For more details, please read the <a style="color: #21759b" href="http://creative-solutions.net/wordpress/gspeech/documentation" target="_blank">documentation</a>', 'wpgs_domain'); ?></label>
	</div>
</div>
