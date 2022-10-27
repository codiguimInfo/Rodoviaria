<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Como fazer input de password com olho de mostrar senha</title>
    <!-- lib de icons -->
    <link rel="stylesheet" type="text/css" href="entrar.css">
    <link rel="stylesheet" type="text/css"href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
</head>
<body>
      <main>
      <h1><div style='text-align:right'>Login </div> </h1>

        <form action="../controller/auth.php" method="post">
            <p style="color:red;" id="erro">Usuário ou/e Senha Incorreta</p>
            <p style="color:red;" id="erro2">Usuário não encontrado</p>
            <p style="color:red;" id="erro3">Você já fez login. Deslogue da conta.</p>
            <p style="color:red;" id="erro4">Cadastre-se</p>
            <label for="email">
                <span>Email</span>
            <div>
                <input type="email" id="email" name="email">
            </div>
            </label>

            <label for="password">
                <span>Senha</span>
                <div>
                <input type="password" id="password" name="senha">
                <span class="lnr lnr-eye"></span>
            </div>
            </label>
 <a href="cadastrar.php" id="Cc">Criar conta</a>
        <h2>
            <input type="submit" value="Entrar" id="button" name="entrar">
        </h2>
    </form>
    <!--PRIMEIRO ERRO-->
    <?php
        if(empty($_SESSION['verif_erro'])){
    ?>
    <script>
        document.getElementById('erro').style.display = "none";
    </script>
    <?php
        }else{
    ?>
    <script>
         document.getElementById('erro').style.display = "block";
    </script>
    <?php
    unset($_SESSION['verif_erro']);
    }
    ?>
 <!--SEGUNDO ERRO-->
<?php
        if(empty($_SESSION['verif_erro2'])){
    ?>
    <script>
        document.getElementById('erro2').style.display = "none";
    </script>
    <?php
        }else{
    ?>
    <script>
         document.getElementById('erro2').style.display = "block";
    </script>
    <?php
    unset($_SESSION['verif_erro2']);
    }
    ?>
 <!--TERCEIRO ERRO-->
<?php
        if(empty($_SESSION['verif_erro3'])){
    ?>
    <script>
        document.getElementById('erro3').style.display = "none";
    </script>
    <?php
        }else{
    ?>
    <script>
         document.getElementById('erro3').style.display = "block";
    </script>
    <?php
    unset($_SESSION['verif_erro3']);
    }
    ?>
 <!--QUARTO ERRO-->
<?php
        if(empty($_SESSION['verif_erro4'])){
    ?>
    <script>
        document.getElementById('erro4').style.display = "none";
    </script>
    <?php
        }else{
    ?>
    <script>
         document.getElementById('erro4').style.display = "block";
    </script>
    <?php
    unset($_SESSION['verif_erro4']);
    }
    ?>
     </main>
    <section class="images">
        <div class="circle"></div>
    </section>
</body>
<script type="text/javascript">
let btn = document.querySelector('.lnr-eye');
btn.addEventListener('click', function() {
let input = document.querySelector('#password');
if(input.getAttribute('type') == 'password') {
input.setAttribute('type', 'text');
} else {
input.setAttribute('type', 'password');
    }
});
</script>
</html>
