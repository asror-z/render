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


use zetsoft\dbitem\core\WebItem;
use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\ConfigDB;
use zetsoft\dbitem\data\FormDb;
use zetsoft\service\forms\Active;
use zetsoft\service\forms\ZPjax;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\ajaxify\ZInfinityScrollAjaxWidget;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\incores\ZMCheckboxGroupWidget;

/** @var ZView $this */
$action = new WebItem();

$action->csrf = false;
$action->debug = false;

$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();


$pjax = new ZPjax();
/*$this->pjaxBegin($pjax);*/


/*$model = new AuthPhoneForm();*/

$allApp = new ALLApp();
$allApp->configs = new ConfigDB();


$item = new FormDb();
$item->widget = ZMCheckBoxGroupWidget::class;

$item->data = [
    1 => '1111',
    2 => '2222',
    3 => '3333',
    4 => '4444',
];
$allApp->columns['color'] = $item;



$item = new FormDb();
$item->widget = ZMCheckBoxGroupWidget::class;
$item->data = [
    1 => '1111',
    2 => '2222',
    3 => '3333',
    4 => '4444',
];
$allApp->columns['memory'] = $item;


$item = new FormDb();
$item->widget = ZMCheckBoxGroupWidget::class;

$item->data = [
    1 => '1111',
    2 => '2222',
    3 => '3333',
    4 => '4444',
];
$allApp->columns['size'] = $item;


$allApp->cards = [];

$model = Az::$app->forms->former->model($allApp);



$this->modelPost();

if ($this->formModel($model) === true) {


    /*

       $company = new UserCompany();
       $company->name = $model->name;
       $company->title = $model->password;
       $company->save();

    */
}


?>


<div class="row">
    <div class="col-3">

        <?

        $active = new Active();
        $active->id = 'activeFormCheck';
        $active->showLabels = false;

        $form = $this->activeBegin($active);


        echo date('H:i:s');

        $model->configs->value = [
            'check1' => [4]
        ];
        echo ZFormWidget::widget([
            'model' => $model,
            'form' => $form,
            'event' => [
                'formChange' => <<<JS
            function (event) {
                 $(this).submit();                                      
            }
JS
            ],
            'config' => [
                'topBtn' => false,
                'botBtn' => false,
            ]
        ]);

        $this->activeEnd();

        ?>

    </div>

    <div class="col-9">
        <div class="col-md-12 pl-0">

            <?php


            /** @var ZView $this */
            echo $this->require( '/render/cards/ZListViewWidget/ready/tab_product.php');
            ?>

        </div>

        <div class="col-12">

            <div id="contento" class="row w-100">
                <?

                echo ZInfinityScrollAjaxWidget::widget(['config' => ['url' => 'infinity.aspx',
                    'requireUrl' => '/webhtm/eyuf/shop/user/filter-common/blocks/vertical_horizontal.php',
                    'limitPost' => 6,
                    'cols' => 2,
                    'test' => false]]);

                ?>
                
            </div>

        </div>
    </div>
</div>


<?php
/*$this->pjaxEnd();*/
?>
