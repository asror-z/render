/*
 * jQuery liTranslit v 1.4
 * http://masscode.ru/index.php/k2/item/28-litranslit
 *
 * Copyright 2013, Linnik Yura
 * Free to use
 * 
 * Last Update 25.10.2014
 */

(function ($) {
    var methods = {
        init: function (options) {
			var o = {
				eventType:'keyup blur copy paste cut start',
				elAlias: $(this),				//Элемент, в который будет записываться результат транслитерации или false
				reg:'',							//'" "="-","ж"="zzzz"' or false or ''
				translated: function (el, text, eventType) {},   
				caseType: 'lower',				// lower(default), upper, inherit - регистр выходных данных
				status:true,
				string:''						//используется для транслита строковой переменной
			};
			if (options) {
				$.extend(o, options); 
			}
			var general = $(this);
			if(!general.length){
				general = $('<div>').text(o.string);
			}
			
			return general.each(function(){
				
				var 
				elName = $(this),
				elAlias = o.elAlias.length ? o.elAlias.css({wordWrap:'break-word'}) : general.css({wordWrap:'break-word'}),
				nameVal;
				
				elName.data({
					status:o.status	
				})

				var inser_trans = function(result,e) {

					if(o.caseType == 'upper'){
						result = result.toUpperCase();
					}
                    if(o.caseType == 'lower'){
						result = result.toLowerCase();
					}
					if(elName.data('status') && o.elAlias){
						if (elAlias.prop("value") !== undefined) {
							elAlias.val(result);
						}else{
							elAlias.html(result);
						}
						
					}
					if(result != ''){
						if (o.translated !== undefined) {
							var type;
							if(e == undefined){
								type = 'no event';
							}else{
								type = e.type;	
							}
							o.translated(elName, result, type);
						}
					}
				}
		
				var customReg = function(str){
					customArr = o.reg.split(',');
					for(var i=0;i<customArr.length; i++){
						var customItem = customArr[i].split('=');
						var regi = customItem[0].replace(/"/g,'');
						var newstr = customItem[1].replace(/"/g,'');
						var re = new RegExp(regi,"ig");
						str = str.replace(re,newstr)
					}
					return str	
				}
					
				var tr = function(el,e){
					if (el.prop("value") !== undefined) {
						nameVal = el.val();
					}else{
						nameVal = el.text();	
					}
					if(o.reg && o.reg != ''){
 
						nameVal = customReg(nameVal)

					}
					inser_trans(get_trans(nameVal),e);
				};
				elName.on(o.eventType,function (e) {
					var el = $(this);
					setTimeout(function(){
						tr(el,e);
					},50)
				});	
				tr(elName);
				function get_trans() {
					en_to_ru = {
						'а': 'a',
						'б': 'b',
						'в': 'v',
						'г': 'g',
						'д': 'd',
						'е': 'e',
						'ё': 'jo',
						'ж': 'zh',
						'з': 'z',
						'и': 'i',
						'й': 'j',
						'к': 'k',
						'л': 'l',
						'м': 'm',
						'н': 'n',
						'о': 'o',
						'п': 'p',
						'р': 'r',
						'с': 's',
						'т': 't',
						'у': 'u',
						'ф': 'f',
						'х': 'h',
						'ц': 'c',
						'ч': 'ch',
						'ш': 'sh',
						'щ': 'sch',
						'ъ': '',
						'ы': 'y',
						'ь': '',
						'э': 'e',
						'ю': 'ju',
						'я': 'ja',
						' ': '_',
						'і': 'i',
						'ї': 'i',
                        'є': 'e',
                        'А': 'A',
						'Б': 'B',
						'В': 'V',
						'Г': 'G',
						'Д': 'D',
						'Е': 'E',
						'Ё': 'Jo',
						'Ж': 'Zh',
						'З': 'Z',
						'И': 'I',
						'Й': 'J',
						'К': 'K',
						'Л': 'L',
						'М': 'M',
						'Н': 'N',
						'О': 'O',
						'П': 'P',
						'Р': 'R',
						'С': 'S',
						'Т': 'T',
						'У': 'U',
						'Ф': 'F',
						'Х': 'H',
						'Ц': 'C',
						'Ч': 'Ch',
						'Ш': 'Sh',
						'Щ': 'Sch',
						'Ъ': '',
						'Ы': 'Y',
						'Ь': '',
						'Э': 'E',
						'Ю': 'Ju',
						'Я': 'Ja',
						' ': '_',
						'І': 'I',
						'Ї': 'I',
                        'Є': 'E'
					};
					
  
					nameVal = trim(nameVal);
					nameVal = nameVal.split("");
                    
					var trans = new String();
                    
					for (i = 0; i < nameVal.length; i++) {
						for (key in en_to_ru) {
							val = en_to_ru[key];
							if (key == nameVal[i]) {
								trans += val;
								break
							}else if (key == "Є") {
								trans += nameVal[i]
							};
						};
					};
					return trans;
				}
		
				function trim(string) {
					//Удаляем пробел в начале строки и ненужные символы
					string = string.replace(/(^\s+)|'|"|<|>|\!|\||@|#|$|%|^|\^|\$|\\|\/|&|\*|\(\)|\|\/|;|\+|№|,|\?|:|{|}|\[|\]/g, "");
					return string;
				}; 
			})
		},
		disable: function () {
			$(this).data({
				status:false	
			})
		},
		enable: function () {
			$(this).data({
				status:true	
			})
		}
	};
    $.fn.liTranslit = function (method) {
        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || !method) {
            return methods.init.apply(this, arguments);
        } else {
            $.error('Метод ' + method + ' в jQuery.liTranslit не существует');
        }
    };
})(jQuery); 