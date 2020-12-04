jQuery(function ($) {
$(document).on('click', '.nn', function ()  {
var search = $('#searchInputTop').val();
location.href = "?search=" + search;
});
$(document).on('click', '#w3', function (event){e.preventDefault(); window.open(this.href, "_blank")});
$('#w3')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w4', function (event){e.preventDefault(); window.open(this.href, "_blank")});
$('#w4')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w5', function (event){e.preventDefault(); window.open(this.href, "_blank")});
$('#w5')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w6', function (event){e.preventDefault(); window.open(this.href, "_blank")});
$('#w6')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w7', function (event){e.preventDefault(); window.open(this.href, "_blank")});
$('#w7')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w8', function (event){e.preventDefault(); window.open(this.href, "_blank")});
$('#w8')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });



$(document).on('click', '#w9', function (event){e.preventDefault(); window.open(this.href, "_blank")});
$('#w9')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#ZDynaWidget-18339_Grid_Reset', function() { console.log("ZButtonWidget | $eventClick") });
$('#ZDynaWidget-18339_Grid_Reset')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w11', function() { console.log("ZButtonWidget | $eventClick") });
$('#w11')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w13',     function () {

var keys = "";

$('.checkbox-CoreAdress').each(function (index) {

if ($(this).prop("checked")) {
keys += $(this).val() + "|";
console.log(keys)
}
});

if (keys === "")
bootbox.confirm({
title: "Предупреждение",
message: "Элемент не выбран.",
buttons: {
confirm: {
label: '<i class="fa fa-check"></i> OK'
},
cancel: {
label: 'No',
className: 'd-none'
}
},
callback: function (event) {
if (result === true)
return null;
else
console.log(result);
}
});
else
bootbox.confirm({
title: "Предупреждение",
message: "Вы хотите удалить этот элемент(ы)?",
buttons: {
cancel: {
label: "<i class='fa fa-times'></i> Нет"
},
confirm: {
label: '<i class="fa fa-check"></i> Да'
}
},
callback: function (event) {
if (result === true) {
$.ajax({
type: "POST",
url: '/customer/main/delete-all.aspx?modelClassName=CoreAdress',
data: {keys: keys, modelClassName: 'CoreAdress'},
timeout: 4000,
success: function () {
console.log('success');
}
});
window.location.href = '#';
}
}
})
});
$('#w13')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w15',     function () {

var keys = "";

$('.simple-ZDynaWidget-18339').each(function (index) {

if ($(this).prop("checked")) {
keys += $(this).val() + "|";
console.log(keys)
}
});

if (keys === "")
bootbox.confirm({
title: "Предупреждение",
message: "Элемент не выбран.",
buttons: {
confirm: {
label: '<i class="fa fa-check"></i> OK'
},
cancel: {
label: 'No',
className: 'd-none'
}
},
callback: function (event) {
if (result === true)
return null;
else
console.log(result);
}
});
else
bootbox.confirm({
title: "Предупреждение",
message: "Запустить команду cruds/run/apply для этой модели?",
buttons: {
cancel: {
label: "<i class='fa fa-times'></i> Нет"
},
confirm: {
label: '<i class="fa fa-check"></i> Да'
}
},
callback: function (event) {
if (result === true) {
$.ajax({
type: "POST",
url: '/core/dynagrid/apply.aspx?modelClassName=CoreAdress',
data: {keys: keys, modelClassName: ''},
timeout: 4000,
success: function () {
console.log('success');
}
});
window.location.href = '#';
}
}
})
});
$('#w15')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w17',     function () {

var keys = "";

$('.simple-ZDynaWidget-18339').each(function (index) {

if ($(this).prop("checked")) {
keys += $(this).val() + "|";
console.log(keys)
}
});

if (keys === "")
bootbox.confirm({
title: "Предупреждение",
message: "Элемент не выбран.",
buttons: {
confirm: {
label: '<i class="fa fa-check"></i> OK'
},
cancel: {
label: 'No',
className: 'd-none'
}
},
callback: function (event) {
if (result === true)
return null;
else
console.log(result);
}
});
else
bootbox.confirm({
title: "Предупреждение",
message: "Нормализовать эту Форму?",
buttons: {
cancel: {
label: "<i class='fa fa-times'></i> Нет"
},
confirm: {
label: '<i class="fa fa-check"></i> Да'
}
},
callback: function (event) {
if (result === true) {
$.ajax({
type: "POST",
url: '/core/dynagrid/norms.aspx?modelClassName=CoreAdress',
data: {keys: keys, modelClassName: ''},
timeout: 4000,
success: function () {
console.log('success');
}
});
window.location.href = '#';
}
}
})
});
$('#w17')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#dynagrid-submit',     function() {
location.reload();
});
$('#dynagrid-submit')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


function someFunctionName(title = null, text = null,  icon = null,){
Swal.fire({
title: '',
text: 'text',
html: '<div id="contentAjax"><div class="alert alert-info mt-4" role="alert">Obrabotka Zaprosa</div></div>',
footer: ``,
width: 1000,
heightAuto: true,
padding: '0',
scrollbarPadding: 'undifiend',
/*
* Icon
* */
icon: '',
iconHtml: '',
toast: false,
animation: true,
showClass: {
popup: 'swal2-show',
backdrop: 'swal2-backdrop-show',
icon: 'swal2-icon-show'
},
hideClass: {
popup: 'swal2-hide',
backdrop: 'swal2-backdrop-hide',
icon: 'swal2-icon-hide'
},
customClass: {
container: 'container-class',
popup: 'popup-class',
header: 'header-class',
title: 'title-class',
closeButton: 'close-button-class',
icon: 'icon-class',
image: 'image-class',
content: 'content-class',
input: 'input-class',
actions: 'actions-class',
confirmButton: 'confirm-button-class',
cancelButton: 'cancel-button-class',
footer: 'footer-class'
},
target: 'body',
backdrop: true,
allowOutsideClick: true,
allowEscapeKey: true,
allowEnterKey: true,
stopKeydownPropagation: true,
keydownListenerCapture: true,
preConfirm: function (){},
background: '#fff',
/*
* Close Button
* */
buttonsStyling: true,
reverseButtons: false,
closeButtonAriaLabel: '',
showCloseButton: false,
closeButtonHtml: '&times;',
/*
* Cancel Button
* */
showCancelButton: false,
focusCancel: false,
cancelButtonAriaLabel: '',
cancelButtonText: '',
cancelButtonColor: '',
/*
* Confirm Button
* */
showConfirmButton: false,
focusConfirm: false,
confirmButtonAriaLabel: '',
confirmButtonText: '',
confirmButtonColor: '#3085d6',
showLoaderOnConfirm: true,
/*
* Image Settings
* */
url: '',
imageWidth: '',
imageHeight: '',
imageAlt: '',
/*
* Timer Settings
* */
timer: '',
timerProgressBar: true,
/*
* Input Settings
* */
input: 'undefined',
inputPlaceholder: '',
inputValue: '',
inputOptions: {},
inputAutoTrim: true,
inputAttributes: {},
inputValidator: undefined,
validationMessage: 'Validation',

grow: 'false',
position: 'center',

/*
* SweetAlert events
* */
onOpen:  function (event) {
toast.addEventListener('mouseenter', Swal.stopTimer)
toast.addEventListener('mouseleave', Swal.resumeTimer)
},
onBeforeOpen: function() {
console.log('ZSweeAlert2Widget | onBeforeOpen')
$.ajax({
url: '/core/dynagrid/content.aspx?id=CoreAdress-0&model=zetsoft/models/ALL/CoreAdress&columns={"kartik\/grid\/SerialColumn":"SerialColumn","kartik\/grid\/ActionColumn":"ActionColumn","zetsoft\/system\/column\/ZCheckColumn":"ZCheckColumn","name":"\u041d\u0430\u0437\u0432\u0430\u043d\u0438\u0435","location":"\u041c\u0435\u0441\u0442\u043e region","place_region_form":"\u041c\u0435\u0441\u0442\u043e region","contact":"\u0412\u0430\u0448\u0438 \u043a\u043e\u043d\u0442\u0430\u043a\u0442\u044b","address_info":"\u0418\u043d\u0444\u043e\u0440\u043c\u0430\u0446\u0438\u044f \u043e\u0431 \u0430\u0434\u0440\u0435\u0441\u0435"}&hidden={"address_type":"Address type","zetsoft\/system\/column\/ZFormulaColumn":"ZFormulaColumn"}',
method: 'POST',
success: function (res) {
console.log(res)
$('#contentAjax').html(res)
},
error: function() {
console.error('ajax not sent')
}
});

},
onRender: function() { console.log('ZSweeAlert2Widget | onRender') },
onClose: function() { console.log('ZSweeAlert2Widget | onClose') },
onAfterClose: function() { console.log('ZSweeAlert2Widget | onAfterClose') },
onDestroy: function() { console.log('ZSweeAlert2Widget | onDestroy') },
})
}
$(document).on('click', '#w21',         function() {
dynaSettings();
});
$('#w21')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w22', function (event) {
$.ajax({
type: 'POST',
url: '',
data: {generate: true},
success: function(data){
if(data === 'true') {
alert('Генерация прошла успешно');
location.reload();
}
if(data === 'false') {
alert('ошибка при генераций');
}
}
});
});
$('#w22')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w23', function() { console.log("ZButtonWidget | $eventClick") });
$('#w23')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


jQuery('#CoreAdress-0-filter-key').dynagridDetail({"submitMessage":"<div class=\"dynagrid-submit-message\">Saving and applying configuration</div>","deleteMessage":"<div class=\"dynagrid-submit-message\">Trashing all personalizations</div>","deleteConfirmation":" Are you sure you want to delete the setting?","configUrl":"/dynagrid/settings/get-config.aspx","modalId":"CoreAdress-0-filter-modal","dynaGridId":"CoreAdress-0","dialogLib":"krajeeDialog"});
jQuery('#CoreAdress-0').after(jQuery('#CoreAdress-0-filter-key'));jQuery('#CoreAdress-0-pjax').on('pjax:end', function() {

jQuery('#CoreAdress-0-filter-key').dynagridDetail({"submitMessage":"<div class=\"dynagrid-submit-message\">Saving and applying configuration</div>","deleteMessage":"<div class=\"dynagrid-submit-message\">Trashing all personalizations</div>","deleteConfirmation":" Are you sure you want to delete the setting?","configUrl":"/dynagrid/settings/get-config.aspx","modalId":"CoreAdress-0-filter-modal","dynaGridId":"CoreAdress-0","dialogLib":"krajeeDialog"});

});
var $el=jQuery("#w25 .kv-hint-special");if($el.length){$el.each(function(){$(this).activeFieldHint()});}kvBs4InitForm();
jQuery('#w25').yiiActiveForm([{"id":"dynagridsettings-name","name":"name","container":".field-name-CoreAdress-0","input":"#name-CoreAdress-0","error":".help-block.invalid-feedback","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Необходимо заполнить «Название фильтра»."});}}], []);
jQuery('#CoreAdress-0-filter-modal').modal({"show":false});
jQuery('#CoreAdress-0-sort-key').dynagridDetail({"submitMessage":"<div class=\"dynagrid-submit-message\">Saving and applying configuration</div>","deleteMessage":"<div class=\"dynagrid-submit-message\">Trashing all personalizations</div>","deleteConfirmation":" Are you sure you want to delete the setting?","configUrl":"/dynagrid/settings/get-config.aspx","modalId":"CoreAdress-0-sort-modal","dynaGridId":"CoreAdress-0","dialogLib":"krajeeDialog"});
jQuery('#CoreAdress-0').after(jQuery('#CoreAdress-0-sort-key'));jQuery('#CoreAdress-0-pjax').on('pjax:end', function() {

jQuery('#CoreAdress-0-sort-key').dynagridDetail({"submitMessage":"<div class=\"dynagrid-submit-message\">Saving and applying configuration</div>","deleteMessage":"<div class=\"dynagrid-submit-message\">Trashing all personalizations</div>","deleteConfirmation":" Are you sure you want to delete the setting?","configUrl":"/dynagrid/settings/get-config.aspx","modalId":"CoreAdress-0-sort-modal","dynaGridId":"CoreAdress-0","dialogLib":"krajeeDialog"});

});
var $el=jQuery("#w27 .kv-hint-special");if($el.length){$el.each(function(){$(this).activeFieldHint()});}kvBs4InitForm();
jQuery('#w27').yiiActiveForm([{"id":"dynagridsettings-name","name":"name","container":".field-name-CoreAdress-0","input":"#name-CoreAdress-0","error":".help-block.invalid-feedback","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Необходимо заполнить «Название сортировки»."});}}], []);
jQuery('#CoreAdress-0-sort-modal').modal({"show":false});
krajeeYiiConfirm('krajeeDialog');
jQuery('[name="CoreAdress-0-dynagrid"]').dynagrid({"submitMessage":"<div class=\"dynagrid-submit-message\">Saving and applying configuration</div>","deleteMessage":"<div class=\"dynagrid-submit-message\">Trashing all personalizations</div>","deleteConfirmation":" Are you sure you want to delete the setting?","modalId":"CoreAdress-0-grid-modal","dynaGridId":"CoreAdress-0","dialogLib":"krajeeDialog"});
jQuery('#CoreAdress-0-pjax').on('pjax:beforeReplace', function () {
jQuery("#CoreAdress-0-grid-modal").remove();jQuery("#CoreAdress-0-filter-modal").remove();jQuery("#CoreAdress-0-sort-modal").remove();
}); jQuery('#CoreAdress-0-pjax').on('pjax:end', function () {
jQuery('[name="CoreAdress-0-dynagrid"]').dynagrid({"submitMessage":"<div class=\"dynagrid-submit-message\">Saving and applying configuration</div>","deleteMessage":"<div class=\"dynagrid-submit-message\">Trashing all personalizations</div>","deleteConfirmation":" Are you sure you want to delete the setting?","modalId":"CoreAdress-0-grid-modal","dynaGridId":"CoreAdress-0","dialogLib":"krajeeDialog"});
jQuery('[name="CoreAdress-0-dynagrid"]').dynagrid('reset');
});
jQuery('#w29').yiiGridView('setSelectionColumn', {"name":"selection[]","class":"kv-row-checkbox","multiple":true,"checkAll":"selection_all"});
jQuery('#w30-button').dropdown();
var kvGridExp_7c96cf27={"gridId":"w29","action":"/gridview/export/download.aspx","module":"gridview","encoding":"utf-8","bom":1,"target":"_blank","messages":{"allowPopups":"Чтобы скачать файл, отключите блокировку всплывающих окон в вашем браузере.","confirmDownload":"Продолжить?","downloadProgress":"Файл для экспорта генерируется. Пожалуйста, ожидайте...","downloadComplete":"Сейчас начнётся загрузка файла. Пожалуйста, ожидайте..."},"exportConversions":[{"from":"<span class=\"glyphicon glyphicon-ok text-success\"></span>","to":"Вкл"},{"from":"<span class=\"glyphicon glyphicon-remove text-danger\"></span>","to":"Выкл"}],"skipExportElements":[".sr-only",".hide"],"showConfirmAlert":true};
var kvGridExp_f9af2e03={"filename":"экспорт-таблицы","showHeader":true,"showPageSummary":true,"showFooter":true};
var kvGridExp_b3365b55={"dialogLib":"krajeeDialog","gridOpts":kvGridExp_7c96cf27,"genOpts":kvGridExp_f9af2e03,"alertMsg":"Будет сгенерирован HTML файл для загрузки.","config":{"cssFile":["https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css","https://use.fontawesome.com/releases/v5.3.1/css/all.css"]}};
var kvGridExp_efc2f5bb={"dialogLib":"krajeeDialog","gridOpts":kvGridExp_7c96cf27,"genOpts":kvGridExp_f9af2e03,"alertMsg":"Будет сгенерирован CSV файл для загрузки.","config":{"colDelimiter":",","rowDelimiter":"\r\n"}};
var kvGridExp_e20df95d={"dialogLib":"krajeeDialog","gridOpts":kvGridExp_7c96cf27,"genOpts":kvGridExp_f9af2e03,"alertMsg":"Будет сгенерирован текстовый файл для загрузки.","config":{"colDelimiter":"\t","rowDelimiter":"\r\n"}};
var kvGridExp_3b217e5e={"dialogLib":"krajeeDialog","gridOpts":kvGridExp_7c96cf27,"genOpts":kvGridExp_f9af2e03,"alertMsg":"Будет сгенерирован EXCEL файл для загрузки.","config":{"worksheet":"ЭкспортPабочийЛист","cssFile":""}};
var kvGridExp_725a0df8={"dialogLib":"krajeeDialog","gridOpts":kvGridExp_7c96cf27,"genOpts":kvGridExp_f9af2e03,"alertMsg":"Будет сгенерирован PDF файл для загрузки.","config":{"mode":"UTF-8","format":"A4-L","destination":"D","marginTop":20,"marginBottom":20,"cssInline":".kv-wrap{padding:20px}","methods":{"SetHeader":[{"odd":{"L":{"content":"PDF экспорт таблицы Yii2","font-size":8,"color":"#333333"},"C":{"content":"Экспорт таблицы","font-size":16,"color":"#333333"},"R":{"content":"Сгенерировано: Thu, 28-May-2020","font-size":8,"color":"#333333"}},"even":{"L":{"content":"PDF экспорт таблицы Yii2","font-size":8,"color":"#333333"},"C":{"content":"Экспорт таблицы","font-size":16,"color":"#333333"},"R":{"content":"Сгенерировано: Thu, 28-May-2020","font-size":8,"color":"#333333"}}}],"SetFooter":[{"odd":{"L":{"content":"© Krajee Yii2 Расширения","font-size":8,"font-style":"B","color":"#999999"},"R":{"content":"[ {PAGENO} ]","font-size":10,"font-style":"B","font-family":"serif","color":"#333333"},"line":true},"even":{"L":{"content":"© Krajee Yii2 Расширения","font-size":8,"font-style":"B","color":"#999999"},"R":{"content":"[ {PAGENO} ]","font-size":10,"font-style":"B","font-family":"serif","color":"#333333"},"line":true}}]},"options":{"title":"Экспорт таблицы","subject":"PDF сгенерирован расширением kartik-v/yii2-grid","keywords":"krajee, grid, сетка, export, экспорт, yii2-grid, pdf"},"contentBefore":"","contentAfter":""}};
var kvGridExp_7f050a8d={"dialogLib":"krajeeDialog","gridOpts":kvGridExp_7c96cf27,"genOpts":kvGridExp_f9af2e03,"alertMsg":"Будет сгенерирован JSON файл для загрузки.","config":{"colHeads":[],"slugColHeads":false,"jsonReplacer":function(k,v){return typeof(v)==='string'?$.trim(v):v},"indentSpace":4}};
var kvGridInit_68afe4ea=function(){
jQuery('#w29 .export-html').gridexport(kvGridExp_b3365b55);jQuery('#w29 .export-csv').gridexport(kvGridExp_efc2f5bb);jQuery('#w29 .export-txt').gridexport(kvGridExp_e20df95d);jQuery('#w29 .export-xls').gridexport(kvGridExp_3b217e5e);jQuery('#w29 .export-pdf').gridexport(kvGridExp_725a0df8);jQuery('#w29 .export-json').gridexport(kvGridExp_7f050a8d);jQuery('#w29-container').resizableColumns('destroy').resizableColumns({"store":null});var ps_w29_container = new PerfectScrollbar('#w29-container', []);
};
kvGridInit_68afe4ea();
jQuery("#CoreAdress-0-pjax").on('pjax:timeout', function (event){e.preventDefault()}).on('pjax:send', function(){$("#CoreAdress-0-pjax").addClass('kv-grid-loading')}).off('pjax:complete.2a3bda9c').on('pjax:complete.2a3bda9c', function(){setTimeout(kvGridInit_68afe4ea, 2500);$("#CoreAdress-0-pjax").removeClass('kv-grid-loading');
});
jQuery('#w29').yiiGridView({"filterUrl":"\/customer\/main\/check-out.aspx","filterSelector":"#w29-filters input, #w29-filters select","filterOnFocusOut":true});
$(document).on('click', '#w35', function (event){e.preventDefault()});
$('#w35')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });
$(document).on("click", '#w35' ,function (event) {
bootbox.confirm({
title: "Удалить",
message: "Вы уверены?",
buttons: {
cancel: {
label: '<i class="fa fa-times"></i> cancel'
},
confirm: {
label: '<i class="fa fa-check"></i> ok'
}
},
callback: function (event) {
if (result === true)
/*window.open('/core/product/deleteAddress.aspx?modelClassName=CoreAdress&id=64');*/
/*console.log(result);*/
location.href = '/core/product/deleteAddress.aspx?modelClassName=CoreAdress&id=64';

else
console.log(result);
}
});


});

jQuery&&jQuery.pjax&&(jQuery.pjax.defaults.maxCacheLength=0);

jQuery("#coreadress-name-0-64-cont").editable(editable_a2d7c1d7);
jQuery("#coreadress-name-0-64-cont").on('editableChange', function(event, val) { console.log('Changed Value ' + val); });
jQuery("#coreadress-name-0-64-cont").on('editableBeforeSubmit', function(event, jqXHR) { console.log('Before submit triggered'); });
jQuery("#coreadress-name-0-64-cont").on('editableSubmit', function(event, val, form, jqXHR) { console.log('Submitted Value ' + val); });
jQuery("#coreadress-name-0-64-cont").on('editableReset', function(event) { console.log('Reset editable form'); });
jQuery("#coreadress-name-0-64-cont").on('editableSuccess', function(event, val, form, data) { console.log('Successful submission of value ' + val); });
jQuery("#coreadress-name-0-64-cont").on('editableError', function(event, val, form, data) { console.log('Error while submission of value ' + val); });
jQuery("#coreadress-name-0-64-cont").on('editableAjaxError', function(event, jqXHR, status, message) { console.log(jqXHR); });

jQuery("#64_pjaxContainerId").off('pjax:complete.888decdc').on('pjax:complete.888decdc',function(){ setTimeout(function(){
jQuery("#coreadress-name-0-64-cont").editable(editable_a2d7c1d7);
jQuery("#coreadress-name-0-64-cont").on('editableChange', function(event, val) { console.log('Changed Value ' + val); });
jQuery("#coreadress-name-0-64-cont").on('editableBeforeSubmit', function(event, jqXHR) { console.log('Before submit triggered'); });
jQuery("#coreadress-name-0-64-cont").on('editableSubmit', function(event, val, form, jqXHR) { console.log('Submitted Value ' + val); });
jQuery("#coreadress-name-0-64-cont").on('editableReset', function(event) { console.log('Reset editable form'); });
jQuery("#coreadress-name-0-64-cont").on('editableSuccess', function(event, val, form, data) { console.log('Successful submission of value ' + val); });
jQuery("#coreadress-name-0-64-cont").on('editableError', function(event, val, form, data) { console.log('Error while submission of value ' + val); });
jQuery("#coreadress-name-0-64-cont").on('editableAjaxError', function(event, jqXHR, status, message) { console.log(jqXHR); });
}, 100); });
initEditablePjax('64_pjaxContainerId', 'coreadress-name-0-64-targ', 'kvEdPjax_coreadress_name_0_64_popover');
var $el=jQuery("#w36 .kv-hint-special");if($el.length){$el.each(function(){$(this).activeFieldHint()});}kvBs4InitForm();
jQuery('#w36').yiiActiveForm([], []);

jQuery("#coreadress-location-0-64-cont").editable(editable_a2d7c1d7);
jQuery("#coreadress-location-0-64-cont").on('editableChange', function(event, val) { console.log('Changed Value ' + val); });
jQuery("#coreadress-location-0-64-cont").on('editableBeforeSubmit', function(event, jqXHR) { console.log('Before submit triggered'); });
jQuery("#coreadress-location-0-64-cont").on('editableSubmit', function(event, val, form, jqXHR) { console.log('Submitted Value ' + val); });
jQuery("#coreadress-location-0-64-cont").on('editableReset', function(event) { console.log('Reset editable form'); });
jQuery("#coreadress-location-0-64-cont").on('editableSuccess', function(event, val, form, data) { console.log('Successful submission of value ' + val); });
jQuery("#coreadress-location-0-64-cont").on('editableError', function(event, val, form, data) { console.log('Error while submission of value ' + val); });
jQuery("#coreadress-location-0-64-cont").on('editableAjaxError', function(event, jqXHR, status, message) { console.log(jqXHR); });

jQuery("#64_pjaxContainerId").off('pjax:complete.b88bd255').on('pjax:complete.b88bd255',function(){ setTimeout(function(){
jQuery("#coreadress-location-0-64-cont").editable(editable_a2d7c1d7);
jQuery("#coreadress-location-0-64-cont").on('editableChange', function(event, val) { console.log('Changed Value ' + val); });
jQuery("#coreadress-location-0-64-cont").on('editableBeforeSubmit', function(event, jqXHR) { console.log('Before submit triggered'); });
jQuery("#coreadress-location-0-64-cont").on('editableSubmit', function(event, val, form, jqXHR) { console.log('Submitted Value ' + val); });
jQuery("#coreadress-location-0-64-cont").on('editableReset', function(event) { console.log('Reset editable form'); });
jQuery("#coreadress-location-0-64-cont").on('editableSuccess', function(event, val, form, data) { console.log('Successful submission of value ' + val); });
jQuery("#coreadress-location-0-64-cont").on('editableError', function(event, val, form, data) { console.log('Error while submission of value ' + val); });
jQuery("#coreadress-location-0-64-cont").on('editableAjaxError', function(event, jqXHR, status, message) { console.log(jqXHR); });
}, 100); });
initEditablePjax('64_pjaxContainerId', 'coreadress-location-0-64-targ', 'kvEdPjax_coreadress_location_0_64_popover');
var $el=jQuery("#w40 .kv-hint-special");if($el.length){$el.each(function(){$(this).activeFieldHint()});}kvBs4InitForm();
var $el=jQuery("#w42 .kv-hint-special");if($el.length){$el.each(function(){$(this).activeFieldHint()});}kvBs4InitForm();
$(document).on('click', '#secondaryCoreAdress', );
$('#secondaryCoreAdress')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#CoreAdress', );
$('#CoreAdress')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


jQuery("#w46").kvFormBuilder({});
jQuery("#w48").kvFormBuilder({});
var zktypeaheadwidget_74514_data_1 = new Bloodhound({"datumTokenizer":Bloodhound.tokenizers.whitespace,"queryTokenizer":Bloodhound.tokenizers.whitespace,"local":kvTypData_885da61f,"remote":{"url":"/customer/main/service.aspx?namespace=inputs&service=typeaheads&method=ajax&args=%QUERY","wildcard":"%QUERY"}});
kvInitTA('ZKTypeaheadWidget_74514', typeahead_aca265ca, [{"display":"value","limit":5,"name":"zktypeaheadwidget_74514_data_1","source":zktypeaheadwidget_74514_data_1.ttAdapter()}]);
jQuery("#ZKTypeaheadWidget_74514").on('active', function() { log('typeahead:active'); });
jQuery("#ZKTypeaheadWidget_74514").on('idle', function() { log('typeahead:idle'); });
jQuery("#ZKTypeaheadWidget_74514").on('open', function() { log('typeahead:open'); });
jQuery("#ZKTypeaheadWidget_74514").on('close', function() { log('typeahead:close'); });
jQuery("#ZKTypeaheadWidget_74514").on('change', function(event){console.log('ZKTypeaheadWidget | change')});
jQuery("#ZKTypeaheadWidget_74514").on('render', function() { log('typeahead:render'); });
jQuery("#ZKTypeaheadWidget_74514").on('select', function() { log('typeahead:select'); });
jQuery("#ZKTypeaheadWidget_74514").on('autocomplete', function() { log('typeahead:autocomplete'); });
jQuery("#ZKTypeaheadWidget_74514").on('cursorchange', function() { log('typeahead:cursorchange'); });
jQuery("#ZKTypeaheadWidget_74514").on('asyncrequest', function() { log('typeahead:asyncrequest'); });
jQuery("#ZKTypeaheadWidget_74514").on('asynccancel', function() { log('typeahead:asynccancel'); });
jQuery("#ZKTypeaheadWidget_74514").on('asyncreceive', function() { log('typeahead:asyncreceive'); });
var map;
var cnt_ind;

/*For get already saved data*/
var savedData;

/*For save searched place_id*/
var searchPlaceId = "";

/*For save markers on map*/
var allMarkers = [];

/*For config max marker count*/
var count_markers = 1;

/*For change markers*/
var cnt_edited = 0;

/*Is show in map input search auto complete*/
var searchAutoComplete = true;

/*Is show image*/
var searchPlaceImageShow = true;

/*API key*/
var key = 'AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo';
function createMap() {
var options = {
center:{lat:41.32, lng: 69.22},
zoom: 12,
mapTypeId: 'terrain'
}
map = new google.maps.Map(document.getElementById('mapcoreadress-0-location-location'),options);

var markersOnMap = savedData.map(function(location, i) {

var marker = new google.maps.Marker({
position: {lat:parseFloat(location.lat), lng: parseFloat(location.lng)},
label: 'Z' + i,
});
allMarkers.push(marker);
return marker;
});
// Add a marker clusterer to manage the markers.
var markerCluster = new MarkerClusterer(map, markersOnMap,
{imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});



map.addListener('click', function(event) {

/*If selected place id*/
if (allMarkers.length < count_markers)
{
pushData(event.latLng.lat(), event.latLng.lng(), cnt_ind, 'push');

cnt_ind ++;
console.log('saqlandi');
console.log(count_markers);
}
else if (allMarkers.length >= count_markers) {
//alert("Oграниченный маркер!!");

allMarkers.forEach(function (m) {m.setMap(null);});

var editing_index = cnt_ind - count_markers + cnt_edited;

pushData(event.latLng.lat(), event.latLng.lng(), editing_index, 'edit');

cnt_edited = (cnt_edited + 1) % count_markers;
}
else {
alert("Пожалуйста сначала выберите место на панели поиска!")
}
});

var Placeinput = document.getElementById('depend_depend_1');
console.log('ketti');
console.log(Placeinput);
var searchBoxPlace = new google.maps.places.SearchBox(Placeinput);

map.addListener('bounds_changed', function () {
searchBoxPlace.setBounds(map.getBounds());
});

var markers = [];

searchBoxPlace.addListener('places_changed', function () {
var places = searchBoxPlace.getPlaces();

if(places.length === 0)
return null;

markers.forEach(function (m) {m.setMap(null);});
markers = [];

var bounds = new google.maps.LatLngBounds();
places.forEach(function (p) {
if(!p.geometry)
return null;

markers.push(new google.maps.Marker({
map:map,
title: p.name,
position: p.geometry.location,
// icon: 'https://maps.google.com/maps/contrib/104742213001054094436',
}));
console.log('Topildi ');
console.log(p.place_id);
searchPlaceId = p.place_id;


getPlaceImage(searchPlaceId);

if(p.geometry.viewport)
bounds.union(p.geometry.viewport);
else bounds.union(p.geometry.location);
})
map.fitBounds(bounds);

if (searchAutoComplete) {
document.getElementById('search_map').value =  document.getElementById('depend_depend_1').value;
}

})




/*Prevent to press ENTER button in search area*/

$(window).keydown(function(event){
if(event.keyCode == 13) {
event.preventDefault();
return false;
}
});
/*********************************************************************************/
/*IP address*/
var btn_address = document.getElementById('getmyAddress');
$(btn_address).on('click', function() {
infoWindow = new google.maps.InfoWindow;
var location = navigator.geolocation;

if (location) {
location.getCurrentPosition(function(position) {
var pos = {
lat: position.coords.latitude,
lng: position.coords.longitude
};

infoWindow.setPosition(pos);
infoWindow.setContent();

markers.push(new google.maps.Marker({
map:map,
title: pos.name,
position:pos,
// icon: 'https://maps.google.com/maps/contrib/104742213001054094436',
}));
/*infoWindow.open(map);*/

map.setCenter(pos);

var urlLink2 = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+position.coords.latitude+','+position.coords.longitude+'&key='+key;
fetch(urlLink2)
.then(response => response.json())
.then(data => {
var dataFet = data.results[0].formatted_address;
console.log(data);
var contentString = dataFet;
var infowindow = new google.maps.InfoWindow({
content: contentString
});

infowindow.open(map, marker,document.contentString.insertAdjacentHTML(
"beforeend",
));
})
.catch(err => console.warn(err.message));
},
function() {
handleLocationError(true, infoWindow, map.getCenter());
});
} else {
// Browser doesn't support Geolocation
handleLocationError(false, infoWindow, map.getCenter());
}
});
function handleLocationError(browserHasGeolocation, infoWindow, pos) {
infoWindow.setPosition(pos);
infoWindow.setContent(browserHasGeolocation ?
'Error: Служба геолокации не удалась.' :
'Error: Ваш браузер не поддерживает геолокацию.');
infoWindow.open(map);
}

//#region search in map
if (searchAutoComplete)
{
/*********************************************************************************/
var input = document.getElementById('search_map');
var searchBox = new google.maps.places.SearchBox(input);

map.addListener('bounds_changed', function () {
searchBox.setBounds(map.getBounds());
});

markers = [];
/*For in search in map*/
searchBox.addListener('places_changed', function () {
var places = searchBox.getPlaces();

if(places.length === 0)
return null;

markers.forEach(function (m) {m.setMap(null);});
markers = [];

var bounds = new google.maps.LatLngBounds();
places.forEach(function (p) {
if(!p.geometry)
return null;

markers.push(new google.maps.Marker({
map:map,
title: p.name,
position: p.geometry.location,
// icon: 'https://maps.google.com/maps/contrib/104742213001054094436',
}));
console.log('User qidirdi va topildi');
console.log(p.place_id);
var place_id = p.place_id;
$("<input hidden type='text' name = 'CoreAdress[0][location][location][" + cnt_ind + "][place_id]' value=" + place_id + ">").appendTo('#locations');

getPlaceImage(p.place_id);

if(p.geometry.viewport)
bounds.union(p.geometry.viewport);
else bounds.union(p.geometry.location);
})

map.fitBounds(bounds);
document.getElementById('depend_depend_1').value = document.getElementById('search_map').value;
})
}
//#endregion

}

//Sending request via AJAX to get image of countries
function getPlaceImage(place_id){
if (searchPlaceImageShow){
//404 image
var imageNotFound = 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-scaled-1150x647.png';
//Ajax request
$.ajax({url: "\service.aspx?namespace=inputs&service=depDrops&method=map&args=" + place_id, success: function(result){
if (result!=='https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-scaled-1150x647.png'){

$('#place_image').css('display','') ;
document.getElementById("place_image").src = result;
}
else{
$('#place_image').css('display','none');
}
}});
}
}

//For save or edit markers
function pushData(lat, lng, index, type)
{
var marker = new google.maps.Marker({
position: {lat:lat, lng: lng},
draggable: false,
title: '' ,
map: map
});

if (type === 'push') {
allMarkers.push(marker);
}
else if(type === 'edit') {
allMarkers[index] = marker;

for (var i = 0; i < allMarkers.length; i++) {
allMarkers[i].setMap(map);
}
}
/************************************************************************/
var urlLink = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+ lat +','+ lng +'&key='+key;

/******************************************************************/
bootbox.prompt({
title: "добавить ваше местоположение!",
centerVertical: true,
callback: function(result){
console.log(result);

fetch(urlLink)
.then(response => response.json())
.then(data => {
var address = data.results[0].formatted_address;
var place_id = searchPlaceId;
if (searchPlaceId.length === 0)
place_id = data.results[0].place_id;
//console.log(data.results[0].place_id);
var contentString = '<b style="text-align:center">'+result+'</b><br>'+address;
var infowindow = new google.maps.InfoWindow({
content: contentString
});
infowindow.open(map, marker)

/* var address_area_input = $(valueOfInput).val();*/

if (type === 'push') {
$("<input hidden type='text' name = 'CoreAdress[0][location][location][" +index + "][place_id]' value='" + place_id + "'>").appendTo('#locations');
$("<input hidden type='text' name = 'CoreAdress[0][location][location]["+ index + "][address]' value='" + address + "'>").appendTo('#locations');
$("<input hidden type='text' name = 'CoreAdress[0][location][location]["+ index + "][user_entered_address]' value='" + result + "'>").appendTo('#locations');
$("<input hidden type='text' name = 'CoreAdress[0][location][location]["+ index + "][lat]' value=" + lat + ">").appendTo('#locations');
$("<input hidden type='text' name = 'CoreAdress[0][location][location]["+ index + "][lng]' value=" + lng + ">").appendTo('#locations');
}
else if (type === 'edit') {

$("input[name='CoreAdress[0][location][location]["+ index + "][address]'").val(address);
$("input[name='CoreAdress[0][location][location]["+ index + "][user_entered_address]'").val(result);
$("input[name='CoreAdress[0][location][location]["+ index + "][lat]'").val(lat);
$("input[name='CoreAdress[0][location][location]["+ index + "][lng]'").val(lng);
}

})
.catch(err => console.warn(err.message));

}
});
}

/*If loaded show map*/
window.onload = function() {

savedData = [];
cnt_ind = 0;
for(var i = 0; i < savedData.length; i++)
{
console.log(savedData[i]);
$("<input hidden type='text' name = 'CoreAdress[0][location][location][" + cnt_ind + "][place_id]' value='" + savedData[i].place_id + "'>").appendTo('#locations');
$("<input hidden type='text' name = 'CoreAdress[0][location][location][" + cnt_ind + "][user_entered_address]' value='" + savedData[i].result + "'>").appendTo('#locations');
$("<input hidden type='text' name = 'CoreAdress[0][location][location][" + cnt_ind + "][address]' value='" + savedData[i].address+ "'>").appendTo('#locations');
$("<input hidden type='text' name = 'CoreAdress[0][location][location][" + cnt_ind + "][lat]' value=" + savedData[i].lat + ">").appendTo('#locations');
$("<input hidden type='text' name = 'CoreAdress[0][location][location][" + cnt_ind + "][lng]' value=" + savedData[i].lng + ">").appendTo('#locations');
cnt_ind++;
}
createMap();
}

$(document).on('click', '#w52', function() { console.log("ZButtonWidget | $eventClick") });
$('#w52')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w53', function() { console.log("ZButtonWidget | $eventClick") });
$('#w53')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w54', function() { console.log("ZButtonWidget | $eventClick") });
$('#w54')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w55', function() { console.log("ZButtonWidget | $eventClick") });
$('#w55')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w56', function() { console.log("ZButtonWidget | $eventClick") });
$('#w56')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


jQuery('#w42').yiiActiveForm([{"id":"coreadress-0-location-place","name":"place","container":".field-coreadress-0-location-place","input":"#coreadress-0-location-place","error":".help-block.invalid-feedback","enableAjaxValidation":true,"validateOnType":true,"validationDelay":100},{"id":"coreadress-0-location-location","name":"location","container":".field-coreadress-0-location-location","input":"#coreadress-0-location-location","error":".help-block.invalid-feedback","enableAjaxValidation":true,"validateOnType":true,"validationDelay":100}], {"validationUrl":"\/customer\/main\/check-out.aspx"});

$('#w42').on('change', )

jQuery('#w40').yiiActiveForm([], []);

jQuery("#coreadress-place_region_form-0-64-cont").editable(editable_a2d7c1d7);
jQuery("#coreadress-place_region_form-0-64-cont").on('editableChange', function(event, val) { console.log('Changed Value ' + val); });
jQuery("#coreadress-place_region_form-0-64-cont").on('editableBeforeSubmit', function(event, jqXHR) { console.log('Before submit triggered'); });
jQuery("#coreadress-place_region_form-0-64-cont").on('editableSubmit', function(event, val, form, jqXHR) { console.log('Submitted Value ' + val); });
jQuery("#coreadress-place_region_form-0-64-cont").on('editableReset', function(event) { console.log('Reset editable form'); });
jQuery("#coreadress-place_region_form-0-64-cont").on('editableSuccess', function(event, val, form, data) { console.log('Successful submission of value ' + val); });
jQuery("#coreadress-place_region_form-0-64-cont").on('editableError', function(event, val, form, data) { console.log('Error while submission of value ' + val); });
jQuery("#coreadress-place_region_form-0-64-cont").on('editableAjaxError', function(event, jqXHR, status, message) { console.log(jqXHR); });

jQuery("#64_pjaxContainerId").off('pjax:complete.0e367a78').on('pjax:complete.0e367a78',function(){ setTimeout(function(){
jQuery("#coreadress-place_region_form-0-64-cont").editable(editable_a2d7c1d7);
jQuery("#coreadress-place_region_form-0-64-cont").on('editableChange', function(event, val) { console.log('Changed Value ' + val); });
jQuery("#coreadress-place_region_form-0-64-cont").on('editableBeforeSubmit', function(event, jqXHR) { console.log('Before submit triggered'); });
jQuery("#coreadress-place_region_form-0-64-cont").on('editableSubmit', function(event, val, form, jqXHR) { console.log('Submitted Value ' + val); });
jQuery("#coreadress-place_region_form-0-64-cont").on('editableReset', function(event) { console.log('Reset editable form'); });
jQuery("#coreadress-place_region_form-0-64-cont").on('editableSuccess', function(event, val, form, data) { console.log('Successful submission of value ' + val); });
jQuery("#coreadress-place_region_form-0-64-cont").on('editableError', function(event, val, form, data) { console.log('Error while submission of value ' + val); });
jQuery("#coreadress-place_region_form-0-64-cont").on('editableAjaxError', function(event, jqXHR, status, message) { console.log(jqXHR); });
}, 100); });
initEditablePjax('64_pjaxContainerId', 'coreadress-place_region_form-0-64-targ', 'kvEdPjax_coreadress_place_region_form_0_64_popover');
var $el=jQuery("#w59 .kv-hint-special");if($el.length){$el.each(function(){$(this).activeFieldHint()});}kvBs4InitForm();
var $el=jQuery("#w61 .kv-hint-special");if($el.length){$el.each(function(){$(this).activeFieldHint()});}kvBs4InitForm();
jQuery("#w65").kvFormBuilder({});
if (jQuery('#coreadress-0-place_region_form-place_country_id').data('select2')) { jQuery('#coreadress-0-place_region_form-place_country_id').select2('destroy'); }
jQuery.when(jQuery('#coreadress-0-place_region_form-place_country_id').select2(select2_874b65d2)).done(initS2Loading('coreadress-0-place_region_form-place_country_id','s2options_e9bc2761'));
jQuery('#coreadress-0-place_region_form-place_country_id').on('select2:change', function(event){console.log('ZKSelect2Widget | change')});
jQuery('#coreadress-0-place_region_form-place_country_id').on('select2:opening', function() { console.log("ZKSelect2Widget | $eventOpening") });
jQuery('#coreadress-0-place_region_form-place_country_id').on('select2:open', function() { console.log("ZKSelect2Widget | $eventOpen") });
jQuery('#coreadress-0-place_region_form-place_country_id').on('select2:closing', function() { console.log("ZKSelect2Widget | $eventClosing") });
jQuery('#coreadress-0-place_region_form-place_country_id').on('select2:close', function() { console.log("ZKSelect2Widget | $eventClose") });
jQuery('#coreadress-0-place_region_form-place_country_id').on('select2:selecting', function() { console.log("ZKSelect2Widget | $eventSelecting")
});
jQuery('#coreadress-0-place_region_form-place_country_id').on('select2:select', function() { console.log("ZKSelect2Widget | $eventSelecting")
});
jQuery('#coreadress-0-place_region_form-place_country_id').on('select2:unselecting', function() { console.log("ZKSelect2Widget | $eventUnSelecting") });
jQuery('#coreadress-0-place_region_form-place_country_id').on('select2:unselect', function() { console.log("ZKSelect2Widget | $eventUnselect") });

jQuery("#w67").kvFormBuilder({});
if (jQuery('#coreadress-0-place_region_form-place_region_id').data('depdrop')) { jQuery('#coreadress-0-place_region_form-place_region_id').depdrop('destroy'); }
jQuery('#coreadress-0-place_region_form-place_region_id').depdrop(depdrop_5a802b95);

if (jQuery('#coreadress-0-place_region_form-place_region_id').data('select2')) { jQuery('#coreadress-0-place_region_form-place_region_id').select2('destroy'); }
jQuery.when(jQuery('#coreadress-0-place_region_form-place_region_id').select2(select2_7eacb31b)).done(initS2Loading('coreadress-0-place_region_form-place_region_id','s2options_e9bc2761'));

initDepdropS2('coreadress-0-place_region_form-place_region_id','Loading ...');
$(document).on('click', '#w70', function() { console.log("ZButtonWidget | $eventClick") });
$('#w70')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w71', function() { console.log("ZButtonWidget | $eventClick") });
$('#w71')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w72', function() { console.log("ZButtonWidget | $eventClick") });
$('#w72')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w73', function() { console.log("ZButtonWidget | $eventClick") });
$('#w73')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w74', function() { console.log("ZButtonWidget | $eventClick") });
$('#w74')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


jQuery('#w61').yiiActiveForm([{"id":"coreadress-0-place_region_form-place_country_id","name":"place_country_id","container":".field-coreadress-0-place_region_form-place_country_id","input":"#coreadress-0-place_region_form-place_country_id","error":".help-block.invalid-feedback","enableAjaxValidation":true,"validateOnType":true,"validationDelay":100,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Необходимо заполнить «place_country»."});}},{"id":"coreadress-0-place_region_form-place_region_id","name":"place_region_id","container":".field-coreadress-0-place_region_form-place_region_id","input":"#coreadress-0-place_region_form-place_region_id","error":".help-block.invalid-feedback","enableAjaxValidation":true,"validateOnType":true,"validationDelay":100,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Необходимо заполнить «Область»."});}}], {"validationUrl":"\/customer\/main\/check-out.aspx"});

$('#w61').on('change', )

jQuery('#w59').yiiActiveForm([], []);

jQuery("#coreadress-contact-0-64-cont").editable(editable_a2d7c1d7);
jQuery("#coreadress-contact-0-64-cont").on('editableChange', function(event, val) { console.log('Changed Value ' + val); });
jQuery("#coreadress-contact-0-64-cont").on('editableBeforeSubmit', function(event, jqXHR) { console.log('Before submit triggered'); });
jQuery("#coreadress-contact-0-64-cont").on('editableSubmit', function(event, val, form, jqXHR) { console.log('Submitted Value ' + val); });
jQuery("#coreadress-contact-0-64-cont").on('editableReset', function(event) { console.log('Reset editable form'); });
jQuery("#coreadress-contact-0-64-cont").on('editableSuccess', function(event, val, form, data) { console.log('Successful submission of value ' + val); });
jQuery("#coreadress-contact-0-64-cont").on('editableError', function(event, val, form, data) { console.log('Error while submission of value ' + val); });
jQuery("#coreadress-contact-0-64-cont").on('editableAjaxError', function(event, jqXHR, status, message) { console.log(jqXHR); });

jQuery("#64_pjaxContainerId").off('pjax:complete.dba8d4de').on('pjax:complete.dba8d4de',function(){ setTimeout(function(){
jQuery("#coreadress-contact-0-64-cont").editable(editable_a2d7c1d7);
jQuery("#coreadress-contact-0-64-cont").on('editableChange', function(event, val) { console.log('Changed Value ' + val); });
jQuery("#coreadress-contact-0-64-cont").on('editableBeforeSubmit', function(event, jqXHR) { console.log('Before submit triggered'); });
jQuery("#coreadress-contact-0-64-cont").on('editableSubmit', function(event, val, form, jqXHR) { console.log('Submitted Value ' + val); });
jQuery("#coreadress-contact-0-64-cont").on('editableReset', function(event) { console.log('Reset editable form'); });
jQuery("#coreadress-contact-0-64-cont").on('editableSuccess', function(event, val, form, data) { console.log('Successful submission of value ' + val); });
jQuery("#coreadress-contact-0-64-cont").on('editableError', function(event, val, form, data) { console.log('Error while submission of value ' + val); });
jQuery("#coreadress-contact-0-64-cont").on('editableAjaxError', function(event, jqXHR, status, message) { console.log(jqXHR); });
}, 100); });
initEditablePjax('64_pjaxContainerId', 'coreadress-contact-0-64-targ', 'kvEdPjax_coreadress_contact_0_64_popover');
var $el=jQuery("#w77 .kv-hint-special");if($el.length){$el.each(function(){$(this).activeFieldHint()});}kvBs4InitForm();
var $el=jQuery("#w79 .kv-hint-special");if($el.length){$el.each(function(){$(this).activeFieldHint()});}kvBs4InitForm();
jQuery("#w83").kvFormBuilder({});
jQuery("#w85").kvFormBuilder({});
jQuery("#w87").kvFormBuilder({});
$(document).on('click', '#w90', function() { console.log("ZButtonWidget | $eventClick") });
$('#w90')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w91', function() { console.log("ZButtonWidget | $eventClick") });
$('#w91')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w92', function() { console.log("ZButtonWidget | $eventClick") });
$('#w92')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w93', function() { console.log("ZButtonWidget | $eventClick") });
$('#w93')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w94', function() { console.log("ZButtonWidget | $eventClick") });
$('#w94')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


jQuery('#w79').yiiActiveForm([{"id":"coreadress-0-contact-phone","name":"phone","container":".field-coreadress-0-contact-phone","input":"#coreadress-0-contact-phone","error":".help-block.invalid-feedback","enableAjaxValidation":true,"validateOnType":true,"validationDelay":100,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Необходимо заполнить «Телефон»."});}},{"id":"coreadress-0-contact-full_name","name":"full_name","container":".field-coreadress-0-contact-full_name","input":"#coreadress-0-contact-full_name","error":".help-block.invalid-feedback","enableAjaxValidation":true,"validateOnType":true,"validationDelay":100,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Необходимо заполнить «Полное имя»."});}},{"id":"coreadress-0-contact-email","name":"email","container":".field-coreadress-0-contact-email","input":"#coreadress-0-contact-email","error":".help-block.invalid-feedback","enableAjaxValidation":true,"validateOnType":true,"validationDelay":100,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Необходимо заполнить «Электронная почта»."});yii.validation.email(value, messages, {"pattern":/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/,"fullPattern":/^[^@]*<[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>$/,"allowName":false,"message":"Значение «Электронная почта» не является правильным email адресом.","enableIDN":false,"skipOnEmpty":1});}}], {"validationUrl":"\/customer\/main\/check-out.aspx"});

$('#w79').on('change', )

jQuery('#w77').yiiActiveForm([], []);

jQuery("#coreadress-address_info-0-64-cont").editable(editable_a2d7c1d7);
jQuery("#coreadress-address_info-0-64-cont").on('editableChange', function(event, val) { console.log('Changed Value ' + val); });
jQuery("#coreadress-address_info-0-64-cont").on('editableBeforeSubmit', function(event, jqXHR) { console.log('Before submit triggered'); });
jQuery("#coreadress-address_info-0-64-cont").on('editableSubmit', function(event, val, form, jqXHR) { console.log('Submitted Value ' + val); });
jQuery("#coreadress-address_info-0-64-cont").on('editableReset', function(event) { console.log('Reset editable form'); });
jQuery("#coreadress-address_info-0-64-cont").on('editableSuccess', function(event, val, form, data) { console.log('Successful submission of value ' + val); });
jQuery("#coreadress-address_info-0-64-cont").on('editableError', function(event, val, form, data) { console.log('Error while submission of value ' + val); });
jQuery("#coreadress-address_info-0-64-cont").on('editableAjaxError', function(event, jqXHR, status, message) { console.log(jqXHR); });

jQuery("#64_pjaxContainerId").off('pjax:complete.86ee1d60').on('pjax:complete.86ee1d60',function(){ setTimeout(function(){
jQuery("#coreadress-address_info-0-64-cont").editable(editable_a2d7c1d7);
jQuery("#coreadress-address_info-0-64-cont").on('editableChange', function(event, val) { console.log('Changed Value ' + val); });
jQuery("#coreadress-address_info-0-64-cont").on('editableBeforeSubmit', function(event, jqXHR) { console.log('Before submit triggered'); });
jQuery("#coreadress-address_info-0-64-cont").on('editableSubmit', function(event, val, form, jqXHR) { console.log('Submitted Value ' + val); });
jQuery("#coreadress-address_info-0-64-cont").on('editableReset', function(event) { console.log('Reset editable form'); });
jQuery("#coreadress-address_info-0-64-cont").on('editableSuccess', function(event, val, form, data) { console.log('Successful submission of value ' + val); });
jQuery("#coreadress-address_info-0-64-cont").on('editableError', function(event, val, form, data) { console.log('Error while submission of value ' + val); });
jQuery("#coreadress-address_info-0-64-cont").on('editableAjaxError', function(event, jqXHR, status, message) { console.log(jqXHR); });
}, 100); });
initEditablePjax('64_pjaxContainerId', 'coreadress-address_info-0-64-targ', 'kvEdPjax_coreadress_address_info_0_64_popover');
var $el=jQuery("#w97 .kv-hint-special");if($el.length){$el.each(function(){$(this).activeFieldHint()});}kvBs4InitForm();
var $el=jQuery("#w99 .kv-hint-special");if($el.length){$el.each(function(){$(this).activeFieldHint()});}kvBs4InitForm();
jQuery("#w103").kvFormBuilder({});
jQuery("#w105").kvFormBuilder({});
jQuery("#w107").kvFormBuilder({});
jQuery("#w109").kvFormBuilder({});
$(document).on('click', '#w112', function() { console.log("ZButtonWidget | $eventClick") });
$('#w112')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w113', function() { console.log("ZButtonWidget | $eventClick") });
$('#w113')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w114', function() { console.log("ZButtonWidget | $eventClick") });
$('#w114')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w115', function() { console.log("ZButtonWidget | $eventClick") });
$('#w115')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$(document).on('click', '#w116', function() { console.log("ZButtonWidget | $eventClick") });
$('#w116')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


jQuery('#w99').yiiActiveForm([{"id":"coreadress-0-address_info-street","name":"street","container":".field-coreadress-0-address_info-street","input":"#coreadress-0-address_info-street","error":".help-block.invalid-feedback","enableAjaxValidation":true,"validateOnType":true,"validationDelay":100},{"id":"coreadress-0-address_info-postal_code","name":"postal_code","container":".field-coreadress-0-address_info-postal_code","input":"#coreadress-0-address_info-postal_code","error":".help-block.invalid-feedback","enableAjaxValidation":true,"validateOnType":true,"validationDelay":100},{"id":"coreadress-0-address_info-orientation","name":"orientation","container":".field-coreadress-0-address_info-orientation","input":"#coreadress-0-address_info-orientation","error":".help-block.invalid-feedback","enableAjaxValidation":true,"validateOnType":true,"validationDelay":100}], {"validationUrl":"\/customer\/main\/check-out.aspx"});

$('#w99').on('change', )

jQuery('#w97').yiiActiveForm([], []);
jQuery("#CoreAdress-0-pjax").off('pjax:complete.ab4db5fd').on('pjax:complete.ab4db5fd', function(){
kvSelectColumn('w29', {"name":"selection[]","multiple":true,"checkAll":"selection_all"}); });
jQuery(document).pjax("#CoreAdress-0-pjax a", {"push":true,"replace":false,"timeout":1000,"scrollTo":false,"container":"#CoreAdress-0-pjax"});
jQuery(document).on("submit", "#CoreAdress-0-pjax form[data-pjax]", function (event) {jQuery.pjax.submit(event, {"push":true,"replace":false,"timeout":1000,"scrollTo":false,"container":"#CoreAdress-0-pjax"});});
$(document).on('click', 'td', function (e) {
var target = $( e.target );
if (target.is('td')){
var range = document.createRange();
range.selectNodeContents(this);
var text = range['startContainer']['innerText'];
copyToClipboard(text);
e.stopPropagation();
console.log('Copied: ' + text);
}
});

$(document).on('click', '#w124',     function() {

var keys = "";

$('.checkbox-CoreAdress').each(function (index) {
if ($(this).prop("checked")) {
keys += $(this).val() + "|";
}
});

if (keys === "")
bootbox.confirm({
title: "Предупреждение",
message: "Вы должны выбрать адрес.",
buttons: {
confirm: {
label: '<i class="fa fa-check"></i> OK'
},
cancel: {
label: 'No',
className: 'd-none'
}
},
callback: function (event) {
if (result === true)
return null;
else
console.log(result);
}
});
else
$.ajax({
type: "POST",
url: '/core/product/saveOrder.aspx',
data: {keys: keys, modelClassName: ''},
timeout: 4000,
success: function () {
console.log('success');
}
});
});
$('#w124')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });



var total = 0;
$.each( $(".totals"), function( key, value ) {total += Number(value.innerHTML);});
$("#subtotals").html(total);
$("#totalsum").html(total);
$(".delete_product_from_cart").on("click", function() {
var catalog_id = $(this).data('catalogid');
var el = $(this);
$.ajax({
type: "GET",
url: "/core/product/setToCart.aspx",
data: {
catalog_id: catalog_id,
amount    : 0,
},
success: function(data){
el.parents(".product_item:first").remove();
},
error:  function() {
alert('error');
}
});
});
/*$("#cartReview").remove();*/
$(".quantity").on("change", function () {
newValue = $(this).val();
var price =  $(this).data('price');
$('#total'+$(this).attr('id')).html(newValue*price);
var total = 0;
var catalog_id = $(this).data('catalogid');
//console.log($(this).data('catalogid'));

$.each( $(".totals"), function( key, value ) {total += Number(value.innerHTML);});
$("#subtotals").html(total);
$("#totalsum").html(Number($("#shipping").html())+Number($("#subtotals").html()));
})

$('#showCartBtn').on('click', function (event){
onclick = $(this).attr('onclick');
$(this).attr('onclick','');
showConfirm(onclick);
return false;
});

var config = {
decrementButton: "<strong id='minus{id}'>-</strong>", // button text
incrementButton: "<strong id='plus{id}'>+++</strong>", // ..
groupClass: "", // css class of the resulting input-group
buttonsClass: "btn-outline-dark",
buttonsWidth: "1rem",
textAlign: "center",
autoDelay: 500, // ms holding before auto value change
autoInterval: 100, // speed of auto value change
boostThreshold: 10, // boost after these steps
boostMultiplier: "auto" // you can also set a constant number as multiplier
};
var total = 0;
$.each( $(".totals"), function( key, value ) {total += Number(value.innerHTML);});
$("#subtotals").html(total);
$("#totalsum").html(total);
$(".quantity").inputSpinner();
$(".delete_product_from_cart").on("click", function() {
var catalog_id = $(this).data('catalogid');
var el = $(this);
$.ajax({
method: "GET",
url: "/core/product/setToCart.aspx",
data: {
catalog_id: catalog_id,
amount    : 0,
},
success: function(data){
el.parents(".product_item:first").remove();
},
error:  function() {
alert('error');
}
});
});
/*$("#cartReview").remove();*/
$(".quantity").on("change", function () {
var newValue = $(this).val();
var price =  $(this).data('price');
$('#total'+$(this).attr('id')).html(newValue*price);
var total = 0;
var catalog_id = $(this).data('catalogid');

$.each($(".totals"), function( key, value ) {
total += Number(value.innerHTML);
});

$("#subtotals").html(total);
$("#totalsum").html(Number($("#shipping").html())+Number($("#subtotals").html()));

$.ajax({
method: "GET",
url: "/core/product/setToCart.aspx",
data: {
catalog_id: catalog_id,
amount    : newValue,
},
success: function(data){
$(".wishCount").html(data);
},
error:  function() {
alert('error');
}
});
})

$('#showCartBtn').on('click', function (event){
onclick = $(this).attr('onclick');
$(this).attr('onclick','');
showConfirm(onclick);
return false;
});


var options  = {
minimum: 0.08,
easing: 'ease',
positionUsing: '',
speed: 500,
trickle: true,
trickleRate: 0.02,
trickleSpeed: 800,
showSpinner: true,
barSelector: '[role="bar"]',
spinnerSelector: '[role="spinner"]',
parent: 'body',
template: '<div class="bar" role="bar">' +
    '<div class="peg"></div>' +
    '</div>' +
'<div class="spinner" role="spinner">' +
    '<div class="spinner-icon"></div>' +
    '</div>'
};

/*   NProgress.configure(options);*/



/*
METHODS

.addControl({
html: '<span class="fa fa-cog"></span>',
name: 'settings',
handler: function(panel, control){
panel.content.innerHTML = 'You clicked the "settings" control';
}
})

var tbar = '<span id="btn-bus"><i class="fa fa-bus"></i></span>'+
'<span id="btn-train"><i class="fa fa-train"></i></span>'+
'<span id="btn-car"><i class="fa fa-car"></i></span>';


.addToolbar('header', tbar, function (panel) {
var tb = this.headertoolbar;
tb.querySelector('#btn-bus').addEventListener('click', function () {
panel.content.innerHTML = 'you clicked the bus icon.';
}, false);
tb.querySelector('#btn-train').addEventListener('click', function () {
panel.content.innerHTML = 'you clicked the train icon.';
}, false);
tb.querySelector('#btn-car').addEventListener('click', function () {
panel.content.innerHTML = 'you clicked the car icon.';
}, false);
Array.prototype.slice.call(tb.querySelectorAll('span')).forEach(function (item) {
item.style.cursor = 'pointer';
item.style.margin = '3px 8px 1px 0';
});
});



panel.close();
panel.closeChildpanels();

panel.contentRemove(function () {
this.setTheme('darkgray');
});


panel.dragit('enable');

panel.front(function () {
this.setTheme('purple filledlight');
});


.maximize();
.minimize();
.normalize();

panel.overlaps("#testcontainer", "paddingbox", event);

panel.reposition('left-top 50 50');

panel
.resize({
width:  window.innerWidth/2,
height: 300
})

.resizeit();

.setBorder('dashed orange');

.setBorderRadius('0.5rem');

.setControlStatus('minimize', 'disable');

.setHeaderLogo('<i class="fa fa-spinner fa-spin"></i>'

.create().setHeaderTitle('a new title ...');

.setTheme({
bgPanel: 'linear-gradient(120deg,#155799,#159957)',
bgContent: 'transparent',
colorHeader: '#fff',
colorContent: '#fff',
border: '4px solid #157B75'
});

.smallify();
.unsmallify()

* */
/*

options

addCloseControl: 1,

animateIn: 'jsPanelFadeIn',
animateOut: 'jsPanelFadeOut'

autoclose: 3000,
autoclose: {
time: '6s',
background: 'linear-gradient(90deg, rgba(255,0,0,1) 0%, rgba(0,255,17,1) 100%)'
}

border: "thick dashed orange",
borderRadius: '1rem',

boxShadow: 2,                 // type: integer range: 0 - 5

callback: function () {
this.content.innerHTML = '<p>Added via option.callback.</p>';
}

closeOnEscape: true,

config: hintConfig,     // type object

container: '#testcontainer',    // type: string (selector), node object, jQuery object

content: '<p>Appended with <i>Element.innerHTML</i></p>',        // type: string, element, function


contentAjax: {
url: '../docs/sample-content/sampleContent.html',   // url type: string, default: undefined
done: function (panel) {
panel.content.innerHTML = this.responseText;
},
evalscripttags: true
},                                            //  type: string, object


contentFetch: {
resource: '../docs/sample-content/delayedContent.php',
beforeSend: function() {
this.headerlogo.innerHTML = "<span class='fa fa-spinner fa-spin' style='margin-left:8px'></span>"
},
fetchInit: {
method: 'POST'
},
done: function (panel, response) {
this.content.innerHTML = response;
this.headerlogo.innerHTML = "<span class='fa fa-check' style='margin-left:8px'></span>";
this.resize('auto 300').reposition();
}
}                                              // type: string, object


contentOverflow: 'scroll',            // type: string

contentSize: '600 300',            // type: object, string
contentSize: {
width: function() {
return window.innerWidth/4
},
height: 'auto'
}

data: 'foobar',                // type: string, number, array, plain object

dragit: {
axis: 'x',
cursor: 'move'
//.....
}                                  // type: object or boolean false (turns off dragit completely)


footerToolbar: '<span style="flex:1 1 auto">Some text content</span>'      //type: string, array, node object or function

header: false,        // type: boolean or string     string 'auto-show-hide'


headerControls: {
add: {
html: '<span class="fal fa-undo"></span>',
name: 'reset',
handler: function(panel, control){
panel.content.innerHTML = 'You clicked the "reset" control';
}
},
minimize: 'remove',
reset: 'enable'
}                                   // type: object or string


headerRemove: true

headerTitle: 'just another title'           // type: string, function or element

headerToolbar: '<span id="bus"><i class="fad fa-bus fa-fw"></i></span>'         // type: string, array, node object or function


iconfont: 'material-icons',               // type: string or array

id: 'mypanel-1',                         // type: string, function

maximizedMargin: [61, 5, 5, 5]             // type: number, array

onbeforeclose: function (panel, status, closedByUser) {
console.log(panel, status, closedByUser);
return confirm('Close panel?');
}

panelSize: '600 300',                          // type: object or string


position: {
my: 'right-top',
at: 'right-top',
of: 'body .main-content',
offsetX: '-0.5rem',
offsetY: '5px',
autoposition 'down'
}                                                   // type: object, string or boolean false


resizeit: {
handles: 'e, se'
}                                               // type: object or boolean false (turns off resizeit completely)


theme: 'primary',                           // type: string object

*/

var tbar = '';
jsPanel.create({
id: 'loggerPanel',
contentSize: ({
width: function () {
return window.innerWidth / 2
},
height: function () {
return window.innerHeight / 2
},

}),
position: {
my: 'right-bottom',
at: 'right-bottom',
autoposition: 'down',
offsetX: -40,
offsetY: 0

},
headerTitle: 'Процесс',
content: '',
headerControls: {
close: 'remove'
},
footerToolbar: '<i class="fa fa-clock"></i><span class="clock">loading ...</span>',
callback: function (panel) {

function clock() {
var time = new Date(),
hours = time.getHours(),
minutes = time.getMinutes(),
seconds = time.getSeconds();
panel.footer.querySelectorAll('.clock') [0].innerHTML = harold(hours) + ':' + harold(minutes) + ':' + harold(seconds);
function harold(standIn) {
if (standIn < 3) {
standIn = '0' + standIn
}
return standIn;
}
}
setInterval(clock, 1000);
}
})
.addToolbar('header', tbar, function (panel) {
var tb = this.headertoolbar;


/* tb.querySelector('#btn-eraser').addEventListener('click', function () {
panel.content.innerHTML = '';
}, false);
tb.querySelector('#btn-stop').addEventListener('click', function () {
conn.send(JSON.stringify({
type: "stop"
}))
}, false);*/

Array.prototype.slice.call(tb.querySelectorAll('span')).forEach(function (item) {
item.style.cursor = 'pointer';
item.style.margin = '3px 8px 1px 0';
});
})
.addControl({
html: '<span class="fa fa-stop-circle"></span>',
name: 'stop',
handler: function(panel, control){
//panel.content.innerHTML = 'You clicked the "settings" control';
}
})
.addControl({
html: '<span class="fa fa-eraser"></span>',
name: 'clear',
handler: function(panel, control){
panel.content.innerHTML = '';
}
})



.addControl({
html: '<span class="fa fa-close"></span>',
name: 'close',
handler: function(panel, control){
$('.jsPanel').hide();
},
position: 7,
afterInsert: function(control){
// do with the control whatever is needed ...
}
})



.setBorderRadius('0.7rem')
/*.setHeaderLogo('<i class="fa fa-spinner fa-spin"></i>', function() {
this.headerlogo.querySelector('.fa-spinner').style.marginLeft = '8px';
})*/
.setTheme({
bgPanel: 'linear-gradient(120deg,#1BE7FF,#8100BA)',
colorHeader: '#ffffff',
colorContent: 'black',
border: '4px solid #157B75'
})

$('.jsPanel').hide();

var sidenavslider = $('#sidenavslider');

var sideiconbar = $('#side-icon-bar');
var state = window.localStorage.getItem('sideBarStatus');
if (state === 'open'){
sideiconbar.show(100);
sideiconbar.addClass('misopen');
$('#side-menu-slider-right').removeClass('d-none');
$('#side-menu-slider-left').addClass('d-none');
sidenavslider.css('right', '80px');
$('.ilon-mask').css({'width': '98%', 'transition': '0.5s'});
$('.main-sectio').css({'width': '98%', 'transition': '0.5s'});

} else {
sideiconbar.hide(100);
sideiconbar.removeClass('misopen');
$('#side-menu-slider-left').removeClass('d-none');
$('#side-menu-slider-right').addClass('d-none');
sidenavslider.css('right','40px');
$('.ilon-mask').css({'width': '100%', 'transition': '0.5s'});
$('.main-sectio').css({'width': '100%', 'transition': '0.5s'});
}
// }
// else {
//      if (!sideiconbar.hasClass('misopen')){}else{
//            sideiconbar.removeClass('misopen');
//      }
// }
sidenavslider.find('i').css({'height': '35px', 'width': '35px', 'background-color': 'lightgray'});
sidenavslider.find('i').mouseover(function(){
$(this).addClass('z-depth-2');
sidenavslider.find('i').removeClass('white-text');
sidenavslider.find('i').addClass('green-text');
sidenavslider.find('i').css({'background-color': 'white'});
})
sidenavslider.find('i').mouseleave(function(){
$(this).removeClass('z-depth-2');
sidenavslider.find('i').addClass('white-text');
sidenavslider.find('i').removeClass('green-text');
sidenavslider.find('i').css('background-color', 'lightgray');
})
sidenavslider.css({
'background': 'none !important',
'box-shadow': 'none !important',
'position': 'absolute',
'top': '50vh',
'transition': 'top 100',
'z-index': '1'
});
(state === 'open') ? sidenavslider.css('right', '80px') : sidenavslider.css('right', '40px');
sidenavslider.click(function (event) {
if (sideiconbar.hasClass('misopen')) {
window.localStorage.setItem('sideBarStatus','closed');
sideiconbar.toggle(100);
sideiconbar.toggleClass('misopen');
$('#side-menu-slider-right').toggleClass('d-none', 1000);
$('#side-menu-slider-left').toggleClass('d-none', 1000);
sidenavslider.css({'right': '40px', 'transition': '0.5s'});
$('.ilon-mask').css({'width': '100%', 'transition': '0.5s'});
$('.main-sectio').css({'width': '100%', 'transition': '0.5s'});
} else {
window.localStorage.setItem('sideBarStatus','open');
sidenavslider.css({'right': '80px', 'transition': '0.5s'});
$('.menu-left').css('transition', '1s')
sideiconbar.toggle(100);
sideiconbar.toggleClass('misopen');
$('.ilon-mask').css({'width': '98%', 'transition': '0.5s'});
$('.main-sectio').css({'width': '98%', 'transition': '0.5s'});
$('#side-menu-slider-right').toggleClass('d-none', 1000);
$('#side-menu-slider-left').toggleClass('d-none', 1000);
}
});


$(window).scroll(function (event) {
var height = $(window).scrollTop();
var lineHeight = $(window).height() / 2;
sidenavslider.fadeIn().css('top', 'calc(40vh + ' + height + 'px)');
})

$('.scroll_top').click(function () {
$('html, body').animate({scrollTop: 0}, 1000);
});
$('.fa-list-alt').click(function () {
$('.jsPanel').toggle();
});

jQuery(document).pjax("#p0 a", {"type":"POST","dataType":"html","scrollOffset":0,"maxCacheLength":20,"pushRedirect":false,"replaceRedirect":true,"skipOuterContainers":false,"ieRedirectCompatibility":true,"push":true,"replace":true,"timeout":1000,"scrollTo":false,"container":"#p0"});
jQuery(document).on("submit", "#p0 form[data-pjax]", function (event) {jQuery.pjax.submit(event, {"type":"POST","dataType":"html","scrollOffset":0,"maxCacheLength":20,"pushRedirect":false,"replaceRedirect":true,"skipOuterContainers":false,"ieRedirectCompatibility":true,"push":true,"replace":true,"timeout":1000,"scrollTo":false,"container":"#p0"});});
jQuery(document).on('pjax:end', function () {

console.warn('pjax:end | Before Check: ' + cookie.get('canRun'));

if (cookie.get('canRun') === 'true') {
console.warn('pjax:end | Executed: ' + cookie.get('canRun'));
all();
cookie.set('canRun', false, {expires: 30});
console.warn('pjax:end | Executed End: ' + cookie.get('canRun'));
} else {
console.warn('pjax:end | Skipped: ' + cookie.get('canRun'));
cookie.set('canRun', false, {expires: 30});
console.warn('pjax:end | Skipped End: ' + cookie.get('canRun'));
}


});
$(document).on('click', '#w142', function() { console.log("ZButtonWidget | $eventClick") });
$('#w142')
.on('dblclick', function() { console.log("ZButtonWidget | $eventDblclick") })
.on('keyup', function() { console.log("ZButtonWidget | $eventKeyup") })
.on('mouseenter', function() { console.log("ZButtonWidget | $eventMouseEnter") })
.on('mouseleave', function() { console.log("ZButtonWidget | $eventMouseLeave") });


$('#w144')
.on('log.ic', function(evt, msg, level, elt) { console.log("ZIntercoolerWidget | log") })
.on('beforeAjaxSend.ic', function(evt, ajaxSetting, elt) { console.log("ZIntercoolerWidget | beforeAjaxSend") })
.on('beforeHeaders.ic', function(evt, elt, xhr) { console.log("ZIntercoolerWidget | beforeHeaders") })
.on('afterHeaders.ic', function(evt, elt, xhr) { console.log("ZIntercoolerWidget | afterHeaders") })
.on('beforeSend.ic', function(evt, elt, data, settings, xhr, requestId) { console.log("ZIntercoolerWidget | beforeSend") })
.on('success.ic', function(evt, elt, data, textStatus, xhr, requestId) { console.log("ZIntercoolerWidget | success") })
.on('after.success.ic', function(evt, elt, data, textStatus, xhr, requestId) { console.log("ZIntercoolerWidget | afterSuccess") })
.on('error.ic', function(evt, elt, status, str, xhr) { console.log("ZIntercoolerWidget | error") })
.on('complete.ic', function(evt, elt, data, status, xhr, requestId) { console.log("ZIntercoolerWidget | complete") })
.on('onPoll.ic', function(evt, elt) { console.log("ZIntercoolerWidget | onPoll") })
.on('handle.onpopstate.ic', function(evt) { console.log("ZIntercoolerWidget | handleOnpopstate") })
.on('elementAdded.ic', function(evt) { console.log("ZIntercoolerWidget | elementAdded") })
.on('pushUrl.ic', function(evt, target, data) { console.log("ZIntercoolerWidget | pushUrl") })
.on('beforeHistorySnapshot.ic', function(evt, target) { console.log("ZIntercoolerWidget | beforeHistorySnapshot") })

});
