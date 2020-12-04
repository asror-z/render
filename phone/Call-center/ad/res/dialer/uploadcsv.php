<?php
include "../../config.php";

if (isset($_GET['newline'])) {
	$nl = $_GET['newline'];
} else {
	$nl = '\r\n';
}
if (0 < $_FILES['file']['error']) {
	echo 'Error: ' . $_FILES['file']['error'] . '<br>';
} else {
	$campname = $_GET['campname'];
	$path = getcwd();
	$query = "CREATE TABLE IF NOT EXISTS `$campname` (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`number` varchar(32) DEFAULT NULL,
		`name` varchar(512) DEFAULT NULL,
		`camp` varchar(32) DEFAULT NULL,
		`status` varchar(32) DEFAULT 'NOANS',
		`agent` varchar(16) DEFAULT NULL,
		`timestamp` varchar(16) DEFAULT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `number` (`number`,`camp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

	if ($mysqli->query($query)) {
		move_uploaded_file($_FILES['file']['tmp_name'], 'csv/' . $campname . '.csv');
		$sql = $mysqli->query("LOAD DATA LOCAL INFILE '$path/csv/$campname.csv'
                 IGNORE INTO TABLE `$campname`
                 CHARACTER SET UTF8
                 FIELDS TERMINATED BY ','
                 OPTIONALLY ENCLOSED BY '\"'
                 LINES TERMINATED BY '$nl'
                 (`number`, `name`) set `camp` = '$campname', `status` = 'NOANS'");
	} else {
		printf("Errorcode: %d\n", $mysqli->errno);
	}
	$mysqli->close();
}