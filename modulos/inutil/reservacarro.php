<?php
include_once('restrit/conexao.php');


$os = $_POST['os'];
$cep = $_POST['cep'];
$lugar_numero = $_POST['lugar_numero'];
$motorista = $_POST['motorista'];
$data_reserva = $_POST['data_reserva'];
$hora_pegar = $_POST['hora_pegar'];
$hora_entrega = $_POST['hora_entrega'];
$tipo = $_POST['tipo'];
$modelo = $_POST['modelo'];


$result = mysqli_query($con, "INSERT INTO reservas(os,cep,lugar_numero,motorista,data_reserva,hora_pegar,hora_entrega,tipo,modelo)
    VALUES ('$os','$cep','$lugar_numero','$motorista','$data_reserva', '$hora_pegar', '$hora_entrega', '$tipo', '$modelo')");

if ($result->error){
    header("Location: ../www/layout/solicitacao_veiculo/agendar.php?errorCon");
}else{
    header("Location: ../www/layout/solicitacao_veiculo/agendar.php?sucess");
}
?>