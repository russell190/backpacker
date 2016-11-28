<?php
#Include the dbh.php file
$pdo = require __DIR__.'/pdo.php';

// get data and store in a json array
$query = "SELECT GearID, GearType FROM Gear";
$result = $pdo->prepare($query);
$result->execute();

echo json_encode($result->fetchAll(PDO::FETCH_ASSOC));
?>