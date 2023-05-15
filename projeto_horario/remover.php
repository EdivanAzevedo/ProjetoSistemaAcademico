<link rel="stylesheet" href="style/novo.css">
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

        $verifica_id = "SELECT * FROM projeto_horario WHERE id_projeto=".$projeto." AND id_horario=".$horario."";
        $resultado = mysqli_query($conexao, $verifica_id);
    if(mysqli_num_rows($resultado) == 0) {
        echo "ID não encontrado na tabela";
    } else {
        $query = "DELETE FROM projeto_horario WHERE id_projeto=".$projeto." AND id_horario=".$horario."";
        $remocao = mysqli_query($conexao,$query);
        if($remocao) {
            echo "Relação removido com sucesso<br>";
        } else {
            echo "Falha ao remover Relação";
        };
    }
        echo "<meta http-equiv='refresh' content='3'>";

    }
    
    echo '<h2> Remover Projeto & Horario </h2>
<form method="post" action="">
    <label for="projeto">ID projeto:</label>
    <input type="number" name="projeto" required>
    <br>
    <label for="horario">ID horario:</label>
    <input type="number" name="horario" required>
    <br>
    <input type="submit" value="Remover">
</form>
<a class="botao" href="index.php">voltar</a>';

?>
