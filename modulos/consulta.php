<?php 

// include("restrit/conexao.php");

// // $sql="SELECT cargo FROM colaborador_obras WHERE nome_sobrenome = 'julia' ;";  tabela
// // //$result = $con.query($sql);
// // $result = $con->query($sql);
// // $result = mysqli_query($con, "SELECT cargo FROM colaborador_obras WHERE nome_sobrenome = ':julia' ;");
// // $Pesq = $_POST['nome_sobrenome'];
// $nome_sobrenome = json_decode($_POST['nome_sobrenome'], true);
// //$nome_sobrenome = $_POST['nome_sobrenome'];
// $result = mysqli_query($con, "SELECT cargo FROM colaborador_obras WHERE nome_sobrenome = '%nome_sobrenome')");

// while($row = $result->fetch_assoc()){
//     print_r($row['cargo']);
   
//   //  echo $row['cargo'] ;
// }

// mysqli_close($con);

$nome_sobrenome = mysqli_real_escape_string($con, $_POST['nome_sobrenome']);

$sql = "SELECT cargo FROM colaborador_obras WHERE nome_sobrenome = '$nome_sobrenome'";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['cargo'];
    }
} else {
    echo "Nenhum resultado encontrado.";
}

mysqli_close($con);
?>
