Handlebars.registerHelper('l10n', function(keyword) {
		var lang = (navigator.language) ? navigator.language : navigator.userLanguage;

		//принудительно указать язык интерфеса, иначе язык браузера ('ru'/'en-US')
		//var lang = 'ru';

		// pick the right dictionary
		var locale = window.locale[lang] || window.locale['en-US'];

		// loop through all the key hierarchy (if any)
		var target = locale;
		var key = keyword.split(".");
		for (i in key){
			target = target[key[i]];

		}

		//output
		return target;
});


Handlebars.registerHelper("prettyDate", function (timestamp) {
  var a = new Date(timestamp * 1000);
	if (navigator.language == 'ru') {
		 var months = ['Янв','Фев','Мар','Апр','Май','Июня','Июля','Авг','Сен','Окт','Ноя','Дек'];
	 } else {
		   var months = ['Jan','Feb','Mar','Apr','May', 'Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
	 }
  var year = a.getFullYear();
  var month = months[a.getMonth()];
  var date = a.getDate();
  //var hour = a.getHours();
  var hour = (a.getHours() < 10 ? '0' : '') + a.getHours();
  //var min = a.getMinutes();
  var min = (a.getMinutes() < 10 ? '0' : '') + a.getMinutes();
  //var sec = a.getSeconds();
  var sec = (a.getSeconds() < 10 ? '0' : '') + a.getSeconds();
  var time = date + ' ' + month + ' ' + hour + ':' + min + ':' + sec ;
  return time;
});


Handlebars.registerHelper("prettyCnt", function (object) {
  var cutcontact = (object + '').replace(/(\^.+)/i,'');
  var cutcontact = (cutcontact + '').replace(/(sip\:)/i,'');
  return cutcontact;
});
