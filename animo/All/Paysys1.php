<?php

// Generator of a terminal request URL as HTML button. PHP example.

const URL = 'https://agr.uz/sandbox'; // Request target URL
const SECRET_KEY = '#Feiz!ahdahweig7?Choot#3AiL6p--ooF6e'; // Your site SECRET_KEY

// Array of input parameters
$params = array(
    'VENDOR_ID' => '1591864',
    'MERCHANT_TRANS_ID' => 'AB772059',
    'MERCHANT_TRANS_AMOUNT' => '1000',
    'MERCHANT_CURRENCY' => 'sum',
    'MERCHANT_TRANS_NOTE' => 'transaction_note_example',
    'MERCHANT_TRANS_DATA' => 'eyJrZXkxIjoidmFsdWUxIiwia2V5MiI6InZhbHVlMiJ9',
    'SIGN_TIME' => '1480056082732',
);
$params['SIGN_STRING'] = md5(SECRET_KEY . $params['VENDOR_ID'] . $params['MERCHANT_TRANS_ID'] . $params['MERCHANT_TRANS_AMOUNT'] . $params['MERCHANT_CURRENCY'] . $params['SIGN_TIME']); // Signature adding


// Choose one of two options below

// GET request option. It may not work in IE with more than 2kb transfered data
$url = URL .'?'. http_build_query($params);
echo "<button onclick=\"location.href='{$url}';\">Send</button>";

// POST request option
?>
<form method="post" action="<?=URL;?>">
    <?php foreach ($params as $name => $value): ?>
        <input type="hidden" name="<?=$name; ?>" value="<?=$value;?>">
    <?php endforeach;?>
    <button type="submit">Send</button>
</form>
