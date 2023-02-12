<!DOCTYPE html5>

<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="templates/style/main.css" />
	<link rel="shortcut icon" href="templates/img/favicon.png">
    <title>Cadastrar - Tramo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="templates/style/util.css">
	<link rel="stylesheet" type="text/css" href="templates/style/login.css">
	<script src="https://cdn.es.gov.br/scripts/jquery/1.11.2/jquery-1.11.2.min.js"></script>
	<script src="https://cdn.es.gov.br/scripts/jquery/jquery-mask/1.7.7/jquery.mask.min.js"></script>
</head>
<style> 
.wrap-login100{
    width: 552px;
}
</style>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="modulos/cad.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-48">
						<img class="logotop" src="templates/img/logo.png" alt="">
					</span>

					<div class="wrap-input100 validate-input">
						<span  class="wrap-span">Email</span><span class="carac-1">&lowast;</span><br>
						<input class="input100" type="text" name="email"  id="email">
					</div>

                    <div class="wrap-input100 validate-input">
						<span  class="wrap-span">Nome e sobrenome</span><span class="carac-1">&lowast;</span><br>
						<input class="input100" type="text" name="nome">
					</div>

                    <div class="wrap-input100 validate-input">
						<span  class="wrap-span">Setor</span><span class="carac-1">&lowast;</span><br>
                        <select name="setor">
                            <option >Projetos</option>
                            <option >Comercial</option>
                            <option >Suprimentos</option>
                            <option >Produção</option>
                            <option >Financeiro</option>
                            <option >Gestão de pessoas</option>
                            <option >Almoxarifado</option>
                            <option >TI</option>
                        </select>
                        </select>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span id="olho" class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<span  class="wrap-span">Senha</span><span class="carac-1">&lowast;</span><br>
						<input class="input100" id="senha" type="password" name="senha">
					</div>
					
					<div id="pAviso4" style="display:none" class="center">
						 <span >Email já ultilizado, comunique o suporte!</span>
					</div>

					<div class="container-login100-form-btn" id="msgerror">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit" id="submit" type="submit"> 
								Cadastrar
							</button>
						</div>
					</div>


					<div class="text-center p-t-6">
						<span class="txt1">
							Já possui conta?
						</span>

						<a class="txt2" href="index.php">
							Entrar
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
	<script src="templates/js/modaiserro.js"></script>
</body>
</html>