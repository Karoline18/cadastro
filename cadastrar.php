<?php
include("conn.php");

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];


$insere = mysqli_query($conn, "INSERT INTO tb_livros SET codigo='$codigo', nome='$nome', descricao='$descricao' ") or die(mysqli_error());

if($insere){

    echo "Livro ".$nome." Cadastrado com Sucesso!";
    header('Location: index.php');

}else{

echo "Erro";
header('Location: index.php');
}