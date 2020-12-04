<?php
use zetsoft\widgets\iconers\ZBootstrapIconpickerWidget;

echo \insolita\iconpicker\Iconpicker::widget([
    'id'=>'choose_icon',
    'name'=>'myicon',
    'value'=>'glyphicon-cog',
    'iconset'=>'glyphicon',
    'pickerOptions'=>['class'=>'btn btn-primary'],
    'clientOptions'=>['placement'=>'bottom','search'=>false],
]);

?>

