<?php

use zetsoft\models\place\PlaceAdress;
use zetsoft\models\page\PageBlocks;
use zetsoft\models\user\User;
use zetsoft\service\forms\Active;
use zetsoft\widgets\former\ZTabularWidget;


      $model = new User();
      $active = new Active();
      $form = $this->activeBegin();
       echo ZTabularWidget::widget([
         'model'=>$model,
         'form'=>$form,
     ]);


$this->activeEnd();

     



