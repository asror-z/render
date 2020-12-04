<?php

$data = $_POST['pcontent'];



file_put_contents(__DIR__ . '/outGrapesSave.html', $data);

?>
