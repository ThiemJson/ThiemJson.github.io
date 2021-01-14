<?php
include('checksession.php');
    require('dbconfig.php');
    $sql_query = "SELECT * FROM pet";
    $result = mysqli_query($conn,$sql_query);
    $petDatas = mysqli_fetch_all($result);
?>