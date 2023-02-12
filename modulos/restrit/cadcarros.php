<?php
include_once('restrit/conexao.php');


$tipo = $POST['tipo'];
$modelo = $_POST['modelo'];
$fabricante = $_POST['fabricante'];
$ano = $_POST['ano'];
$placa = $_POST['placa'];


$result = mysqli_query($con, "INSERT INTO carros(tipo,modelo,fabricante,ano,placa)
    VALUES ('$tipo','$modelo','$fabricante','$ano','$placa')");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cadastro emails</title>
</head>
<body>
    <form action="" method="POST">
        <input type="email" name="tipo" placehold="Digite o tipo do carro">
        <input type="email" name="modelo" placehold="Digite o modelo do carro">
        <input type="email" name="fabricante" placehold="Digite o fabricante do carro">
        <input type="email" name="ano" placehold="Digite o ano do carro">
        <input type="email" name="placa" placehold="Digite a placa do carro">
        <button>Enviar</button>
    </form>
</body>
</html>