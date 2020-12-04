<?php
/**
 * @author Muminov Umid
 */

use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZSelect2Widget;
use zetsoft\system\Az;
use zetsoft\models\core\CoreInput;

$model = $this->modelGet(CoreInput::class, 3);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$pathInfo = Az::$app->request->pathInfo;
$queryString = Az::$app->request->queryString;

$currentLang = Az::$app->language;

$url =  $pathInfo;

if (!empty($queryString))
    $url .= '?' . $queryString;

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => \zetsoft\widgets\inputes\ZSelect2LangWidget::class,
                    'options' => [
                        'config' => [
                            'enableEvent' => true,
                            'placeholder' => '123',
                            'imagePath' => true,
                        ],
                        'data' =>[
                            'ru' => 'РУССКИЙ ',
                            'en' => 'ENGLISH ',
                            'uz' => "O'ZBEKCHA",
                            'uzk' => 'ЎЗБЕКЧА ',
                        ],
                        'event' => [
                            'select' => <<<JS
               function() {
                
                 window.location.href = '/' + $(this).val()  + '/$url';
                        // $('#CoreInput').click()

               }     
JS,

                        ]
                    ]
                ],
            ]
        ],
    ],
]);

$this->activeEnd();
