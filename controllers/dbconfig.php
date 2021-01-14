<?php
// Database configuration
$ADDRESS = "localhost/BTL/baitaploncongngheweb/";
// DB DEPLOY
$dbHost     = "phtfaw4p6a970uc0.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbUsername = "v3erjmr9xi3m0p28";
$dbPassword = "jec7ahxw939mwula";
$dbName     = "k7omxaagy6biszyy";
$port       = 3306;

// DB for testing
// $dbHost     = "localhost";
// $dbUsername = "root";
// $dbPassword = "";
// $dbName     = "CV";
// $port       = 80;


// Create database connection
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    print_r("Connect failt");
    die();
}
