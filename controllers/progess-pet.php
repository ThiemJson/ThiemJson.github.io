<?php
include('checksession.php');
require('dbconfig.php');
if ($_POST['button-add']) {
    $id = $_POST['pet-id'];
    $name = $_POST['pet-name'];
    $description = $_POST['pet-description'];
    $tech = $_POST['pet-tech'];

    $sql_query = "INSERT INTO pet(id,name,description,tech) VALUES(NULL, '$name', '$description','$tech')";
    $result = mysqli_query($conn, $sql_query);

    header("location: ../views/crud-pet.php");
    return;
}

if ($_POST['button-edit']) {
    $id = $_POST['pet-id'];
    $idInt = (int)$id;
    $name = $_POST['pet-name'];
    $description = $_POST['pet-description'];
    $tech = $_POST['pet-tech'];

    $sql_query = "UPDATE pet SET name = '$name' ,description = '$description', tech = '$tech' WHERE id = $idInt ";
    $result = mysqli_query($conn, $sql_query);

    header("location: ../views/crud-pet.php");
    return;
}

if ($_POST['button-del']) {
    $id = $_POST['pet-id'];
    $idInt = (int)$id;

    $sql_query = "DELETE FROM pet WHERE id = $idInt ";
    $result = mysqli_query($conn, $sql_query);

    header("location: ../views/crud-pet.php");
    return;
}
