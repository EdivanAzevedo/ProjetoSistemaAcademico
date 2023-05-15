
<link rel="stylesheet" href="style/novo.css">
<style>
a{
    
}

</style>

<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "Sistema_Academico";

    $conexao = mysqli_connect($servidor,$usuario,$senha,$database);


    if(isset($_POST["id"]))
    {
        $id = $_POST["id"];

        $verifica_id = "SELECT * FROM horario_atendimento WHERE id=".$id."";
        $resultado = mysqli_query($conexao, $verifica_id);
    if(mysqli_num_rows($resultado) == 0) {
        echo "ID não encontrado na tabela pessoa";
    } else {
        $query = "DELETE FROM horario_atendimento WHERE id=".$id."";
        $remocao = mysqli_query($conexao,$query);
        if($remocao) {
            echo "Horário removido com sucesso<br>";
        } else {
            echo "Falha ao remover Horários";
        };
    }
        echo "<meta http-equiv='refresh' content='3'>";

    }
    
    echo '<h2> Remover Horário </h2>
<form method="post" action="">
    <label for="id">ID:</label>
    <input type="number" name="id" required>
    <br>
    <input type="submit" value="Remover">
</form>
<a class="botao" href="Horario.php">voltar</a>';

?>
