<!DOCTYPE html>
<html lang="en">
<head>
	<title>ITPAC PORTO - WIFI</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../assets-login/images/icons/ruby.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets-login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets-login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets-login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../assets-login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets-login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets-login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets-login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../assets-login/images/PortalLogo.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="login-check.php">
					<center><img src="../assets-login/images/itpac-02.png" alt="IMG"></center>
					<br>

					<center><h4>
						Trocar a senha
					</h4></center>

					<br><center><h6>Identifique-se para trocar sua senha.</h6></center>

	
					<br><div class="wrap-input100 validate-input" data-validate = "Digite a Senha">
						<input class="input100" type="text" name="username" placeholder="CPF (somente números)">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-certificate" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Digite a Senha">
						<input class="input100" type="text" name="dtnascimento" id="dtnascimento-input" placeholder="Data de Nascimento">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-calendar" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" name="accept" class="login100-form-btn" onclick="myFunction()" value="Avançar" >
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							
						</span>
						<a class="txt2" href="http://172.19.32.7:8004/index.php?zone=wifiprofessores&redirurl=http%3A%2F%2Fwww.msftconnecttest.com%2Fredirect">
							voltar
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							
						</a>
					</div>

					<footer>
						<center><p> <a style="color: red" href="https://mauriciocoelho.github.io/">Copyright &copy; By T.I <a style="color: #000" href="http://www.itpacporto.com.br/default.aspx">ITPAC PORTO NACIONAL</a></p> </center>
					</footer>

				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="../assets-login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets-login/vendor/bootstrap/js/popper.js"></script>
	<script src="../assets-login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets-login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets-login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="../assets-login/js/main.js"></script>

	<script src="../assets/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="../assets/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <script type="text/javascript">
    	$("#dtnascimento-input").mask("00/00/0000");		
	</script>

</body>
</html>