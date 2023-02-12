<?php
session_start();

include_once('restrit/conexao.php');

$nome_sobrenome = $_POST['nome_sobrenome'];
$consolidadora = $_POST['consolidadora'];
$cargo = $_POST['cargo'];
$responsavel = $_POST['responsavel'];


if($result = mysqli_query($con, "INSERT INTO colaborador_obras(nome_sobrenome,consolidadora,cargo,responsavel)
    VALUES ('$nome_sobrenome','$consolidadora','$cargo','$responsavel')")){


    $_SESSION['msg'] = "<div style='text-align:center; background-color: green;color: white;font-size: 15px;width: 388px;padding: 20px;border-radius: 10px;margin-top: 30px;justify-content: center;'><span >Cadastrado com sucesso!</span></div>";
    header("Location: ../www/layout/diario_de_obra/colaborador.php");
} else {
    $_SESSION['msg'] = "<div style='text-align:center; background-color: red;color: white;font-size: 15px;width: 388px;padding: 20px;border-radius: 10px;margin-top: 30px;justify-content: center;'><span >Erro ao cadastrar!</span></div>";
    header("Location: ../www/layout/diario_de_obra/colaborador.php");
}
    

?>