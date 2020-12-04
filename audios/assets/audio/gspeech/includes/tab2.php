<div id="wpgs_accordion">
<!-- **********************************************************Accordion 1************************************************************************************************************************************************ -->
	<h3 style="margin-bottom: -3px;"><?php _e('Style 1 (Default)', 'wpgs_domain'); ?></h3>
	<div>
		<div class="speaker_preview">
			<?php 
				$bcp1 = $wpgs_options['bcp1'] == '' ? $default_bcp1 : $wpgs_options['bcp1'];
				$cp1 = $wpgs_options['cp1'] == '' ? $default_cp1 : $wpgs_options['cp1'];
				$bca1 = $wpgs_options['bca1'] == '' ? $default_bca1 : $wpgs_options['bca1'];
				$ca1 = $wpgs_options['ca1'] == '' ? $default_ca1 : $wpgs_options['ca1'];
				$spop1 = $wpgs_options['spop1'] == '' ? $default_spop1 : $wpgs_options['spop1'];
				$spop1_ = $spop1 == '' ? $default_spop1_ : $spop1 / 100;
				$spoa1 = $wpgs_options['spoa1'] == '' ? $default_spoa1 : $wpgs_options['spoa1'];
				$spoa1_ =  $spoa1 == '' ? $default_spoa1_ : $spoa1 / 100;
				$speaker_type_1 = $wpgs_options['speaker_type_1'] == '' ? $default_speaker_type_1 : $wpgs_options['speaker_type_1'];
				$speaker_size_1 = $wpgs_options['speaker_size_1'] == '' ? $default_speaker_size_1 : $wpgs_options['speaker_size_1'];
				$tooltip_1 = $wpgs_options['tooltip_1'] == '' ? $default_tooltip_1 : $wpgs_options['tooltip_1'];
			?>
			<style>
	  						.gspeech_selection_1 {background-color: <?php echo $bcp1;?>;color: <?php echo $cp1;?>}
	  						.gspeech_selection_1_hover {background-color: <?php echo $bca1;?>;color: <?php echo $ca1;?>}
	  					</style>
			<span class="gspeech_selection gspeech_selection_1 animate_item_passive">Live Preview (Style 1: Default)</span><span id="sound_container_1" roll="1" class="sound_container_pro gspeech_slider_pro speaker_<?php echo $speaker_type_1?> <?php echo $speaker_type_1?> size_<?php echo $speaker_size_1;?>" style="opacity: <?php echo $spop1_;?>;filter: alpha(opacity = <?php echo $spop1;?>);">&nbsp;</span>
			<span style="margin-left: 20px;" class="gspeech_selection gspeech_selection_1_hover animate_item_active">Live Preview (Style 1: Default) Active State</span>
			<span id="sound_container_1_hover" roll="1" class="sound_container_pro hovered gspeech_slider_pro_hovered speaker_<?php echo $speaker_type_1?> <?php echo $speaker_type_1?>  size_<?php echo $speaker_size_1;?>" style="opacity: <?php echo $spoa1_;?>;filter: alpha(opacity = <?php echo $spoa1;?>);">
			<span class="sexy_tooltip_title"><span class="the-tooltip top left <?php echo $tooltip_1;?>"><span class="tooltip_inner"><?php echo $speech_title;?></span></span></span>
			&nbsp;
			</span>
		</div>
		<div style="margin: 15px 0 0 0">
			<select style="width: 96px;float: left;display: block;" name="wpgs_settings[speaker_type_1]" id="wpgs_settings[speaker_type_1]" class="speaker_type_select" roll="1">
				<?php 
					for($i = 1; $i <= 40; $i ++) {
						if($wpgs_options['speaker_type_1'] == 'speaker_'.$i) $selected = 'selected="selected"'; else $selected = '';
						if($i == $default_speaker_type_1 && $wpgs_options['speaker_type_1'] == '') $selected = 'selected="selected"';
						echo '<option value="speaker_'.$i.'" '.$selected.'>Speaker '.$i.'</option>';	
					}
				?>
			</select>
			<div style="display: block;float:left;width: 43px;height: 32px;position: relative;">
				<div class="next_speaker" style='-moz-user-select: none;-webkit-user-select: none;' onselectstart='return false;'>Next</div>
				<div class="prev_speaker" style='-moz-user-select: none;-webkit-user-select: none;' onselectstart='return false;'>Prev</div>
			</div>
			<label style="float: left;display: block;margin-top: 7px;" class="title" for="wpgs_settings[speaker_type_1]"><?php _e('Choose Speaker <span style="font-size: 12px;"><a style="color: #21759b" href="http://creative-solutions.net/wordpress/gspeech/asset#speakers" target="_blank">See speakers asset</a></span>', 'wpgs_domain'); ?></label>
		</div>
		<div style="clear: both;height: 1px;"></div>
		
		<div style="margin: 15px 0 0 0">
			<select style="width: 96px;float: left;display: block;" name="wpgs_settings[tooltip_1]" id="wpgs_settings[tooltip_1]" class="tooltip_select" roll="1">
				<?php 
					foreach($tooltips as $key => $val) {
						if($wpgs_options['tooltip_1'] == $key) $selected = 'selected="selected"'; else $selected = '';
						if($key == $default_tooltip_1 && $wpgs_options['tooltip_1'] == '') $selected = 'selected="selected"';
						echo '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';	
					}
				?>
			</select>
			<div style="display: block;float:left;width: 43px;height: 32px;position: relative;">
				<div class="next_tooltip" style='-moz-user-select: none;-webkit-user-select: none;' onselectstart='return false;'>Next</div>
				<div class="prev_tooltip" style='-moz-user-select: none;-webkit-user-select: none;' onselectstart='return false;'>Prev</div>
			</div>
			<label style="float: left;display: block;margin-top: 7px;" class="title" for="wpgs_settings[tooltip_1]"><?php _e('Choose Tooltip <span style="font-size: 12px;"><a style="color: #21759b" href="http://creative-solutions.net/wordpress/gspeech/asset#tooltips" target="_blank">See tooltips asset</a></span>', 'wpgs_domain'); ?></label>
		</div>
		<div style="clear: both;height: 1px;"></div>
		<div class="old_p">
			<label style="margin-right: 50px;">
				<?php $checked1 = (($wpgs_options['speaker_size_1'] == '' && $default_speaker_size_1 == 1) || $wpgs_options['speaker_size_1'] == 1) ? 'checked="checked"' : ''; ?>
				<?php $checked2 = ((isset($wpgs_options['speaker_size_1']) && $wpgs_options['speaker_size_1'] == 0) || ($wpgs_options['speaker_size_1'] == '' && $default_speaker_size_1 == 0)) ? 'checked="checked"' : ''; ?>
				<input roll="1" class="speaker_size_radio" id="wpgs_settings[speaker_size_11]" name="wpgs_settings[speaker_size_1]" type="radio" value="1" <?php echo $checked1;?> /> 
				<label class="title" for="wpgs_settings[speaker_size_11]"><?php _e('Big', 'wpgs_domain'); ?></label>
				<input roll="1" class="speaker_size_radio" id="wpgs_settings[speaker_size_12]" name="wpgs_settings[speaker_size_1]" type="radio" value="0" <?php echo $checked2;?> /> 
				<label class="title" for="wpgs_settings[speaker_size_12]"><?php _e('Small', 'wpgs_domain'); ?></label>
			</label>
			<label class="title">Speaker Size</label>
		</div>
		<div class="old_p">
			<div class="selector_wrapper">
				<?php $value = $wpgs_options['bcp1'] == '' ? $default_bcp1 : $wpgs_options['bcp1']?>
			 	<div id="colorSelector" class="colorSelector" style="float: left;"><div style="background-color: <?php echo $value;?>"></div></div>
				<input roll="2" readonly="readonly" style="margin-top: 6px;width: 101px;background-color: #fff" id="wpgs_settings[bcp1]" name="wpgs_settings[bcp1]" type="text" value="<?php echo $value; ?>" class="colorSelector" />
				<label class="title" for="wpgs_settings[bcp1]"><?php _e('Audio Block Background Color, Passive State', 'wpgs_domain'); ?></label>
			</div>
		</div>
		<div class="old_p">
			<div class="selector_wrapper">
				<?php $value = $wpgs_options['cp1'] == '' ? $default_cp1 : $wpgs_options['cp1']?>
				<div id="colorSelector" class="colorSelector" style="float: left;"><div style="background-color: <?php echo $value;?>"></div></div>
				<input roll="3" readonly="readonly" style="margin-top: 6px;width: 101px;background-color: #fff" id="wpgs_settings[cp1]" name="wpgs_settings[cp1]" type="text" value="<?php echo $value; ?>" class="colorSelector" />
				<label class="title" for="wpgs_settings[cp1]"><?php _e('Audio Block Text Color, Passive State', 'wpgs_domain'); ?></label>
			</div>
		</div>
		<div class="old_p">
			<div class="selector_wrapper">
				<?php $value = $wpgs_options['bca1'] == '' ? $default_bca1 : $wpgs_options['bca1']?>
				<div id="colorSelector" class="colorSelector" style="float: left;"><div style="background-color: <?php echo $value;?>"></div></div>
				<input roll="4" readonly="readonly" style="margin-top: 6px;width: 101px;background-color: #fff" id="wpgs_settings[bca1]" name="wpgs_settings[bca1]" type="text" value="<?php echo $value; ?>" class="colorSelector" />
				<label class="title" for="wpgs_settings[bca1]"><?php _e('Audio Block Background Color, Active State(User Hover The Speaker, or Click on it).', 'wpgs_domain'); ?></label>
			</div>
		</div>
		<div class="old_p">
			<div class="selector_wrapper">
				<?php $value = $wpgs_options['ca1'] == '' ? $default_ca1 : $wpgs_options['ca1']?>
				<div id="colorSelector" class="colorSelector" style="float: left;"><div style="background-color: <?php echo $value;?>"></div></div>
				<input roll="5" readonly="readonly" style="margin-top: 6px;width: 101px;background-color: #fff" id="wpgs_settings[ca1]" name="wpgs_settings[ca1]" type="text" value="<?php echo $value; ?>" class="colorSelector" />
				<label class="title" for="wpgs_settings[ca1]"><?php _e('Audio Block Text Color, Active State(User Hover The Speaker, or Click on it).', 'wpgs_domain'); ?></label>
			</div>
		</div>
		<div class="old_p">
			<?php $opacities = array('10','20','30','40','50','60','70','80','90','100'); ?>
			<select style="width: 136px;margin-bottom: 8px" name="wpgs_settings[spop1]" id="slider_select11" class="slider_select_1">
				<?php foreach($opacities as $opacity) { ?>
					<?php if($wpgs_options['spop1'] == $opacity) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
					<?php if($opacity == $default_spop1 && $wpgs_options['spop1'] == '') { $selected = 'selected="selected"'; }?>
					<option value="<?php echo $opacity; ?>" <?php echo $selected; ?>><?php echo $opacity; ?>%</option>
				<?php } ?>
			</select>
			<label class="title" for="wpgs_settings[spop1]"><?php _e('Speaker Icon Opacity, Passive State', 'wpgs_domain'); ?></label>
		</div>
		<div class="old_p">
			<?php $opacities = array('10','20','30','40','50','60','70','80','90','100'); ?>
			<select style="width: 136px;margin-bottom: 8px" name="wpgs_settings[spoa1]" id="slider_select12"  class="slider_select_2">
				<?php foreach($opacities as $opacity) { ?>
					<?php if($wpgs_options['spoa1'] == $opacity) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
					<?php if($opacity == $default_spoa1 && $wpgs_options['spoa1'] == '') { $selected = 'selected="selected"'; }?>
					<option value="<?php echo $opacity; ?>" <?php echo $selected; ?>><?php echo $opacity; ?>%</option>
				<?php } ?>
			</select>
			<label class="title" for="wpgs_settings[spoa1]"><?php _e('Speaker Icon Opacity, Active State', 'wpgs_domain'); ?></label>
		</div>
		<div class="old_p">
			<?php $opacities = array('0','100','200','300','400','500','600','700','800','900','1000','1100','1200'); ?>
			<select style="width: 136px;margin-bottom: 8px" name="wpgs_settings[animation_time_1]" id="slider_select13"  class="slider_select_3">
				<?php foreach($opacities as $opacity) { ?>
					<?php if($wpgs_options['animation_time_1'] == $opacity) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
					<?php if($opacity == $default_animation_time_1 && $wpgs_options['animation_time_1'] == '') { $selected = 'selected="selected"'; }?>
					<option value="<?php echo $opacity; ?>" <?php echo $selected; ?>><?php echo $opacity; ?></option>
				<?php } ?>
			</select>
			<label class="title" for="wpgs_settings[animation_time_1]"><?php _e('Time Between Switching Passive And Active States, In miliseconds.', 'wpgs_domain'); ?></label>
		</div>
	</div>
<!-- **********************************************************Accordion 2************************************************************************************************************************************************ -->
	<h3 style="margin-bottom: -3px;"><?php _e('Style 2 (Blue)', 'wpgs_domain'); ?></h3>
	<div>
		<div class="speaker_preview">
			<?php 
				$bcp2 = $wpgs_options['bcp2'] == '' ? $default_bcp2 : $wpgs_options['bcp2'];
				$cp2 = $wpgs_options['cp2'] == '' ? $default_cp2 : $wpgs_options['cp2'];
				$bca2 = $wpgs_options['bca2'] == '' ? $default_bca2 : $wpgs_options['bca2'];
				$ca2 = $wpgs_options['ca2'] == '' ? $default_ca2 : $wpgs_options['ca2'];
				$spop2 = $wpgs_options['spop2'] == '' ? $default_spop2 : $wpgs_options['spop2'];
				$spop2_ = $spop2 == '' ? $default_spop2_ : $spop2 / 100;
				$spoa2 = $wpgs_options['spoa2'] == '' ? $default_spoa2 : $wpgs_options['spoa2'];
				$spoa2_ =  $spoa2 == '' ? $default_spoa2_ : $spoa2 / 100;
				$speaker_type_2 = $wpgs_options['speaker_type_2'] == '' ? $default_speaker_type_2 : $wpgs_options['speaker_type_2'];
				$speaker_size_2 = $wpgs_options['speaker_size_2'] == '' ? $default_speaker_size_2 : $wpgs_options['speaker_size_2'];
				$tooltip_2 = $wpgs_options['tooltip_2'] == '' ? $default_tooltip_2 : $wpgs_options['tooltip_2'];
				
			?>
			<style>
	  						.gspeech_selection_2 {background-color: <?php echo $bcp2;?>;color: <?php echo $cp2;?>}
	  						.gspeech_selection_2_hover {background-color: <?php echo $bca2;?>;color: <?php echo $ca2;?>}
	  					</style>
			<span class="gspeech_selection gspeech_selection_2 animate_item_passive">Live Preview (Style 2: Blue)</span><span id="sound_container_2" roll="1" class="sound_container_pro gspeech_slider_pro speaker_<?php echo $speaker_type_2?> <?php echo $speaker_type_2?> size_<?php echo $speaker_size_2;?>" style="opacity: <?php echo $spop2_;?>;filter: alpha(opacity = <?php echo $spop2;?>);">&nbsp;</span>
			<span style="margin-left: 20px;" class="gspeech_selection gspeech_selection_2_hover animate_item_active">Live Preview (Style 2: Blue) Active State</span><span id="sound_container_2_hover" roll="1" class="sound_container_pro hovered gspeech_slider_pro_hovered speaker_<?php echo $speaker_type_2?> <?php echo $speaker_type_2?> size_<?php echo $speaker_size_2;?>" style="opacity: <?php echo $spoa2_;?>;filter: alpha(opacity = <?php echo $spoa2;?>);">&nbsp;<span class="sexy_tooltip_title"><span class="the-tooltip top left <?php echo $tooltip_2;?>"><span class="tooltip_inner"><?php echo $speech_title;?></span></span></span></span>
		</div>
		<div style="margin: 15px 0 0 0">
			<select style="width: 96px;float: left;display: block;" name="wpgs_settings[speaker_type_2]" id="wpgs_settings[speaker_type_2]" class="speaker_type_select" roll="2">
				<?php 
					for($i = 1; $i <= 40; $i ++) {
						if($wpgs_options['speaker_type_2'] == 'speaker_'.$i) $selected = 'selected="selected"'; else $selected = '';
						if($i == $default_speaker_type_2 && $wpgs_options['speaker_type_2'] == '') $selected = 'selected="selected"';
						echo '<option value="speaker_'.$i.'" '.$selected.'>Speaker '.$i.'</option>';	
					}
				?>
			</select>
			<div style="display: block;float:left;width: 43px;height: 32px;position: relative;">
				<div class="next_speaker" style='-moz-user-select: none;-webkit-user-select: none;' onselectstart='return false;'>Next</div>
				<div class="prev_speaker" style='-moz-user-select: none;-webkit-user-select: none;' onselectstart='return false;'>Prev</div>
			</div>
			<label style="float: left;display: block;margin-top: 7px;" class="title" for="wpgs_settings[speaker_type_2]"><?php _e('Choose Speaker <span style="font-size: 12px;"><a style="color: #21759b" href="http://creative-solutions.net/wordpress/gspeech/asset#speakers" target="_blank">See speakers asset</a></span>', 'wpgs_domain'); ?></label>
		</div>
		<div style="clear: both;height: 1px;"></div>
		<div style="margin: 15px 0 0 0">
			<select style="width: 96px;float: left;display: block;" name="wpgs_settings[tooltip_2]" id="wpgs_settings[tooltip_2]" class="tooltip_select" roll="1">
				<?php 
					foreach($tooltips as $key => $val) {
						if($wpgs_options['tooltip_2'] == $key) $selected = 'selected="selected"'; else $selected = '';
						if($key == $default_tooltip_2 && $wpgs_options['tooltip_2'] == '') $selected = 'selected="selected"';
						echo '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';	
					}
				?>
			</select>
			<div style="display: block;float:left;width: 43px;height: 32px;position: relative;">
				<div class="next_tooltip" style='-moz-user-select: none;-webkit-user-select: none;' onselectstart='return false;'>Next</div>
				<div class="prev_tooltip" style='-moz-user-select: none;-webkit-user-select: none;' onselectstart='return false;'>Prev</div>
			</div>
			<label style="float: left;display: block;margin-top: 7px;" class="title" for="wpgs_settings[tooltip_2]"><?php _e('Choose Tooltip <span style="font-size: 12px;"><a style="color: #21759b" href="http://creative-solutions.net/wordpress/gspeech/asset#tooltips" target="_blank">See tooltips asset</a></span>', 'wpgs_domain'); ?></label>
		</div>
		<div style="clear: both;height: 1px;"></div>
		<div class="old_p">
			<label style="margin-right: 50px;">
				<?php $checked1 = (($wpgs_options['speaker_size_2'] == '' && $default_speaker_size_2 == 1) || $wpgs_options['speaker_size_2'] == 1) ? 'checked="checked"' : ''; ?>
				<?php $checked2 = ((isset($wpgs_options['speaker_size_2']) && $wpgs_options['speaker_size_2'] == 0) || ($wpgs_options['speaker_size_2'] == '' && $default_speaker_size_2 == 0)) ? 'checked="checked"' : ''; ?>
				<input roll="2" class="speaker_size_radio" id="wpgs_settings[speaker_size_21]" name="wpgs_settings[speaker_size_2]" type="radio" value="1" <?php echo $checked1;?> /> 
				<label class="title" for="wpgs_settings[speaker_size_21]"><?php _e('Big', 'wpgs_domain'); ?></label>
				<input roll="2" class="speaker_size_radio" id="wpgs_settings[speaker_size_22]" name="wpgs_settings[speaker_size_2]" type="radio" value="0" <?php echo $checked2;?> /> 
				<label class="title" for="wpgs_settings[speaker_size_22]"><?php _e('Small', 'wpgs_domain'); ?></label>
			</label>
			<label class="title">Speaker Size</label>
		</div>
		<div class="old_p">
			<div class="selector_wrapper">
				<?php $value = $wpgs_options['bcp2'] == '' ? $default_bcp2 : $wpgs_options['bcp2']?>
			 	<div id="colorSelector" class="colorSelector" style="float: left;"><div style="background-color: <?php echo $value;?>"></div></div>
				<input roll="2" readonly="readonly" style="margin-top: 6px;width: 101px;background-color: #fff" id="wpgs_settings[bcp2]" name="wpgs_settings[bcp2]" type="text" value="<?php echo $value; ?>" class="colorSelector" />
				<label class="title" for="wpgs_settings[bcp2]"><?php _e('Audio Block Background Color, Passive State', 'wpgs_domain'); ?></label>
			</div>
		</div>
		<div class="old_p">
			<div class="selector_wrapper">
				<?php $value = $wpgs_options['cp2'] == '' ? $default_cp2 : $wpgs_options['cp2']?>
				<div id="colorSelector" class="colorSelector" style="float: left;"><div style="background-color: <?php echo $value;?>"></div></div>
				<input roll="3" readonly="readonly" style="margin-top: 6px;width: 101px;background-color: #fff" id="wpgs_settings[cp2]" name="wpgs_settings[cp2]" type="text" value="<?php echo $value; ?>" class="colorSelector" />
				<label class="title" for="wpgs_settings[cp2]"><?php _e('Audio Block Text Color, Passive State', 'wpgs_domain'); ?></label>
			</div>
		</div>
		<div class="old_p">
			<div class="selector_wrapper">
				<?php $value = $wpgs_options['bca2'] == '' ? $default_bca2 : $wpgs_options['bca2']?>
				<div id="colorSelector" class="colorSelector" style="float: left;"><div style="background-color: <?php echo $value;?>"></div></div>
				<input roll="4" readonly="readonly" style="margin-top: 6px;width: 101px;background-color: #fff" id="wpgs_settings[bca2]" name="wpgs_settings[bca2]" type="text" value="<?php echo $value; ?>" class="colorSelector" />
				<label class="title" for="wpgs_settings[bca2]"><?php _e('Audio Block Background Color, Active State(User Hover The Speaker, or Click on it).', 'wpgs_domain'); ?></label>
			</div>
		</div>
		<div class="old_p">
			<div class="selector_wrapper">
				<?php $value = $wpgs_options['ca2'] == '' ? $default_ca2 : $wpgs_options['ca2']?>
				<div id="colorSelector" class="colorSelector" style="float: left;"><div style="background-color: <?php echo $value;?>"></div></div>
				<input roll="5" readonly="readonly" style="margin-top: 6px;width: 101px;background-color: #fff" id="wpgs_settings[ca2]" name="wpgs_settings[ca2]" type="text" value="<?php echo $value; ?>" class="colorSelector" />
				<label class="title" for="wpgs_settings[ca2]"><?php _e('Audio Block Text Color, Active State(User Hover The Speaker, or Click on it).', 'wpgs_domain'); ?></label>
			</div>
		</div>
		<div class="old_p">
			<?php $opacities = array('10','20','30','40','50','60','70','80','90','100'); ?>
			<select style="width: 136px;margin-bottom: 8px" name="wpgs_settings[spop2]" id="slider_select21" class="slider_select_1">
				<?php foreach($opacities as $opacity) { ?>
					<?php if($wpgs_options['spop2'] == $opacity) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
					<?php if($opacity == $default_spop2 && $wpgs_options['spop2'] == '') { $selected = 'selected="selected"'; }?>
					<option value="<?php echo $opacity; ?>" <?php echo $selected; ?>><?php echo $opacity; ?>%</option>
				<?php } ?>
			</select>
			<label class="title" for="wpgs_settings[spop2]"><?php _e('Speaker Icon Opacity, Passive State', 'wpgs_domain'); ?></label>
		</div>
		<div class="old_p">
			<?php $opacities = array('10','20','30','40','50','60','70','80','90','100'); ?>
			<select style="width: 136px;margin-bottom: 8px" name="wpgs_settings[spoa2]" id="slider_select22"  class="slider_select_2">
				<?php foreach($opacities as $opacity) { ?>
					<?php if($wpgs_options['spoa2'] == $opacity) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
					<?php if($opacity == $default_spoa2 && $wpgs_options['spoa2'] == '') { $selected = 'selected="selected"'; }?>
					<option value="<?php echo $opacity; ?>" <?php echo $selected; ?>><?php echo $opacity; ?>%</option>
				<?php } ?>
			</select>
			<label class="title" for="wpgs_settings[spoa2]"><?php _e('Speaker Icon Opacity, Active State', 'wpgs_domain'); ?></label>
		</div>
		<div class="old_p">
			<?php $opacities = array('0','100','200','300','400','500','600','700','800','900','1000','1100','1200'); ?>
			<select style="width: 136px;margin-bottom: 8px" name="wpgs_settings[animation_time_2]" id="slider_select23"  class="slider_select_3">
				<?php foreach($opacities as $opacity) { ?>
					<?php if($wpgs_options['animation_time_2'] == $opacity) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
					<?php if($opacity == $default_animation_time_2 && $wpgs_options['animation_time_2'] == '') { $selected = 'selected="selected"'; }?>
					<option value="<?php echo $opacity; ?>" <?php echo $selected; ?>><?php echo $opacity; ?></option>
				<?php } ?>
			</select>
			<label class="title" for="wpgs_settings[animation_time_2]"><?php _e('Time Between Switching Passive And Active States, In miliseconds.', 'wpgs_domain'); ?></label>
		</div>
	</div>
<!-- **********************************************************Accordion 3************************************************************************************************************************************************ -->
	<h3 style="margin-bottom: -3px;"><?php _e('Style 3 (Red)', 'wpgs_domain'); ?></h3>
	<div>
		<div class="speaker_preview">
			<?php 
				$bcp3 = $wpgs_options['bcp3'] == '' ? $default_bcp3 : $wpgs_options['bcp3'];
				$cp3 = $wpgs_options['cp3'] == '' ? $default_cp3 : $wpgs_options['cp3'];
				$bca3 = $wpgs_options['bca3'] == '' ? $default_bca3 : $wpgs_options['bca3'];
				$ca3 = $wpgs_options['ca3'] == '' ? $default_ca3 : $wpgs_options['ca3'];
				$spop3 = $wpgs_options['spop3'] == '' ? $default_spop3 : $wpgs_options['spop3'];
				$spop3_ = $spop3 == '' ? $default_spop3_ : $spop3 / 100;
				$spoa3 = $wpgs_options['spoa3'] == '' ? $default_spoa3 : $wpgs_options['spoa3'];
				$spoa3_ =  $spoa3 == '' ? $default_spoa3_ : $spoa3 / 100;
				$speaker_type_3 = $wpgs_options['speaker_type_3'] == '' ? $default_speaker_type_3 : $wpgs_options['speaker_type_3'];
				$speaker_size_3 = $wpgs_options['speaker_size_3'] == '' ? $default_speaker_size_3 : $wpgs_options['speaker_size_3'];
				$tooltip_3 = $wpgs_options['tooltip_3'] == '' ? $default_tooltip_3 : $wpgs_options['tooltip_3'];
				
			?>
			<style>
	  						.gspeech_selection_3 {background-color: <?php echo $bcp3;?>;color: <?php echo $cp3;?>}
	  						.gspeech_selection_3_hover {background-color: <?php echo $bca3;?>;color: <?php echo $ca3;?>}
	  					</style>
			<span class="gspeech_selection gspeech_selection_3 animate_item_passive">Live Preview (Style 3: Red)</span><span id="sound_container_3" roll="1" class="sound_container_pro gspeech_slider_pro speaker_<?php echo $speaker_type_3?> <?php echo $speaker_type_3?> size_<?php echo $speaker_size_3;?>" style="opacity: <?php echo $spop3_;?>;filter: alpha(opacity = <?php echo $spop3;?>);">&nbsp;</span>
			<span style="margin-left: 20px;" class="gspeech_selection gspeech_selection_3_hover animate_item_active">Live Preview (Style 3: Red) Active State</span><span id="sound_container_3_hover" roll="1" class="sound_container_pro hovered gspeech_slider_pro_hovered speaker_<?php echo $speaker_type_3?> <?php echo $speaker_type_3?> size_<?php echo $speaker_size_3;?>" style="opacity: <?php echo $spoa3_;?>;filter: alpha(opacity = <?php echo $spoa3;?>);">&nbsp;<span class="sexy_tooltip_title"><span class="the-tooltip top left <?php echo $tooltip_3;?>"><span class="tooltip_inner"><?php echo $speech_title;?></span></span></span></span>
		</div>
		<div style="margin: 15px 0 0 0">
			<select style="width: 96px;float: left;display: block;" name="wpgs_settings[speaker_type_3]" id="wpgs_settings[speaker_type_3]" class="speaker_type_select" roll="3">
				<?php 
					for($i = 1; $i <= 40; $i ++) {
						if($wpgs_options['speaker_type_3'] == 'speaker_'.$i) $selected = 'selected="selected"'; else $selected = '';
						if($i == $default_speaker_type_3 && $wpgs_options['speaker_type_3'] == '') $selected = 'selected="selected"';
						echo '<option value="speaker_'.$i.'" '.$selected.'>Speaker '.$i.'</option>';	
					}
				?>
			</select>
			<div style="display: block;float:left;width: 43px;height: 32px;position: relative;">
				<div class="next_speaker" style='-moz-user-select: none;-webkit-user-select: none;' onselectstart='return false;'>Next</div>
				<div class="prev_speaker" style='-moz-user-select: none;-webkit-user-select: none;' onselectstart='return false;'>Prev</div>
			</div>
			<label style="float: left;display: block;margin-top: 7px;" class="title" for="wpgs_settings[speaker_type_3]"><?php _e('Choose Speaker <span style="font-size: 12px;"><a style="color: #21759b" href="http://creative-solutions.net/wordpress/gspeech/asset#speakers" target="_blank">See speakers asset</a></span>', 'wpgs_domain'); ?></label>
		</div>
		<div style="clear: both;height: 1px;"></div>
		<div style="margin: 15px 0 0 0">
			<select style="width: 96px;float: left;display: block;" name="wpgs_settings[tooltip_3]" id="wpgs_settings[tooltip_3]" class="tooltip_select" roll="1">
				<?php 
					foreach($tooltips as $key => $val) {
						if($wpgs_options['tooltip_3'] == $key) $selected = 'selected="selected"'; else $selected = '';
						if($key == $default_tooltip_3 && $wpgs_options['tooltip_3'] == '') $selected = 'selected="selected"';
						echo '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';	
					}
				?>
			</select>
			<div style="display: block;float:left;width: 43px;height: 32px;position: relative;">
				<div class="next_tooltip" style='-moz-user-select: none;-webkit-user-select: none;' onselectstart='return false;'>Next</div>
				<div class="prev_tooltip" style='-moz-user-select: none;-webkit-user-select: none;' onselectstart='return false;'>Prev</div>
			</div>
			<label style="float: left;display: block;margin-top: 7px;" class="title" for="wpgs_settings[tooltip_3]"><?php _e('Choose Tooltip <span style="font-size: 12px;"><a style="color: #21759b" href="http://creative-solutions.net/wordpress/gspeech/asset#tooltips" target="_blank">See tooltips asset</a></span>', 'wpgs_domain'); ?></label>
		</div>
		<div style="clear: both;height: 1px;"></div>
		<div class="old_p">
			<label style="margin-right: 50px;">
				<?php $checked1 = (($wpgs_options['speaker_size_3'] == '' && $default_speaker_size_3 == 1) || $wpgs_options['speaker_size_3'] == 1) ? 'checked="checked"' : ''; ?>
				<?php $checked2 = ((isset($wpgs_options['speaker_size_3']) && $wpgs_options['speaker_size_3'] == 0) || ($wpgs_options['speaker_size_3'] == '' && $default_speaker_size_3 == 0)) ? 'checked="checked"' : ''; ?>
				<input roll="3" class="speaker_size_radio" id="wpgs_settings[speaker_size_31]" name="wpgs_settings[speaker_size_3]" type="radio" value="1" <?php echo $checked1;?> /> 
				<label class="title" for="wpgs_settings[speaker_size_31]"><?php _e('Big', 'wpgs_domain'); ?></label>
				<input roll="3" class="speaker_size_radio" id="wpgs_settings[speaker_size_32]" name="wpgs_settings[speaker_size_3]" type="radio" value="0" <?php echo $checked2;?> /> 
				<label class="title" for="wpgs_settings[speaker_size_32]"><?php _e('Small', 'wpgs_domain'); ?></label>
			</label>
			<label class="title">Speaker Size</label>
		</div>
		<div class="old_p">
			<div class="selector_wrapper">
				<?php $value = $wpgs_options['bcp3'] == '' ? $default_bcp3 : $wpgs_options['bcp3']?>
			 	<div id="colorSelector" class="colorSelector" style="float: left;"><div style="background-color: <?php echo $value;?>"></div></div>
				<input roll="2" readonly="readonly" style="margin-top: 6px;width: 101px;background-color: #fff" id="wpgs_settings[bcp3]" name="wpgs_settings[bcp3]" type="text" value="<?php echo $value; ?>" class="colorSelector" />
				<label class="title" for="wpgs_settings[bcp3]"><?php _e('Audio Block Background Color, Passive State', 'wpgs_domain'); ?></label>
			</div>
		</div>
		<div class="old_p">
			<div class="selector_wrapper">
				<?php $value = $wpgs_options['cp3'] == '' ? $default_cp3 : $wpgs_options['cp3']?>
				<div id="colorSelector" class="colorSelector" style="float: left;"><div style="background-color: <?php echo $value;?>"></div></div>
				<input roll="3" readonly="readonly" style="margin-top: 6px;width: 101px;background-color: #fff" id="wpgs_settings[cp3]" name="wpgs_settings[cp3]" type="text" value="<?php echo $value; ?>" class="colorSelector" />
				<label class="title" for="wpgs_settings[cp3]"><?php _e('Audio Block Text Color, Passive State', 'wpgs_domain'); ?></label>
			</div>
		</div>
		<div class="old_p">
			<div class="selector_wrapper">
				<?php $value = $wpgs_options['bca3'] == '' ? $default_bca3 : $wpgs_options['bca3']?>
				<div id="colorSelector" class="colorSelector" style="float: left;"><div style="background-color: <?php echo $value;?>"></div></div>
				<input roll="4" readonly="readonly" style="margin-top: 6px;width: 101px;background-color: #fff" id="wpgs_settings[bca3]" name="wpgs_settings[bca3]" type="text" value="<?php echo $value; ?>" class="colorSelector" />
				<label class="title" for="wpgs_settings[bca3]"><?php _e('Audio Block Background Color, Active State(User Hover The Speaker, or Click on it).', 'wpgs_domain'); ?></label>
			</div>
		</div>
		<div class="old_p">
			<div class="selector_wrapper">
				<?php $value = $wpgs_options['ca3'] == '' ? $default_ca3 : $wpgs_options['ca3']?>
				<div id="colorSelector" class="colorSelector" style="float: left;"><div style="background-color: <?php echo $value;?>"></div></div>
				<input roll="5" readonly="readonly" style="margin-top: 6px;width: 101px;background-color: #fff" id="wpgs_settings[ca3]" name="wpgs_settings[ca3]" type="text" value="<?php echo $value; ?>" class="colorSelector" />
				<label class="title" for="wpgs_settings[ca3]"><?php _e('Audio Block Text Color, Active State(User Hover The Speaker, or Click on it).', 'wpgs_domain'); ?></label>
			</div>
		</div>
		<div class="old_p">
			<?php $opacities = array('10','20','30','40','50','60','70','80','90','100'); ?>
			<select style="width: 136px;margin-bottom: 8px" name="wpgs_settings[spop3]" id="slider_select31" class="slider_select_1">
				<?php foreach($opacities as $opacity) { ?>
					<?php if($wpgs_options['spop3'] == $opacity) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
					<?php if($opacity == $default_spop3 && $wpgs_options['spop3'] == '') { $selected = 'selected="selected"'; }?>
					<option value="<?php echo $opacity; ?>" <?php echo $selected; ?>><?php echo $opacity; ?>%</option>
				<?php } ?>
			</select>
			<label class="title" for="wpgs_settings[spop3]"><?php _e('Speaker Icon Opacity, Passive State', 'wpgs_domain'); ?></label>
		</div>
		<div class="old_p">
			<?php $opacities = array('10','20','30','40','50','60','70','80','90','100'); ?>
			<select style="width: 136px;margin-bottom: 8px" name="wpgs_settings[spoa3]" id="slider_select32"  class="slider_select_2">
				<?php foreach($opacities as $opacity) { ?>
					<?php if($wpgs_options['spoa3'] == $opacity) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
					<?php if($opacity == $default_spoa3 && $wpgs_options['spoa3'] == '') { $selected = 'selected="selected"'; }?>
					<option value="<?php echo $opacity; ?>" <?php echo $selected; ?>><?php echo $opacity; ?>%</option>
				<?php } ?>
			</select>
			<label class="title" for="wpgs_settings[spoa3]"><?php _e('Speaker Icon Opacity, Active State', 'wpgs_domain'); ?></label>
		</div>
		<div class="old_p">
			<?php $opacities = array('0','100','200','300','400','500','600','700','800','900','1000','1100','1200'); ?>
			<select style="width: 136px;margin-bottom: 8px" name="wpgs_settings[animation_time_3]" id="slider_select33"  class="slider_select_3">
				<?php foreach($opacities as $opacity) { ?>
					<?php if($wpgs_options['animation_time_3'] == $opacity) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
					<?php if($opacity == $default_animation_time_3 && $wpgs_options['animation_time_3'] == '') { $selected = 'selected="selected"'; }?>
					<option value="<?php echo $opacity; ?>" <?php echo $selected; ?>><?php echo $opacity; ?></option>
				<?php } ?>
			</select>
			<label class="title" for="wpgs_settings[animation_time_3]"><?php _e('Time Between Switching Passive And Active States, In miliseconds.', 'wpgs_domain'); ?></label>
		</div>
	</div>
<!-- **********************************************************Accordion 4************************************************************************************************************************************************ -->
	<h3 style="margin-bottom: -3px;"><?php _e('Style 4 (Green)', 'wpgs_domain'); ?></h3>
	<div>
		<div class="speaker_preview">
			<?php 
				$bcp4 = $wpgs_options['bcp4'] == '' ? $default_bcp4 : $wpgs_options['bcp4'];
				$cp4 = $wpgs_options['cp4'] == '' ? $default_cp4 : $wpgs_options['cp4'];
				$bca4 = $wpgs_options['bca4'] == '' ? $default_bca4 : $wpgs_options['bca4'];
				$ca4 = $wpgs_options['ca4'] == '' ? $default_ca4 : $wpgs_options['ca4'];
				$spop4 = $wpgs_options['spop4'] == '' ? $default_spop4 : $wpgs_options['spop4'];
				$spop4_ = $spop4 == '' ? $default_spop4_ : $spop4 / 100;
				$spoa4 = $wpgs_options['spoa4'] == '' ? $default_spoa4 : $wpgs_options['spoa4'];
				$spoa4_ =  $spoa4 == '' ? $default_spoa4_ : $spoa4 / 100;
				$speaker_type_4 = $wpgs_options['speaker_type_4'] == '' ? $default_speaker_type_4 : $wpgs_options['speaker_type_4'];
				$speaker_size_4 = $wpgs_options['speaker_size_4'] == '' ? $default_speaker_size_4 : $wpgs_options['speaker_size_4'];
				$tooltip_4 = $wpgs_options['tooltip_4'] == '' ? $default_tooltip_4 : $wpgs_options['tooltip_4'];
				
			?>
			<style>
  						.gspeech_selection_4 {background-color: <?php echo $bcp4;?>;color: <?php echo $cp4;?>}
  						.gspeech_selection_4_hover {background-color: <?php echo $bca4;?>;color: <?php echo $ca4;?>}
  					</style>
			<span class="gspeech_selection gspeech_selection_4 animate_item_passive">Live Preview (Style 4: Green)</span><span id="sound_container_4" roll="1" class="sound_container_pro gspeech_slider_pro speaker_<?php echo $speaker_type_4?> <?php echo $speaker_type_4?> size_<?php echo $speaker_size_4;?>" style="opacity: <?php echo $spop4_;?>;filter: alpha(opacity = <?php echo $spop4;?>);">&nbsp;</span>
			<span style="margin-left: 20px;" class="gspeech_selection gspeech_selection_4_hover animate_item_active">Live Preview (Style 4: Green) Active State</span><span id="sound_container_4_hover" roll="1" class="sound_container_pro hovered gspeech_slider_pro_hovered speaker_<?php echo $speaker_type_4?> <?php echo $speaker_type_4?> size_<?php echo $speaker_size_4;?>" style="opacity: <?php echo $spoa4_;?>;filter: alpha(opacity = <?php echo $spoa4;?>);">&nbsp;<span class="sexy_tooltip_title"><span class="the-tooltip top left <?php echo $tooltip_4;?>"><span class="tooltip_inner"><?php echo $speech_title;?></span></span></span></span>
		</div>
		<div style="margin: 15px 0 0 0">
			<select style="width: 96px;float: left;display: block;" name="wpgs_settings[speaker_type_4]" id="wpgs_settings[speaker_type_4]" class="speaker_type_select" roll="4">
				<?php 
					for($i = 1; $i <= 40; $i ++) {
						if($wpgs_options['speaker_type_4'] == 'speaker_'.$i) $selected = 'selected="selected"'; else $selected = '';
						if($i == $default_speaker_type_4 && $wpgs_options['speaker_type_4'] == '') $selected = 'selected="selected"';
						echo '<option value="speaker_'.$i.'" '.$selected.'>Speaker '.$i.'</option>';	
					}
				?>
			</select>
			<div style="display: block;float:left;width: 43px;height: 32px;position: relative;">
				<div class="next_speaker" style='-moz-user-select: none;-webkit-user-select: none;' onselectstart='return false;'>Next</div>
				<div class="prev_speaker" style='-moz-user-select: none;-webkit-user-select: none;' onselectstart='return false;'>Prev</div>
			</div>
			<label style="float: left;display: block;margin-top: 7px;" class="title" for="wpgs_settings[speaker_type_4]"><?php _e('Choose Speaker <span style="font-size: 12px;"><a style="color: #21759b" href="http://creative-solutions.net/wordpress/gspeech/asset#speakers" target="_blank">See speakers asset</a></span>', 'wpgs_domain'); ?></label>
		</div>
		<div style="clear: both;height: 1px;"></div>
		<div style="margin: 15px 0 0 0">
			<select style="width: 96px;float: left;display: block;" name="wpgs_settings[tooltip_4]" id="wpgs_settings[tooltip_4]" class="tooltip_select" roll="4">
				<?php 
					foreach($tooltips as $key => $val) {
						if($wpgs_options['tooltip_4'] == $key) $selected = 'selected="selected"'; else $selected = '';
						if($key == $default_tooltip_4 && $wpgs_options['tooltip_4'] == '') $selected = 'selected="selected"';
						echo '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';	
					}
				?>
			</select>
			<div style="display: block;float:left;width: 43px;height: 32px;position: relative;">
				<div class="next_tooltip" style='-moz-user-select: none;-webkit-user-select: none;' onselectstart='return false;'>Next</div>
				<div class="prev_tooltip" style='-moz-user-select: none;-webkit-user-select: none;' onselectstart='return false;'>Prev</div>
			</div>
			<label style="float: left;display: block;margin-top: 7px;" class="title" for="wpgs_settings[tooltip_4]"><?php _e('Choose Tooltip <span style="font-size: 12px;"><a style="color: #21759b" href="http://creative-solutions.net/wordpress/gspeech/asset#tooltips" target="_blank">See tooltips asset</a></span>', 'wpgs_domain'); ?></label>
		</div>
		<div style="clear: both;height: 1px;"></div>
		<div class="old_p">
			<label style="margin-right: 50px;">
				<?php $checked1 = (($wpgs_options['speaker_size_4'] == '' && $default_speaker_size_4 == 1) || $wpgs_options['speaker_size_4'] == 1) ? 'checked="checked"' : ''; ?>
				<?php $checked2 = ((isset($wpgs_options['speaker_size_4']) && $wpgs_options['speaker_size_4'] == 0) || ($wpgs_options['speaker_size_4'] == '' && $default_speaker_size_4 == 0)) ? 'checked="checked"' : ''; ?>
				<input roll="4" class="speaker_size_radio" id="wpgs_settings[speaker_size_41]" name="wpgs_settings[speaker_size_4]" type="radio" value="1" <?php echo $checked1;?> /> 
				<label class="title" for="wpgs_settings[speaker_size_41]"><?php _e('Big', 'wpgs_domain'); ?></label>
				<input roll="4" class="speaker_size_radio" id="wpgs_settings[speaker_size_42]" name="wpgs_settings[speaker_size_4]" type="radio" value="0" <?php echo $checked2;?> /> 
				<label class="title" for="wpgs_settings[speaker_size_42]"><?php _e('Small', 'wpgs_domain'); ?></label>
			</label>
			<label class="title">Speaker Size</label>
		</div>
		<div class="old_p">
			<div class="selector_wrapper">
				<?php $value = $wpgs_options['bcp4'] == '' ? $default_bcp4 : $wpgs_options['bcp4']?>
			 	<div id="colorSelector" class="colorSelector" style="float: left;"><div style="background-color: <?php echo $value;?>"></div></div>
				<input roll="2" readonly="readonly" style="margin-top: 6px;width: 101px;background-color: #fff" id="wpgs_settings[bcp4]" name="wpgs_settings[bcp4]" type="text" value="<?php echo $value; ?>" class="colorSelector" />
				<label class="title" for="wpgs_settings[bcp4]"><?php _e('Audio Block Background Color, Passive State', 'wpgs_domain'); ?></label>
			</div>
		</div>
		<div class="old_p">
			<div class="selector_wrapper">
				<?php $value = $wpgs_options['cp4'] == '' ? $default_cp4 : $wpgs_options['cp4']?>
				<div id="colorSelector" class="colorSelector" style="float: left;"><div style="background-color: <?php echo $value;?>"></div></div>
				<input roll="3" readonly="readonly" style="margin-top: 6px;width: 101px;background-color: #fff" id="wpgs_settings[cp4]" name="wpgs_settings[cp4]" type="text" value="<?php echo $value; ?>" class="colorSelector" />
				<label class="title" for="wpgs_settings[cp4]"><?php _e('Audio Block Text Color, Passive State', 'wpgs_domain'); ?></label>
			</div>
		</div>
		<div class="old_p">
			<div class="selector_wrapper">
				<?php $value = $wpgs_options['bca4'] == '' ? $default_bca4 : $wpgs_options['bca4']?>
				<div id="colorSelector" class="colorSelector" style="float: left;"><div style="background-color: <?php echo $value;?>"></div></div>
				<input roll="4" readonly="readonly" style="margin-top: 6px;width: 101px;background-color: #fff" id="wpgs_settings[bca4]" name="wpgs_settings[bca4]" type="text" value="<?php echo $value; ?>" class="colorSelector" />
				<label class="title" for="wpgs_settings[bca4]"><?php _e('Audio Block Background Color, Active State(User Hover The Speaker, or Click on it).', 'wpgs_domain'); ?></label>
			</div>
		</div>
		<div class="old_p">
			<div class="selector_wrapper">
				<?php $value = $wpgs_options['ca4'] == '' ? $default_ca4 : $wpgs_options['ca4']?>
				<div id="colorSelector" class="colorSelector" style="float: left;"><div style="background-color: <?php echo $value;?>"></div></div>
				<input roll="5" readonly="readonly" style="margin-top: 6px;width: 101px;background-color: #fff" id="wpgs_settings[ca4]" name="wpgs_settings[ca4]" type="text" value="<?php echo $value; ?>" class="colorSelector" />
				<label class="title" for="wpgs_settings[ca4]"><?php _e('Audio Block Text Color, Active State(User Hover The Speaker, or Click on it).', 'wpgs_domain'); ?></label>
			</div>
		</div>
		<div class="old_p">
			<?php $opacities = array('10','20','30','40','50','60','70','80','90','100'); ?>
			<select style="width: 136px;margin-bottom: 8px" name="wpgs_settings[spop4]" id="slider_select41" class="slider_select_1">
				<?php foreach($opacities as $opacity) { ?>
					<?php if($wpgs_options['spop4'] == $opacity) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
					<?php if($opacity == $default_spop4 && $wpgs_options['spop4'] == '') { $selected = 'selected="selected"'; }?>
					<option value="<?php echo $opacity; ?>" <?php echo $selected; ?>><?php echo $opacity; ?>%</option>
				<?php } ?>
			</select>
			<label class="title" for="wpgs_settings[spop4]"><?php _e('Speaker Icon Opacity, Passive State', 'wpgs_domain'); ?></label>
		</div>
		<div class="old_p">
			<?php $opacities = array('10','20','30','40','50','60','70','80','90','100'); ?>
			<select style="width: 136px;margin-bottom: 8px" name="wpgs_settings[spoa4]" id="slider_select42"  class="slider_select_2">
				<?php foreach($opacities as $opacity) { ?>
					<?php if($wpgs_options['spoa4'] == $opacity) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
					<?php if($opacity == $default_spoa4 && $wpgs_options['spoa4'] == '') { $selected = 'selected="selected"'; }?>
					<option value="<?php echo $opacity; ?>" <?php echo $selected; ?>><?php echo $opacity; ?>%</option>
				<?php } ?>
			</select>
			<label class="title" for="wpgs_settings[spoa4]"><?php _e('Speaker Icon Opacity, Active State', 'wpgs_domain'); ?></label>
		</div>
		<div class="old_p">
			<?php $opacities = array('0','100','200','300','400','500','600','700','800','900','1000','1100','1200'); ?>
			<select style="width: 136px;margin-bottom: 8px" name="wpgs_settings[animation_time_4]" id="slider_select43"  class="slider_select_3">
				<?php foreach($opacities as $opacity) { ?>
					<?php if($wpgs_options['animation_time_4'] == $opacity) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
					<?php if($opacity == $default_animation_time_4 && $wpgs_options['animation_time_4'] == '') { $selected = 'selected="selected"'; }?>
					<option value="<?php echo $opacity; ?>" <?php echo $selected; ?>><?php echo $opacity; ?></option>
				<?php } ?>
			</select>
			<label class="title" for="wpgs_settings[animation_time_4]"><?php _e('Time Between Switching Passive And Active States, In miliseconds.', 'wpgs_domain'); ?></label>
		</div>
	</div>
<!-- **********************************************************Accordion 5************************************************************************************************************************************************ -->
	<h3 style="margin-bottom: -3px;"><?php _e('Style 5 (Orange)', 'wpgs_domain'); ?></h3>
	<div>
		<div class="speaker_preview">
			<?php 
				$bcp5 = $wpgs_options['bcp5'] == '' ? $default_bcp5 : $wpgs_options['bcp5'];
				$cp5 = $wpgs_options['cp5'] == '' ? $default_cp5 : $wpgs_options['cp5'];
				$bca5 = $wpgs_options['bca5'] == '' ? $default_bca5 : $wpgs_options['bca5'];
				$ca5 = $wpgs_options['ca5'] == '' ? $default_ca5 : $wpgs_options['ca5'];
				$spop5 = $wpgs_options['spop5'] == '' ? $default_spop5 : $wpgs_options['spop5'];
				$spop5_ = $spop5 == '' ? $default_spop5_ : $spop5 / 100;
				$spoa5 = $wpgs_options['spoa5'] == '' ? $default_spoa5 : $wpgs_options['spoa5'];
				$spoa5_ =  $spoa5 == '' ? $default_spoa5_ : $spoa5 / 100;
				$speaker_type_5 = $wpgs_options['speaker_type_5'] == '' ? $default_speaker_type_5 : $wpgs_options['speaker_type_5'];
				$speaker_size_5 = $wpgs_options['speaker_size_5'] == '' ? $default_speaker_size_5 : $wpgs_options['speaker_size_5'];
				$tooltip_5 = $wpgs_options['tooltip_5'] == '' ? $default_tooltip_5 : $wpgs_options['tooltip_5'];
				
			?>
			<style>
  						.gspeech_selection_5 {background-color: <?php echo $bcp5;?>;color: <?php echo $cp5;?>}
  						.gspeech_selection_5_hover {background-color: <?php echo $bca5;?>;color: <?php echo $ca5;?>}
  					</style>
			<span class="gspeech_selection gspeech_selection_5 animate_item_passive">Live Preview (Style 5: Orange)</span><span id="sound_container_5" roll="1" class="sound_container_pro gspeech_slider_pro speaker_<?php echo $speaker_type_5?> <?php echo $speaker_type_5?> size_<?php echo $speaker_size_5;?>" style="opacity: <?php echo $spop5_;?>;filter: alpha(opacity = <?php echo $spop5;?>);">&nbsp;</span>
			<span style="margin-left: 20px;" class="gspeech_selection gspeech_selection_5_hover animate_item_active">Live Preview (Style 5: Orange) Active State</span><span id="sound_container_5_hover" roll="1" class="sound_container_pro hovered gspeech_slider_pro_hovered speaker_<?php echo $speaker_type_5?> <?php echo $speaker_type_5?> size_<?php echo $speaker_size_5;?>" style="opacity: <?php echo $spoa5_;?>;filter: alpha(opacity = <?php echo $spoa5;?>);">&nbsp;<span class="sexy_tooltip_title"><span class="the-tooltip top left <?php echo $tooltip_5;?>"><span class="tooltip_inner"><?php echo $speech_title;?></span></span></span></span>
		</div>
		<div style="margin: 15px 0 0 0">
			<select style="width: 96px;float: left;display: block;" name="wpgs_settings[speaker_type_5]" id="wpgs_settings[speaker_type_5]" class="speaker_type_select" roll="5">
				<?php 
					for($i = 1; $i <= 40; $i ++) {
						if($wpgs_options['speaker_type_5'] == 'speaker_'.$i) $selected = 'selected="selected"'; else $selected = '';
						if($i == $default_speaker_type_5 && $wpgs_options['speaker_type_5'] == '') $selected = 'selected="selected"';
						echo '<option value="speaker_'.$i.'" '.$selected.'>Speaker '.$i.'</option>';	
					}
				?>
			</select>
			<div style="display: block;float:left;width: 43px;height: 32px;position: relative;">
				<div class="next_speaker" style='-moz-user-select: none;-webkit-user-select: none;' onselectstart='return false;'>Next</div>
				<div class="prev_speaker" style='-moz-user-select: none;-webkit-user-select: none;' onselectstart='return false;'>Prev</div>
			</div>
			<label style="float: left;display: block;margin-top: 7px;" class="title" for="wpgs_settings[speaker_type_5]"><?php _e('Choose Speaker <span style="font-size: 12px;"><a style="color: #21759b" href="http://creative-solutions.net/wordpress/gspeech/asset#speakers" target="_blank">See speakers asset</a></span>', 'wpgs_domain'); ?></label>
		</div>
		<div style="clear: both;height: 1px;"></div>
		<div style="margin: 15px 0 0 0">
			<select style="width: 96px;float: left;display: block;" name="wpgs_settings[tooltip_5]" id="wpgs_settings[tooltip_5]" class="tooltip_select" roll="5">
				<?php 
					foreach($tooltips as $key => $val) {
						if($wpgs_options['tooltip_5'] == $key) $selected = 'selected="selected"'; else $selected = '';
						if($key == $default_tooltip_5 && $wpgs_options['tooltip_5'] == '') $selected = 'selected="selected"';
						echo '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';	
					}
				?>
			</select>
			<div style="display: block;float:left;width: 43px;height: 32px;position: relative;">
				<div class="next_tooltip" style='-moz-user-select: none;-webkit-user-select: none;' onselectstart='return false;'>Next</div>
				<div class="prev_tooltip" style='-moz-user-select: none;-webkit-user-select: none;' onselectstart='return false;'>Prev</div>
			</div>
			<label style="float: left;display: block;margin-top: 7px;" class="title" for="wpgs_settings[tooltip_5]"><?php _e('Choose Tooltip <span style="font-size: 12px;"><a style="color: #21759b" href="http://creative-solutions.net/wordpress/gspeech/asset#tooltips" target="_blank">See tooltips asset</a></span>', 'wpgs_domain'); ?></label>
		</div>
		<div style="clear: both;height: 1px;"></div>
		<div class="old_p">
			<label style="margin-right: 50px;">
				<?php $checked1 = (($wpgs_options['speaker_size_5'] == '' && $default_speaker_size_5 == 1) || $wpgs_options['speaker_size_5'] == 1) ? 'checked="checked"' : ''; ?>
				<?php $checked2 = ((isset($wpgs_options['speaker_size_5']) && $wpgs_options['speaker_size_5'] == 0) || ($wpgs_options['speaker_size_5'] == '' && $default_speaker_size_5 == 0)) ? 'checked="checked"' : ''; ?>
				<input roll="5" class="speaker_size_radio" id="wpgs_settings[speaker_size_51]" name="wpgs_settings[speaker_size_5]" type="radio" value="1" <?php echo $checked1;?> /> 
				<label class="title" for="wpgs_settings[speaker_size_51]"><?php _e('Big', 'wpgs_domain'); ?></label>
				<input roll="5" class="speaker_size_radio" id="wpgs_settings[speaker_size_52]" name="wpgs_settings[speaker_size_5]" type="radio" value="0" <?php echo $checked2;?> /> 
				<label class="title" for="wpgs_settings[speaker_size_52]"><?php _e('Small', 'wpgs_domain'); ?></label>
			</label>
			<label class="title">Speaker Size</label>
		</div>
		<div class="old_p">
			<div class="selector_wrapper">
				<?php $value = $wpgs_options['bcp5'] == '' ? $default_bcp5 : $wpgs_options['bcp5']?>
			 	<div id="colorSelector" class="colorSelector" style="float: left;"><div style="background-color: <?php echo $value;?>"></div></div>
				<input roll="2" readonly="readonly" style="margin-top: 6px;width: 101px;background-color: #fff" id="wpgs_settings[bcp5]" name="wpgs_settings[bcp5]" type="text" value="<?php echo $value; ?>" class="colorSelector" />
				<label class="title" for="wpgs_settings[bcp5]"><?php _e('Audio Block Background Color, Passive State', 'wpgs_domain'); ?></label>
			</div>
		</div>
		<div class="old_p">
			<div class="selector_wrapper">
				<?php $value = $wpgs_options['cp5'] == '' ? $default_cp5 : $wpgs_options['cp5']?>
				<div id="colorSelector" class="colorSelector" style="float: left;"><div style="background-color: <?php echo $value;?>"></div></div>
				<input roll="3" readonly="readonly" style="margin-top: 6px;width: 101px;background-color: #fff" id="wpgs_settings[cp5]" name="wpgs_settings[cp5]" type="text" value="<?php echo $value; ?>" class="colorSelector" />
				<label class="title" for="wpgs_settings[cp5]"><?php _e('Audio Block Text Color, Passive State', 'wpgs_domain'); ?></label>
			</div>
		</div>
		<div class="old_p">
			<div class="selector_wrapper">
				<?php $value = $wpgs_options['bca5'] == '' ? $default_bca5 : $wpgs_options['bca5']?>
				<div id="colorSelector" class="colorSelector" style="float: left;"><div style="background-color: <?php echo $value;?>"></div></div>
				<input roll="4" readonly="readonly" style="margin-top: 6px;width: 101px;background-color: #fff" id="wpgs_settings[bca5]" name="wpgs_settings[bca5]" type="text" value="<?php echo $value; ?>" class="colorSelector" />
				<label class="title" for="wpgs_settings[bca5]"><?php _e('Audio Block Background Color, Active State(User Hover The Speaker, or Click on it).', 'wpgs_domain'); ?></label>
			</div>
		</div>
		<div class="old_p">
			<div class="selector_wrapper">
				<?php $value = $wpgs_options['ca5'] == '' ? $default_ca5 : $wpgs_options['ca5']?>
				<div id="colorSelector" class="colorSelector" style="float: left;"><div style="background-color: <?php echo $value;?>"></div></div>
				<input roll="5" readonly="readonly" style="margin-top: 6px;width: 101px;background-color: #fff" id="wpgs_settings[ca5]" name="wpgs_settings[ca5]" type="text" value="<?php echo $value; ?>" class="colorSelector" />
				<label class="title" for="wpgs_settings[ca5]"><?php _e('Audio Block Text Color, Active State(User Hover The Speaker, or Click on it).', 'wpgs_domain'); ?></label>
			</div>
		</div>
		<div class="old_p">
			<?php $opacities = array('10','20','30','40','50','60','70','80','90','100'); ?>
			<select style="width: 136px;margin-bottom: 8px" name="wpgs_settings[spop5]" id="slider_select51" class="slider_select_1">
				<?php foreach($opacities as $opacity) { ?>
					<?php if($wpgs_options['spop5'] == $opacity) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
					<?php if($opacity == $default_spop5 && $wpgs_options['spop5'] == '') { $selected = 'selected="selected"'; }?>
					<option value="<?php echo $opacity; ?>" <?php echo $selected; ?>><?php echo $opacity; ?>%</option>
				<?php } ?>
			</select>
			<label class="title" for="wpgs_settings[spop5]"><?php _e('Speaker Icon Opacity, Passive State', 'wpgs_domain'); ?></label>
		</div>
		<div class="old_p">
			<?php $opacities = array('10','20','30','40','50','60','70','80','90','100'); ?>
			<select style="width: 136px;margin-bottom: 8px" name="wpgs_settings[spoa5]" id="slider_select52"  class="slider_select_2">
				<?php foreach($opacities as $opacity) { ?>
					<?php if($wpgs_options['spoa5'] == $opacity) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
					<?php if($opacity == $default_spoa5 && $wpgs_options['spoa5'] == '') { $selected = 'selected="selected"'; }?>
					<option value="<?php echo $opacity; ?>" <?php echo $selected; ?>><?php echo $opacity; ?>%</option>
				<?php } ?>
			</select>
			<label class="title" for="wpgs_settings[spoa5]"><?php _e('Speaker Icon Opacity, Active State', 'wpgs_domain'); ?></label>
		</div>
		<div class="old_p">
			<?php $opacities = array('0','100','200','300','400','500','600','700','800','900','1000','1100','1200'); ?>
			<select style="width: 136px;margin-bottom: 8px" name="wpgs_settings[animation_time_5]" id="slider_select53"  class="slider_select_3">
				<?php foreach($opacities as $opacity) { ?>
					<?php if($wpgs_options['animation_time_5'] == $opacity) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
					<?php if($opacity == $default_animation_time_5 && $wpgs_options['animation_time_5'] == '') { $selected = 'selected="selected"'; }?>
					<option value="<?php echo $opacity; ?>" <?php echo $selected; ?>><?php echo $opacity; ?></option>
				<?php } ?>
			</select>
			<label class="title" for="wpgs_settings[animation_time_5]"><?php _e('Time Between Switching Passive And Active States, In miliseconds.', 'wpgs_domain'); ?></label>
		</div>
	</div>
</div>
