<?php
require "../model/connect.php";

$usuario_cad = $_POST ['usuario'];
$email_cad = $_POST['email'];
$senha_cad = $_POST['senha'];
$entrar_cad = $_POST['entrar'];

if(isset($entrar_cad)){
  if(isset($usuario_cad) && isset($email_cad) && isset($senha_cad)){
    $sql = "SELECT * FROM cadastros_clientes WHERE email = '$email_cad'";
    $result = $con->query($sql);

    $sql1 = "SELECT * FROM cadastros_clientes WHERE senha = '$senha_cad'";
$result1 = $con->query($sql1);

    if ($result->num_rows == 0) {
      $sql = "INSERT INTO cadastros_clientes (usuario, email, senha) VALUES ('$usuario_cad', '$email_cad', '$senha_cad');";

      if ($con->query($sql) === TRUE && $con->query($sql1)) {
        header("location: ../view/login.php");
      } else {
        header("location: ../view/cadastrar.php");
      }
    }else{
?>

    <div>
      <p>Já existe usuario com esse nome.</p>
      <a href="../view/cadastrar.php">Tentar fazer o cadastro novamente</a>
    </div>

<?php
    }
  }else{
?>

    <div>
      <p>Você não inseriu as informações por completo.</p>
      <a href="../view/cadastrar.php">Tentar fazer o cadastro novamente</a>
    </div>

<?php
  }
}else{
  header('location: ../view/home.php');
}
?>