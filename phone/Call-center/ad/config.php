<?php
$conndb = 'autodialer';
$mysqli = new mysqli("localhost", "YOUR_USER", "YOUR_PASSWORD", "$conndb");
$mysqli->set_charset('utf8');

$validpass = $mysqli->query("select username, password_sha1 from admin where `username` = '" . $_COOKIE['ssus'] . "'");
$row = $validpass->fetch_row();
$cure = md5($row[0] . ":" . $row[1] . ":" . $_SERVER['REMOTE_ADDR']);

if ($cure !== $_COOKIE['ssnm']) {
	session_destroy();
	echo "<!DOCTYPE html>\r\n";
	echo "<head>\r\n";
	echo "<script>window.location.href = '../../auth.html';</script>";
	echo "<html></html>";
}

?>
