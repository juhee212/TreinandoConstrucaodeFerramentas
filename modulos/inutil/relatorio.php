<?php
// //session_start();
// //include_once('restrit/conexao.php');

// //if (!$_POST['submit']){

    $os = $_POST['os'];
// //   $dehora = $_POST['de_hora'];
//     $atehora = $_POST['ate_hora'];
//     $consolidadora = $_POST['consolidadora'];
//     $condicaoatm = $_POST['condicaoatm'];
//     $sso = $_POST['sso'];
//     $andamento = $_POST['andamento'];
//     $ocorrencias = $_POST['ocorrencia'];
//     $colab = $_POST['nome_sobrenome'];


//     $result = mysqli_query($con, "INSERT INTO relatorio(os,de_hora,ate_hora,consolidadora,condicaoatm,sso,andamento,ocorrencia,nome_sobrenome)
//         VALUES ('$os','$dehora','$atehora','$consolidadora','$condicaoatm','$sso','$andamento','$ocorrencias','$colab')");
// }
// foreach($_FILES["arquivo"]["tmp_name"] as $key=>$tmp_name) {
//     $file_name = $_FILES["arquivo"]["name"][$key];
//     $pasta_dir = "../www/layout/diario_de_obra/upload_img/";
//     $diretorio_img = $pasta_dir . $file_name;
//     $arquivo = $_FILES["arquivo"]['tmp_name'][$key];
//     $date = date("Y-m-d");
//     $extensao = pathinfo ( $file_name, PATHINFO_EXTENSION );
//     // Converte a extensão para minúsculo
//     $extensao = strtolower ( $extensao );
//     // Somente imagens, .jpg;.jpeg;.gif;.png
//     // Aqui eu enfileiro as extensões permitidas e separo por ';'
//     // Isso serve apenas para eu poder pesquisar dentro desta String
//     if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
//         $extensao = ".".$extensao;
//         $arquivo_novo = "../www/layout/diario_de_obra/upload_img/" . $date . "-" . $os . $extensao;
//         rename($arquivo, $arquivo_novo);
//     }
//     echo $arquivo_novo . "<br><br>";
//     //move_uploaded_file($arquivo_novo, $diretorio_img);
//     // if($result = mysqli_query($con,"INSERT INTO relatorio_img VALUES (NULL, '$os', '$arquivo_novo', '$diretorio_img')")){
//     //     $_SESSION['msg'] = "<p style='color:green;'>Upload realizado com sucesso</p>";
//     //     header("Location: ../www/layout/diario_de_obra/relatorio.php");
//     // } else{
//     //     $_SESSION['msg'] = "<p style='color:red;'>Não foi possível realizar o upload! Revise os dados preenchidos.</p>";
//     //     header("Location: ../www/layout/diario_de_obra/relatorio.php");
//     // }
// }

//$files = array_filter($_FILES['upload']['name']); //something like that to be used before processing files.

// Count # of uploaded files in array
$total = count($_FILES['arquivo']['name']);
$pasta_dir = "../www/layout/diario_de_obra/upload_img/";
// Loop through each file
for( $i=0 ; $i < $total ; $i++ ) {
    $arquivo = $_FILES['arquivo']['name'][$i];
    $extensao = pathinfo ( $arquivo, PATHINFO_EXTENSION );
    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
            $extensao = ".".$extensao;
    }
  //Get the temp file path
  $tmpFilePath = $_FILES['arquivo']['tmp_name'][$i];

  //Make sure we have a file path
  if ($tmpFilePath != ""){
    //Setup our new file path
   // $nome1 = $_FILES['arquivo']['name'][$i];
    $nome2 = $i . "_" . date("Y-m-d") . "_"  .  $os .  $extensao;
   // rename($nome1,$nome2);
    $newFilePath = "../www/layout/diario_de_obra/upload_img/" . $nome2;

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

      //Handle other code here
        echo "enviado";
    } else{
        // Array com os tipos de erros de upload do PHP
        $_UP['erros'][0] = 'Não houve erro';
        $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
        $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
        $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
        $_UP['erros'][4] = 'Não foi feito o upload do arquivo';

        // Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
        if ($_FILES['arquivo']['error'] != 0) {
        die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
        exit; // Para a execução do script
        }
    }
  }
}



?>