<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trabalho de PHP</title>
</head>
<body>
<?php include("conn.php"); ?>



<hr>
<h2> Cadastrar Livro </h2>
<form action="cadastrar.php" method="post">
<label>Código do Livro: </label> <input type="text"  placeholder="código do livro" name="codigo"/>
<label>Nome do Livro: </label> <input type="text"  placeholder="nome do  livro"   name="nome"/>
<label>Descrição Livro</label> <input type="text"  placeholder="descrição do livro"   name="descricao"/>
<input type="submit" value="cadastrar">
</form>
<hr>
<?php

$result_livro = "SELECT * FROM tb_livros";
$resultado_livro = mysqli_query($conn, $result_livro);
$total_livro = mysqli_num_rows($resultado_livro);


while($rows_livros = mysqli_fetch_assoc($resultado_livro)) {
    $codigo_livro = $rows_livros['codigo'];
    $nome_livro = $rows_livros['nome'];
    $desc_livro = $rows_livros['descricao'];

    echo "<hr>Código do Livro: $codigo_livro <br> Nome do Livro:  ".utf8_encode($nome_livro)." <br> Descrição do Livro:".utf8_encode($desc_livro)." <hr><br><p>";
}



?>


</body>
</html>
