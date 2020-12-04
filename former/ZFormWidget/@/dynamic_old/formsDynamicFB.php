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
use yii\web\Response;
use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\Config;

use zetsoft\dbitem\data\FormDb;
use zetsoft\former\test\TestLaptopForm;
use zetsoft\models\core\CoreInput;
use zetsoft\system\actives\ZDynamicModel;
use zetsoft\system\actives\ZModel;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\system\module\Dynamic;
use zetsoft\system\module\Forms;
use zetsoft\system\module\Models;
use zetsoft\widgets\former\ZFormWizardWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKSwitchInputWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\themes\ZCardWidget;


/** @var ZView $this */
//$model = $this->modelGet(Computer::class, 66);

/*$models = new LaptopForm();
$app = $models->allApp();*/

$app = new ALLApp();

$config = new Config();
$config->title = Az::l('Компьютеры');

$app->configs = $config;


$app->columns = [

    'name' => static function (Form $column) {

        $column->title = Az::l('Название');
        $column->widget = ZHInputWidget::class;
        $column->rules = [
            [
                'zetsoft\\system\\validate\\ZRequiredValidator',
            ],
        ];

        return $column;
    },



    'title' => static function (Form $column) {

        $column->title = Az::l('Тайтл');
        $column->widget = ZKSelect2Widget::class;
        $column->data = [
            'default' => 'default',
            'classic' => 'classic',
            'bootstrap' => 'bootstrap',
            'material' => 'material',
            'krajee' => 'krajee',
            'krajee-bs4' => 'krajee-bs4',
        ];
        $column->rules = [
            [
                'zetsoft\\system\\validate\\ZRequiredValidator',
            ],
        ];

        return $column;
    },
    
    'title2' => static function (Form $column) {

        $column->title = Az::l('Тайтл2');
        $column->widget = ZKSelect2Widget::class;
        $column->data = [
            'default' => 'default',
            'classic' => 'classic',
        ];
        $column->rules = [
            [
                'zetsoft\\system\\validate\\ZRequiredValidator',
            ],
        ];

        return $column;
    },
];

$app->cards = [];

$model = Az::$app->forms->former->model($app);


//Az::$app->forms->modelz->form($model);
Az::$app->forms->zPjax->begin();
/*
Az::$app->forms->modelz->post();

Az::$app->forms->active->enableLabel = true;
Az::$app->forms->active->labelSpan = 4;*/
$form = $this->activeBegin();

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'config' => [
        'isCnt' => false,
        'type' => ZFormWidget::type['all'],
        ''
    ]
]);


$this->activeEnd();
Az::$app->forms->zPjax->end();

