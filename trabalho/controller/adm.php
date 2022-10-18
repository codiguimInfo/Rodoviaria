<?php
    session_start();
    require_once "../model/connect.php";

    $destino = $_POST['destino'];
    $horario = $_POST['horario'];
    $data = $_POST['data'];
    $valor = $_POST['valor'];
    $enviar = $_POST['enviar'];

    if(isset($enviar)){
        if(isset($destino) && isset($horario) && isset($data) && isset($valor)){
          $sql = "SELECT * FROM viagens WHERE destino = '$destino'";
          $result = $con->query($sql);
      
          $sql1 = "SELECT * FROM viagens WHERE horario = '$horario'";
      $result1 = $con->query($sql1);
      
          if ($result->num_rows == 0) {
            $sql = "INSERT INTO viagens (destino, horario, dataviagem, valor) VALUES ('$destino', '$horario', '$data', '$valor');";
            if ($con->query($sql) === TRUE && $con->query($sql1)) {
                header("location: ../view/pag_gerente.php");
              }
        }
        }
    }

?>