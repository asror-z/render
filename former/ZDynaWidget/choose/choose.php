<?php

use yii\helpers\Json;
use yii\web\NotFoundHttpException;
use zetsoft\dbitem\core\WebItem;
use zetsoft\system\actives\ZActiveData;
use zetsoft\system\actives\ZActiveQuery;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\system\module\Models;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\former\ZCheckButtonWidget;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZGetChecksWidget;
use zetsoft\widgets\menus\ZMmenuWidgetSh;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;
use zetsoft\models\App\eyuf\EyufNeed;


/** @var ZView $this */


/**
 *
 * Action Params
 */

$action = new WebItem();

$action->title = Azl . 'Подобрать Потребности';
$action->icon = 'fal fa-graduation-cap';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = false;


$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();

$modelName = $this->urlData(3);
$modelClassName = $this->bootFull($modelName);

?>

<div class="p-3">

    <?
    /** @var ZView $this */

    echo ZSessionGrowlWidget::widget(); ?>


    <div class="p-2 row justify-content-end dynaCheck">

        <?

        //start|DavlatovRavshan|2020.10.11

        $modelClassName = $this->httpGet('modelClassName');
        $action = $this->httpGet('action');
        $userId = $this->userIdentity()->id;

        $sessionKey = "Provider-$modelClassName-$action-$userId";

        $provider = $this->sessionGet($sessionKey);
        $provider = Az::$app->smart->dyna->getProviderFromArray($provider);

        $processUrl = $this->httpGet('processUrl');

        $modelClassName = $this->httpGet('modelClassName');
        $modelClass = $this->bootFull($modelClassName);
        $model = new $modelClass();

        echo ZGetChecksWidget::widget([
            'model' => $model,
            'grapesWrap' => false,
            'config' => [
                'btnOptions' => [
                    'config' => [
                        'icon' => '',
                        'text' => Az::l('Подобрать'),
                        'hasIcon' => false,
                        'btnType' => ZButtonWidget::btnType['link'],
                        'grapes' => false,
                        'btnStyle' => ZButtonWidget::btnStyle['btn-outline-primary'],
                        'title' => Az::l('Подборка'),
                        'message' => Az::l('Вы хотите подобрать эти элементы?'),
                    ]
                ],
                'url' => $processUrl,
                'data' => [
                    'action' => $action,
                ]
            ],
            'event' => [
                'ajaxSuccess' => <<<JS
        function() {
            window.parent.location.reload()
        }
JS,
            ]

        ]);

        ?>

    </div>
    <div class="row">
        <div class="col-md-12 col-12">

            <?
            /** @var Models $modelClass */
            /** @var ZActiveRecord $model */

            $Query = Az::$app->smart->dyna->getChooseQuery($provider, $modelClass);

            $model->query = $Query;
            $model->configs->readonly = true;
            $model->columns();

            //end|DavlatovRavshan|2020.10.11

            echo ZDynaWidget::widget([
                'model' => $model,
                'config' => [
                    'columnBefore' => [
                        'checkbox',
                        'serial',
                        'id'
                    ],
                    'columnAfter' => false,
                    'hasToolbar' => false,
                    'search' => false,
                ]
            ]);

            ?>

        </div>
    </div>

</div>
