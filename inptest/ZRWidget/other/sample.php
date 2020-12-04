<?php

/**
 * author: Murodov Mirbosit
 * Class    ZHDropDownListWidget
 * @package widgets\inputes
 *
 * https://github.com/jcuenod/imgCheckbox/
 * http://jcuenod.github.io/imgCheckbox/
 */

use zetsoft\widgets\inptest\ZCheckboxImageWidget;

 ?>

    <img class="checkable" src="/zetimg/<?=App?>/200x200/1.jpg"/>
    <img class="checkable" src="/zetimg/<?=App?>/200x200/1.jpg"/>
    <img class="checkable" src="/zetimg/<?=App?>/200x200/1.jpg"/>
    <img class="checkable" src="/zetimg/<?=App?>/200x200/1.jpg"/>

 <?php
echo ZCheckboxImageWidget::widget([
    'config'=>[
        'image'=> 'checkable'
    ],
]);

