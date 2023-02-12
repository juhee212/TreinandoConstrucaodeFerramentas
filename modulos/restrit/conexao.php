<?php
$server = 'localhost';
$user = 'root';
$senha = '';
$dbname = 'projeto';

$con = mysqli_connect($server, $user, $senha, $dbname);
if (mysqli_connect_errno())
{
    trigger_error("Falha ao conectar ao MySQL: " . mysqli_connect_error(), E_USER_ERROR);
}
else{
//echo "Conexão realizada com sucesso";
}
?>
