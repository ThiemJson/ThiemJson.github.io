<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(!$_SESSION['userlogin']){
        session_unset();
        header("location: ../views/login.php");
    }
?>