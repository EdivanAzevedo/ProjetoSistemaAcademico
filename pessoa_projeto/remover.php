<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "Sistema_Academico";

    $conexao = mysqli_connect($servidor,$usuario,$senha,$database);


    if(isset($_POST["pessoa"]))
    {
        $pessoa = $_POST["pessoa"];
        $projeto = $_POST["projeto"];

        $verifica_id = "SELECT * FROM pessoa_projeto WHERE id_pessoa=".$pessoa." AND id_projeto=".$projeto."";
        $resultado = mysqli_query($conexao, $verifica_id);
    if(mysqli_num_rows($resultado) == 0) {
        echo "ID não encontrado na tabela";
    } else {
        $query = "DELETE FROM pessoa_projeto WHERE id_pessoa=".$pessoa." AND id_projeto=".$projeto."";
        $remocao = mysqli_query($conexao,$query);
        if($remocao) {
            echo "Relação removido com sucesso<br>";
        } else {
            echo "Falha ao remover Relação";
        };
    }
        echo "<meta http-equiv='refresh' content='3'>";

    }
    
    echo '<h2> Remover Pessoa & Projeto </h2>
<form method="post" action="">
    <label for="pessoa">ID pessoa:</label>
    <input type="number" name="pessoa" required>
    <br>
    <label for="projeto">ID projeto:</label>
    <input type="number" name="projeto" required>
    <br>
    <input type="submit" value="Remover">
</form>
<a class="botao" href="index.php">voltar</a>';

?>
