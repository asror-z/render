<?php

$code = $_GET['code'];

if ($code == "") {
    header('Location: http://eyuf.zettest.uz/render/karn1/github/');
    exit;
}
$client_id = "0a962ca9b677a417eebf";
$client_secret = "b408eaf361f561b3c21faf812721ade7fa4ad9a6";
$url = "https://github.com/login/oauth/access_token";

$POST_DATA = [
    'client_id' => $client_id,
    'client_secret' => $client_secret,
    'code' => $code,
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_DATA);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response);

if ($data->access_token != "") {
    session_start();
    $_SESSION['accessToken'] = $data->access_token;

    header('Location: http://eyuf.zettest.uz/render/karn1/github/');
    exit;
}

var_dump($response);
var_dump($data);
echo "error";


?>
