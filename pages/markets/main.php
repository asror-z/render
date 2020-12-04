<?php

use yii\bootstrap4\Html;
use zetsoft\models\App\eyuf\EyufScholar;
use zetsoft\system\kernels\ZView;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
use zetsoft\widgets\animo\ZSimpleLoaderWidget;
use zetsoft\widgets\blocks\ZNProgressWidget;
use zetsoft\widgets\market\ZFooterAllWidget;
use zetsoft\widgets\market\ZFooterAllWidget;
use zetsoft\widgets\menus\ZSidebarWidget;
use zetsoft\widgets\notifier\ZSessionGrowlWidget;


/** @var ZView $this */

?>

<?php
$this->beginPage();
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= Html::encode($this->title) ?></title>


    <?php
    require Root.'/layouts/eyuf/asset/asset.php';
    ?>


    <?php
    $this->head();

    $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);

    ?>


</head>

<body class="<?= ZWidget::skin['white-skin'] ?>">


<?php $this->beginBody() ?>

<?php

echo ZNProgressWidget::widget([

]);

/*echo ZSimpleLoaderWidget::widget();

*/

?>
<div id="page">


    <?
    require Root . '/blocks/navbar/navbar.php';
echo ZSidebarWidget::widget([]);
    ?>
    
        <?php

        echo ZSessionGrowlWidget::widget();?>

        <div id="content" class="content-footer p-3" ic-history-elt="">

            <?= $content ?>

        </div>


    </div>
    <?

    if ($this->controlId !== 'chat')
        //require Root . '/blocks/navbar/bozor/footerMain.php';
        echo ZFooterAllWidget::widget();
    ?>

</div>


<?php $this->endBody() ?>

</body>
</html>
<?php
$this->endPage()

?>
