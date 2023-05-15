<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Update </title>
    <link rel="stylesheet" href="style/novo.css">
</head>

<body>
    <?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "Sistema_Academico";
    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);
    $id_primeiro = $_POST["id_primeiro"];
    $id_segundo = $_POST["id_segundo"];
    if (isset($_POST["id_primeiroTemp"])) {
        $id_primeiro = $_POST["id_primeiro"];
        $id_segundo = $_POST["id_segundo"];
        $id_primeiroTemp = $_POST["id_primeiroTemp"];
        $id_segundoTemp = $_POST["id_segundoTemp"];
        $query = "UPDATE projeto_horario SET id_projeto=$id_primeiroTemp,id_horario=$id_segundoTemp WHERE id_projeto=$id_primeiro AND id_horario=$id_segundo";
        $cadastro = mysqli_query($conexao, $query);
        if ($cadastro) {
            echo "Atualizado com sucesso<br>";
        } else {
            echo "Falha ao atualizar";
        };
        echo "<meta http-equiv='refresh' content='3'>";
    }
    echo '<h2> Update Projeto p/ Horario</h2>
        <form method="post" action="">
            <label for="id_primeiroTemp">ID projeto:</label>
            <input type="number" name="id_primeiroTemp" value="'.$id_primeiro.'"required>
            <br>
            <label type="id_segundoTemp">ID horario:</label>
            <input type="number" name="id_segundoTemp" value="'.$id_segundo.'" required>
            <br>
            <input type="hidden" name="id_primeiro" value="'.$id_primeiro.'">
            <input type="hidden" name="id_segundo" value="'.$id_segundo.'">
            <input type="submit" value="Inserir">
        </form>
    <a class="botao" href="index.php">voltar</a>';
    ?>


</body>

</html>