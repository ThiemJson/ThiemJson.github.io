<?php
include('checksession.php');
require('dbconfig.php');
if ($_POST['button-add']) {
    header("location: ../views/crud-home.php");
    return;
}

if ($_POST['button-edit']) {
    $imageLink = $_POST['about-image-link'];
    $summary = $_POST['about-summary'];
    $location = $_POST['about-location'];
    $phone = $_POST['about-phone'];
    $email = $_POST['about-email'];
    $linkCV = $_POST['about-link-cv'];

    $sql_query = "UPDATE about SET image = '$imageLink' , summary = '$summary' , location = '$location' , phone = '$phone', email = '$email', linkcv = '$linkCV'";
    $result = mysqli_query($conn, $sql_query);

    header("location: ../views/crud-about.php");
    return;
}