<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Adicionar Projetos </title>
    
    <link rel="stylesheet" href="../style/novo.css">
</head>

<body>
    <?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "Sistema_Academico";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    if (isset($_POST["id_horario"])) {
        $id_diario = $_POST["id_diario"];
        $id_horario = $_POST["id_horario"];

        $query = "INSERT INTO diario_horario VALUES ('" . $id_diario . "','" . $id_horario . "')";
        $cadastro = mysqli_query($conexao, $query);
        if ($cadastro) {
            echo "Relação cadastrada com sucesso<br>";
        } else {
            echo "Falha ao cadastrar Relação";
        };
        echo "<meta http-equiv='refresh' content='3'>";
    }

    ?>

    <h2> Nova Relação de Diário e Horário </h2>
    <form method="post" action="">
        <labe for="id_diario">ID diario:</label>
            <input type="number" name="id_diario" required>
            <br>
            <label type="id_horario">ID horário:</label>
            <input type="number" name="id_horario" required>
            <br>
            <input type="submit" value="Inserir">
    </form>
    <a class="botao" href="index.php">voltar</a>
</body>

</html>
