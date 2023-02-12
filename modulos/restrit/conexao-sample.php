<?php
$server = 'link_do_servidor_aqui';
$user = 'usuario_do_host_aqui';
$senha = 'senha_do_host_aqui';
$dbname = 'nome_do_database_aqui';

$con = mysqli_connect($server, $user, $senha, $dbname);
if (mysqli_connect_errno())
{
    trigger_error("Falha ao conectar ao MySQL: " . mysqli_connect_error(), E_USER_ERROR);
}
else{
//echo "Conexão realizada com sucesso";
}
?>
