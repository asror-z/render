<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\user\UserBlocked;
use zetsoft\models\ware\WareAccept;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZFormBuildWidget;
use zetsoft\widgets\former\ZFormBuildWidgetD;


$wareResult = WareAccept::findOne(2);
$wareResult->cards = [
    [
        'title' => Az::l('Первый этап'),
        'items' => [

            [
                'title' => Az::l('Результат шт.'),
                'items' => [
                    [
                        'completed',
                        'total',
                        'for_acceptance',
                        'exchange',
                        'refusal',
                        'cancel',
                        'date_transfer',
                        'sales_amount',
                        'courier_reward',
                        'return_expenses',
                        'exchange_reward',
                        'refund_reward',
                        'salary_courier',
                        'remain',
                    ],
                ],
            ],
            [
                'title' => Az::l('Сумма сум'),
                'items' => [
                    [

                        'sales_amount',
                        'courier_reward',
                        'return_expenses',
                        'exchange_reward',
                        'refund_reward',
                        'salary_courier',
                        'remain',
                    ],
                ],
            ],
            [
                'title' => Az::l('Расходы сум'),
                'items' => [
                    [
                        'terminal',
                        'add_delivery',
                        'refund',
                        'in_dollar',
                        'currency',
                        'converted',
                        'bonus',
                        'cashless',
                    ],
                ],
            ],
        ],
    ],
];
$form = $this->activeBegin();

echo ZFormBuildWidgetD::widget([
    'model' => $wareResult,
    'form' => $form,
    'config' => [
        'stepType' => ZFormBuildWidgetD::stepType['none'],
        'blocktype' => ZFormBuildWidgetD::blockType['card'],
        'cols' => 3
    ],
]);

$this->activeEnd();
