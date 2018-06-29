<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Livro</title>
</head>
<h1>Editar  Livros</h1>
<body>

<?php
include("conn.php");
$id = $_GET['update'];
$result_livro = "SELECT * FROM tb_livros WHERE id='$id'";
$resultado_livro = mysqli_query($conn, $result_livro);
$total_livro = mysqli_num_rows($resultado_livro);

while($rows_livros = mysqli_fetch_assoc($resultado_livro)) {
        $id            = $rows_livros['id'];
        $codigo        = $rows_livros['codigo'];
        $nome          = $rows_livros['nome'];
        $descricao     = $rows_livros['descricao'];


}


?>   <form action="update.php" method="post">
                 <input type="hidden" name="id" value="<?=$id?>" />
                <label>Código do Livro: </label> <input type="text"  value="<?=$codigo?>" name="codigo"/>
                <label>Nome do Livro: </label> <input type="text"    value="<?=$nome?>"   name="nome"/>
                <label>Descrição Livro</label> <input type="text"     value="<?=$descricao?>"   name="descricao"/>
             
                <input type="submit" value="Atualizar">
             
             </form>
    
</body>
</html>

