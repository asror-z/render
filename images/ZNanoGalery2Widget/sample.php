<?php

use zetsoft\widgets\images\ZNanoGalery2Widget;
/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


echo ZNanoGalery2Widget::widget([
    
    'config'=> [
        'type' => ZNanoGalery2Widget::type['cascading'],
        'effect' => ZNanoGalery2Widget::hoverEffect['shufle'],
        'path' => '/image/', //current path: eyuf/image/ (d:\Develop\Projects\ALL\asrorz\zetsoft\execut\web\eyuf\image\)
    ]

]);
