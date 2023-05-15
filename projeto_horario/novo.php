<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Adicionar horarios </title>
        <link rel="stylesheet" href="../style/novo.css">
    </head>
    <body>
<?php

$servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "Sistema_Academico";

    $conexao = mysqli_connect($servidor,$usuario,$senha,$database);

    if(isset($_POST["projeto"]))
    {
        $projeto = $_POST["projeto"];
        $horario = $_POST["horario"];

        $query = "INSERT INTO projeto_horario VALUES (".$projeto.",".$horario.")";
        if(mysqli_query($conexao,$query)){
            echo "Relação cadastrada com sucesso<br>";
        }else{
            echo "Falha ao cadastrar Relação";
        };
        echo "<meta http-equiv='refresh' content='3'>";
    }

?>

        <h2> Nova Relação de Projeto e Horario </h2>
        <form method="post" action="">
            <labe for="projeto">ID projeto:</label>
            <input type="number" name="projeto" required>
            <br>
            <label type="horario">ID horario:</label>
            <input type="number" name="horario" required>
            <br>
            <input type="submit" value="Inserir">
        </form>
        <a class="botao" href="index.php">voltar</a>
    </body>
</html>