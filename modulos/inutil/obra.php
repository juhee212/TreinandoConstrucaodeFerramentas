<?php
include_once('restrit/conexao.php');

//cadastra obras
$os = $_POST['os'];
$contratante = $_POST['contratante'];
$consolidadora = $_POST['consolidadora'];
$previsao_comeco = $_POST['previsao_comeco'];
$responsavel = $_POST['responsavel'];
$tarefas = $_POST['tarefas'];


$result = mysqli_query($con, "INSERT INTO obras(os,contratante,consolidadora,previsao_comeco,responsavel,tarefas)
    VALUES ('$os','$contratante','$consolidadora','$previsao_comeco','$responsavel','$tarefas')");


mysqli_close($con);
header("location: ../www/layout/diario_de_obra/obras.php");

?>