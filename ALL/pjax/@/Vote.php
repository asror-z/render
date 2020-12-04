<?php

/**
 * @var ZView $this
 */


/**
 *
 *
 * Author:  Asror Zakirov
 *
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

\lajax\translatemanager\helpers\Language::registerAssets();

use zetsoft\system\Az;
use yii\bootstrap\Html;
use zetsoft\system\kernels\ZView;
use yii\widgets\Pjax;

echo HTML::beginTag('div', ['class' => 'col-xs-12']);

echo Az::l('How are you');
echo '<br>';
echo Az::l('What do you do');
echo '<br>';

?>

<?= Html::a('en', ['tester/vote', 'language' => 'en']) ?>
    <br>
<?= Html::a('ru', ['tester/vote', 'language' => 'ru']) ?>
    <br>
<?= Html::a('uz', ['tester/vote', 'language' => 'uz']) ?>





<?php Pjax::begin(['enablePushState' => false]); ?>
<?= Html::a('', Az::$app->request->url, ['class' => 'btn btn-lg btn-warning glyphicon glyphicon-arrow-up']) ?>
<?= Html::a('', Az::$app->request->url, ['class' => 'btn btn-lg btn-primary glyphicon glyphicon-arrow-down']) ?>
    <h1><?= Yii::$app->session->get('votes', 0) ?></h1>
<?php Pjax::end(); ?>


<?


echo HTML::endTag('div');
