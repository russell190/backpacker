<?php

session_start();
$pdo = require __DIR__.'/pdo.php';

$gearListName = $_POST['GearListNameformbox'];
$AccountId = $_SESSION['id'];

echo $gearListName;
echo $AccountId;

$stmt= $pdo->prepare("	
	INSERT INTO list
	(AccountId, name)
	VALUES
	(:AccountId, :gearListName);
");
$stmt->bindParam(':gearListName', $gearListName);
$stmt->bindParam(':AccountId', $AccountId);

 /* Execute Query*/
$stmt->execute();
/*Bind it*/

echo "Success! Created a list";