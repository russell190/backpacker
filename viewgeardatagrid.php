<?php
session_start();
$AccountId = $_SESSION['id'];
#Include the dbh.php file
$pdo = require __DIR__.'/pdo.php';
$params = $_REQUEST;

header('Content-Type: application/json');

//Get listID from viewlist.php
$listID = $_GET['listid'];

// get data and store in a json array
$query = 
"SELECT gl.ListId, gl.GearId, l.name, g.GearType, g.name, g.weight, g.rating
FROM gearlist gl
JOIN list l
ON gl.ListId = l.ListId 
JOIN gear g
ON gl.GearId = g.GearId
JOIN account a
ON l.AccountId = a.AccountId
WHERE gl.ListId = :listID
GROUP BY gl.ListId, gl.GearId, l.name, g.GearType, g.name, g.weight, g.rating;";

$result = $pdo->prepare($query);
$result->execute([':listID' => $listID]);

echo json_encode(array('rows' => $result->fetchAll(PDO::FETCH_ASSOC))
//Need to implement rowcount and total rows in this array without breaking the script
);
