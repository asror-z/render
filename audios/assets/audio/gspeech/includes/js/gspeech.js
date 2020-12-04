(function($) {
	
$(document).ready(function() {
	
	$("#sexy_tooltip").mousedown(function(e){
		return false;
	});

	$(document).mousedown(function(e){
		var w = parseInt(e.which);
		if(w == 3) {
			return false;
		}
		if(!isMyDiv(e) && isVissible()) {
			hide_speaker();
			clearSelection();
		}
		else {
			if(isVissible() && isMyDiv(e)) {
				if(!sound_container_clicked) {
					if(!check_pro_version()) {
						alert('To hide a backlink please purchase a GSpeech PRO version');
						return false;
					}
					var isIE = document.all?true:false;
					make_audio();
					if(isIE)
						blink_speaker();
					else
						rotate_speaker();
					//user clicks on my speaker
					sound_container_clicked = true;
				}
				else {
					clearSelection();
					hide_speaker();
				}
				
				e.preventDefault();
			}
			else
				clearSelection();
		}
	});
	
	$("body").keydown(function(e) {
		if(e.keyCode == 13) {
			if(isVissible()) {
				if(!sound_container_clicked) {
					if(!check_pro_version()) {
						alert('To hide a backlink please purchase a GSpeech PRO version');
						return false;
					}
					var isIE = document.all?true:false;
					make_audio();
					if(isIE)
						blink_speaker();
					else
						rotate_speaker();
					//user clicks on my speaker
					sound_container_clicked = true;
				}
				else {
					clearSelection();
					hide_speaker();
				}
			}
		}
	});
	
	function clearSelection() {
		if (window.getSelection) {
			  if (window.getSelection().empty) {  // Chrome
			    window.getSelection().empty();
			  } else if (window.getSelection().removeAllRanges) {  // Firefox
			    window.getSelection().removeAllRanges();
			  }
			} else if (document.selection) {  // IE
			  document.selection.empty();
			}
	};

	function hide_speaker() {
		clearAllPlayers();
		$('#sound_container').fadeTo(10,1);
		$('#sound_container').fadeOut(300);
		for(f in blink_timer) {
			clearTimeout(blink_timer[f]);
		}
		for(ff in rotate_timer) {
    		clearInterval(rotate_timer[ff]);
		}
		sound_container_clicked = false;
		blinking_enable = true;
		sound_container_visible = true;
		
		hide_tooltip_basic($('#sexy_tooltip'));
	};
	
	function stop_speaker() {
		clearAllPlayers();
		$("#sound_container").rotate({animateTo:360});
		$('#sound_container').fadeTo(10,1);
		for(f in blink_timer) {
			clearTimeout(blink_timer[f]);
		}
		for(f in rotate_timer) {
    		clearInterval(rotate_timer[f]);
		}
		sound_container_clicked = false;
		blinking_enable = true;
		sound_container_visible = true;
	};

	document.onmouseup = function(e){
		if(!basic_plg_enable)
			return;
		selected_txt = GetSelectedText ();
		if(!isMyDiv(e) && !sound_container_clicked) {
			var patt1=/^(\s)*$/gi;
			var txt_empty = patt1.test(selected_txt);
			if(txt_empty)
				selected_txt = '';
			if(selected_txt != '' && selected_txt != undefined &&  selected_txt.length > 1 && !txt_empty) {
				var coords = get_coord (e);
				var x = coords[0];
				var y = coords[1];
				move_sound_container(x,y,selected_txt);
			}
		}
	};
	
	function check_pro_version() {
		var bl = $("#sexy_tooltip").css("display");
		var bl1 = $("#sexy_tooltip .tooltip_inner").css("display");
		if(bl == 'block' && bl1 == 'block') 
			return true;
		return false;
	};
	
	$("#sexy_tooltip").mouseup(function(e){
		return false;
	});

	function rotate_speaker() {
		var angle = 0;
		rotate_timer_element = setInterval(function(){
		      angle+=3;
		     $("#sound_container").rotate(angle);
		},15);
		rotate_timer.push(rotate_timer_element);
		
	};
	
	function blink_speaker() {
		if(sound_container_visible) {
			$('#sound_container').fadeTo(200,0.2);
			sound_container_visible = false;
		}
		else {
			$('#sound_container').fadeTo(200,1);
			sound_container_visible = true;
		}
		blink_timer.push(setTimeout(blink_speaker,800));
	};

	function change_speaker_animation() {
		if(!($("#sound_container").is(":visible")))
			return;
		if(blinking_enable) {
			for(f in rotate_timer) {
	    		clearInterval(rotate_timer[f]);
			}
        	$("#sound_container").rotate({animateTo:0});
        	blink_speaker();
		}
		blinking_enable = false;
	};

	function isVissible()
	{
		var dis = $('#sound_container').css('display');
		if(dis == 'block') 
			return true;
		else
			return false; 
	};

	function isMyDiv(e) {
		if(typeof event=="undefined")
			var x = e.target||e.srcElement;
		else 
			var x = event.target||event.srcElement;
		var id_clicked = x.id;
		if(id_clicked == 'sound_container')
			return true;
		else 
			return false; 
	};
	
	function navigate_tooltip_basic($tooltip,sound_x,sound_y) {
		
		var center_offset_x = parseFloat($('#sound_container ').width() / 2);
		var tooltip_width = parseFloat($tooltip.find('.tooltip_inner').width());
		var tooltip_height = parseFloat($tooltip.show().find('.tooltip_inner').height());
		var container_height = parseFloat($tooltip.next('#sound_container ').height());
		$tooltip.hide();
		
		if($tooltip.find('.the-tooltip').hasClass('left')) {
			var final_offset = -32 * 1 + center_offset_x * 1 + sound_x * 1;
			$tooltip.css({'left': final_offset, opacity: 0, 'display': 'block'});
		}
		
		if($tooltip.find('.the-tooltip').hasClass('top')) {
			var top_0 = sound_y - 200 * 1;
			var top_1 = sound_y ;
			$tooltip.css({'top': top_0, display: 'block'});
			var new_opacity = 0.95;
			$tooltip.stop().animate( {
				top: top_1,
				opacity: new_opacity
			},300,'easeOutBack',function () {
				$tooltip.css({'display': 'block'});
			});
		}
		else if($tooltip.find('.the-tooltip').hasClass('bottom')) {
			if($tooltip.find('.tooltip_inner').hasClass('powered_by'))
				var new_opacity = 0.95;
			else
				var new_opacity = 0.95;
			
			var top_0 = sound_y + 200 * 1;
			var top_1 = sound_y + container_height * 1 + 16 * 1 ;
			$tooltip.css({'top': top_0,display: 'block'});
			$tooltip.stop().animate( {
				top: top_1,
				opacity: new_opacity
			},300,'easeOutBack',function () {
				$tooltip.css({'display': 'block'});
			});
		}
	};
	
	function hide_tooltip_basic($tooltip) {
		if($tooltip.find('.the-tooltip').hasClass('top')) {
			$tooltip.stop(true,true).delay(200).animate( {
				top: '-=200px',
				opacity: 0
			},300,'easeInBack',function() {
				$(this).hide();
			});
		}
		else if($tooltip.find('.the-tooltip').hasClass('bottom')) {
			$tooltip.stop(true,true).delay(130).animate( {
				top: '+=200px',
				opacity: 0
			},300,'easeInBack',function() {
				$(this).hide();
			});
		}
	}
	
	$("#sound_container").hover(function() {
		var sound_x = parseFloat($(this).css('left'));
		var sound_y = parseFloat($(this).css('top'));
		navigate_tooltip_basic($('#sexy_tooltip_title'),sound_x,sound_y);
	},function() {
		var sound_x = parseFloat($(this).css('left'));
		var sound_y = parseFloat($(this).css('top'));
		hide_tooltip_basic($('#sexy_tooltip_title'),sound_x,sound_y);
	});
	
	function move_sound_container(x,y,txt) {
		var sound_x = x * 1 + 5;
		var sound_y = y * 1 - 5;
		$('#sound_container').css({
		    left: sound_x,
		    top: sound_y
		});
		$("#sound_container").rotate(0);
		$('#sound_container').fadeIn(400);
		$('#sound_text').html(txt);
		
		navigate_tooltip_basic($('#sexy_tooltip'),sound_x,sound_y);
	};
	
	//main function which creates audio
	function make_audio() {
		selected_txt = $('#sound_text').html();
		var 
			words_array = new Array(),
			sent_array = new Array(),
			sent_index = 0;
		
		words_array = selected_txt.split(/[^\S]+/);

		for(var i = 0; i < words_array.length; i++) {
			if(sent_array[sent_index] == undefined) {
				sent_array[sent_index] = '';
			}

			var total_l = sent_array[sent_index].length + words_array[i].length;
			if(sent_array[sent_index].length < speech_text_length && total_l < speech_text_length) {
    				sent_array[sent_index] += words_array[i] + ' ';
			}
			else {
				++sent_index;
				sent_array[sent_index] = words_array[i] + ' ';
			}
		};

		var players_count = sent_array.length;

		var htm_cont = '';
		for(var i = 0; i < players_count; i++) {
			htm_cont += '<audio id="player' + i + '" src="' + streamerphp_folder + 'speech.mpeg" type="' + translation_audio_type + '" controls="controls"></audio>';
		}
		$("#sound_audio").html(htm_cont);

		for(var i = 0; i < players_count; i++) {
			create_htm(i,players_count);
		};

		function create_htm(i,players_count) {
			$('#player' + i).mediaelementplayer({
				success: function (mediaElement, domObject) {
					//detect media end
					players[i] = mediaElement;


		            // sets src
					var encoded_text = encodeURIComponent(sent_array[i]);
					var embed_url = streamerphp_folder + 'streamer.php?q=' + encoded_text + '&l=' + lang_identifier + '&tr_tool=' +translation_tool;
		            mediaElement.setSrc(embed_url);

		            //play next audio, when current ends
		            mediaElement.addEventListener('pause', function(e) {
    	        		try {
    	        			players[i + 1].play()
    	        		} catch(e){}
		        	}, false);

		        	players[0].addEventListener('progress', function(e) {
    		            	change_speaker_animation();
		        	}, false);

		        	if(i == players_count - 1) {
    		        	players[players_count - 1].addEventListener('pause', function(e) {
    		        		stop_speaker();
    		        	}, false);
		        	}
		        	
		            mediaElement.load();
		            
		            if(i == 0) {
		            	mediaElement.play();
		            }
		        }
			});
		}
		
	};
	
	function GetSelectedText() {
	    var selText = "", selTextParts = [];

	    function getNodeText(node) {
	        if (node.nodeType == 3) {
	            selTextParts.push(node.data);
	        } else if (node.hasChildNodes()
	        && !(node.nodeType == 1 && /^(script|style)$/i.test(node.tagName))) {
	            for (var child = node.firstChild; !!child; child = child.nextSibling) {
	                getNodeText(child);
	            }
	        }
	    };

	    if (window.getSelection) {
	        var sel = window.getSelection(), rangeCount = sel.rangeCount;
	        if (rangeCount) {
	            for (var i = 0; i < rangeCount; ++i) {
	                getNodeText(sel.getRangeAt(i).cloneContents());
	            }
	            selText = selTextParts.join("");
	        }
	    } 
	    else if (document.selection && document.selection.type == "Text") {
	        selText = document.selection.createRange().text;
	    }
	    return selText;
	};

	function get_coord (e) {
		var isIE = document.all?true:false;
		var pos_x, pos_y;
		if (!isIE) {
			pos_x = e.pageX;
			pos_y = e.pageY;
		}
		if (isIE) {
			var left = document.documentElement.scrollLeft ? 
					document.documentElement.scrollLeft : 
						document.body.scrollLeft;
			pos_x = event.clientX + left;
			
			var top = document.documentElement.scrollTop ? 
		              document.documentElement.scrollTop : 
		              document.body.scrollTop;
			pos_y = event.clientY + top;
		}
		return [pos_x,pos_y];
	};
	
	function clearAllPlayers() {
		for(var c in players) {
			players[c] = '';
		}
		$('#sound_audio').html('');
	};
	

				
});
});