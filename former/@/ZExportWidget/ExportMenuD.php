<?php
/** @var ZView $this */

use kartik\dynagrid\DynaGrid;
use kartik\grid\DataColumn;
use kartik\helpers\Html;
use yii\data\ArrayDataProvider;
use zetsoft\former\eyuf\ProgramForm;
use zetsoft\former\eyuf\RavshanForm;
use zetsoft\models\user\User;
use zetsoft\system\actives\ZArrayQuery;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZArrayWidget;
use zetsoft\widgets\former\ZArrayWidgetD;
use zetsoft\widgets\former\ZExportWidgetNew;
use zetsoft\widgets\notifier\ZModalNewWidget;
use zetsoft\widgets\themes\ZAdminCardWidget;


?>
<div class="row" style="margin-bottom: -30px!important;">
    <div class="col-lg-4 col-md-6">
        <script>
            $(document).ready(function () {
                //при нажатию на любую кнопку, имеющую класс .btn
                $(".cardContent").click(function () {
                    //открыть модальное окно с id="myModal"
                    $("#myModal").modal('show');
                });


            });
        </script>

        <?php


        if ($this->userIsGuest()) {

            ZModalNewWidget::begin([
                'id' => 'myModal',
                'config' => [
                    'title' => Az::l('Вход в систему'),
                    'size' => ZModalNewWidget::size['lg']
                ]
            ]);

            ?>

            <div class="col-lg-12 col-md-8 col-sm-6" style="overflow: hidden;">
                <iframe src="/cores/auth/login-frame.aspx" height="600" width="100%" class="border-0"
                        scrolling="no"></iframe>
            </div>

            <?

            ZModalNewWidget::end();
        }

        //    firstCard
        echo ZAdminCardWidget::widget([
            'config' => [

                'textPosition' => ZAdminCardWidget::textPosition['textLeft'],
                'isCardHeader' => false,
                'cardTitleBool' => true,
                'headerTitle' => 'headerTitle',
                'bodyTitle' => ' ',
                'bodyText' => Az::l('Фонд "Эл-юрт умиди"'),
                'footerColor' => ZColor::color['primary-color-dark'],
                'footerText' => '',
                'BadgeBgColor' => ZColor::color['stylish-color-dark'],
                'badge' => '',

                'horizontal_OR_vertical' => 'vertical',
                'cardWidth' => '100%',
                'color' => ZColor::color['primary-color'],
                'Icon' => '/render/Menus/ALL/MMenu/icons/logo_w.png',
            ]
        ]);
        ?>
    </div>

    <div class="col-lg-4 col-md-6">
        <?php
            //       secondCard
            echo ZAdminCardWidget::widget([
                'config' => [
                    'textPosition' => ZAdminCardWidget::textPosition['textLeft'],
                    'isCardHeader' => false,
                    'cardTitleBool' => true,
                    'headerTitle' => 'headerTitle',
                    'bodyTitle' => '',
                    'bodyText' => 'Министерство, учреждение или организация',
                    'footerColor' => ZColor::color['primary-color-dark'],
                    'footerText' => '',
                    'BadgeBgColor' => ZColor::color['stylish-color-dark'],
                    'badge' => '',

                    'horizontal_OR_vertical' => 'vertical',
                    'cardWidth' => '100%',
                    'color' => ZColor::color['primary-color'],
                    'Icon' => '/render/Menus/ALL/MMenu/icons/goverment_w.svg',
                ]
            ]);
             ?>
    </div>

    <div class="col-lg-4 col-md-6">
        <?php

        //        fourth Card
        echo ZAdminCardWidget::widget([
            'config' => [
                'textPosition' => ZAdminCardWidget::textPosition['textLeft'],
                'isCardHeader' => false,
                'cardTitleBool' => true,
                'headerTitle' => 'headerTitle',
                'bodyTitle' => '',
                'bodyText' =>Az::l('Стипендиант'),
                'footerColor' => ZColor::color['primary-color-dark'],
                'footerText' => '',
                'BadgeBgColor' => ZColor::color['stylish-color-dark'],
                'badge' => '',

                'horizontal_OR_vertical' => 'vertical',
                'cardWidth' => '100%',
                'color' => ZColor::color['primary-color'],
                'Icon' => '/render/Menus/ALL/MMenu/icons/student_w.svg',
            ]
        ]);
        ?>
    </div>
    <div class="col-lg-4 col-md-6">
        <?php

        //      thirtdCard
        echo ZAdminCardWidget::widget([
            'config' => [
                'textPosition' => ZAdminCardWidget::textPosition['textLeft'],
                'isCardHeader' => false,
                'cardTitleBool' => true,
                'headerTitle' => 'headerTitle',
                'bodyTitle' => '',
                'bodyText' => Az::l('Внешниe организации'),
                'footerColor' => ZColor::color['primary-color-dark'],
                'footerText' => '',
                'BadgeBgColor' => ZColor::color['stylish-color-dark'],
                'badge' => '',

                'horizontal_OR_vertical' => 'vertical',
                'cardWidth' => '100%',
                'color' => ZColor::color['primary-color'],
                'Icon' => '/render/Menus/ALL/MMenu/icons/goverment_w.svg',
            ]
        ]);
        ?>
    </div>
</div>
<br>
<br>

<?

$action->title = Azl . 'Статистика в формате стран по программам';

$model = new ProgramForm();

/** @var ZView $this */
$model->configs->filter = true;
$model->configs->pageSummary = true;

$data = Az::$app->App->eyuf->main->formByCountries($model);





$models = User::find()->asArray()->all();


$model = new User();

$columns =
    [
        [
            'class' => DataColumn::class,
            'attribute' => 'password',
        ],
        [
            'class' => DataColumn::class,
            'attribute' => 'name',
        ],
        [
            'class' => DataColumn::class,
            'attribute' => 'text',
        ],

    ];



$query = new ZArrayQuery();
$query->from($models);

$fullExportMenu = ZExportWidgetNew::widget([
    'model' => new User(),
    'data' => $models,
    'config' => [
        'filename' => 'test2',
        'array' => true,
    ]
]);

echo DynaGrid::widget([
    'columns' => $columns,
    'theme' => 'panel-info',
    'showPersonalize' => true,
    'storage' => 'db',
    'gridOptions' => [
        'dataProvider' => new ArrayDataProvider([
            'key'=>'id',
            'allModels' => $query->all(),
            'sort' => [
                'attributes' => ['id', 'name', 'email'],
            ],
        ]),
        'filterModel' => $model,
        'showPageSummary' => true,
        'floatHeader' => true,
        'pjax' => true,
        'responsiveWrap' => false,
        'panel' => [
            'heading' => '<h3 class="panel-title"><i class="fas fa-book"></i>  Library</h3>',
            'before' => '<div style="padding-top: 7px;"><em>* The table header sticks to the top in this asset as you scroll</em></div>',
            'after' => false
        ],
        'toolbar' => [
            ['content' =>
                Html::button('<i class="fas fa-plus"></i>', ['type' => 'button', 'title' => 'Add Book', 'class' => 'btn btn-success', 'onclick' => 'alert("This will launch the book creation form.\n\nDisabled for this asset!");']) . ' ' .
                Html::a('<i class="fas fa-repeat"></i>', ['dynagrid-asset'], ['data-pjax' => 0, 'class' => 'btn btn-outline-secondary', 'title' => 'Reset Grid'])
            ],
            ['content' => '{dynagridFilter}{dynagridSort}{dynagrid}'],
            '{export}' . $fullExportMenu,
        ]
    ],
    'options' => ['id' => 'dynagrid-1'] // a unique identifier is important
]);


/*echo ZArrayWidgetD::widget([
    'model' => $model,
    'data' => $data,
    'config' => [
        'title' => Az::l('Статистика в формате стран по программам'),
        'filename' => Az::l('Statistics of Countries by programs')
    ]
]);*/

?>

