<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>horario</title>
        <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<img src="../style/iff.png" alt="Logo do iff">
    <h1>Projeto & Horario</h1>
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
    <a href="novo.php"><button class="add">Adicionar</button></a>
    <a href="remover.php"><button class="remove">Remover</button></a>
    <a href="../index.php"><button class="back">Voltar</button></a>
    </nav>
    <br>
    <?php
    $consulta = mysqli_query($conexao, "SELECT * FROM projeto_horario");

    echo '<table border=1>
            <tr>
                <th>ID projeto</th>
                <th>ID horario</th>
                <th>Alterações</th>
            </tr>';

    while($linha = mysqli_fetch_array($consulta))
    {
        echo '<tr> 
                <td>'.$linha['id_projeto'].'</td>
                <td>'.$linha['id_horario'].'</td>
                <td>
                <form action="update.php" method="POST">
                    <input type="hidden" name="id_primeiro" value='.$linha['id_projeto'].'>
                    <input type="hidden" name="id_segundo" value='.$linha['id_horario'].'>
                    <input class="update" type="submit" value="Update">
                </form>
                </td>
                </tr>';
    }

    echo '</table>';
    ?>
    </body>
</html>