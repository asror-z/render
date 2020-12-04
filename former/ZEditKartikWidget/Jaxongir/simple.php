<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use GuzzleHttp\Tests\Ring\CoreTest;
use kartik\editable\Editable;
use zetsoft\former\shop\SizeForm;
use zetsoft\models\user\UserCompany;
use zetsoft\models\ALL\Lang;
use zetsoft\models\user\User;
use zetsoft\system\Az;
use zetsoft\system\column\ZKEditableColumn;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\former\ZEditKartikWidget;
use zetsoft\widgets\former\ZKEditableWidget2;
use zetsoft\widgets\former\ZKEditableWidgetD;
use zetsoft\widgets\former\ZKEditableWidgetNorm;
use zetsoft\widgets\former\ZEditRavWidget;
use zetsoft\widgets\former\ZKEditableWidgetRav2;
use zetsoft\widgets\former\ZKEditableWidgetRavshan;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZSelect2LangWidget;
use zetsoft\widgets\inputes\ZSelect2Widget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 10);; //$this->modelGet(\zetsoft\models\core\CoreInput::class, 3);
$pathInfo = Az::$app->request->pathInfo;
$queryString = Az::$app->request->queryString;

$currentLang = Az::$app->language;

$url = $pathInfo;

if (!empty($queryString))
    $url .= '?' . $queryString;

echo ZKEditableWidgetD::widget([
    'model' => $model,
    'attribute' => 'jsonb_1',
    'config' => [
        'isSession' => true,
        'inputType' => Editable::INPUT_WIDGET,
        'widgetClass' => ZSelect2LangWidget::class,
        'data' => [
            'ru' => 'РУССКИЙ ',
            'en' => 'ENGLISH ',
            'uz' => "O'ZBEKCHA",
            'uzk' => 'ЎЗБЕКЧА ',
        ],
        'config' => [
            'enableEvent' => true,
            'placeholder' => '123',
            'imagePath' => true,
            'width' => '150px',
        ],
        'event' => [
            'select' => <<<JS
                                    function() {
                                        window.location.href = '/' + $(this).val()  + '/$url';
                                    }     
JS,
        ]

    ]

]);






