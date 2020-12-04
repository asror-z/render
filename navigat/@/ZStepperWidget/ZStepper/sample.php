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


use zetsoft\widgets\navigat\ZMdbprostepper;

echo ZMdbprostepper::widget([
    'config' => [
        'items' => [
            'item' => [
                'type' => 'input',
                'name' => 'Step 1',
                'text' => 'ewfiouvewbv',
                'active' => 'active',
                'inputTypes' => ZMdbprostepper::inputType['text'],
                'btnColor' => ZMdbprostepper::btncolor['btn-success'],
                'btnSizes' => ZMdbprostepper::btnSize['btn-md'],
                'label' => 'Default placeholder',
            ],
            'item2' => [
                'type' => 'input',
                'name' => 'Step 2',
                'text' => 'asdfasd',
                'active' => '',
                'inputTypes' => ZMdbprostepper::inputType['password'],
                'btnColor' => ZMdbprostepper::btncolor['btn-success'],
                'btnSizes' => ZMdbprostepper::btnSize['btn-md'],
                'label' => 'Default placeholder',
            ],
            'item3' => [
                'type' => 'input',
                'name' => 'Step 2',
                'text' => 'ewfiouvewbv',
                'active' => '',
                'inputTypes' => ZMdbprostepper::inputType['text'],
                'btnColor' => ZMdbprostepper::btncolor['btn-success'],
                'btnSizes' => ZMdbprostepper::btnSize['btn-md'],
                'label' => 'Default placeholder',
            ],
            'item4' => [
                'type' => 'input',
                'name' => 'Step 2',
                'text' => 'ewfiouvewbv',
                'active' => '',
                'inputTypes' => ZMdbprostepper::inputType['text'],
                'btnColor' => ZMdbprostepper::btncolor['btn-success'],
                'btnSizes' => ZMdbprostepper::btnSize['btn-md'],
                'label' => 'Default placeholder',
            ],
        ]
    ]
]);
