<?php
require_once "../model/connect.php";

if(isset($_GET['delete_passagem'])){
  $id_delete = $_GET['id_delete'];
  $sql = "DELETE FROM passagens_clientes WHERE id3 = '$id_delete'";
  $con->query($sql);
  header("location: pag_gerente.php");
}

$sql1 = "SELECT * FROM passagens_clientes";
$result1 = $con->query($sql1);
?>

  <!--REGISTRAR OS DESTINOS-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/gerencia.css" />
    <title>Gerência | Terminal Rodoviário SGA</title>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h2>Registre a Viagem</h2>
      </div>
      <form id="formulariogerencia" action="../controller/adm.php" method="post" class="formulariogerencia">
        <div class="form-control">
          <label for="viagem">Destino</label>
          <input type="text" id="viagem" name="destino" placeholder="Digite o destino da viagem"/>
        </div>
        <div class="form-control">
          <label for="hora">Horário</label>
          <input type="time" id="hora" name="horario" placeholder="Digite o horário da viagem"/>
        </div>
        <div class="form-control">
          <label for="date">Data</label>
          <input type="date" name="data" id="date"/>
        </div>
        <div class="form-control">
          <label for="custo">Valor</label>
          <input type="number" id="custo" name="valor" placeholder="Digite o valor da passagem"/>
        </div>
        
        <button type="submit" name="enviar" id="registrar" >Registrar</button>
        <button type="reset" id="limpar">Limpar</button>
      </form>
      <hr>


      <!--DELETAR AS PASSAGENS-->


      <div class="header">
          <h2>Deletar passagens</h2>
      </div>
      <form action="pag_gerente.php" method="get" class="formulariogerencia">
        <div class="form-control">
          <input type="number" placeholder="Digite o ID da passagem" name="id_delete">
        </div>
          <button type="submit" name="delete_passagem" id="delete">Deletar</button>
      </form>

<?php
  if ($result1->num_rows > 0) {
?>
      <table>
        <tr>
          <th>ID</th>
          <th>Nome Completo</th>
          <th>CPF</th>
          <th>RG</th>
          <th>Telefone</th>
          <th>Destino</th>
          <th>Data</th>
          <th>Horario</th>
        </tr>
      </table>
<?php
  while($row1 = $result1->fetch_assoc()){
?>
  <div class="table_delete">
        <tr>
          <td><?=$row1['id3']?></td>
          <td><?=$row1['nomecompleto']?></td>
          <td><?=$row1['CPF']?></td>
          <td><?=$row1['RG']?></td>
          <td><?=$row1['telefone']?></td>
          <td><?=$row1['dataviagem']?></td>
          <td><?=$row1['horario']?></td>
        </tr>
  </div>
<?php
  }
?>
<?php
  }else{
?>
<p id="null">Não há passagem</p>
<?php
  }
  ?>
    </div>
  </body>
</html>