<?php
$conndb = 'autodialer';
session_start();
$_SESSION['Login'] = $_POST['inputLogin'];
$_SESSION['Password'] = $_POST['inputPassword'];
$pass = sha1($_SESSION['Password']);
$user = $_SESSION['Login'];

$_SESSION['userSession'] = md5($_POST['inputLogin'] . ":" . $pass . ":" . $_SERVER['REMOTE_ADDR']);
setcookie("ssnm", $_SESSION['userSession'], time() + 60 * 60 * 24 * 7);
setcookie("ssus", $_SESSION['Login'], time() + 60 * 60 * 24 * 7);

$mysqli = new mysqli("localhost", "YOUR_USER", "YOUR_PASSWORD", "$conndb");
$mysqli->set_charset('utf-8');

$validuser = $mysqli->query("select 1 from `admin` where `username` = '$user'");
$exist = $validuser->fetch_row();

if ($exist[0] == 1) {
    $validpass = $mysqli->query("select username, password_sha1 from admin where `username` = '$user'");
    $row = $validpass->fetch_row();
    $cure = md5($row[0] . ":" . $row[1] . ":" . $_SERVER['REMOTE_ADDR']);
    if ($cure !== $_SESSION['userSession']) {
        $_POST = array();
        session_destroy();
        echo "<!DOCTYPE html>\r\n";
        echo "<head>\r\n";
        echo "<script>window.location.href = './auth.html';</script>";
        echo "</head></html>";
    } else {
        echo "<!DOCTYPE html>\r\n";
        echo "<head>\r\n";
        echo "<meta http-equiv='refresh' content='0;url=./res/dialer/newcamp.html' /> ";
        echo "<html></html>";
    }
} else {
    $_POST = array();
    session_destroy();
    echo "<!DOCTYPE html>\r\n";
    echo "<head>\r\n";
    echo "<script>window.location.href = './auth.html';</script>";
    echo "<html></html>";
}

if (isset($_GET['sessionDestroy'])) {
    setcookie("ssnm", $_SESSION['userSession'], time() - 1);
    setcookie("ssus", $_SESSION['userSession'], time() - 1);
    $_POST = array();
    session_destroy();
}

?>

