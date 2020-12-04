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
use zetsoft\widgets\animo\ZProgressBarWidget;
echo ZProgressBarWidget::widget([
	'config' => [
		'items' => [
			[
				'isStriped' => false,
				'isAnimated' => false,
				'width' => '77',
				'label' => 'прогресс',
				'height' => '5',
				'type' => ZProgressBarWidget::type['default']
			],
		]
	]
]);
