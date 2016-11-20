<?php

session_start();
include 'dbh.php';
$sql="INSERT INTO Gear (gearID, gearName, gearType, gearCost, gearRating)

VALUES

('$_POST[gearIDformbox]','$_POST[gearNameformbox]','$_POST[gearTypeformbox]','$_POST[gearCostformbox]','$_POST[gearRatingformbox]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "Success! New record added";

 

mysql_close($con)

?>