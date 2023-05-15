<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "Sistema_Academico";

    $conexao = mysqli_connect($servidor,$usuario,$senha,$database);


    if(isset($_POST["diario"]))
    {
        $diario = $_POST["diario"];
        $horario = $_POST["horario"];

        $verifica_id = "SELECT * FROM diario_horario WHERE id_diario=".$diario." AND id_horario=".$horario."";
        $resultado = mysqli_query($conexao, $verifica_id);
    if(mysqli_num_rows($resultado) == 0) {
        echo "ID não encontrado na tabela pessoa";
    } else {
        $query = "DELETE FROM diario_horario WHERE id_diario=".$diario." AND id_horario=".$horario."";
        $remocao = mysqli_query($conexao,$query);
        if($remocao) {
            echo "Relação removido com sucesso<br>";
        } else {
            echo "Falha ao remover Relação";
        };
    }
        echo "<meta http-equiv='refresh' content='3'>";

    }
    
    echo '<h2> Remover Diario & Horário </h2>
<form method="post" action="">
    <label for="diario">ID Diario:</label>
    <input type="number" name="diario" required>
    <br>
    <label for="horario">ID Horario:</label>
    <input type="number" name="horario" required>
    <br>
    <input type="submit" value="Remover">
</form>
<a class="botao" href="index.php">voltar</a>';

?>
