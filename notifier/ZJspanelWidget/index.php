
sadfasdfa
<?php
   //IsmailovJamshid Start
use zetsoft\models\App\eyuf\db3\Trunks;
use zetsoft\models\shop\ShopCourier;
use zetsoft\system\assets\ZColor;
use zetsoft\system\helpers\ZUrl;
use zetsoft\widgets\former\ZDynaWidgetRav;
use zetsoft\widgets\former\ZFormBuildWidget;
use zetsoft\widgets\inputes\ZKSelect2WidgetRav;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZJspanelWidgetRavshan;

echo ZJspanelWidgetRavshan::widget([
    'model' => new ShopCourier(),
    'config' => [
        'iframeSrc' => ZUrl::to([
            '/crud/shop-courier/create_jam',
            'spa' =>1
        ]),
        'iframeId' => 'dynaPanel',
        'funcName' => 'dynaPanel',
        'begin' => true,
        'width' => '1000px',
        'height' => '400px',
    ]
]);
echo ZJspanelWidgetRavshan::widget([
    'id' => 'asd',
    'model' => new ShopCourier(),
    'config' => [
        'iframeSrc' => ZUrl::to([
            '/crud/shop-product/create_jam',
            'spa' => 1
        ]),
        'iframeId' => 'dynaPanel1',
        'funcName' => 'dynaPanel1',
        'begin' => true,
        'width' => '1000px',
        'height' => '400px',
    ],
    'event' => [
        'onClosed' => <<<JS
      
JS,

    ]
]);


echo ZButtonWidget::widget([
    'config' => [
        'icon' => 'fas fa-plus',
        'btnRounded' => false,
        'btnSize' => ZColor::btnSize['btn-sm'],
        'btnType' => ZButtonWidget::btnType['button'],
    ],

    'event' => [
        'click' => <<<JS
    function() {   
        console.log('nmadr bos')
        $('#asd').show()    
       window.dynaPanel();
       
       var iframe = document.getElementById('shopcourier-iframe');

        $(iframe).on('load', function () {
            var btn =  iframe.contentWindow.document.getElementById("w5");
            
            console.log(btn);
            
            var parentWindow = window.parent.document;
            
            $(btn).on('click', function () {
                var button = parentWindow.getElementById('jamster');
                
                $(button).trigger('click') 
            })


        })
        
    }
JS,

    ]
]);
echo ZButtonWidget::widget([
    'config' => [
        'icon' => 'fas fa-plus',
        'title' => 'ddsf',
        'btnRounded' => false,
        'btnSize' => ZColor::btnSize['btn-sm'],
        'btnType' => ZButtonWidget::btnType['button'],
    ],

    'event' => [
        'click' => <<<JS
    function() {       
        window.dynaPanel1();
        
    }
JS,

    ]
]);



echo ZButtonWidget::widget([
    'id'    => 'jamster',
    'config' => [
        'icon' => 'fas fa-plus',
        'title' => 'BOS',
        'btnRounded' => false,
        'btnSize' => ZColor::btnSize['btn-sm'],
        'btnType' => ZButtonWidget::btnType['button'],
    ],

    'event' => [
        'click' => <<<JS
    function() {       
       console.log('Jamster');
    }
JS,

    ]
]);
//IsmailovJamshid End
