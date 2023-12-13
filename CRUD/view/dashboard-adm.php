<?php
session_start();
include '../config/config.php';
include '../classes/user.php';
include '../classes/Tarefa.php';

$tarefa = new Tarefa($conn);
$data = $tarefa->read();


$cid = 'BRXX3553'; // CID da sua cidade, encontre a sua em http://hgbrasil.com/weather

$dados = json_decode(file_get_contents('http://api.hgbrasil.com/weather/?cid='
.$cid.'&format=json'), true); // Recebe os dados da API
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
                    <th> <a href="../form/form-alterar.php?id=<?php echo $row['id']; ?>"><img src="../img/lapis.png" alt=""> <a
                            href="../form/form-delete.php?id=<?php echo $row['id']; ?>"><img src="../img/excluir.png" alt=""></a></th>
                </tr>

            <?php } ?>
                </tr>
            </tbody>
            </tfoot>
        </table>
        
        <h2>Clima de Sapucaia do sul</h2>
    <?php echo $dados['results']['city']; ?> <?php echo $dados['results']['temp']; ?> ºC<br>
    <?php echo $dados['results']['description']; ?><br>
    Nascer do Sol: <?php echo $dados['results']['sunrise']; ?> - Pôr do Sol: <?php echo $dados['results']['sunset']; ?><br>
    <img src="imagens/<?php echo $dados['results']['img_id']; ?>.png" class="imagem-do-tempo"><br>

    </section>
</body>

</html>