<?php
$pdo = require __DIR__.'/pdo.php';

session_start();
    $str = "You are not logged in";
    if(isset($_SESSION['id'])) {
        echo $_SESSION['id'];
}   else {
    echo addslashes($str);
}

//Get values from form in login.php
$name = $_POST['name'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];

$sql = "INSERT INTO account (name, username, password, email)
VALUES ('$name', '$uid','$pwd', '$email')";
$result = $pdo->query($sql);

header("Location: login.php");

