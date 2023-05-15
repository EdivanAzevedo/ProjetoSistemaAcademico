<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Adicionar Projetos </title>
        <link rel="stylesheet" href="style/novo.css">
    </head>
    <body>
        
<?php

$servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "Sistema_Academico";

    $conexao = mysqli_connect($servidor,$usuario,$senha,$database);

if(isset($_POST["data_inicial"]))
    {
        $data_inicial = str_replace("T"," ",$_POST["data_inicial"]);
        $data_fim = str_replace("T"," ",$_POST["data_fim"]);
        $hora_ini = $_POST["hora_ini"];
        $hora_fim = $_POST["hora_fim"];

        $query = "INSERT INTO horario_atendimento VALUES (NULL,'".$data_inicial."','".$data_fim."','".$hora_ini."','".$hora_fim."')";
        $cadastro = mysqli_query($conexao,$query);
        if($cadastro){
            echo "Horário cadastrado com sucesso<br>";
        }else{
            echo "Falha ao cadastrar horário";
        };
        echo "<meta http-equiv='refresh' content='3'>";
    }

?>

        <h2> Novo Horário </h2>
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
            <br>
            <input type="submit" value="Inserir">
        </form>
        <a class="botao" href="Horario.php">voltar</a>
    </body>
</html>