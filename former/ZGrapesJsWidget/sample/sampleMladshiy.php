<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\dbitem\grap\GrapeItem;
use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\former\ZGrapesJsWidget;
use zetsoft\widgets\former\ZGrapesJsWidget1;
use zetsoft\widgets\former\ZGrapesJsWidgetMladshiy;
use zetsoft\widgets\former\ZGrapesJsWidgetAzimjon;


$data = [];

$this->grape=true;

$item = new GrapeItem();
$item->blockId = 'block-id11';
$item->img = 'https://picsum.photos/70/70';
$item->blockName = 'ZFileinputWidget';
$item->content = "<p>some content</p>";
$item->category = 'Maps';
$item->script = '';
$item->title = 'ZTinyCloud';
$item->src = '/render/Inputs/Wysiwig/CSSJS/tinymce5/clean1.html';

$data[] = $item;


$data = [];
$item2 = new GrapeItem();
$item2->blockId = 'block-id';
$item2->img = 'https://picsum.photos/70/70';
$item2->blockName = 'ZGoogleWidget';
$item2->content = "<p>some content</p>";
$item2->category = 'Maps2 ';
$item2->script = '';
$item2->title = 'ZGoogleWidget';
$item2->src = '/render/animo/Background/CSS/Lunarlogic Auroral/clean1.html';

$data[] = $item2;

//
//$item = new GrapeItem();
//$item->label = '2222';
//$item->category = 'c333at';
//$data[] = $item;
//
//
//$item = new GrapeItem();
//$item->label = '1313131';
//$item->category = '331';
//$data[] = $item;
//
//
//$item = new GrapeItem();
//$item->label = '131';
//$item->category = '13131';
//$data[] = $item;


echo ZAjaxWidget::widget([
    'config' => [
        'func' => 'ajaxGrapes',

    ],
    'event' => [
        'complete' => <<<JS
        function (data) {
             $(".gjs-traits-label").html(data.responseText);
        }
JS,
    ]

]);

?>

    <div id="widget"></div>


<?


echo ZGrapesJsWidgetMladshiy::widget([
    'data' => $data,
    'config' => [
        'autoAdd' => '1',
        'dropzone' => '0',
    ],

    /* 'event' => [
         'component:selected' => <<<JS
         function (event) {
             $(".fa.fa-cog").click();
             console.log(e);
             ajaxGrapes('/core/tester/grapes/forms.aspx?className=&id='+e.ccid);
             //zetsoft\widgets\inptest\ZKSelect2AjaxWidget

             $("#grButton").click(function () {
                 var grElId = $("#myID").val();
                 var val = $("#grInput").val();
                 if (e.ccid===grElId)
                     e.set('content', val);
                 else
                     alert('wrong id')
             });
         }
 JS,
         /* 'component:mount' => <<<JS
    function (event) {
     if (e.opt.temporary)  {
       return false;
     }
        else{
         return  ajaxGrapes('/render/Former/Grapes/forms.php?id='+e.ccid);

         }


 }

 JS,
     ]*/
]);
