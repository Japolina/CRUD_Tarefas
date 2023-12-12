<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/dashboard-adm.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>
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
        <h2 class="form__title">TAREFAS</h2>
        <div class="botoes">
            <a href="../view/usuario.php"><button class="btn2">Usuários<img src="../img/olho.png" alt=""></button></a>
            <a href="../form/form-inserir.php"><button class="btn2">Inserir Tarefa <img src="../img/inserir.png" alt=""></button></a>
            <a href="../form/form-inserirUsu.php"><button class="btn2">Inserir Usuário<img src="../img/inserir.png" alt=""></button></a>
        </div>


        <table border="1" class="tabela">
            <thead>
                <tr>
                    <th class="wid60B">ID</th>
                    <th class="wid600B">Tarefas</th>
                    <th class="wid60B">Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>teste</td>
                    <td>
                        <a href=""><img src="../img/lapis.png" alt=""></a>
                        <a href=""><img src="../img/excluir.png" alt=""></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>teste</td>
                    <td>
                        <a href=""><img src="../img/lapis.png" alt=""></a>
                        <a href=""><img src="../img/excluir.png" alt=""></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>teste</td>
                    <td>
                        <a href=""><img src="../img/lapis.png" alt=""></a>
                        <a href=""><img src="../img/excluir.png" alt=""></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>teste</td>
                    <td>
                        <a href=""><img src="../img/lapis.png" alt=""></a>
                        <a href=""><img src="../img/excluir.png" alt=""></a>
                    </td>
                </tr>
            </tbody>
            </tfoot>
        </table>
    </section>
</body>

</html>