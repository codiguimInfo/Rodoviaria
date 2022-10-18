<?php
session_start();

if(!isset($_SESSION['token_auth'])){
    header("location: ../view/cadastrado.php");
}
?>