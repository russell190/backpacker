<?php
#Include the dbh.php file
$pdo = require __DIR__.'/pdo.php';

header('Content-Type: application/json');

// get data and store in a json array
$query = "SELECT GearID, GearType FROM Gear";
$result = $pdo->prepare($query);
$result->execute();

echo json_encode(array('rows' => $result->fetchAll(PDO::FETCH_ASSOC)));
?>