<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * Date:    9/14/2019
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use kartik\builder\Form;
use kartik\form\ActiveForm;
use yii\bootstrap\Html;
use yii\web\Response;
use yii\widgets\InputWidget;
use zetsoft\dbitem\data\ALLApp;
use zetsoft\former\test\TestLaptopForm;
use zetsoft\models\faqs\Faqs;
use zetsoft\models\core\CoreInput;
use zetsoft\models\user\User;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWizardWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZFileInputWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZHPasswordInputWidget;
use zetsoft\widgets\inputes\ZHRadioListWidget;
use zetsoft\widgets\inputes\ZHTextareaWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */
//$model = $this->modelGet(Computer::class, 66);

$model = new User();
$form = $this->activeBegin();
Az::$app->forms->modelz->form($model);

ZCardWidget::begin([
    'config' => [
        'title' => 'dsafasdf'
    ]
]);
?>


<?

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [


        [
            'attributes' => [
                'photo' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZFileInputWidget::class,

                ],
            ],
        ], 
    ],
]);

//    ]
//    'names' => [
//        'name',
//        'title',
//    ],
//    ,
//    'config' => [
//        'submitBtn' => true,
//        'isCnt' => false,
//        'name' => Az::l('OneBlock'),
//        'type' => ZFormWidget::type['all'],
//    ],


ZCardWidget::end();

$this->activeEnd();
