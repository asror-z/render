<?php
use dosamigos\fileupload\FileUploadUI;

// with UI
?>
<?php $tour_id =52252;
FileUploadUI::widget([
    'model' => 'form',
    'attribute' => 'image',
    'url' => ['media/upload', 'id' => $tour_id],
    'gallery' => false,
    'fieldOptions' => [
        'accept' => 'image/*'
    ],
    'clientOptions' => [
        'maxFileSize' => 2000000
    ],
    // ...
    'clientEvents' => [
        'fileuploaddone' => 'function(e, data) {
                                console.log(e);
                                console.log(data);
                            }',
        'fileuploadfail' => 'function(e, data) {
                                console.log(e);
                                console.log(data);
                            }',
    ],
]); ?>
