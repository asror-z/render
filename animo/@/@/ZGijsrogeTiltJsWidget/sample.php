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

use yii\filters\ContentNegotiator;
use zetsoft\widgets\animo\ZGijsrogeTiltJsWidget;
use zetsoft\widgets\themes\ZCardWidget;


echo ZGijsrogeTiltJsWidget::widget([
    'config' => [
        'type'=>ZGijsrogeTiltJsWidget::type['tilt'],
        'a'=>'#',
        'data-tilt-glare'=>true,
        'data-tilt-maxglare'=>0.6, // [0,1]
        'data-tilt-speed'=>400,
        'data-tilt-scale'=>1.1,
        'data-tilt-maxtilt'=>50,
        'data-tilt-perspective'=>500,
        
        'Title' => ZCardWidget::widget([
        'config'=>[
        
        'content'=>'Title',
              
        'type'=> ZCardWidget::type['basic_new'],
]]),
    ] ]);
