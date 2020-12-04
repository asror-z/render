<?php


use rmrevin\yii\fontawesome\FA;
use zetsoft\widgets\navigat\ZAccLayWidgetOLD;
use zetsoft\widgets\navigat\ZAccWidget;
use zetsoft\widgets\navigat\ZAccWidget2;

echo ZAccWidget2::widget([
    

   'data' => [
       '1' => [
           'name' => 'Магистратура',
           'text' => "Описание процесса",
           'icon' => "fa fa-" . FA::_ALIGN_LEFT,
       ],
       '2' => [
           'name' => 'Программа',
           'text' => 'Этапы прохождения программы',
           'icon' => "fa fa-" . FA::_ALIGN_LEFT,
       ],
       '3' => [
           'name' => 'Отбор',
           'text' => 'some text',
           'icon' => "fa fa-" . FA::_ALIGN_LEFT,
       ],
       '4' => [
           'name' => 'Отбор',
           'text' => 'some text',
           'icon' => "fa fa-" . FA::_ALIGN_LEFT,
       ],
   ],


]);
