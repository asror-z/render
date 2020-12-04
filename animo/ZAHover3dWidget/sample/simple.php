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

use zetsoft\system\Az;
use zetsoft\widgets\animo\ZAHover3dWidget;

echo ZAHover3dWidget::widget([
    
     'data'=>[
         [
             'title'=>"Title1",
             'image'=>'https://darsik.com/wp-content/uploads/2018/05/untitled-1-7-3.jpg',
             'category'=>'category1',
         ],
         [
             'title'=>"Title2",
             'image'=>'http://unsplash.it/600/400?image=287',
             'category'=>'category2',
         ]
   ],
]);

