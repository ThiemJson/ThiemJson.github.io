<?php
include('checksession.php');
require('dbconfig.php');
if ($_POST['button-add']) {
    $id = $_POST['edu-id'];
    $certi = $_POST['edu-certificate'];
    $location = $_POST['edu-location'];
    $orther = $_POST['edu-orther'];
    $startdate = $_POST['edu-start-date'];
    $enddate = $_POST['edu-end-date'];

    $sql_query = "INSERT INTO `education` (`id`, `startdate`, `enddate`, `location`, `mainInfo`, `orther`) VALUES (NULL, '$startdate', '$enddate', '$location', '$certi', '$orther') ";
    $result = mysqli_query($conn, $sql_query);

    header("location: ../views/crud-education.php");
    return;
}

if ($_POST['button-edit']) {
    $id = $_POST['edu-id'];
    $idInt = (int)$id;
    $certi = $_POST['edu-certificate'];
    $location = $_POST['edu-location'];
    $orther = $_POST['edu-orther'];
    $startdate = $_POST['edu-start-date'];
    $enddate = $_POST['edu-end-date'];

    $sql_query = "UPDATE education SET startdate = '$startdate', enddate = '$enddate', location = '$location' , mainInfo ='$certi', orther = '$orther' WHERE id = $idInt ";
    $result = mysqli_query($conn, $sql_query);

    header("location: ../views/crud-education.php");
    return;
}

if ($_POST['button-del']) {
    $id = $_POST['edu-id'];
    $idInt = (int)$id;
    
    $sql_query = "DELETE FROM education WHERE id = $idInt ";
    $result = mysqli_query($conn, $sql_query);

    header("location: ../views/crud-education.php");
    return;
}