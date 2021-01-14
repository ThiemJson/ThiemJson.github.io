<?php
session_start();

if (isset($_POST['login-btn-sigin'])) {
    $username = $_POST['login-username'];
    $userpass = $_POST['login-pass'];
    if (!$username || !$userpass) {
        header("location:../views/login.php");
    }

    if ($username != "admin@admin.com" || $userpass != "thiemtinhte") {
        header("location:../views/login.php");
    }

    if ($username == "admin@admin.com" && $userpass == "thiemtinhte") {
        $_SESSION["userlogin"] = "userlogin";
        header("location:../views/crud-home.php");
        return;
    }

    header("location:../views/login.php");
}
