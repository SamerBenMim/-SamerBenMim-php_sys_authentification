<?php
session_start();
/*
 * 1- Récupérer les identifiants
 * Tester si le login et le mot de passe correspondent
 * Si oui
 *  Redirige vers la page d'accueil
 * Si non
 *  Redirgie vers la page login avec un message d'erreur
 * */

//1
$email = $_POST['email'];
$password = $_POST['mdp'];

if (isset($email)&&isset($password)) {
    if ($email == 'as@as.as' && $password == "0000") {
        $_SESSION['user']="as";
        header('location:home.php');
    } else {
        $_SESSION['errorMessage']="Veuillez vérifier vos credenitals";
        header('location:login.php');
    }
} else {
    $_SESSION['errorMessage']="Veuillez vérifier vos credenitals";
    header('location:login.php');
}