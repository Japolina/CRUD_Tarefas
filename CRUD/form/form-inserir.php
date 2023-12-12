<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/form/form-inserir.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Tarefa</title>
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
        <h2 class="form__title">Inserir Tarefa</h2>

        <div class="campos">
            <form method="post" action="">
                <input type="text" name="texto" name="texto" placeholder="Título" class="input" required><br>
                <input type="date" name="date" type="date" placeholder="Data" class="input" required><br>
        </div>

        <div class="containerBotoes">
            <a href="../view/usuario.php" type="submit"><button class="btn">Inserir</button></a>
            <a href="../view/dashboard-adm.php" type="submit" class="voltar">
                    <img src="../img/voltar.png" alt="">
                    <h1 class="textVoltar">Voltar</h1>
            </a>
        </div>
    </section>
</body>

</html>