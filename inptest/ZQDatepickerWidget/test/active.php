<?php

use zetsoft\models\core\CoreInput;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inptest\ZQDatepickerWidget;

$this->title = "ZQDatepickerWidget Active";

$model = $this->modelGet(CoreInput::class, 15);

$form = $this->activeBegin();
$this->modelSave($model);
/*$model->configs->rulesAll = [
    [validatorRequired]
];*/
echo "Model ID = ". $model->id;
echo "<br>";

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [

        // First row

        [
            'attributes' => [   

                // With default configs
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZQDatepickerWidget::class,
                ],

                // Single selection of hours, minutes and seconds with minimum value

                'time_1' =>  [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZQDatepickerWidget::class,
                    'options' => [
                        'config' => [
                            'label' => 'Single selection of hours, minutes and seconds, minimum value: 04:23:11  (Time 1)',
                            'format' => ZQDatepickerWidget::Formats['time'],
                            'size' => ZQDatepickerWidget::Sizes['only-time'],
                            'min' => '04:23:11',
                        ]
                    ]
                ],
            ]
        ],

        // second row
        [
            'attributes' => [   
                'date_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZQDatepickerWidget::class,
                    'options' => [
                        
                        'config' => [

                            'label' => "Single selection of dates with shortcuts on yhe left side (Date 1)",

                            'format' => ZQDatepickerWidget::Formats['date'],
                            
                                /*
                                *  Formats

                                        'datetime' => "YYYY-MM-DD HH:mm:ss", (default)
                                        'date' => "YYYY-MM-DD",
                                        'time' => "HH:mm:ss",
                                        'month' => "YYYY-MM",
                                        'year' => "YYYY", 

                                * As well you can set another avaliable datetime format, 
                                * such as "HH::mm" (only hours and minutes will be shown)
                                */

                               

                                'hasShortcut' => true,
                                'shortcutOptions' => [
                                    [
                                        'name' => 'Today',
                                        'day' => 0,
                                    ],
                                    [
                                        'name' => 'Yesterday',
                                        'day' => -1,
                                    ],
                                    [
                                        'name' => 'A week ago',
                                        'day' => -7,
                                    ],
                                    [
                                        'name' => 'A month later',
                                        'day' => 30,
                                    ],
                                ],

                            'size' => ZQDatepickerWidget::Sizes['only-date'],
                            /* Sizes: (customize input width)
                                date-time (default) || only-date || only-time
                            */
                            'placeholder' => 'Tanlang...',
                        ]
                    ], 
                ],

                'jsonb_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZQDatepickerWidget::class,
                    'options' => [
                        'config' => [
                            'label' => 'Date range picker (Jsonb 2)',
                            'startPlaceholder' => 'Start date',
                            'endPlaceholder' => 'End date',
                            'icon' => 'fa fa-calendar',
                            'size' => ZQDatepickerWidget::Sizes['only-date'],
                            'format' => ZQDatepickerWidget::Formats['date'],
                            'isRange' => true,  
                            'hasShortcut' => true,
                            'shortcutOptions' => [
                                [
                                    'name' => 'Last week',
                                    'day' => "-7,0",
                                ],
                                [
                                    'name' => 'Last month',
                                    'day' => "-30,0",
                                ],
                            ]
                        ],
                       
                    ] 
                ],
           ]
       ],

       // Third row
       [

            'attributes' => [

                 'jsonb_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZQDatepickerWidget::class,
                    'options' => [
                        'config' => [
                            'label' => 'Year, month, day, hour, minute and second range selection, minimum value: 2018-01-01 06:00:00, maximum value: 2019-04-29 20:59:59  (Jsonb 3)',
                            'startPlaceholder' => 'Start date',
                            'endPlaceholder' => 'End date',
                            'icon' => 'fa fa-calendar',
                            'format' => ZQDatepickerWidget::Formats['datetime'],
                            'isRange' => true,  
                            'min' => "2020-01-01 06:00:00",
                            'max' => "2020-07-01 06:00:00",
                            'hasShortcut' => true,

                            'shortcutOptions' => [
                                [
                                    'name' => 'Yesterday',
                                    'day' => "-1,0",
                                ],
                                [
                                    'name' => 'Last month',
                                    'day' => "-30,0",
                                ],
                                [
                                    'name' => "Next month",
                                    'day' => "0,30",
                                ],
                            ]
                        ],
                       
                    ] 
                ],

                'jsonb_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZQDatepickerWidget::class,
                    'options' => [
                        'config' => [
                            'label' => 'Hour, minute, second, year, month, and day range, the limit can only choose the same month, such as 2018-10-01 to 2018-10-30  (Jsonb 4)',
                            'startPlaceholder' => 'Start date',
                            'endPlaceholder' => 'End date',
                            'icon' => 'fa fa-calendar',
                            'isRange' => true,  
                            'between' => 'month',
                            'hasShortcut' => true,
                            'shortcutOptions' => [
                                [
                                    'name' => 'Yesterday',
                                    'day' => "-1,0",
                                ],
                                [
                                    'name' => 'Last month',
                                    'day' => "-30,0",
                                ],
                                [
                                    'name' => "Next month",
                                    'day' => "0,30",
                                ],
                            ]
                        ],
                       
                    ] 
                ],

            ]

       ],

         // Fourth row
       [

            'attributes' => [

                'jsonb_5' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZQDatepickerWidget::class,
                    'options' => [
                        'config' => [
                            'label' => 'Year, month, day, hour, minute and second range selection, start and end are limited to 30 days  (Jsonb 5)',
                            'startPlaceholder' => 'Start date',
                            'endPlaceholder' => 'End date',
                            'icon' => 'fa fa-calendar',
                            'isRange' => true,  
                            'between' => 30,
                            'hasShortcut' => true,
                            'shortcutOptions' => [
                                [
                                    'name' => 'Yesterday',
                                    'day' => "-1,0",
                                ],
                                [
                                    'name' => 'Last month',
                                    'day' => "-30,0",
                                ],
                                [
                                    'name' => "Next month",
                                    'day' => "0,30",
                                ],
                            ]
                        ],
                       
                    ] 
                ],

                'string_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZQDatepickerWidget::class,
                    'options' => [
                        'config' => [
                            'label' => 'Single selection for year, maximum value: 2000, minimum value: 2050  (String 2)',
                            'placeholder' => 'Select a year',
                            'format' => 'YYYY',
                            'icon' => 'fa fa-calendar',
                            'min' => '2000',
                            'max' => '2050',
                        ],
                       
                    ] 
                ],

            ]

       ]

   ],

]);

$this->activeEnd();

