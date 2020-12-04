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


use zetsoft\widgets\animo\ZACubeTransitionWidget;

echo ZACubeTransitionWidget::widget([
    'data' => [
        ['#00ffff', 'Page1'],
        ['#fff000', 'Page2'],
        ['#ffff00', 'Page3'],
        ['#ff00ff', 'Page4'],
        ['#f00ff0', 'Page5'],
        ['#00ffff', 'Page6'],
        ['#00ff00', 'Page7'],
        ['#0000ff', 'Page8'],
        ['#ffff00', 'Page9'],
    ]
]);

