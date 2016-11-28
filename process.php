<?php
session_start();
$pdo = require __DIR__.'/pdo.php';

    $str = "You are not logged in";
    if(isset($_SESSION['id'])) {
        //echo $_SESSION['id'];
}   else {
    echo addslashes($str);
}

//Get values from form in login.php
$id = $_SESSION['id'];
$geartype = $_POST['geartype'];
$gearname = $_POST['gearname'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
$weight = $_POST['weight'];
$rating = $_POST['rating'];

//Prevent sql injection

$sql = "INSERT INTO gear1 (userId, gearType, name, description, quantity, weight, rating)
VALUES ('$id', '$geartype', $gearname','$description', '$quantity', '$weight', '$rating')";
$result = $conn->query($sql);

header("Location: dashboard.php");