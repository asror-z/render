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


use zetsoft\apisys\rest\ZEditableAction;
use zetsoft\models\core\CoreAdvancedItem;
use zetsoft\system\column\ZEditableModalColumn;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\notifier\ZDynaModalWidget;
use zetsoft\widgets\notifier\ZModalWidget;


     $model=new CoreAdvancedItem();
  //   print_r( $model->column());
echo ZDynaModalWidget::widget([
    'config' => [
        'modalTitle' => 'Редактировать ' ,
        'type' => ZModalWidget::type['central'],
        'position' => ZModalWidget::position['top'],
        'sidePosition' => ZModalWidget::SidePositon['right'],
        'styleType' => ZModalWidget::StyleType['success'],
        'frameSidePosition' => ZModalWidget::FrameSidePosition['bottom'],
        'closeButtonTitle' => 'Закрыть',
        'checkButtonTittle' => 'Сохранить',
        'modelClassName'=>$model->className,
        'form_id' => $model->attributes['id'],
        'triggerButtonStyle'=>'kv-editable-link',
        'modalBodyContent' => ZFormWidget::widget([
            'model' => $model,
            'attribute' => 'image',
        ]),
    ]
]);
