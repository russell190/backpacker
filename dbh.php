<?php

// http://php.net/manual/en/book.pdo.php
$hostname = 'localhost';
$database = 'bakpak_DEQAzC';
$username = 'bakpak_DEQAzC_A';
$password = '3{qt&I86Y0nn/-Gc~%_&i8-D3DZj~pJB';

$pdo = new PDO("mysql:host=$hostname;
	charset=UTF8;
	dbname=$database",
	$username,
	$password
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

return $pdo;
