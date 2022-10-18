<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO | Terminal Rodoviário de SGA</title>
    <link rel="stylesheet" href="../assets/cadastro.css">
</head>
<body>
    <main>
        <h1>Criar Conta</h1>

        <form action="../controller/cadastro.php" method="post">
            <label for="name">
                <span>Usuário</span>
                <input type="text" id="name" name="usuario">
            </label>

            <label for="email">
                <span>Email</span>
                <input type="email" id="email" name="email">
            </label>

            <label for="password">
                <span>Senha</span>
                <input type="password" id="password" name="senha">
            </label>

            <input type="submit" value="Cadastrar" id="button" name="entrar">
        </form>
    </main>
    <section class="images">
        <div class="circle"></div>
    </section>
</body>
</html>

