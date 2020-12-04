<?php
require_once 'ajam.class.php';
$config['urlraw'] = 'http://127.0.0.1:8088/asteriskk/rawman';
$config['admin'] = 'ami_user';
$config['secret'] = 'ami_pass';
$config['authtype'] = 'plaintext';
$config['cookiefile'] = null;
$config['debug'] = false;

$params = array();

if (isset($_REQUEST['CliAction'])) {
	$params['Command'] = $_REQUEST['Command'];
	$ajam = new Ajam($config);
	$ajam->doCommand('Command', $params);
	$result = $ajam->getResult();
	$result = explode("\r\n", $result);
	print_r($result[0]);
}

if (isset($_POST['CliCom'])) {
	$params['Command'] = $_POST['CliCom'];
	$ajam = new Ajam($config);
	$ajam->doCommand('Command', $params);
	$result = $ajam->getResult();
	print_r($result);
}

if (isset($_POST[paramAction])) {
	$command = $_POST[paramAction];
	foreach ($_POST as $k => $v) {
		$params[$k] = $v;
	}
	$ajam = new Ajam($config);
	$ajam->doCommand($command, $params);
	$result = $ajam->getResult();
	$res2 = $result;

	$result = explode("\r\n", $result);
	end($result);
	$count1 = key($result);
	$result = array_slice($result, 3, $count1);
	$result = array_slice($result, 0, $count1 - 8);
	array_shift($result);

	$result = implode(',', $result);
	$result = explode(',,', $result);

	end($result);
	$count2 = key($result);

	for ($i = 0; $i <= $count2; ++$i) {
		$item = explode(',', $result[$i]);
		foreach ($item as &$val) {
			list($k, $v) = array_pad(explode(': ', $val, 2), 2, null);
			$parse[$i][$k] = $v;
		}
	}
	print_r(json_encode($parse));
}

// if (isset($_POST['amiSingleAction'])) {
// 	$amiaction = $_POST['amiSingleAction'];
// 	$ajam = new Ajam($config);
// 	$ajam->doCommand2($amiaction);
// 	$result = $ajam->getResult();
// 	$result = json_encode($result);
// 	print $result;
// }
