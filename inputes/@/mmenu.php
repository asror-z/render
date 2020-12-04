<?php
/** @var ZView $this */
$aTwo = Az::$app->cores->menus->create([
    /*    'admin',*/
    'ruslan',
]);

//$aOne = Az::$app->menus->menu->run();

$aOne = [
    [
        'title' => 'Разработка',
        'items' => [
            [
                'label' => 'Models',
                'items' => [
                    [
                        'label' => 'Animal',
                        'url' => '#',
                        'blank' => true
                    ],
                    [
                        'label' => 'Book',
                        'url' => '#',
                        'blank' => true
                    ],
                ]
            ],
        ]
    ]
];

$aALL = \zetsoft\system\helpers\ZArrayHelper::merge($aOne, $aTwo);
              
echo \zetsoft\widgets\navigat\Important::widget([
    'optionsALL' => $aALL
]);

?>
