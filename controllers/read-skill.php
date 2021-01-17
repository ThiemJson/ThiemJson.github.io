<?php
    include('checksession.php');
    require('dbconfig.php');

    // Programming languages
    $sql_query = "SELECT * FROM skill WHERE skillcatgory = 1";
    $result = mysqli_query($conn,$sql_query);
    $programingLanguageDatas = mysqli_fetch_all($result);

    // Frameworks & platforms
    $sql_query = "SELECT * FROM skill WHERE skillcatgory = 2";
    $result = mysqli_query($conn,$sql_query);
    $fwDatas = mysqli_fetch_all($result);

    // Database
    $sql_query = "SELECT * FROM skill WHERE skillcatgory = 3";
    $result = mysqli_query($conn,$sql_query);
    $dbDatas = mysqli_fetch_all($result);

    // Version Control
    $sql_query = "SELECT * FROM skill WHERE skillcatgory = 4";
    $result = mysqli_query($conn,$sql_query);
    $vsDatas = mysqli_fetch_all($result);

    // IDE
    $sql_query = "SELECT * FROM skill WHERE skillcatgory = 5";
    $result = mysqli_query($conn,$sql_query);
    $ideDatas = mysqli_fetch_all($result);

    // Foreign Language
    $sql_query = "SELECT * FROM skill WHERE skillcatgory = 6";
    $result = mysqli_query($conn,$sql_query);
    $flDatas = mysqli_fetch_all($result);

    // Knowledge
    $sql_query = "SELECT * FROM skill WHERE skillcatgory = 7";
    $result = mysqli_query($conn,$sql_query);
    $klDatas = mysqli_fetch_all($result);

    // Fetch all 
    $sql_query = "SELECT skill.id, skillcategory.id, skillcategory.name, skill.description FROM skill, skillcategory WHERE skill.skillcatgory = skillcategory.id";
    $result = mysqli_query($conn,$sql_query);
    $skillDatas = mysqli_fetch_all($result);
?>