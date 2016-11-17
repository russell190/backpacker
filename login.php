<?php
session_start();
include 'dbh.php';

$str0 = "success!";
$str1 = "failed to login";

//Get values from form in login.php
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

//To prevent mysql injection
$uid = stripcslashes($uid);
$pwd = stripcslashes($pwd);

$uid = mysql_real_escape_string($uid);
$pwd = mysql_real_escape_string($pwd);

//Query the database for user
$sql = "SELECT * FROM usertest WHERE uid='$uid' AND pwd = '$pwd'";
$result = $conn->query($sql);

if (!$row = mysqli_fetch_assoc($result)) {
    echo addslashes($str1);
}
else {
    $_SESSION['id'] = $row['id'];
    header("Location: dashboard.php");
}
