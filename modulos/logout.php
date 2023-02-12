<?php

// Início da função de logout
function logout() {
  // Inicia a sessão, se ainda não foi iniciada
  if (!isset($_SESSION)) {
    session_start();
  }

  // Limpa os dados de sessão do usuário
  session_destroy();

  // Redireciona o usuário de volta para a página inicial
  header("Location: ../../index.php");
  exit;
}
// Fim da função de logout

// Chama a função de logout
logout();
?>
