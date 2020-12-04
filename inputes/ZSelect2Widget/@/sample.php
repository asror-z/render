<?php
use zetsoft\widgets\inputes\ZSelect2Widget;
use zetsoft\widgets\inputes\ZSelect2Widget2;

echo ZSelect2Widget2::widget([
        'config' => [
            'enableEvent' => true,
            'multiple' => false,
            'placeholder' => '123',
            'imagePath' => false,
        ],
        'data' =>[
            'uz' => 'Uzbekistan',
            'ad' => 'Andora',
            'ae' => 'United Arab Emirates',
            'af' => 'Afganistan',
            'ag' => 'Antigua and Barbuda',
            'ai' => 'Anguilla',
            'al' => 'Albania',
            'am' => 'Armenia',
            'ao' => 'Amgola',
            'aq' => 'Antarctica',
            'ar' => 'Argentina',
            'as' => 'American Samoa',
            'at' => 'Austria',
        ],
]);
