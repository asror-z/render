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
use borales\extensions\phoneInput\PhoneInput;

echo PhoneInput::widget([
    'name' => 'phone_number',
    'jsOptions' => [
        'allowExtensions' => true,
        'onlyCountries' => ['no', 'pl', 'ua'],
    ]
]);
