<?php

use zetsoft\system\Az;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZCheckSelectNewWidget;
use zetsoft\widgets\former\ZDynaWidgetJ;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\models\shop\ShopOrder;
use zetsoft\widgets\themes\ZCardWidget;
use zetsoft\widgets\inputes\ZDropDownListWidget;
use zetsoft\widgets\former\ZCheckButtonDependWidget;
use zetsoft\widgets\former\ZCheckButtonWidget;
use zetsoft\widgets\former\ZCheckSelectWidget;

/** @var ZView $this */

                ZCardWidget::begin([
                    'config' => [
                        'type' => ZCardWidget::type['dynCard'],
                        'classHeadColor' => 'bg-primary',
                        'hasIcon' => true,

                    ]
                ]);
                $model = new ShopOrder();



                $users = [];
                $operators = Az::$app->market->operator->getUserByRole('operator');

                $firstSelect = null;
                if (!empty($operators)) {
                    $firstSelect = $operators[0]['id'];

                    foreach ($operators as $operator)
                        $users[$operator['id']] = $operator['name'];

                } else {
                    echo '<span class="pl-3">' . Az::l("operators are not fount") . '</span>';
                }

                $check = ZCheckSelectWidget::widget([

                    'config' => [
                        'inputAttr' => 'operator',
                        'attr' => 'status_callcenter',
                        'value' => 'ring',
                        'url' => ZUrl::to([
                            '/api/core/app/check-new',
                            'modelClassName' => $model->className,
                        ]),
                        'widgetClass' => ZDropDownListWidget::class,
                        'widgetOptions' => [
                            'data' => $users,
                            'id' => 'operator-dropdown',
                            'config' => [
                                'class' => 'form-control d-block'
                            ],
                        ],

                        'modelClassName' => $model->className,
                        'btnOptions' => [
                            'config' => [
                                'text' =>  Az::l('Обзвон'),
                                'btnStyle' => ZButtonWidget::btnStyle['btn-outline-success'],
                                'btnType' => ZButtonWidget::btnType['submit'],
                                'btnRounded' => false,
                                'btnSize' => 'btn-ml',
                                'class' => 'p-1 m-1'
                            ]
                        ]
                    ]
                ]);
                $button = ZCheckButtonWidget::widget([

                    'config' => [
                        'attr' => 'status_callcenter',
                        'value' => 'autodial',
                        'dependId' => 'operator-dropdown',
                        'dapendAttr' => 'operator',
                        'url' => ZUrl::to([
                            '/api/core/app/check-new',
                            'modelClassName' => $model->className,
                        ]),
                        'widgetClass' => ZDropDownListWidget::class,
                        'widgetOptions' => [
                            'data' => $users,
                            'config' => [
                                'class' => 'form-control d-block'
                            ],
                        ],

                        'modelClassName' => $model->className,
                        'btnOptions' => [
                            'config' => [
                                'text' => Az::l('Автообзвон'),
                                'btnStyle' => ZButtonWidget::btnStyle['btn-outline-success'],
                                'btnType' => ZButtonWidget::btnType['submit'],
                                'btnRounded' => false,
                                'btnSize' => 'btn-ml',
                                'class' => 'p-1 mx-1'
                            ]
                        ]
                    ]
                ]);


                /** @var ZView $this */
                echo ZDynaWidget::widget([
                    'model' => $model,
                    'config' => [
                        'isCard' => false,
                    ],
                    'leftBtn' => [
                        'search' => [
                            'content' => $check,
                            'options' => [
                                'class' => ' '
                            ]
                        ],
                        'updateBtn' => [
                            'content' => $button,
                            'options' => [
                                'class' => ' '
                            ]
                        ],
                    ]
                ]);

                ZCardWidget::end();

                ?>

        
