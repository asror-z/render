<?php
include("../../config.php");

if (isset($_POST['userOld'])) {
    $user_old = $_POST['userOld'];
    $user_new = $_POST['userNew'];
    $password = sha1($_POST['userPassword']);
    $query = "update admin set `user` = '$user_new', `password_sha1` = '$password' where `user` = '$user_old';";
    if ($mysqli->query($query)) {
        echo $user . " Successfully Changed";
    } else {
        printf("Errorcode: %d\n", $mysqli->errno);
    }
    $mysqli->close();
}

if (isset($_POST['userAdd'])) {
    $user_new = $_POST['userAdd'];
    $password = sha1($_POST['userPasswordAdd']);
    $query = "insert into admin (`user`, `password_sha1`) values ('$user_new','$password');";
    if ($mysqli->query($query)) {
        echo $user . " Successfully Changed";
    } else {
        printf("Errorcode: %d\n", $mysqli->errno);
    }
    $mysqli->close();
}
