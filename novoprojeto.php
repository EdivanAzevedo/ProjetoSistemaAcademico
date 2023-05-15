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

if(isset($_POST["titulo"]))
    {
        $titulo = $_POST["titulo"];
        $descricao = $_POST["descricao"];
        $data_inicial = str_replace("T"," ",$_POST["data_inicial"]);
        $data_fim = str_replace("T"," ",$_POST["data_fim"]);

        $query = "INSERT INTO projeto(id, titulo, descricao,data_inicial,data_fim) VALUES (NULL,'".$titulo."','".$descricao."','".$data_inicial."','".$data_fim."')";
        $cadastro = mysqli_query($conexao,$query);
        if($cadastro){
            echo "Projeto cadastrado com sucesso<br>";
        }else{
            echo "Falha ao cadastrar projetos";
        };
        echo "<meta http-equiv='refresh' content='3'>";
    }

?>

        <h2> Novo Projeto </h2>
        <form method="post" action="">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" required>
            <br>
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" required></textarea>
            <br>
            <labe for="data_inicial">Data Inicial:</label>
            <input type="datetime-local" name="data_inicial" required>
            <br>
            <label type="data_fim">Data Final:</label>
            <input type="datetime-local" name="data_fim" required>
            <br>
            <input type="submit" value="Inserir">
        </form>
        <a class="botao" href="Projeto.php">voltar</a>
    </body>
</html>