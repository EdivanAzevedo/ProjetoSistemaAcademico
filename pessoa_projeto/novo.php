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

    $conexao = mysqli_connect($servidor,$usuario,$senha,$database);

    if(isset($_POST["id_pessoa"]))
    {
        $id_pessoa = $_POST["id_pessoa"];
        $id_projeto = $_POST["id_projeto"];

        $query = "INSERT INTO pessoa_projeto VALUES (".$id_pessoa.",".$id_projeto.")";
        if(mysqli_query($conexao,$query)){
            echo "Relação cadastrada com sucesso<br>";
        }else{
            echo "Falha ao cadastrar Relação";
        };
        echo "<meta http-equiv='refresh' content='3'>";
    }

?>

        <h2> Nova Relação de Pessoa e Projeto </h2>
        <form method="post" action="">
            <labe for="id_pessoa">ID Pessoa:</label>
            <input type="number" name="id_pessoa" required>
            <br>
            <label type="id_projeto">ID Projeto:</label>
            <input type="number" name="id_projeto" required>
            <br>
            <input type="submit" value="Inserir">
        </form>
        <a class="botao" href="index.php">voltar</a>
    </body>
</html>