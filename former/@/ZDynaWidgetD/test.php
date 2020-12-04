<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

$modelClassName = $this->httpGet('modelClassName');
$modelClass = $this->bootFull($modelClassName);
vdd($modelClassName);
$keys = $this->httpPost('keys');

$keysExp = explode('|', $keys);

if ($keysExp)
    foreach ($keysExp as $id) {
        if ($id) {
            $model = $this->modelClone($modelClass, $id);
            $this->modelSave($model);
        }
    }

$this->notifySuccess('Данные успешно клонированы!', $keys);

return $this->urlRedirect($this->urlGetBack());
