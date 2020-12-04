<?php

$data = $_POST['pcontent'];

file_put_contents(__DIR__ . '/out.html', $data);
