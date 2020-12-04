<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/plyr@3.6.2/dist/plyr.css"/>

<script src="https://cdn.jsdelivr.net/npm/plyr@3.6.2/dist/plyr.js"></script>

<script>
    const player = new Plyr('#player');
</script>

<!-- <meta charset="UTF-8">
<title>SMTHng</title>
<link rel="/publish/yarner/plyr/dist/plyr.css"/>

<script src="/publish/yarner/plyr/dist/plyr.js"></script>

<script>
    const player = new Plyr('#player1');
    const player = new Plyr('#player');
</script>  -->

<video poster="/slick/asdf.jpg" id="player1" playsinline controls>
    <source src="/videos/console debug.mp4" type="video/mp4"/>
</video>

<audio id="player2" controls>
    <source src="/slick/mp3.mp3" type="audio/mp3"/>
</audio>

<?php


use zetsoft\widgets\navigat\ZButtonWidget;


echo ZButtonWidget::widget([
    'config' => [
        'target' => ZButtonWidget::target['_blank'],
        'btnStyle' => ZButtonWidget::btnStyle['btn-outline-primary'],
        'btnType' => ZButtonWidget::btnType['submit'],
        'text' => 'AADFASDFASD',
        'class' => 'pr-2 green lighten-1 mt-10',
        'btnRounded' => false,
        'btnIconSize' => ZButtonWidget::btnScale['default'],
        'btnFontSize' => ZButtonWidget::btnScale['default'],
        'btnHeight' => ZButtonWidget::btnScale['default'],
        'btnIconPadding' => ZButtonWidget::btnScale['default'],
        'btnSize' => ZButtonWidget::btnSize['btn-micro'],
    ],
    'event' => [
        'click' => <<<JS
    function (){
            ajaxtest('/core/tester/umid/serverside.aspx?value=' + $('#input').val())   
    }
JS
    ]
]);




?>


