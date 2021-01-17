<?php
include('checksession.php');
require('dbconfig.php');

if ($_POST['button-edit']) {
    $id = $_POST['about-id'];
    $idInt = (int)$id;
    $imageLink = $_POST['about-image-link'];
    $summary = $_POST['about-summary'];
    $location = $_POST['about-location'];
    $phone = $_POST['about-phone'];
    $email = $_POST['about-email'];
    $linkCV = $_POST['about-link-cv'];

    $sql_query = "UPDATE about SET image = '$imageLink' , summary = '$summary' , location = '$location' , phone = '$phone', email = '$email', linkcv = '$linkCV' WHERE id = $idInt";
    $result = mysqli_query($conn, $sql_query);
    header("location: ../views/crud-about.php");
    return;
}