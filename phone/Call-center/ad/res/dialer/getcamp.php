<?php
include "../../config.php";

if ((isset($_POST['addcamp'])) && ($_POST['addcamp'] !== "")) {
	$camp = $_POST['addcamp'];
	$pause = $_POST['pause'];
	$retry = $_POST['retry'];
	$chan_context = $_POST['chan_context'];
	$timeout = $_POST['timeout'];
	$exten = $_POST['exten'];
	$ext_context = $_POST['ext_context'];
	$concurrent = $_POST['concurrent'];
	$var = $_POST['var'];
	$_POST = array();
	$query = "INSERT INTO campaign ( `campname`, `retry`, `chan_context`, `pause`, `timeout`, `ext_context`, `exten`, `concurrent`, `var`) VALUES ('$camp', '$retry', '$chan_context', '$pause', '$timeout', '$ext_context', '$exten', '$concurrent', '$var');";

	if ($mysqli->query($query)) {
		echo "<a href='./camp.html?campname=" . $camp . "' >{{campaign}} " . $camp . " {{added}}</a>";
	} else {
		printf("Errorcode: %d\n", $mysqli->errno);
	}
	$mysqli->close();
}

if (isset($_POST['getcampnames'])) {
	$result = $mysqli->query("SELECT campname from campaign");
	$campnames = array();
	while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
		$campnames[] = $row;
	}
	$campnames = json_encode($campnames);
	print $campnames;

	$mysqli->close();
	$result->free();
}

if (isset($_POST['getCamp'])) {
	$camp = $_POST['getCamp'];
	$result = $mysqli->query("SELECT * from campaign WHERE `campname` = '$camp'");
	$campaign = array();
	$row = $result->fetch_array(MYSQLI_ASSOC);
	$campaign = $row;
	$campaign = json_encode($campaign);
	print $campaign;
	$mysqli->close();
	$result->free();
}

if (isset($_POST['startcamp'])) {
	$startcamp = $_POST['startcamp'];
	$retry = $_POST['retry'];
	$pause = $_POST['pause'];
	$timeout = $_POST['timeout'];
	$concurrent = $_POST['concurrent'];
	$limit = $_POST['limit'];
	$exten = $_POST['exten'];
	$chan_context = $_POST['chan_context'];
	$ext_context = $_POST['ext_context'];
	$_POST = array();
//	 if(isset($_POST['cronjob'])) {
	//	 $cronjb = shell_exec('cd /var/spool/asteriskk && ./cron.sh '.$startcamp.' '.$retry.' '.$pause.' '.$timeout.' '.$concurrent.' '.$limit.' '.$exten);
	//	 }
	$output = shell_exec('pkill -9 campy.sh && rm -f /var/spool/asteriskk/outgoing/* && rm -f /var/spool/asteriskk/tmp/*');
	$output = shell_exec('cd /var/spool/asteriskk && ./campy.sh ' . $startcamp . ' ' . $retry . ' ' . $pause . ' ' . $timeout . ' ' . $concurrent . ' ' . $limit . ' ' . $exten . ' ' . $chan_context . ' ' . $ext_context);
	$output = shell_exec('ps -aux | grep ' . $startcamp . '');
	echo "<div class='alert alert-success' style='width:50%;'>";
	//echo "Кампания ".$startcamp." запущена";
	echo $output . "</div><br/>";
}

if (isset($_POST['stopcamp'])) {
	$stopcamp = $_POST['stopcamp'];
	$output = shell_exec('pkill -9 campy.sh && rm -f /var/spool/outgoing/* && rm -f /var/spool/asteriskk/tmp/*');
	echo "<div class='alert alert-warning' style='width:50%;'>";
	echo "Campaign \"" . $stopcamp . "\" stopped </div><br/>";
}

if ((isset($_POST['delcamp'])) && ($_POST['delcamp'] !== "")) {
	$camp = $_POST['delcamp'];
	$_POST = array();
	$query = "DELETE from campaign WHERE `campname` = '$camp';";
	//$query = "DROP TABLE $camp;";
	if ($mysqli->multi_query($query)) {
		echo "<br/><div class='alert alert-danger' style='width:50%;'>";
		echo "Campaign " . $camp . " deleted </div>";
		$output = shell_exec('pkill -9 campy.sh && rm -f /var/spool/outgoing/* && rm -f /var/spool/asteriskk/tmp/*');
//	 $kill = shell_exec('rm -f /var/spool/asteriskk/'.$camp.'.sh');
	} else {
		printf("Errorcode: %d\n", $mysqli->errno);
	}
	$mysqli->close();
}
?>
