(function($) {
$(document).ready(function() {
	
	$("#wpgs_accordion").accordion({
	      collapsible: true,
	      heightStyle: "content"
	});
	$("#wpgs_tabs").tabs();
	
	$('.speaker_type_select').change(function() {
		var roll = $(this).attr("roll");
		var val = $(this).val();
		
		var size_ident = $('input[name="wpgs_settings\\[speaker_size_' + roll + '\\]"]:checked').val();
		$("#sound_container_" + roll).attr("class","").addClass("sound_container_pro gspeech_slider_pro").addClass(val).addClass("size_" + size_ident);
		$("#sound_container_" + roll + '_hover').attr("class","").addClass("sound_container_pro hovered gspeech_slider_pro_hovered").addClass(val).addClass("size_" + size_ident);
	});
	
	$('.speaker_size_radio').change(function() {
		var roll = $(this).attr("roll");
		var val = $(this).val();
		
		speaker_type = $('select[name="wpgs_settings\\[speaker_type_' + roll + '\\]"]').val();
		$("#sound_container_" + roll).attr("class","").addClass("sound_container_pro gspeech_slider_pro").addClass(speaker_type).addClass("size_" + val);
		$("#sound_container_" + roll + '_hover').attr("class","").addClass("sound_container_pro hovered gspeech_slider_pro_hovered").addClass(speaker_type).addClass("size_" + val);
	});
	
	$('.next_speaker').click(function() {
		var select = $(this).parent('div').prev('select');
		var val = select.val();
		var int_val_array = val.split('_');
		var int_val = int_val_array[1];
		var new_val = int_val == 40 ? 1 : int_val*1 + 1*1;
		var new_val_selected = 'speaker_' + new_val;
		select.val(new_val_selected);
		select.trigger("change");
	});
	$('.prev_speaker').click(function() {
		var select = $(this).parent('div').prev('select');
		var val = select.val();
		var int_val_array = val.split('_');
		var int_val = int_val_array[1];
		var new_val = int_val == 1 ? 40 : int_val*1 - 1*1;
		var new_val_selected = 'speaker_' + new_val;
		select.val(new_val_selected);
		select.trigger("change");
	});
	
	$('.tooltip_select').change(function() {
		var val = $(this).val();
		
		var new_class = 'the-tooltip top left ' + val;
		var $tooltip = $(this).parents('.ui-accordion-content').find('.the-tooltip');
		$tooltip.attr("class",new_class);
	});
	
	$('.next_tooltip').click(function() {
		var select = $(this).parent('div').prev('select');
		var val = select.val();
		var next_elem = select.children('option:selected').next().val();
		if(typeof next_elem === 'undefined')
			next_elem = select.children('option:first').val();
		select.val(next_elem);
		select.trigger("change");
	});
	$('.prev_tooltip').click(function() {
		var select = $(this).parent('div').prev('select');
		var val = select.val();
		var prev_elem = select.children('option:selected').prev().val();
		if(typeof prev_elem === 'undefined') {
			prev_elem = select.children('option:last').val();
		}
		select.val(prev_elem);
		select.trigger("change");
	});
	
	var active_element;
	$('.colorSelector').click(function() {
		active_element = $(this).parent('.selector_wrapper');
	})
	
	$('.colorSelector').ColorPicker({
		onBeforeShow: function () {
			$color = active_element.find('input').val();
			$(this).ColorPickerSetColor($color);
		},
		onShow: function (colpkr) {
			$(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			$(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			active_element.children('div').children('div').css('backgroundColor', '#' + hex);
			active_element.find('input').val('#' + hex);
			roll = active_element.find('input').attr('roll');
			
			if(roll == 2) {
				var elem = active_element.parent('div').parent('div').find('.animate_item_passive');
				elem.css('backgroundColor' , '#' + hex);
			}
			else if(roll == 3) {
				var elem = active_element.parent('div').parent('div').find('.animate_item_passive');
				elem.css('color' , '#' + hex);
			}
			else if(roll == 4) {
				var elem = active_element.parent('div').parent('div').find('.animate_item_active');
				elem.css('backgroundColor' , '#' + hex);
			}
			else if(roll == 5) {
				var elem = active_element.parent('div').parent('div').find('.animate_item_active');
				elem.css('color' , '#' + hex);
			}
		}
	});
	
    $('.slider_select_1').change(function() {
    	var val = $(this).val() / 100;
    	var elem = $(this).parent('div').parent('div').find('.gspeech_slider_pro');
    	elem.css('opacity',val);
    });
    $('.slider_select_2').change(function() {
    	var val = $(this).val() / 100;
    	var elem = $(this).parent('div').parent('div').find('.gspeech_slider_pro_hovered');
    	elem.css('opacity',val);
    });

	//sliders
    //slider style1/////////////////////////////////////////////////////////////////////////////////////////////////////////////
    var select11 = $( "#slider_select11" );
    var place11 = select11.next('label');
    var slider11 = $( "<div id='slider_11' class='wpgs_slider'></div>" ).insertAfter( place11 ).slider({
      min: 1,
      max: 10,
      range: "min",
      value: select11[ 0 ].selectedIndex + 1,
      slide: function( event, ui ) {
        select11[ 0 ].selectedIndex = ui.value - 1;
        select11.trigger("change");
      }
    });
    $( "#slider_select11" ).change(function() {
      slider11.slider( "value", this.selectedIndex + 1 );
    });
	
    var select12 = $( "#slider_select12" );
    var place12 = select12.next('label');
    var slider12 = $( "<div id='slider_12' class='wpgs_slider'></div>" ).insertAfter( place12 ).slider({
    	min: 1,
    	max: 10,
    	range: "min",
    	value: select12[ 0 ].selectedIndex + 1,
    	slide: function( event, ui ) {
    		select12[ 0 ].selectedIndex = ui.value - 1;
    		select12.trigger("change");
    	}
    });
    $( "#slider_select12" ).change(function() {
    	slider12.slider( "value", this.selectedIndex + 1 );
    });
    
    var select13 = $( "#slider_select13" );
    var place13 = select13.next('label');
    var slider13 = $( "<div id='slider_13' class='wpgs_slider'></div>" ).insertAfter( place13 ).slider({
    	min: 1,
    	max: 13,
    	range: "min",
    	value: select13[ 0 ].selectedIndex + 1,
    	slide: function( event, ui ) {
    		select13[ 0 ].selectedIndex = ui.value - 1;
    	}
    });
    $( "#slider_select13" ).change(function() {
    	slider13.slider( "value", this.selectedIndex + 1 );
    });
    //slider style2/////////////////////////////////////////////////////////////////////////////////////////////////////////////
    var select21 = $( "#slider_select21" );
    var place21 = select21.next('label');
    var slider21 = $( "<div id='slider_22' class='wpgs_slider'></div>" ).insertAfter( place21 ).slider({
    	min: 1,
    	max: 10,
    	range: "min",
    	value: select21[ 0 ].selectedIndex + 1,
    	slide: function( event, ui ) {
    		select21[ 0 ].selectedIndex = ui.value - 1;
    		select21.trigger("change");
    	}
    });
    $( "#slider_select21" ).change(function() {
    	slider21.slider( "value", this.selectedIndex + 1 );
    });
    
    var select22 = $( "#slider_select22" );
    var place22 = select22.next('label');
    var slider22 = $( "<div id='slider_22' class='wpgs_slider'></div>" ).insertAfter( place22 ).slider({
    	min: 1,
    	max: 10,
    	range: "min",
    	value: select22[ 0 ].selectedIndex + 1,
    	slide: function( event, ui ) {
    		select22[ 0 ].selectedIndex = ui.value - 1;
    		select22.trigger("change");
    	}
    });
    $( "#slider_select22" ).change(function() {
    	slider22.slider( "value", this.selectedIndex + 1 );
    });
    
    var select23 = $( "#slider_select23" );
    var place23 = select23.next('label');
    var slider23 = $( "<div id='slider_23' class='wpgs_slider'></div>" ).insertAfter( place23 ).slider({
    	min: 1,
    	max: 13,
    	range: "min",
    	value: select23[ 0 ].selectedIndex + 1,
    	slide: function( event, ui ) {
    		select23[ 0 ].selectedIndex = ui.value - 1;
    	}
    });
    $( "#slider_select23" ).change(function() {
    	slider23.slider( "value", this.selectedIndex + 1 );
    });
    //slider style3/////////////////////////////////////////////////////////////////////////////////////////////////////////////
    var select31 = $( "#slider_select31" );
    var place31 = select31.next('label');
    var slider31 = $( "<div id='slider_31' class='wpgs_slider'></div>" ).insertAfter( place31 ).slider({
    	min: 1,
    	max: 10,
    	range: "min",
    	value: select31[ 0 ].selectedIndex + 1,
    	slide: function( event, ui ) {
    		select31[ 0 ].selectedIndex = ui.value - 1;
    		select31.trigger("change");
    	}
    });
    $( "#slider_select31" ).change(function() {
    	slider31.slider( "value", this.selectedIndex + 1 );
    });
    
    var select32 = $( "#slider_select32" );
    var place32 = select32.next('label');
    var slider32 = $( "<div id='slider_32' class='wpgs_slider'></div>" ).insertAfter( place32 ).slider({
    	min: 1,
    	max: 10,
    	range: "min",
    	value: select32[ 0 ].selectedIndex + 1,
    	slide: function( event, ui ) {
    		select32[ 0 ].selectedIndex = ui.value - 1;
    		select32.trigger("change");
    	}
    });
    $( "#slider_select32" ).change(function() {
    	slider32.slider( "value", this.selectedIndex + 1 );
    });
    
    var select33 = $( "#slider_select33" );
    var place33 = select33.next('label');
    var slider33 = $( "<div id='slider_33' class='wpgs_slider'></div>" ).insertAfter( place33 ).slider({
    	min: 1,
    	max: 13,
    	range: "min",
    	value: select33[ 0 ].selectedIndex + 1,
    	slide: function( event, ui ) {
    		select33[ 0 ].selectedIndex = ui.value - 1;
    	}
    });
    $( "#slider_select33" ).change(function() {
    	slider33.slider( "value", this.selectedIndex + 1 );
    });
    //slider style4/////////////////////////////////////////////////////////////////////////////////////////////////////////////
    var select41 = $( "#slider_select41" );
    var place41 = select41.next('label');
    var slider41 = $( "<div id='slider_41' class='wpgs_slider'></div>" ).insertAfter( place41 ).slider({
    	min: 1,
    	max: 10,
    	range: "min",
    	value: select41[ 0 ].selectedIndex + 1,
    	slide: function( event, ui ) {
    		select41[ 0 ].selectedIndex = ui.value - 1;
    		select41.trigger("change");
    	}
    });
    $( "#slider_select41" ).change(function() {
    	slider41.slider( "value", this.selectedIndex + 1 );
    });
    
    var select42 = $( "#slider_select42" );
    var place42 = select42.next('label');
    var slider42 = $( "<div id='slider_42' class='wpgs_slider'></div>" ).insertAfter( place42 ).slider({
    	min: 1,
    	max: 10,
    	range: "min",
    	value: select42[ 0 ].selectedIndex + 1,
    	slide: function( event, ui ) {
    		select42[ 0 ].selectedIndex = ui.value - 1;
    		select42.trigger("change");
    	}
    });
    $( "#slider_select42" ).change(function() {
    	slider42.slider( "value", this.selectedIndex + 1 );
    });
    
    var select43 = $( "#slider_select43" );
    var place43 = select43.next('label');
    var slider43 = $( "<div id='slider_43' class='wpgs_slider'></div>" ).insertAfter( place43 ).slider({
    	min: 1,
    	max: 13,
    	range: "min",
    	value: select43[ 0 ].selectedIndex + 1,
    	slide: function( event, ui ) {
    		select43[ 0 ].selectedIndex = ui.value - 1;
    	}
    });
    $( "#slider_select43" ).change(function() {
    	slider43.slider( "value", this.selectedIndex + 1 );
    });
    //slider style5/////////////////////////////////////////////////////////////////////////////////////////////////////////////
    var select51 = $( "#slider_select51" );
    var place51 = select51.next('label');
    var slider51 = $( "<div id='slider_51' class='wpgs_slider'></div>" ).insertAfter( place51 ).slider({
    	min: 1,
    	max: 10,
    	range: "min",
    	value: select51[ 0 ].selectedIndex + 1,
    	slide: function( event, ui ) {
    		select51[ 0 ].selectedIndex = ui.value - 1;
    		select51.trigger("change");
    	}
    });
    $( "#slider_select51" ).change(function() {
    	slider51.slider( "value", this.selectedIndex + 1 );
    });
    
    var select52 = $( "#slider_select52" );
    var place52 = select52.next('label');
    var slider52 = $( "<div id='slider_52' class='wpgs_slider'></div>" ).insertAfter( place52 ).slider({
    	min: 1,
    	max: 10,
    	range: "min",
    	value: select52[ 0 ].selectedIndex + 1,
    	slide: function( event, ui ) {
    		select52[ 0 ].selectedIndex = ui.value - 1;
    		select52.trigger("change");
    	}
    });
    $( "#slider_select52" ).change(function() {
    	slider52.slider( "value", this.selectedIndex + 1 );
    });
    
    var select53 = $( "#slider_select53" );
    var place53 = select53.next('label');
    var slider53 = $( "<div id='slider_53' class='wpgs_slider'></div>" ).insertAfter( place53 ).slider({
    	min: 1,
    	max: 13,
    	range: "min",
    	value: select53[ 0 ].selectedIndex + 1,
    	slide: function( event, ui ) {
    		select53[ 0 ].selectedIndex = ui.value - 1;
    	}
    });
    $( "#slider_select53" ).change(function() {
    	slider53.slider( "value", this.selectedIndex + 1 );
    });
	
					
});
})(jQuery);