<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\dbitem\core\WebItem;
use zetsoft\former\auth\PassChangeForm;
use zetsoft\service\forms\Active;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZFormBuildWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHPasswordInputWidget;
use zetsoft\widgets\navigat\ZButtonIconsWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\models\user\User;


/** @var ZView $this */


/**
 *
 * Action Params
 */

$action = new WebItem();

$action->title = Azl . 'Создание Пользователь';
$action->icon = 'fa fa-area-chart';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = true;




$pass = new PassChangeForm();

$this->paramSet('action', $action);

$this->title();
$this->toolbar();


/**
 *
 * Start Page
 */

$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <?php

    require Root . '/block/metas/' . App . '/main.php';
    require Root . '/block/assets/' . App . '/main.php';

    $this->head();

    ?>

</head>



<body class="<?= ZWidget::skin['white-skin'] ?>">

<?php

$this->beginBody();

echo ZNProgressWidget::widget([]);

?>

<div id="page">
    <div id="content" class="content-footer p-3" ic-history-elt="">

        <div class="container-fluid">
            <?

            //$id = $this->userIdentity()->id;

            //  $id = $this->httpGet('id');

            /* if ($id === null)
                 $id = 11;*/

            /*$model = User::findOne([
                'id' => $id
            ]);*/

            $model = new User();

            $model->id = 12;
            $model->name = 'Jamshid';
            $model->password = '1234';
            $model->lang = 'en';


            if ($this->modelSave($model)) {
                $this->modelPost();

                /**
                 *
                 * Post save Actions
                 */
                /*
                                 $this->urlRedirect(['index', true]);*/
            }


            $active = new Active();
            //$active->class = 'row';

            $form = $this->activeBegin($active);

            ?>
            <div class="row">
                <div class="col-md-12">

                    <div class="row p-1 border">
                        <div class="col-md-6 px-3 border">
                            <!--                            <h3 class="text-muted">Lichnie informatsiya</h3>-->

                            <h5 class="font-family text-muted">Имя и отчество</h5>

                            <div class="row">
                                <div class="col-md-12">

                                    <div class=" mt-2 border h-50">
                                        <?


                                        //vdd($model->configs->nameOn);
                                        $model->configs->nameOn = [
                                            'name',
                                        ];


                                        /*$model->columns();*/


                                        echo ZFormWidget::widget([
                                            //'model' => $model,
                                            'model' => null,
                                            'form' => $form,
                                            'config' => [
                                                'botBtn' => false,
                                                'topBtn' => false,

                                            ]
                                        ]);


                                        ?>
                                    </div>

                                    <div class=" mt-5 border h-50">
                                        <?

                                        /*$model->configs->nameOn = [
                                            'name',
                                        ];*/

                                        //$model->columns();


                                        echo ZFormWidget::widget([
                                            'model' => null,
                                            'form' => $form,
                                            'config' => [
                                                'botBtn' => false,
                                                'topBtn' => false,

                                            ]
                                        ]);


                                        ?>
                                    </div>

                                </div>
                            </div>

                            <div class="row my-5">
                                <div class="col-md-6">

                                    <?

                                    /*$model->configs->nameOn = [
                                        'lang',
                                    ];

                                    $model->columns();*/


                                    echo ZFormWidget::widget([
                                        //'model' => $model,
                                        'model' => null,
                                        'form' => $form,
                                        'config' => [
                                            'botBtn' => false,
                                            'topBtn' => false,
                                        ]
                                    ]);

                                    ?>

                                </div>
                                <div class="col-md-6">

                                    <?

                                    /* $model->configs->nameOn = [
                                         'lastseen',
                                     ];

                                     $model->columns();*/


                                    echo ZFormWidget::widget([
                                        //'model' => $model,
                                        'model' => null,
                                        'form' => $form,
                                        'config' => [
                                            'botBtn' => false,
                                            'topBtn' => false,
                                        ]
                                    ]);

                                    ?>

                                </div>
                            </div>

                        </div>

                        <div class="col-md-6 px-3 ">
                            <h5>images</h5>
                            <?

                            ZCardWidget::begin([
                                'config' => [
                                    'title' => Az::$app->view->title,
                                    'type' => ZCardWidget::type['dynCard'],
                                ]
                            ]);


                            /* $model->configs->nameOn = [
                                 'photo',
                             ];
                             $model->columns();*/

                            echo ZFormWidget::widget([
                                //'model' => $model,
                                'model' => null,
                                'form' => $form,
                                'config' => [
                                    'botBtn' => false,
                                    'topBtn' => false,
                                ]
                            ]);

                            ZCardWidget::end();
                            ?>
                        </div>

                    </div>

                    <div class="row  border d-flex p-2">

                        <div class="col-md-6 px-3">

                            <h5>Контактная </h5>
                            <div class="row">
                                <div class="col-md-12 ">

                                    <div class=" mt-2 border h-25">
                                        <?

                                        /*$model->configs->nameOn = [
                                            'phone',
                                            'contact',

                                        ];
                                        $model->columns();*/

                                        echo ZFormWidget::widget([
                                            'model' => null,
                                            'form' => $form,
                                            'config' => [
                                                'botBtn' => false,
                                                'topBtn' => false,
                                            ]
                                        ]);


                                        ?>
                                    </div>

                                    <div class="d-flex justify-content-between ">
                                        <?
                                        echo ZButtonWidget::widget([
                                            'config' => [
                                                'text' => 'Изменить',
                                                'btnType' => 'submit',
                                                'class' => 'border-0 rounded rgba-stylish-light'
                                            ]
                                        ]);
                                        ?>
                                    </div>


                                    <div class="col-md-12 mt-2 border h-25">

                                        <?

                                        /*$model->configs->nameOn = [
                                            'email',

                                        ];
                                        $model->columns();*/

                                        echo ZFormWidget::widget([
                                            //'model' => $model,
                                            'model' => null,
                                            'form' => $form,
                                            'config' => [
                                                'botBtn' => false,
                                                'topBtn' => false,
                                            ]
                                        ]);


                                        ?>
                                    </div>

                                    <div class=" d-flex">
                                        <div class=" col-md-6 p-0 ">
                                            <?
                                            echo ZButtonWidget::widget([
                                                'config' => [
                                                    'text' => 'Изменить',
                                                    'btnType' => 'submit',
                                                    'class' => 'border-0 rounded rgba-stylish-light'
                                                ]
                                            ]);
                                            ?>
                                        </div>

                                        <div class="col-md-6 p-0 d-flex justify-content-between ">
                                            <?
                                            echo ZButtonWidget::widget([
                                                'config' => [
                                                    'text' => 'Подтвердить',
                                                    'btnType' => 'submit',
                                                    'class' => 'border-0 rounded rgba-stylish-light',
                                                ]
                                            ]);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 px-3 pb-5 ">
                            <h3>Изменение пароля</h3>


                            <div class="row">
                                <div class="col-12 ">
                                    <div class=" mt-2">
                                        <?

                                        /*$model->configs->nameOn = [

                                            'password',

                                        ];
                                        $model->columns();*/

                                        echo ZFormWidget::widget([
                                            //'model' => $pass,
                                            'model' => null,
                                            'form' => $form,
                                            'config' => [
                                                'botBtn' => false,
                                                'topBtn' => false,
                                            ]
                                        ]);

                                        $this->activeEnd();
                                        ?>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<div id="page">
    <div class="container-fluid">

        <div class="row">
            <div class="col-6">
                <h5 class="font-family text-muted">Имя и отчество</h5>

                <div class=" border h-50">
                    <?


                    //vdd($model->configs->nameOn);
                    $model->configs->nameOn = [
                        'name',
                    ];


                    /*$model->columns();*/


                    echo ZFormWidget::widget([
                        //'model' => $model,
                        'model' => null,
                        'form' => $form,
                        'config' => [
                            'botBtn' => false,
                            'topBtn' => false,

                        ]
                    ]);


                    ?>
                </div>

                <div class="border h-50">
                    <?

                    /*$model->configs->nameOn = [
                        'name',
                    ];*/

                    //$model->columns();


                    echo ZFormWidget::widget([
                        'model' => null,
                        'form' => $form,
                        'config' => [
                            'botBtn' => false,
                            'topBtn' => false,

                        ]
                    ]);


                    ?>
                </div>
            </div>
            <div class="col-6"></div>
        </div>
        <div class="row">
            <div class="col-6"></div>
            <div class="col-6"></div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>
