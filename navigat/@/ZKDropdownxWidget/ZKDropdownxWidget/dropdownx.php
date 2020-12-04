<?php

use zetsoft\widgets\navigat\ZKDropdownxWidget;
use yii\bootstrap4\ButtonDropdown;
use yii\helpers\Html;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Nav;
use kartik\bs4dropdown\Dropdown;

//echo '<div class="dropdown">';
echo Html::tag('span', 'Dropdown Span', [
    'id' => 'dropdownMenuButton',
    'class' => 'btn btn-link text-info dropdown-toggle',
    'data-toggle' => 'dropdown',
    'aria-haspopup' => 'true',
    'aria-expanded' => 'false'
]);
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
/*echo ButtonDropdown::widget([
    'label' => 'Button Dropdown',
    'dropdown' => [
        'items' => [
            ['label' => 'action', 'url' => '#'],
            ['label' => 'Submenu 1', 'items' => [
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
            ['label' => 'Something else here', 'url' => '#'],
            '<div class="dropdown-divider"></div>',
            ['label' => 'Separated link', 'url' => '#'],
        ],
    ],
    'buttonOptions' => ['class' => 'btn-outline-secondary']
]);*/
/*echo ZKDropdownxWidget::widget([
'config' => [
    'items' => [

            'label' => 'Section 3',
            'items' => [
                ['label' => 'Section 3.1', 'url' => '/'],
                ['label' => 'Section 3.2', 'url' => '#'],
              
            ],
    ],
],

    'options' => ['aria-labelledby' => 'Button Dropdown']
]);*/

//echo '</div>';

echo "<br>";


echo "<br>";

NavBar::begin([
    'brandLabel' => 'Navsdasdasdda',
    'brandLabel' => 'Navsda',
    'brandLabel' => 'Navsdda',
    'brandLabel' => 'Navsdsdasdda',
    'brandOptions' => ['class'=>'p-0'],
    'options' => ['class' => 'navbar navbar-expand-md navbar-dark bg-info']
]);
/*echo Nav::widget([

    
    'items' => [
        ['label' => 'Home', 'url' => ['/site/index']],
        [
            'label' => 'Dropdown',
            'items' => [
                ['label' => 'Section 1', 'url' => '/'],
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
                ],
            ],
        ],
        ['label' => 'About', 'url' => ['/site/about']],
    ],
    'dropdownClass' => Dropdown::classname(), // use the custom dropdown
    'options' => ['class' => 'navbar-nav mr-auto'],
]);*/
NavBar::end();
