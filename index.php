<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trabalho de PHP</title>
</head>
<body>




<hr>
<h2> Cadastrar Livro </h2>
<form action="cadastrar.php" method="post">
<label>Código do Livro: </label> <input type="text"  placeholder="código do livro" name="codigo"/>
<label>Nome do Livro: </label> <input type="text"  placeholder="nome do  livro"   name="nome"/>
<label>Descrição Livro</label> <input type="text"  placeholder="descrição do livro"   name="descricao"/>
<input type="submit" value="cadastrar">
</form>
<hr>
<?php include("select.php");?>


</body>
</html>
