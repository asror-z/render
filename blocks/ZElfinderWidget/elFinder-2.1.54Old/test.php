<?php
function foo( $a ) {
    for ($i = 1; $i < $a['foo']; $i++) {
        if ($i == 500000) xdebug_break();
    }
}

set_time_limit(1);
$c = new stdClass;
$c->bar = 100;
$a = array(
    42 => false, 'foo' => 912124,
    $c, new stdClass, fopen( '/etc/passwd', 'r' )
);
foo( $a );
?>
