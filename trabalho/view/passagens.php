<?php
    session_start();
    require_once "../model/connect.php";
    $sql = "SELECT * FROM viagens";
    $result = $con->query($sql);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/passagem.css" />
    <title>Passagem | Terminal Rodoviário SGA</title>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h2>Registre a sua passagem</h2>
      </div>

      <form action="../controller/registrar_passagem.php" id="formulario" class="formulario" method="post">

        <div class="form-control">
          <label for="completename">Nome Completo</label>
          <input type="text" name="completname" id="completename" placeholder="Digite o seu nome completo"/>
        </div>

        <div class="form-control">
          <label for="cpf">CPF</label>
          <input type="text" id="cpf" name="cpf" placeholder="Digite o número do seu CPF"/>
        </div>

        <div class="form-control">
          <label for="rg">RG</label>
          <input type="text" id="rg" name="rg" placeholder="Digite o número de expedição do seu RG"/>
        </div>

        <div class="form-control">
          <label for="celular">Telefone</label>
          <input type="text" id="celular" name="telefone" placeholder="Digite o seu número de telefone"/>
        </div>
        
        <div class="form-control">
          <label for="destino">Destino</label> 
          <select name="destino" id="destino">
<?php
  while($row = $result->fetch_assoc()){
?>
              <option value="<?=$row['destino']?>"><?=$row['destino']?></option>
<?php
  }
?>
          </select>
        </div>
        <button type="submit">Registrar</button>
        <button type="reset" id="reset">Limpar</button>
      </form>

    </div>
  </body>
</html>