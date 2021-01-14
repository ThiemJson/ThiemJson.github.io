<?php
// DB DEPLOY
$dbHost     = "hwr4wkxs079mtb19.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbUsername = "j1zppqr8nhkm22lq";
$dbPassword = "lmmee82ne2p37vlu";
$dbName     = "wa2ksasaawfrc3w8";
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
