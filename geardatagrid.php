<?php
#Include the dbh.php file
include ('dbh.php');
// Connect to the database
$pdo = new PDO("mysql:host=$hostname;
	charset=UTF8;
	dbname=$database",
	$username,
	$password
);
//Handles possible database connection error
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// overwrite with real database credentials
if(file_exists(__DIR__.'/secret.pdo.php')){
	require __DIR__.'/secret.pdo.php';
}
// get data and store in a json array
$query = "SELECT GearID, GearType FROM Gear";
$result = $pdo-->prepare($query);
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