<?php
if (isset($_POST['campname'])) {
    $camp = $_POST['campname'];
    $select = $mysqli_dialer->query("SELECT
                                `id`,
                                `number`,
                                `last_name`,
                                `name`,
                                `middle_name`,
                                `born`,
                                `confirm`,
                                `notconfirm`,
                                `rdlater`,
                                `status`,
                                `timestamp`
                        FROM $camp where `camp` = '$camp' and `number` != '$camp'");
    $numbers = array();
    while ($row = $select->fetch_array(MYSQLI_ASSOC)) {
        $numbers[] = $row;
    }
    $numbers = json_encode($numbers);
//$numbers = urldecode($numbers);
    $mysqli_dialer->close();
    $select->free();
    print($numbers);
}
