<?php
include("conn.php");
$result_livro = "SELECT * FROM tb_livros";
$resultado_livro = mysqli_query($conn, $result_livro);
$total_livro = mysqli_num_rows($resultado_livro);


while($rows_livros = mysqli_fetch_assoc($resultado_livro)) {
    $id            = $rows_livros['id'];
    $codigo = $rows_livros['codigo'];
    $nome   = $rows_livros['nome'];
    $descricao    = $rows_livros['descricao'];

    echo "<hr>Código do Livro: $codigo <br> Nome do Livro:  ".utf8_encode($nome)." <br> Descrição do Livro:".utf8_encode($descricao)." <hr><br><p> <br>
    <a href='editar.php?update=$id' >Editar Livro<a/> ou <a href='deletar.php?delete=$id'>Excluir Livro<a/><br>
    "
   ;
}



?>