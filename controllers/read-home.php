<?php
    include('checksession.php');
    require('dbconfig.php');
    $sql_query = "SELECT * FROM home";
    $result = mysqli_query($conn,$sql_query);
    $homeData = mysqli_fetch_all($result);
?>