<?php
session_start();

if(isset($_SESSION["nbr"])){
    $_SESSION["nbr"]++;
    echo "bienvenu cest votre ${_SESSION['nbr']}";

}else{
    $_SESSION['nbr']=1;
    echo"premier visite";
}
