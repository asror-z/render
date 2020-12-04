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

use zetsoft\widgets\navigat\ZLanguagePickerNewWidget;
use zetsoft\widgets\navigat\ZStepperWidget;

 $content1 = '<p>step1</p>';
$content2 = '<div class="md-form col-12 ml-auto">
          <input id="email-parallel" name="email" type="email" class="form-control validate" required>
          <label for="email-parallel">Your e-mail</label>
        </div>';
$content3 = '<p>step3</p>';
$content4 = '<p>finish</p>' ;

?>


<div class="container">
    <h2>Horizontal</h2>
<?php

echo ZStepperWidget::widget([
    'config' => [
        'layout' => ZStepperWidget::layout['horizontal'],
        'items' => [
            'item1' => [
                'name' => 'Step 1',
                'content' => $content1,
                'active' => 'active'
            ],
            'item2' => [
                'name' => 'Step 2',
                'content' => $content2,
                'active' => '',
            ],
            'item3' => [
                'name' => 'Step 3',
                'content' => $content3,
                'active' => '',
            ],
            'item4' => [
                'name' => 'Step 4',
                'content' => $content4,
                'active' => '',
            ]
        ]
    ]
]);
?>
</div>


<div class="container">
    <h2>parallel</h2>
    <?php

    echo ZStepperWidget::widget([
        'config' => [
            'layout' => ZStepperWidget::layout['parallel'],
            'items' => [
                'item1' => [
                    'name' => 'Step 1',
                    'content' => $content1,
                    'active' => 'active'
                ],
                'item2' => [
                    'name' => 'Step 2',
                    'content' => $content2,
                    'active' => '',
                ],
                'item3' => [
                    'name' => 'Step 3',
                    'content' => $content3,
                    'active' => '',
                ],
                'item4' => [
                    'name' => 'Step 4',
                    'content' => $content4,
                    'active' => '',
                ]
            ]
        ]
    ]);
    ?>
</div>


<div class="container">
    <h2>linear</h2>
    <?php

    echo ZStepperWidget::widget([
        'config' => [
            'layout' => ZStepperWidget::layout['linear'],
            'items' => [
                'item1' => [
                    'name' => 'Step 1',
                    'content' => $content1,
                    'active' => 'active'
                ],
                'item2' => [
                    'name' => 'Step 2',
                    'content' => $content2,
                    'active' => '',
                ],
                'item3' => [
                    'name' => 'Step 3',
                    'content' => $content3,
                    'active' => '',
                ],
                'item4' => [
                    'name' => 'Step 4',
                    'content' => $content4,
                    'active' => '',
                ]
            ]
        ]
    ]);
    ?>
</div>


<div class="container">
    <h2>non-linear</h2>
    <?php

    echo ZStepperWidget::widget([
        'config' => [
            'layout' => ZStepperWidget::layout['non-linear'],
            'items' => [
                'item1' => [
                    'name' => 'Step 1',
                    'content' => $content1,
                    'active' => 'active'
                ],
                'item2' => [
                    'name' => 'Step 2',
                    'content' => $content2,
                    'active' => '',
                ],
                'item3' => [
                    'name' => 'Step 3',
                    'content' => $content3,
                    'active' => '',
                ],
                'item4' => [
                    'name' => 'Step 4',
                    'content' => $content4,
                    'active' => '',
                ]
            ]
        ]
    ]);
    ?>
</div>
