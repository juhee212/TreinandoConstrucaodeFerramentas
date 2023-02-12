<?php
session_start();
?>
<!DOCTYPE html5>

<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="www/templates/style/main.css" />
	<link rel="shortcut icon" href="templates/img/favicon.png">
    <title>Home Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="templates/style/util.css">
	<link rel="stylesheet" type="text/css" href="templates/style/login.css">
	<script src="https://cdn.es.gov.br/scripts/jquery/1.11.2/jquery-1.11.2.min.js"></script>
	<script src="https://cdn.es.gov.br/scripts/jquery/jquery-mask/1.7.7/jquery.mask.min.js"></script>
</head>
<body>	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			<?php
				if (isset($_SESSION['msg'])) {
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
    		?>
				<form action="modulos/login.php" method="POST" id="login-form" class="login100-form validate-form">
					<!-- <span class="login100-form-title p-b-26">
					Bem vindo
					</span> -->
				
					<span class="login100-form-title p-b-48">
						<img class="logotop" src="templates/img/logo.png" alt="">
					</span>

					<div class="wrap-input100 validate-input">
						<span  class="wrap-span">Email</span><span class="carac-1">&lowast;</span><br>
						<input class="input100" type="text" name="email" id="email">
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="wrap-span">Senha</span><span class="carac-1">&lowast;</span><br>
						<input class="input100" type="password" name="senha" required>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit" id="submit" type="submit">
								Entrar
							</button>
						</div>

						<div id="pAviso1" style="display:none" class="center">
						 <span >Erro de conexão. Por favor, comunique ao suporte!</span>
						</div>

					    <div id="pAviso2" style="display:none" class="center">
						 <span >ERRO:  Senha ou email incorretos, por favor verifique!</span>
						</div>

						<div id="pAviso3" style="display:none" class="center">
						 <span >Preencha sua senha e email!</span>
						</div>
					</div>

					<div class="text-center p-t-6">
						<span class="txt1">
							Ainda não tem conta?
						</span>

						<a class="txt2" href="cadastrar.php">
							Criar
						</a>
					</div>
					<div class="text-center p-t-6">
						<span class="txt1">
							Perdeu a senha?
						</span>

						<a class="txt2" href="recuperarsenha.php">
							Redefinir
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
	


	<script src="templates/js/main.js"></script>
	<script src="templates/js/modaiserro.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
	<script>
		$(document).ready(function() {
		$("submit").click(function(event){
		event.preventDefault();
		linkLocation = this.href;
		$("header").fadeOut(1000, redirectPage);
		});
		
		function redirectPage() {
		window.location = linkLocation;
		}
		
		});
	</script>
</body>
</html>