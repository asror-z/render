<?php


use zetsoft\widgets\animo\ZMultistepformwizardWidget;

echo ZMultistepformwizardWidget::widget([
    'config' => [
        'steps' => [
            [
                'value' => 'account',
                'itemID' => 'account'
            ],
            [
                'value' => 'personal',
                'itemID' => 'personal'
            ],
            [
                'value' => 'payment',
                'itemID' => 'payment'
            ],
            [
                'value' => 'payment',
                'itemID' => 'payment'
            ],
            [
                'value' => 'payment',
                'itemID' => 'payment'
            ],
            [
                'value' => 'confirm',
                'itemID' => 'confirm'
            ],
        ]
    ],

]);
