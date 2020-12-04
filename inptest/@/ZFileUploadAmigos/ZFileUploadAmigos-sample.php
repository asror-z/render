<?php
/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *  Created by: Mustafayev Saidbek
 *
 */
use dosamigos\fileupload\FileUpload;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;
use zetsoft\models\place\PlaceCountry;
use zetsoft\cnweb\ALL\inputs;
use dosamigos\fileupload\FileUploadUI;
$model = new PlaceCountry();
$tour_id = new PlaceCountry();
/** @var $model */

echo FileUploadUI::Widget([
    'model' => $model,
    'attribute' => 'name',
    'url' => ['/ravshan/ravshan/upload', 'id' => $tour_id],
    'gallery' => false,
    'load' => true,
    
    'fieldOptions' => [
        'accept' => 'image/*'
    ],
    'clientOptions' => [
        'maxFileSize' => 2000000
    ],
    'clientEvents' => [
        'fileuploaddone' =>
                'function(e, data) {
                      console.log(e);
                      console.log(data);
                            }',
        'fileuploadfail' =>
                'function(e, data) {
                      console.log(e);
                      console.log(data);
                            }',
    ],

]);
