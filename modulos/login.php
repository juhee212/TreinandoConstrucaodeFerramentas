<?php
session_start();
include_once('restrit/conexao.php');

if(isset($_POST['submit'], $_POST['email'], $_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(empty($email) || empty($senha)) {
        $_SESSION['msg'] = "<div class='alert alert-danger'>ERRO: Preencha todos os campos</div>";
        header("Location: ../index.php");
        exit;
    }

    try {
        $email = mysqli_real_escape_string($con, $email);

        $sql = "SELECT * FROM usuario WHERE email = '$email'";
        $result = mysqli_query($con, $sql);
        $usuario = mysqli_fetch_assoc($result);

        if(password_verify($senha, $usuario['senha'])) {
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: ../www/layout/index.php");
            exit;
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger'>ERRO: senha ou email incorretos!</div>";
            header("Location: ../index.php");
            exit;
        }
    } catch (Exception $e) {
        error_log($e->getMessage(), 0);
        $_SESSION['msg'] = "<div class='alert alert-danger'>ERRO: Ocorreu um erro ao processar sua requisição. Por favor, tente novamente mais tarde.</div>";
        header("Location: ../index.php");
        exit;
    }
} else {
    $_SESSION['msg'] = "<div class='alert alert-danger'>ERRO: Requisição inválida</div>";
    header("Location: ../index.php");
    exit;
}
?>