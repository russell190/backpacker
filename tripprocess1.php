<?php
session_start();
include 'dbh.php';

    $str = "You are not logged in";
    if(isset($_SESSION['id'])) {
        //echo $_SESSION['id'];
}   else {
    echo addslashes($str);
}

//Get values from form in login.php
$id = $_SESSION['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$start = $_POST['start'];
$end = $_POST['end'];

//Prevent sql injection

$sql = "INSERT INTO trip (name, description, startdate, enddate, AccountId)
VALUES ('$name', '$description','$start', '$end', '$id')";
$result = $conn->query($sql);

header("Location: trip.php");