<?php
include('checksession.php');
require('dbconfig.php');
if ($_POST['button-add']) {
    if ($_POST['home-name'] == "" || $_POST['home-slogan'] == "") {
        header("location: ../views/crud-home.php");
        return;
    }

    $homeName = $_POST['home-name'];
    $homeSlogan = $_POST['home-slogan'];
    $homeGithub = $_POST['home-github'];
    $homeFacebook = $_POST['home-facebook'];
    $homeGoogle = $_POST['home-google'];
    $homeBlog = $_POST['home-blog'];

    $sql_query = "INSERT INTO home(id,name,slogan,github,facebook,googleplay,blog) VALUES (NULL, $homeName,$homeSlogan, $homeGithub, $homeFacebook, $homeGoogle,$homeBlog);";
    $result = mysqli_query($conn, $sql_query);

    header("location: ../views/crud-home.php");
    return;
}

if ($_POST['button-edit']) {
    $homeID = $_POST['home-id'];
    $idInt = (int)$homeID;
    $homeName = $_POST['home-name'];
    $homeSlogan = $_POST['home-slogan'];
    $homeGithub = $_POST['home-github'];
    $homeFacebook = $_POST['home-facebook'];
    $homeGoogle = $_POST['home-google'];
    $homeBlog = $_POST['home-blog'];

    $sql_query = "UPDATE home SET name = '$homeName' , slogan = '$homeSlogan' , github = '$homeGithub' , facebook = '$homeFacebook', googleplay = '$homeGoogle', blog = '$homeBlog'  WHERE id = $idInt ";
    $result = mysqli_query($conn, $sql_query);

    header("location: ../views/crud-home.php");
    return;
}
