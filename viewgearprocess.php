<?php

session_start();
$AccountId = $_SESSION['id'];
$pdo = require __DIR__.'/pdo.php';

$listID = $_POST['GearListIDformbox'];

echo $listID;
$_SESSION['listID'] = $listID;

header("Location: viewgeardatagrid.php");
