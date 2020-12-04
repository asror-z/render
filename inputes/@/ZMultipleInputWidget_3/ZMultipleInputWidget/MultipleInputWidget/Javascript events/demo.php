<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<?php

use kartik\widgets\ActiveForm;
use unclead\multipleinput\MultipleInput;

$form = new ActiveForm();
$model = new \zetsoft\models\libra\Author();
?>

<?= $form->field($model, 'schedule')->widget(MultipleInput::className(), [
    'cloneButton' => true,
    'max' => 4,
    'columns' => [
        [
            'name'  => 'user_id',
            'type'  => 'dropDownList',
            'title' => 'User',
            'defaultValue' => 1,
            'items' => [
                1 => 'User 1',
                2 => 'User 2'
            ]
        ],
        [
            'name'  => 'day',
            'type'  => \kartik\date\DatePicker::className(),
            'title' => 'Day',
            'value' => function($data) {
                return $data['day'];
            },
            'items' => [
                '0' => 'Saturday',
                '1' => 'Monday'
            ],
            'options' => [
                'pluginOptions' => [
                    'format' => 'dd.mm.yyyy',
                    'todayHighlight' => true
                ]
            ]
        ],
        [
            'name'  => 'priority',
            'title' => 'Priority',
            'enableError' => true,
            'options' => [
                'class' => 'input-priority'
            ]
        ]
    ]
]);
?>
   <script>
       jQuery('.multiple-input').on('afterInit', function(){
           console.log('calls on after initialization event');
       }).on('beforeAddRow', function(e, row, currentIndex) {
           console.log('calls on before add row event');
       }).on('afterAddRow', function(e, row, currentIndex) {
           console.log('calls on after add row event');
       }).on('beforeDeleteRow', function(e, row, currentIndex){
           // row-HTML container of the current row for removal.
           // For TableRenderer it is tr.multiple-input-list__item
           console.log('calls on before remove row event.');
           return confirm('Are you sure you want to delete row?')
       }).on('afterDeleteRow', function(e, row, currentIndex){
           console.log('calls on after remove row event');
           console.log(row);
       }).on('afterDropRow', function(e, item){
           console.log('calls on after drop row', item);
       });
   </script>
