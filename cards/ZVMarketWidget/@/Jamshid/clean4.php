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
use zetsoft\service\forms\Active;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZFormBuildWidget;
use zetsoft\widgets\former\ZFormWidget;
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


            $id = $this->httpGet('id');
            $model = new User();

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
            $active->class = 'row';

            $form = $this->activeBegin($active);

            ?>

            <div class="col-sm-6 mt-3">
                <?

                ZCardWidget::begin([
                    'config' => [
                        'title' => "Личная информация",
                        'type' => ZCardWidget::type['dynCard'],
                    ]
                ]);


                $model->configs->nameOn = [
                    'name',
                    'password',
                    'lang',
                    'lastseen',
                ];



                $model->columns();

                echo ZFormWidget::widget([
                    'model' => $model,
                    'form' => $form,
                    'config' => [
                        'botBtn' => false,
                        'topBtn' => false,
                    ]
                ]);

                $model->columns();


                echo ZFormWidget::widget([
                    'model' => $model,
                    'form' => $form,
                    'config' => [
                        'botBtn' => false,
                        'topBtn' => false,
                    ]
                ]);



                ZCardWidget::end();

                ?>
            </div>


            <div class="col-sm-6 mt-3">
                <?

                ZCardWidget::begin([
                    'config' => [
                        'title' => Az::$app->view->title,
                        'type' => ZCardWidget::type['dynCard'],
                    ]
                ]);


                $model->configs->nameOn = [
                    'photo',
                ];
                $model->columns();


                ZCardWidget::end();
                ?>
            </div>

            <div class="col-sm-6 mt-3">
                <?

                ZCardWidget::begin([
                    'config' => [
                        'title' => Az::$app->view->title,
                        'type' => ZCardWidget::type['dynCard'],
                    ]
                ]);


                $model->configs->nameOn = [
                    'phone',
                    'contact',
                    'email',

                ];
                $model->columns();

                echo ZFormWidget::widget([
                    'model' => $model,
                    'form' => $form,
                    'config' => [
                        'botBtn' => false,
                        'topBtn' => false,
                    ]
                ]);

                echo ZButtonWidget::widget([
                    'config' => [
                        'text' => 'Submit 4 formWidgets',
                        'btnType' => ZButtonWidget::btnType['submit']
                    ]
                ]);

                echo ZButtonWidget::widget([
                    'config' => [
                        'text' => 'Submit 4 formWidgets',
                        'btnType' => ZButtonWidget::btnType['submit']
                    ]
                ]);

                ZCardWidget::end();
                ?>
            </div>


            <div class="col-sm-6 mt-3">
                <?

                ZCardWidget::begin([
                    'config' => [
                        'title' => Az::$app->view->title,
                        'type' => ZCardWidget::type['dynCard'],
                    ]
                ]);

                $model->configs->nameOn = [
                    'phone',
                    'contact',
                    'lastseen',

                ];
                $model->columns();



                ZCardWidget::end();

                ?>
            </div>

            <div class="col-md-12 border mb-5">
                <?
                echo ZButtonWidget::widget([
                    'config' => [
                        'text' => 'Submit 4 formWidgets',
                        'btnType' => ZButtonWidget::btnType['submit']
                    ]
                ]);

                echo ZButtonWidget::widget([
                    'config' => [
                        'text' => 'Submit 4 formWidgets',
                        'btnType' => ZButtonWidget::btnType['submit']
                    ]
                ]);

                $this->activeEnd();
                ?>
            </div>

        </div>


    </div>

</div>


<?php $this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>
