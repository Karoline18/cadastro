
<?php
include("conn.php");

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$id = $_POST['id'];

$insere = mysqli_query($conn, "UPDATE tb_livros SET codigo='$codigo', nome='$nome', descricao='$descricao' WHERE id = '$id' ") or die(mysqli_error());

if($insere){

    echo "Livro <strong>".$nome."</strong> Atualizado  com Sucesso!";
    header("Refresh: 2; url = index.php");
}else{

echo "Erro";

}

