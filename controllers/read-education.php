<?php
    include('checksession.php');
    require('dbconfig.php');
    $sql_query = "SELECT * FROM education";
    $result = mysqli_query($conn,$sql_query);
    $eduDatas = mysqli_fetch_all($result);
?>