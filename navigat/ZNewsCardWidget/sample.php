<?php

use zetsoft\dbitem\core\WebItem;
use zetsoft\models\news\News;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZInstantclickWidget;
use yii\data\ActiveDataProvider;
use zetsoft\widgets\market\ZFooterAllWidget;
use zetsoft\widgets\navigat\ZNewsCardWidget;
use zetsoft\widgets\themes\ZCardWidget;

/** @var ZView $this */
$action = new WebItem();

$action->title = Azl . 'Новости';
$action->icon = 'fa fa-globe';
$action->type = WebItem::type['html'];
$action->csrf = true;
$action->debug = false;



$this->paramSet(paramAction, $action);

$this->title();
$this->toolbar();

/** @var ZView $this */
$this->paramSet('widget', true);
$this->paramGet('widget');

$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <?php
//    require Root . '/block/metas/' . App . '/main.php';
//    require Root . '/block/assets/' . App . '/main.php';

    $this->head();
    ?>

</head>
<body class="<?= ZWidget::skin['white-skin'] ?>">

<?php

$this->beginBody();

//require Root . '/blocks/header/' . App . '/main.php';
//require Root . '/blocks/navbar/main.php';

ZCardWidget::begin([
    'config' => [
        'title' => $this->title,
        'type' => ZCardWidget::type['dynCard'],
    ]
]);
?>
<!--<div class="container-fluid">-->
<div class="col-lg-7">
    <div class="row">
        <?php

        $text = News::find()->where(['position' => 'center'])->limit(10)->all();
        /** @var ActiveDataProvider $provider */

        foreach ($text as $t) {
            /*$type = $t->getCoreNewsType()->name;*/
            /*$type = $t->getCoreNewsType()->name;*/
            ?>
            <div class="col-md-6">
                <?php
                echo ZNewsCardWidget::widget([
                    'config' => [
                        'id' => $t->id,
                        'type' => ZNewsCardWidget::type['two'],
                        'title' => $t->name,
                        'imgUrl' => '/upload/eyuf/corenews/image/' . $t->id . '/' . $t->image,
                        'time' => $t->created_at,
                         /*'subTitle' => $type,*/
                        'text' => $t->title
                    ]
                ]);
                ?>
            </div>
            <?
        }
        ?>
    </div>
</div>
<?
ZCardWidget::end();

echo ZInstantclickWidget::widget();
?>
<?= ZFooterAllWidget::widget(); ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>














