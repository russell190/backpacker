<?php

session_start();
$pdo = require __DIR__.'/pdo.php';

$gearID = $_POST['gearIDformbox'];
$listID = $_POST['gearListIDformbox'];

echo $gearID;
echo $listID;

/*Have the user look at their list table and have them enter the listID and gearID into the gearList table*/

$stmt= $pdo->prepare("	
	INSERT INTO gearlist
	(ListId, GearId)
	VALUES
	(:listID, :gearID);
");
$stmt->bindParam(':listID', $listID);
$stmt->bindParam(':gearID', $gearID);

 /* Execute Query*/
$stmt->execute();
/*Bind it*/

echo "Success! Gear added to the list";
