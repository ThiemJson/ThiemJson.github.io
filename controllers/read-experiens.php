<?php
include('checksession.php');
    require('dbconfig.php');
    $sql_query = "SELECT * FROM experiences";
    $result = mysqli_query($conn,$sql_query);
    $expDatas = mysqli_fetch_all($result);
?>