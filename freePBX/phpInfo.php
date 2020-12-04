<?php

foreach (opcache_get_status() as $stats){
 var_dump($stats);
 echo '<br>';

}
