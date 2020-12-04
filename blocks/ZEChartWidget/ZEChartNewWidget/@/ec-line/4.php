<?php

use Underscore\Parse;

$aa = file_get_contents('1.js');

$arr = json_decode($aa, true);
$arr = Parse::fromJSON($aa ) ;

print_r($arr);




file_put_contents('22.php', print_r($arr, true));





