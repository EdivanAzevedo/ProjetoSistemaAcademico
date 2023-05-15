<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Horario</title>
        <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <img src="style/iff.png" alt="Logo do iff">
    <h1>Horário de Atendimento</h1>
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
    <a href="novohorario.php"><button class="add">Adicionar</button></a>
    <a href="removerhorario.php"><button class="remove">Remover</button></a>
    <a href="index.php"><button class="back">Voltar</button></a>
    </nav>
    <?php
    $consulta = mysqli_query($conexao, "SELECT * FROM horario_atendimento");

    echo '
    <br>
    <table>
            <tr>
                <th>id</th>
                <th>Data Inicial</th>
                <th>Data Final</th>
                <th>Horario Inicial</th>
                <th>Horario Final</th>
                <th>Alterações</th>
            </tr>';

    while($linha = mysqli_fetch_array($consulta))
    {
        echo '<tr> 
                <td>'.$linha['id'].'</td>
                <td>'.$linha['data_ini'].'</td>
                <td>'.$linha['data_fim'].'</td>
                <td>'.$linha['horario_ini'].'</td>
                <td>'.$linha['horario_fim'].'</td>
                <td>
                    <form action="updatehorario.php" method="POST">
                        <input type="hidden" name="id" value='.$linha['id'].'>
                        <input class="update" type="submit" value="Update">
                    </form>
                </td>
                </tr>';
    }

    echo '</table>';
    ?>
    </body>
</html>