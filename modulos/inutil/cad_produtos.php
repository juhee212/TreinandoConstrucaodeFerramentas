<?php
include_once('restrit/conexao.php');
$categoria = $_POST['categoria'];
$nome_produto = $_POST['nome_produto'];
$id_produto = $_POST['id_produto'];
$cod_fornecedor = $_POST['cod_fornecedor'];
$preco_un = $_POST['preco_un'];



if($result = mysqli_query($con, "INSERT INTO prod_inventario(nome_produto,id_produto,cod_fornecedor,categoria,preco_un)
     VALUES ('$nome_produto','$id_produto','$cod_fornecedor','$categoria', '$preco_un')")){

    header("location: ../www/layout/controle_Estoque/index.php");
    
}
?>