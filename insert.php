<?php

session_start();
include 'dbh.php';

$gearName   = $_POST['gearNameformbox'];
$gearType   = $_POST['gearTypeformbox'];
$gearWeight = $_POST['gearWeightformbox'];
$gearRating = $_POST['gearRatingformbox'];


$stmt= $pdo->prepare("
	INSERT INTO Gear
	(name,       GearType,   weight,    rating)
	VALUES
	(:gearName, :gearType, :gearWeight, :gearRating);
");
$stmt->bindParam(':gearName',   $gearName);
$stmt->bindParam(':gearType',   $gearType);
$stmt->bindParam(':gearWeight', $gearWeight);
$stmt->bindParam(':gearRating', $gearRating);


 /* Execute Query*/
$stmt->execute();
/*Bind it*/

echo "Success! New record added";
