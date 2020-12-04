<?php
/**
 *
 * Author:  Asror Zakirov
 * Created: 08.06.2017 13:28
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 */
use kartik\alert\Alert;
use kartik\alert\AlertBlock;
use yii\web\Session;

echo Alert::widget([
	'type' => Alert::TYPE_INFO,
	'title' => 'Note',
	'titleOptions' => ['icon' => 'info-sign'],
	'body' => 'This is an informative alert'
]);


Yii::$app->session->setFlash('adadad');
Yii::$app->session->setFlash('1313131', 11);
Yii::$app->session->setFlash('1313131', 11);
Yii::$app->session->setFlash('1313131', 11);

echo AlertBlock::widget([
	'type' => AlertBlock::TYPE_ALERT,
	'useSessionFlash' => true
]);
