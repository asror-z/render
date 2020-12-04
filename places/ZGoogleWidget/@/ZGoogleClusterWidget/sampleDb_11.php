<?php
$data = [
    'Alabama', 'Alaska', 'California', 'Colorado',
    'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
    'Idaho', 'Maine',  'New Jersey', 'Tennessee', 'Texas', 'Utah', 'Vermont',
    'Virginia', 'Washington',
];
echo zetsoft\widgets\inputes\ZKTypeaheadWidget::widget([
    'id' => 'ZKTypeaheadWidget_74514',
    'data' => [],
    'config' => [
        'minLength' => 1,
        'limit' => 5,
        'display' => 'value',
        'remote' => [
            'method' => 'ajax',
        ],
    ],
    'model' => new zetsoft\models\core\CoreInput(),
    'attribute' => 'string_2',
]);


?>



