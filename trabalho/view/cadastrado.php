<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/style.css" rel="stylesheet">
    <title>CADASTRADO | Terminal Rodoviário SGA</title>
</head>
<body>
    <header>
        <div class="centro">
            <div class="logo"><img src="../assets/logo.jpg" width="100px"/></div>
            <div class="menu">
               <a href="atendimentohome.php">Atendimento</a>
               <a href="destinos.php">Destinos</a>
               <a href="sobrenoshome.php">Sobre nós</a>
               <a href="passagens.php">Passagens</a>
            </div>
            <div id="login">
                <a href="../controller/sair.php" id="textlogin">Sair</a>
            </div>
        </div>
        <section class="sobre">
            <div class="circulo">
                 <img src="../assets/logoterminal.jpeg" class="logoterminal" width="400px" border-radius="150px"/>
            </div>
            <div class="center">
                <div class="text">
                    <h1>BEM-VINDO AO SITE OFICIAL DO <br/> <span style="color: #F27405">TERMINAL</span> <span style="color: #034159">RODOVIÁRIO</span> <span style="color:#038C3E">SGA</span></h1>
                    <p>Que tal comprar sua passagem de ônibus online, <br/> com apenas alguns cliques? Com o site do terminal rodoviário SGA isso <br/> se torna possível! Com apenas alguns cliques você pode viajar <br/> para os melhores destinos do Ceará, conhecendo as belezas do estado!</p>
                </div>
             </div>
        </section>
    </header>
    
</body>
</html>