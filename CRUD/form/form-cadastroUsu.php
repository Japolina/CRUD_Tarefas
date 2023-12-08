<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/cadastroUsu.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <header class="nav">
        <a href="#"><img src="../img/logo1.png" alt="" class="logo"></a>
        <nav>
            <ul>
            </ul>
        </nav>
    </header>

    <section class="containerTabela">
        <h2 class="form__title">Preencha seus dados abaixo</h2>

        <div class="campos">
                <form method="post" action="">
                    <input type="text" name="username" placeholder="Usuário" class="input" required><br>
                    <input type="password" name="password" placeholder="Senha" class="input" required><br>
                    <input type="password" name="confirm_password" placeholder="Confirme enha" class="input" required><br>
                    <input type="email" name="email" placeholder="E-mail" class="input" required><br>
            </div>
            
        <div class="containerBotoes">
            <a href="../view/index.php" type="submit"><button class="btn">Cadastrar</button></a>
            <a href="../view/index.php" type="submit" class="voltar">
                    <img src="../img/voltar.png" alt="">
                    <h1 class="textVoltar">Voltar</h1>
            </a>
        </div>
    </section>
</body>

</html>