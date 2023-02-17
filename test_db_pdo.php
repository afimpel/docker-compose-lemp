<?php

$DBuser = 'root';
$DBpass = getenv('MYSQL_ROOT_PASSWORD');
$pdo = null;

try{
    $database = 'mysql:host=mariadb:3306';
    $pdo = new PDO($database, $DBuser, $DBpass);
    echo "Success: A proper connection to MySQL was made! The docker database is great.";    
} catch(PDOException $e) {
    echo "Error: Unable to connect to MySQL. Error:\n $e";
}

$pdo = null;