
<script src="https://cdn.statically.io/gh/joaopereirawd/fakeLoader.js/master/js/fakeLoader.js" ></script>
<link rel="stylesheet" href="https://cdn.statically.io/gh/joaopereirawd/fakeLoader.js/master/css/fakeLoader.css">

<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\widgets\animo\ZFakeLoaderWidget;

echo ZFakeLoaderWidget::widget([]);

$model = new \zetsoft\models\user\User();
echo \zetsoft\widgets\former\ZDynaWidget::widget([
        'model' => $model


]);


