<?php
session_start();
$pdo = require __DIR__.'/pdo.php';

$str0 = "success!";
$str1 = "failed to login";

//Get values from form in login.php
if(isset($_POST['uid'], $_POST['pwd'])){
	$sql = "
		SELECT *
		FROM Account
		WHERE username = :username AND password = :password
	";
	$statement = $pdo->prepare($sql);
	$statement->execute(array(
		'username' => $_POST['uid'],
		'password' => $_POST['pwd'],
	));
	$result = $statement->fetch(PDO::FETCH_ASSOC);
}

// if successful login
if(!empty($result['AccountId'])){
	$_SESSION['id'] = $result['AccountId'];
	header("Location: list.php");
}
else {
	header("Location: login.php");
}
