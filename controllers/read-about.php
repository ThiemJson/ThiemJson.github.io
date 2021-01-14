<?php
include('checksession.php');
    require('dbconfig.php');
    $sql_query = "SELECT * FROM about";
    $result = mysqli_query($conn,$sql_query);
    $aboutData = mysqli_fetch_all($result);
?>