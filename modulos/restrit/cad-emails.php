<?php
    include_once('conexao.php');
    $emailcolab = $_POST['emailcolab'];
    $result = mysqli_query($con, "INSERT INTO emails_colab(emailcolab)
        VALUES ('$emailcolab')
     ");
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
        <input type="email" name="emailcolab" placehold="Digite o email do colaborador">
        <button>Enviar</button>
    </form>
</body>
</html>