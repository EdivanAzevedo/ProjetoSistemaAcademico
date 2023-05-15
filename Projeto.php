<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/style.css">
        <title>Projeto</title>
        <style>
            .button{
                height: 300px;
                width: 400px;
            }
        </style>
</head>
<body>
    <img src="style/iff.png" alt="Logo do iff">
    <h1>Projeto</h1>
    <?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "Sistema_Academico";

    $conexao = mysqli_connect($servidor,$usuario,$senha,$database);

    if(!$conexao)
    {
        echo "Erro ao conectar no banco de dados!";
    }
    ?>
    <nav>
        <a href="novoprojeto.php"><button class="add">Adicionar</button></a>
        <a href="removerprojeto.php"><button class="remove">Remover</button></a>
        <a href="index.php"><button class="back">Voltar</button></a>
    </nav>
    <?php
    $consulta = mysqli_query($conexao, "SELECT * FROM projeto");

    echo '
        <br>
        <table>
            <tr>
                <th>id</th>
                <th>Titulo</th>
                <th>Descrição</th>
                <th>data_inicial</th>
                <th>data_final</th>
                <th>Alterações</th>
            </tr>';

    while($linha = mysqli_fetch_array($consulta))
    {
        echo '<tr> 
                <td>'.$linha['id'].'</td>
                <td>'.$linha['titulo'].'</td>
                <td>'.$linha['descricao'].'</td>
                <td>'.$linha['data_inicial'].'</td>
                <td>'.$linha['data_fim'].'</td>
                <td>
                    <form action="updateprojeto.php" method="POST">
                        <input type="hidden" name="id" value='.$linha['id'].'>
                        <input class="update" type="submit" value="Atualizar">
                    </form>
                </td>
                </tr>';
    }

    echo '</table>';
    ?>
    </body>
</html>