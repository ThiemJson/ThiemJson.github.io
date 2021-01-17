<?php
include('checksession.php');
require('dbconfig.php');
if ($_POST['button-add']) {
    $id = $_POST['exp-id'];
    $job = $_POST['exp-job'];
    $possition = $_POST['exp-possition'];
    $startdate = $_POST['exp-start-date'];
    $enddate = $_POST['exp-end-date'];
    $proj = $_POST['exp-project'];
    $description = $_POST['exp-description'];
    $teamsize = $_POST['exp-team-size'];
    $res = $_POST['exp-respon'];
    $acc = $_POST['exp-acc'];
    $tech = $_POST['exp-tech'];

    $sql_query = "INSERT INTO `experiences` (`id`, `mainjob`, `possiton`, `startdate`, `enddate`, `project`, `description`, `teamsize`, `responsiblities`, `accomplishments`, `technologies`) VALUES (NULL, '$job', '$possition', '$startdate', '$enddate', '$proj', '$description', '$teamsize', '$res', '$acc', '$tech') ";
    $result = mysqli_query($conn, $sql_query);

    header("location: ../views/crud-exp.php");
    return;
}

if ($_POST['button-edit']) {
    $id = $_POST['exp-id'];
    $idInt = (int)$id;
    $job = $_POST['exp-job'];
    $possition = $_POST['exp-possition'];
    $startdate = $_POST['exp-start-date'];
    $enddate = $_POST['exp-end-date'];
    $proj = $_POST['exp-project'];
    $description = $_POST['exp-description'];
    $teamsize = $_POST['exp-team-size'];
    $res = $_POST['exp-respon'];
    $acc = $_POST['exp-acc'];
    $tech = $_POST['exp-tech'];

    $sql_query = "UPDATE experiences SET mainjob = '$job', possiton = '$possition', startdate = '$startdate', enddate = '$enddate' , project ='$proj', description = '$description', teamsize = '$teamsize', responsiblities = '$res', accomplishments = '$acc', technologies ='$tech' WHERE id = $idInt ";
    $result = mysqli_query($conn, $sql_query);

    header("location: ../views/crud-exp.php");
    return;
}

if ($_POST['button-del']) {
    $id = $_POST['exp-id'];
    $idInt = (int)$id;

    $sql_query = "DELETE FROM experiences WHERE id = $idInt ";
    $result = mysqli_query($conn, $sql_query);

    header("location: ../views/crud-exp.php");
    return;
}