<link rel="stylesheet" href="style/novo.css">

<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "Sistema_Academico";

    $conexao = mysqli_connect($servidor,$usuario,$senha,$database);


    if(isset($_POST["titulo"]))
    {
        $titulo = $_POST["titulo"];

        $verifica_titulo = "SELECT * FROM projeto WHERE titulo = '".$titulo."'";
        $resultado = mysqli_query($conexao, $verifica_titulo);
    if(mysqli_num_rows($resultado) == 0) {
        echo "Título não encontrado na tabela pessoa";
    } else {
        $query = "DELETE FROM projeto WHERE titulo = '".$titulo."'";
        $remocao = mysqli_query($conexao,$query);
        if($remocao) {
            echo "Projeto removido com sucesso<br>";
        } else {
            echo "Falha ao remover projetos";
        };
    }
        echo "<meta http-equiv='refresh' content='3'>";

    }
    
    echo '<h2> Remover Projeto </h2>
<form method="post" action="">
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" required>
    <br>
    <input type="submit" value="Remover">
</form>
<a class="botao" href="Projeto.php">voltar</a>';

?>