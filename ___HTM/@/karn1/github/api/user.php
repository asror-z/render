<?php
function error($msg){
  $response = [];
  $response['success'] = false;
  $response['message'] = $msg;
  return json_encode($response);
}

session_start();
$accessToken = $_SESSION['accessToken'];

if($accessToken =="")die("Error: Invalid access token");

$url  = "https://github.com/user";
$authHeader = "Authorization: token ".$accessToken;
$userAgentHeader = "User-Agent: Demo";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', $authHeader , $userAgentHeader ));
$response = curl_exec($ch);
curl_close($ch);

// var_dump($response);

$data = json_decode($response);

echo json_encode($data);
