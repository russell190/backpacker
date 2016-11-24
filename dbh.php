<?php

// http://php.net/manual/en/book.pdo.php
$hostname = 'localhost';
$database = 'backpacker';
$username = 'root';
$password = '';

$pdo = new PDO("mysql:host=$hostname;
	charset=UTF8;
	dbname=$database",
	$username,
	$password
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// overwrite with real database credentials
if(file_exists(__DIR__.'/secret.pdo.php')){
	require __DIR__.'/secret.pdo.php';
}
