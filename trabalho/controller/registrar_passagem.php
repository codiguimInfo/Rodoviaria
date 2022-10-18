<?php
require_once "../model/connect.php";

$nomeCompleto = $_POST['completname'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$telefone = $_POST['telefone'];
$destino = $_POST['destino'];
$data = date("Y-m-d");
$hora = date("H:i:s");

if(isset($nomeCompleto) && isset($cpf) && isset($rg) && isset($telefone) && isset($destino)){
    $sql = "INSERT INTO passagens_clientes(nomecompleto, CPF, RG, telefone, destinos, dataviagem, horario) VALUES ('$nomeCompleto','$cpf','$rg','$telefone','$destino','$data','$hora')";
    $con->query($sql);
    header('location: ../view/cadastrado.php');
}else{
    header('location: ../view/passagens.php');
}
?>