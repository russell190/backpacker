<?php

session_start();
include 'dbh.php';

$gearID = '$_POST['gearIDformbox']';
$gearName = '$_POST['gearNameformbox']';
$gearType = '$_POST['gearTypeformbox']';
$gearCost = ,'$_POST['gearCostformbox']';
$gearRating = '$_POST['gearRatingformbox']');


$stmt= $->prepare("INSERT INTO Gear VALUES (:gearID, :gearName, :gearType, :gearCost, :gearRating);");
$stmt->bindParam(':gearID', $gearID);
$stmt->bindParam(':gearName', $gearName);
$stmt->bindParam(':gearType', $gearType);
$stmt->bindParam(':gearCost', $gearCost);
$stmt->bindParam(':gearRating', $gearRating);





 

if (!mysqli_query($stmt,$con))

  {

  die('Error: ' . mysqli_error());

  }
  else
	 /* Execute Query*/
	$stmt->execute();
	/*Bind it*/
	$stmt->bind_result($gearID, $gearName, $gearType, $gearCost, $gearRating);


echo "Success! New record added";
	$stmt->close();

 

mysqli_close($con);

?>