<?php

use zetsoft\models\page\PageAction;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZGrapesJsWidget;
use zetsoft\widgets\notifier\ZSweetAlert2Widget;

/** @var ZView $this */
$action->icon =false;
$this->grape=true;

Az::$app->params['widget'] = true;

$actionId = $this->httpGet('key');
$PageAction = PageAction::findOne($actionId);

$name = 'ALL/core/widget/class';

if ($PageAction)
    $name = $PageAction->name;

$path = Root . '/webhtm/' . $name . '.php';
$path = str_replace('\\', '/', $path);


$assets = $this->viewAsset($path);
$pregs = Az::$app->utility->pregs;

$scripts = ZArrayHelper::getValue($pregs->pregMatchAll($assets, '<script src="(.*?)".*?>'), 1);
$links = ZArrayHelper::getValue($pregs->pregMatchAll($assets, '<link href="(.*?)".*?>'), 1);

/*
 *
 *  0 => "/vendor/select2/select2/dist/css/select2.css"
  1 => "/vendor\kartik-v\yii2-widget-select2\src/assets/css/select2-addl.css"
  2 => "/vendor\kartik-v\yii2-widget-select2\src/assets/css/select2-classic.css"
  3 => "/vendor\kartik-v\yii2-krajee-base\src/assets/css/kv-widgets.css"
]*/

$page = $this->renderFile($path);

ZGrapesJsWidget::begin([
    'config' => [
        'scripts' => [
            '/vendor/select2/select2/dist/js/select2.full.js',
            '/vendor\kartik-v\yii2-widget-select2\src/assets/js/select2-krajee.js',
            '/vendor/select2/select2/dist/js/i18n/ru.js',
        ],
        'styles' => [
            '/vendor/select2/select2/dist/css/select2.css',
            '/vendor\kartik-v\yii2-widget-select2\src/assets/css/select2-addl.css',
            '/vendor\kartik-v\yii2-widget-select2\src/assets/css/select2-classic.css',
            '/vendor\kartik-v\yii2-krajee-base\src/assets/css/kv-widgets.css',
        ],



        'categories' => [
            'actions',
            'ajaxify',
            'ALL', //: zo'r
            'ALL', //: zo'r
            'animo', //: xatosi bor: ko'rinmasligi kerak ekan
            'audios',//: zo'r
            'basic', //: ichi bo'sh. lekin xatolik bermaydi
            'blocks',// :zo'r
            'charts', //: zo'r
            'chates', //: excludeFolders bu o'zi chiqmaydigan qip qo'yilgan
            'columns', // : nimagadir chiqmayapti. lekin xato yo'q
            'consts',// : nimagadir chiqmayapti. lekin xato yo'q
            'former',// : The "dataProvider" property must be set. error
            'iconers', // : zo'r
            'images', //: zo'r
            'incores',// : zo'r
            'inptest', //: xato  : ko'rinmasligi kerak ekan
            'inputes',  //: xato Invalid argument supplied for foreach()
            'market', //: zo'r
            'menus', //: zo'r
            'navigat',// : zo'r
            'notifier',// : xato
            'phone', //: zo'r
            'places',// : zo'r
            'testing', //: zo'r
            'themes',
            'values', //:  excludeFolders bu o'zi chiqmaydigan qip qo'yilgan
            'columns'
        ],
//        'widgets' => [
//            'zetsoft/widgets/inputes/ZCheckRadioListWidget',
//            //'ZCheckRadioListWidget'
//        ],
        'saveFile' => $path
    ],
    'event' => [
        'ready' => <<<JS
        function (event) {
        }
JS

    ]
]);

echo $page;

ZGrapesJsWidget::end();
$this->title = Az::l('Конструктор сайтов');
