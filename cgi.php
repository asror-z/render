<?php
if (substr(php_sapi_name(), 0, 9) == 'fpm-fcgi') {
    echo "You are using FastCGI PHP" . PHP_EOL;
} else {
    echo "You are not using FastCGI PHP" . PHP_EOL;
}

echo php_sapi_name();
