<?php

//Get values from form in login.php
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

//To prevent mysql injection
$uid = stripcslashes($uid);
$pwd = stripcslashes($pwd);

$uid = mysql_real_escape_string($uid);
$pwd = mysql_real_escape_string($pwd);


//Connect to server and select database
mysql_connect("localhost", "root", "");
mysql_select_db("logintest");

//Query the database for user
$result = mysql_query("SELECT * FROM users WHERE username = '$username' and password = '$password')
    or die("Failed to query database".mysql_error());
$row = mysql_fetch_array($result);

if ($row['username'] == $username && $row['password'] == $password ) {
    echo "Login success!!! Welcome ".$row['username'];
} else {
    echo "Failed to login!";
}

?>