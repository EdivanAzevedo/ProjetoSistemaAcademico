<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Update Horario </title>   
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/novo.css">
</head>

<body>
    <?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "Sistema_Academico";
    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);
    $id = $_POST["id"];
    $consulta = mysqli_query($conexao, "SELECT * FROM horario_atendimento WHERE id=".$id);
    if (isset($_POST["data_inicial"])) {
        $id = $_POST["id"];
        $data_inicial = str_replace("T", " ", $_POST["data_inicial"]);
        $data_fim = str_replace("T", " ", $_POST["data_fim"]);
        $hora_ini = $_POST["hora_ini"];
        $hora_fim = $_POST["hora_fim"];
        $query = "UPDATE horario_atendimento SET data_ini='".$data_inicial."', data_fim='" . $data_fim . "', horario_ini='" . $hora_ini . "', horario_fim='" . $hora_fim . "' WHERE id=$id";
        $cadastro = mysqli_query($conexao, $query);
        if ($cadastro) {
            echo "Horário atualizado com sucesso<br>";
        } else {
            echo "Falha ao atualizar horário";
        };
        echo "<meta http-equiv='refresh' content='3'>";
    }
    echo '<h2> Update Horário </h2>
    <form method="post" action="">
        <labe for="data_inicial">Data Inicial:</label>
            <input type="datetime-local" name="data_inicial" required>
            <br>
            <label type="data_fim">Data Final:</label>
            <input type="datetime-local" name="data_fim" required>
            <br>
            <labe for="data_inicial">Horário Inicial:</label>
            <input type="time" name="hora_ini" required>
            <br>
            <label type="data_fim">Horário Final:</label>
            <input type="time" name="hora_fim" required>
            <input type="hidden" name="id" value='.$id.'>
            <br>
            <input type="submit" value="Inserir">
    </form>
    <a class="botao" href="Horario.php">voltar</a>';
    ?>


</body>

</html>