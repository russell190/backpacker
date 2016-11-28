<?php
#Include the dbh.php file
$pdo = require __DIR__.'/pdo.php';

// get data and store in a json array
$query = "SELECT GearID, GearType FROM Gear";
$result = $pdo->prepare($query);
$result->execute();
/* bind result variables */
$result->bind_result($GearID, $GearType);
/* fetch values */
while ($result->fetch())
	{
	$gear[] = array(
		'GearID' => $GearID,
		'GearType' => $GearType,
	);
	}
echo json_encode($gear);
/* close statement */
$result->close();
/* close connection */
$pdo->close();
?>