<?php
session_start();
include '../config/config.php';
include '../classes/user.php';
include '../classes/Tarefa.php';

$user = new User($conn);
$data = $user->read();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/dashboard-usu.css">
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
        <h2 class="form__title">USUÁRIOS</h2>
        <div class="botoes">
            <a href="../form/form-inserirUsu.php"><button class="btn2">Inserir Usuário<img src="../img/inserir.png" alt=""></button></a>
            <a href="../view/dashboard-adm.php"><button class="btn2">Voltar <img src="../img/voltar.png" alt=""></button></a>
        </div>


        <table border="1" class="tabela">
            <thead>
                <tr>
                    <th class="wid60B">ID</th>
                    <th class="wid600B">Nome</th>
                    <th class="wid60B">Sexo</th>
                    <th class="wid60B">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 0;
                while ($row = $data->fetch(PDO::FETCH_ASSOC)) { ?>

                    <tr>
                        <th> <?php echo $row['id']; ?> </th>
                        <th> <?php echo $row['username']; ?> </th>
                        <th> <?php echo $row['sexo']; ?> </th>
                        <th> 
                        <a href="../form/form-alterarUsu.php?id=<?php echo $row['id']; ?>"><img src="../img/lapis.png" alt=""></a> 
                        <a href="../form/form-deleteUsu.php?id=<?php echo $row['id']; ?>"><img src="../img/excluir.png" alt=""></a>
                        </th>
                    </tr>

                <?php } ?>
            </tbody>
            </tfoot>
        </table>
    </section>
</body>

</html>