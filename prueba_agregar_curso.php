<?php
include "conexion.php";
session_start();
if(empty($_SESSION["usuario"])){
    header("location: login.php");
}
if($_SESSION["tipo"] == "est"){
    header("location: index.php");
}
?>