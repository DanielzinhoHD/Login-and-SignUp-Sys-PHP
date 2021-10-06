<?php
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "accountsys";
$port       = 3307;

$conn = mysqli_connect($serverName . ':' . $port, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

