<?php
include 'config.php';

$user_check = $_SESSION['login_user'];
$ses_sql = mysqli_query($db, "SELECT uname, UID, balance from register where UID = '$user_check'");
$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
$login_session = $row['uname'];
$bal = $row['balance'];
$sid = $row['UID'];

if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
}
?>
