<?php

use yii\bootstrap4\Html;
use zetsoft\models\App\eyuf\EyufScholar;
use zetsoft\system\Az;
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
    require __DIR__.'/blocks/asset_asror_1.php';
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
    require __DIR__ . '/blocks/navbar_asror_1.php';
    ?>

    <?php

    echo ZSessionGrowlWidget::widget();?>

    <div id="content" class="content-footer p-3" ic-history-elt="">

        

    </div>


</div>



<?php $this->endBody() ?>

</body>
</html>
<?php
$this->endPage()
?>
