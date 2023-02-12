<?php
include_once('restrit/conexao.php');

$email = $_POST['email'];
$nome = $_POST['nome'];
$setor = $_POST['setor'];
$senha = $_POST['senha'];
#Verifica se tem um email para pesquisa
if(isset($_POST['email'])){ 

    #Recebe o Email Postado
    $emailPostado = $_POST['email'];

    #Conecta banco de dados 
    $sql = mysqli_query($con, "SELECT * FROM emails_colab WHERE emailcolab = '{$emailPostado}'") or print mysql_error();

    #Se o retorno for maior do que zero, diz que já existe um.
    if(mysqli_num_rows($sql) == 1){
        header("Location: ../index.php?errorExist");
     //   header("Location: ../index.php");
    }
    else {
        header("Location: restrit/nopermission.php"); 
    die();
    }
}

$result = mysqli_query($con, "INSERT INTO login_interno(email,nome,setor,senha)
    VALUES ('$email','$nome','$setor','$senha')");

?>

