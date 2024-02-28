<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $emailorphone = $_POST['emailorphone'];
    if ($emailorphone === "") {
        $_SESSION["emailorphoneErr"] = "Email or Phone is empty!!";
    } else {
        $_SESSION["emailorphone"] = $emailorphone;
    }
    $password = $_POST['password'];
    if ($password === "") {
        $_SESSION["passwordErr"] = "password is empty!!";
    } else {
        $_SESSION["password"] = $password;
    }
    header("location: ../view/login.php");
}