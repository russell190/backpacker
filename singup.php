<?php

include 'dbh.php';

//Get values from form in login.php
$name = $_POST['name'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];

echo $name;
echo $uid;
echo $pwd;
echo $email;