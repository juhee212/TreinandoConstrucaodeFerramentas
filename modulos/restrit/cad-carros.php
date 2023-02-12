<?php
include_once('conexao.php');


$tipo = $_POST['tipo'];
$fabricante = $_POST['fabricante'];
$ano = $_POST['ano'];
$modelo = $_POST['modelo'];
$placa = $_POST['placa'];


$result = mysqli_query($con, "INSERT INTO carros(tipo,fabricante,ano,modelo,placa)
    VALUES ('$tipo','$fabricante','$ano','$modelo','$placa')");
?>