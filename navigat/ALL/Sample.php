<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */



use zetsoft\widgets\navigat\ZKDropdownxWidget;
use zetsoft\widgets\navigat\ZKNavxWidget;
use zetsoft\widgets\navigat\ZKTabXWidget;
use zetsoft\widgets\themes\ZLanguagePickerWidget;





echo 'ZKDropdownxWidget Sample' . EOL;


echo ZKDropdownxWidget::widget([

    'config' => [
        'items' => [
            /*['label' => 'Section 1', 'url' => '/'],
            ['label' => 'Section 2', 'url' => '#'],
            [
                'label' => 'Section 3',
                'items' => [
                    ['label' => 'Section 3.1', 'url' => '/'],
                    ['label' => 'Section 3.2', 'url' => '#'],
                    [
                        'label' => 'Section 3.3',
                        'items' => [
                            ['label' => 'Section 3.3.1', 'url' => '/'],
                            ['label' => 'Section 3.3.2', 'url' => '#'],
                        ],
                    ],
                ],
            ],*/

            'label' => 'gasdghasjdh'
        ],
    ],

    'options' => ['aria-labelledby' => 'dropdownMenuButton']
]);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo EOL.EOL;

echo 'ZKNavxWidget Sample' . EOL;

echo ZKNavxWidget::widget([
    'config'=>[
        'options'=>['class'=>'nav nav-pills'],
        'items' => [
            ['label' => 'action', 'url' => '#'],
            ['label' => 'Submenu 1', 'active'=>true, 'items' => [
                ['label' => 'action', 'url' => '#'],
                ['label' => 'Another action', 'url' => '#'],
                ['label' => 'Something else here', 'url' => '#'],
                '<div class="dropdown-divider"></div>',
                ['label' => 'Submenu 2', 'items' => [
                    ['label' => 'action', 'url' => '#'],
                    ['label' => 'Another action', 'url' => '#'],
                    ['label' => 'Something else here', 'url' => '#'],
                    '<div class="dropdown-divider"></div>',
                    ['label' => 'Separated link', 'url' => '#'],
                ]],
            ]],
            ['label' => 'My Link', 'url' => '#'],
            ['label' => 'Disabled', 'linkOptions' => ['class' => 'disabled'], 'url' => '#'],
        ]
    ]
]);
echo ZKNavxWidget::widget([
    'config'=>[
        'optionss'=>['class'=>'nav nav-pills'],
        'items' => [
            ['label' => 'action', 'url' => '#'],
            ['label' => 'Submenu 1', 'active'=>true, 'items' => [
                ['label' => 'action', 'url' => '#'],
                ['label' => 'Another action', 'url' => '#'],
                ['label' => 'Something else here', 'url' => '#'],
                '<div class="dropdown-divider"></div>',
                ['label' => 'Submenu 2', 'items' => [
                    ['label' => 'action', 'url' => '#'],
                    ['label' => 'Another action', 'url' => '#'],
                    ['label' => 'Something else here', 'url' => '#'],
                    '<div class="dropdown-divider"></div>',
                    ['label' => 'Separated link', 'url' => '#'],
                ]],
            ]],
            ['label' => 'My Link', 'url' => '#'],
            ['label' => 'Disabled', 'linkOptions' => ['class' => 'disabled'], 'url' => '#'],
        ]
    ]
]);

echo EOL.EOL;


echo 'ZLanguagePickerS2Widget Sample' . EOL;

echo ZLanguagePickerWidget::widget([]);

echo EOL.EOL;

echo 'ZKTabXWidget Sample' . EOL;
$items = [
    [
        'label'=>'<i class="fas fa-home"></i> Home',
        'content'=>"Content",
        'active'=>true
    ],
    [
        'label'=>'<i class="fas fa-user"></i> Profile',
        'content'=>"asdasd",
        'linkOptions'=>['data-url'=>\yii\helpers\Url::to(['/site/tabs-data'])]
    ],
    [
        'label'=>'<i class="fas fa-list-alt"></i> Menu',
        'items'=>[
            [
                'label'=>'Option 1',
                'encode'=>false,
                'content'=>"content3",
            ],
            [
                'label'=>'Option 2',
                'encode'=>false,
                'content'=>"content4",
            ],
        ],
    ],
    [
        'label'=>'<i class="fas fa-king"></i> Disabled',
        'linkOptions' => ['class'=>'disabled']
    ],
];

echo ZKTabXWidget::widget([
    'config' => [
        'items'=>$items,
        'position'=>TabsX::POS_ABOVE,
    ]

]);

echo ZKTabXWidget::widget([
    'config' => [
        'items'=>$items,
        'position'=>TabsX::POS_BELOW,
    ]
]);

echo EOL.EOL;

