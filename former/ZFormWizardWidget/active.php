<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * Date:    9/14/2019
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\user\UserBlocked;use zetsoft\models\core\CoreInput;
use zetsoft\models\user\User;

use zetsoft\models\ware\WareAccept;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;use zetsoft\widgets\former\ZFormWizardWidget;


/** @var ZView $this */

$laptop = new WareAccept();


$this->title = 'ZFormWizardWidget';
$laptop->configs->hasLabel = true;
$laptop->cards = [
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

                    ],
                    [
                        'refusal',
                        'cancel',
                        'date_transfer',
                    ]
                ],
            ],
        ],
    ],
    [
        'title' => Az::l('Второй этап'),
        'items' => [
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
        ],
    ],
];
$laptop->columns();
echo ZFormWizardWidget::widget([
    'model' => $laptop,
    'config' => [
        'wizardClass' => ZFormWizardWidget::wizardClass['smart']
    ]
]);

