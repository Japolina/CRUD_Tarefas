<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <h2 class="form__title">Coloque seu acesso abaixo</h2>

        <div class="campos">
            <form method="post" action="">
                <input type="text" name="username" name="username" placeholder="Usuário" class="input" required><br>
                <input type="password" name="password" type="password" placeholder="Senha" class="input" required><br>
        </div>

        <div class="containerBotoes">
            <a href="../view/usuario.php" type="submit"><button class="btn">Logue-se Aqui</button></a>
            <a href="../form/form-cadastroUsu.php" class="esqueciSenha">Não tem cadastro, Clique aqui!!</a>
        </div>
    </section>
</body>

</html>