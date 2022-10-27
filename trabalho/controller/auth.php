<?php
session_start();
require "../model/connect.php";

$email = $_POST["email"];
$senha = $_POST["senha"];
$email_ger = 'rodoviariasga@gmail.com';
$senha_ger = '12345678';
$entrar = $_POST["entrar"];



$sql = "SELECT * FROM cadastros_clientes  WHERE email = '$email'";
$result = $con->query($sql);

$sql1 = "SELECT * FROM cadastros_clientes WHERE senha = '$senha'";
$result1 = $con->query($sql1);

if($email == $email_ger){
    if($senha == $senha_ger){
        header('location:../view/pag_gerente.php');
    }
}
   


if(isset($entrar)){
    if(empty($_SESSION['token_auth'])){
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $row1 = $result1->fetch_assoc();

            if($email == $row1['email'] && $senha == $row1['senha']){
                $_SESSION['token_authAdmin'] = md5($senha);
                header("location: ../view/cadastrado.php");
            }
            elseif($row['senha'] == $senha){
                $_SESSION['token_auth'] = $email;
                header("location: ../view/cadastrado.php");
            }else{
                $_SESSION['verif_erro'] = 'error';
                header('location: ../view/login.php');
            }
        }else{
            $_SESSION['verif_erro2'] = 'error';
            header('location: ../view/login.php');
        }
    }else{
        $_SESSION['verif_erro3'] = 'error';
        header('location: ../view/login.php');
    }
}else{
    $_SESSION['verif_erro4'] = 'error';
    header('location: ../view/login.php');
}

        ?>
