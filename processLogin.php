<?php
session_start();

//1
$email = $_POST['email'];
$password = $_POST['mdp'];

if (isset($email) and isset($password)) {
    if ($email == 'samer@gmail.com' && $password == "samer") {
        $_SESSION['user']="samer";
        header('location:home.php');
    } else {
        $_SESSION['error']="Veuillez vérifier vos credenitals";
        header('location:login.php');
    }
} else {
    $_SESSION['errorMessage']="Veuillez vérifier vos credenitals";
    header('location:login.php');
}