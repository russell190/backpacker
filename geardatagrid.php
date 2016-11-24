<?php
#Include the dbh.php file
include ('dbh.php');
// Connect to the database
$mysqli = new mysqli($hostname, $username, $password, $database);
/* check connection */
if (mysqli_connect_errno())
	{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
// get data and store in a json array
$from = 0;
$to = 30;
$query = "SELECT GearID, GearName FROM Gear";
$result = $mysqli->prepare($query);
$result->bind_param('ii', $from, $to);
$result->execute();
/* bind result variables */
$result->bind_result($GearID, $GearName);
/* fetch values */
while ($result->fetch())
	{
	$gear[] = array(
		'GearID' => $GearID,
		'GearName' => $GearName,
	);
	}
echo json_encode($gear);
/* close statement */
$result->close();
/* close connection */
$mysqli->close();
?>