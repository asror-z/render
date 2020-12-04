<?php

//use zetsoft\widgets\former\ZAjax2Widget;
use zetsoft\widgets\ajaxify\ZAjaxWidget;
use zetsoft\widgets\navigat\ZButtonWidget;

//$this->grape=true;


$data = [
    '1' =>'11111',
    '2' =>'22222',
    '3' =>'33333',
    '4' =>'44444',
];


$datajson = json_encode($data);
?>



<textarea id="text"></textarea>

<button class="btn btn-info" id="buttonTest">button</button>

<button id="button2" class="btn btn-danger">Button2</button>

<?php



?>
<script>
    var dataPost = {
        '1' : '111',
        '2' : '222'
    };

</script>


<?

//  vdd(json_encode($data));

echo ZAjaxWidget::widget([
    'config' => [
        'func' => 'ajax',
        'url' => '/core/tester/ajax/test.aspx',
        'type' => ZAjaxWidget::type['get'], //"POST", "GET", "PUT"
        'data' => $data
    ],

    'event' => [
        'success' => <<<JS
            function (data) {
                $('#text').text(data);
                console.log('aaaaaaaaaaaaaaaaaa');
                
            }
JS,

    ],

]);


echo ZButtonWidget::widget([
    'id' => 'okButton',
    'config' => [
        'text' => 'click'
],
    'event' => [
        'click' => <<<JS
        function (text) {
         ajax();
    }
JS
    ],
]);


?>

