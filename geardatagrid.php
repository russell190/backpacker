<?php
#Include the dbh.php file
$pdo = require __DIR__.'/pdo.php';
$params = $_REQUEST;

header('Content-Type: application/json');

// get data and store in a json array
$query = "SELECT GearID, GearType, name, weight, rating FROM gear";
$result = $pdo->prepare($query);
$result->execute();

echo json_encode(array('rows' => $result->fetchAll(PDO::FETCH_ASSOC))
//Need to implement rowcount and total rows in this array without breaking the script
);

function updateGear($params) {
		$data = array();
		$query = "UPDATE Gear set GearName = '" . $params["GearName_edit"] . "', GearType='" . $params["GearType_edit"]."' WHERE id='".$_POST["GearID"]."'";
		echo $result = pdo($this->conn, $query) or die("Error! Cannot update gear data");
	}
?>