<?php
include_once('restrit/conexao.php');

//cadastra obras
$id_produto = $_POST['id_produto'];
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];
$filial = $_POST['consolidadora'];
$data_movimento = date("y-m-d");
$solicitante = $_POST['quem_solicitou'];
$movimento = $_POST['movimento'];

if($result = mysqli_query($con, "INSERT INTO inventario(id_produto,quantidade,valor,consolidadora,data_movimento,quem_solicitou,movimento)
    VALUES ('$id_produto','$quantidade','$valor','$filial','$data_movimento','$solicitante','$movimento')") or print mysql_error()){
        header("location: ../www/layout/controle_Estoque/index.php");
    }

//mysqli_close($con);
//echo "<script>alert ('Cadastrado com sucesso');</script>";

?>