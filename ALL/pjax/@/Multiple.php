<?php

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


use yii\bootstrap\Html;
use zetsoft\widgets\blocks\ZBoxV2Widget;
use yii\widgets\Pjax;

echo HTML::beginTag('div', ['class' => 'col-xs-12']);

ZBoxV2Widget::begin([
	'type' => ZBoxV2Widget::Type_Success,
	'title' => 'Текущая статистика',
	'bIsSolid' => false,


]);

?>

    <div class="col-sm-12 col-md-6">
		<?php Pjax::begin(); ?>
		<?= Html::a("Generate Random String", ['core/multiple'], ['class' => 'btn btn-lg btn-primary']) ?>
        <h3><?= $randomString ?></h3>
		<?php Pjax::end(); ?>
    </div>

    <div class="col-sm-12 col-md-6">
		<?php Pjax::begin(); ?>
		<?= Html::a("Generate Random Key", ['core/multiple'], ['class' => 'btn btn-lg btn-primary']) ?>
        <h3><?= $randomKey ?><h3>
				<?php Pjax::end(); ?>
    </div>

<?


ZBoxV2Widget::end();

echo HTML::endTag('div');
