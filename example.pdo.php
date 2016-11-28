<?php
return (function(){
    $hostname = 'localhost';
    $database = 'backpacker';
    $username = 'root'; // preferably non-privileged user
    $password = '';

    $pdo = new PDO("mysql:host=$hostname;
        charset=UTF8;
        dbname=$database",
        $username,
        $password
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
})();
