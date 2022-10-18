<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | Terminal Rodoviário de SGA</title>
    <link rel="stylesheet" href="../assets/entrar.css">
</head>
<body>
    <main>
        <h1>Login</h1>

        <form action="../controller/auth.php" method="post">

            <label for="email">
                <span>Email</span>
                <input type="email" id="email" name="email">
            </label>

            <label for="password">
                <span>Senha</span>
                <input type="password" id="password" name="senha">
            </label>

            <a href="cadastrar.php" id="Cc">Criar conta</a>

            <input type="submit" value="Entrar" id="button" name="entrar">
        </form>
    </main>
    <section class="images">
        <div class="circle"></div>
    </section>
</body>
</html>