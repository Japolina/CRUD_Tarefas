<?php
session_start();
include '../config/config.php';
include '../classes/user.php';
include '../classes/Tarefa.php';

$tarefa = new Tarefa($conn);
$data = $tarefa->readEdes($_SESSION['id']);


$cid = 'BRXX3553'; // CID da sua cidade, encontre a sua em http://hgbrasil.com/weather

$dados = json_decode(file_get_contents('http://api.hgbrasil.com/weather/?cid='
    . $cid . '&format=json'), true); // Recebe os dados da API
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
        <a href="../config/logout.php" type="submit" class="exit"><img src="../img/exit4.png" alt=""></a>
        <nav>
            <ul>
            </ul>
        </nav>
    </header>

    <section class="container">
        <div class="containerTabelaClima">
            <div>
            <h2>Clima de Sapucaia do sul</h2>
            <?php echo $dados['results']['city']; ?> <?php echo $dados['results']['temp']; ?> ºC<br>
            <?php echo $dados['results']['description']; ?><br>
            Nascer do Sol: <?php echo $dados['results']['sunrise']; ?> - Pôr do Sol: <?php echo $dados['results']['sunset']; ?><br>
            <img src="../imagens/<?php echo $dados['results']['img_id']; ?>.png" class="imagem-do-tempo"><br>
            </div>
        </div>

        <div class="containerTabela">
            <h2 class="form__title">TAREFAS</h2>
            <div class="botoes">
                <a href="../form/form-inserir.php"><button class="btn2">Inserir Tarefa <img src="../img/inserir.png" alt=""></button></a>
            </div>
            <table border="1" class="tabela">
                <thead>
                    <tr>
                        <th width="6%" class="wid">ID</th>
                        <th width="50%"class="wid">Tarefas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $count = 0;
                        while ($row = $data->fetch(PDO::FETCH_ASSOC)) { ?>

                    <tr>
                        <th>
                            <?php echo $row['id']; ?>
                        </th>
                        <th>
                            <?php echo $row['tarefa']; ?>
                        </th>
                    </tr>

                <?php } ?>
                </tbody>
                </tfoot>
            </table>
        </div>



    </section>

</body>

</html>