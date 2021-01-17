<?php
include('checksession.php');
require('dbconfig.php');
if ($_POST['button-add']) {
    $id = $_POST['skill-id'];
    $category = $_POST['skill-category'];
    $description = $_POST['skill-description'];

    $sql_query = "INSERT INTO skill(id,skillcatgory,description) VALUES(NULL, $category, '$description')";
    $result = mysqli_query($conn, $sql_query);

    header("location: ../views/crud-skill.php");
    return;
}

if ($_POST['button-edit']) {
    $id = $_POST['skill-id'];
    $idInt = (int)$id;
    $category = $_POST['skill-category'];
    $categoryInt = (int)$category;
    $description = $_POST['skill-description'];

    $sql_query = "UPDATE skill SET skillcatgory = $categoryInt ,description = '$description' WHERE id = $idInt ";
    $result = mysqli_query($conn, $sql_query);

    header("location: ../views/crud-skill.php");
    return;
}


if ($_POST['button-del']) {
    $id = $_POST['skill-id'];
    $idInt = (int)$id;

    $sql_query = "DELETE FROM skill WHERE id = $idInt ";
    $result = mysqli_query($conn, $sql_query);

    header("location: ../views/crud-skill.php");
    return;
}
