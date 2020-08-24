<?php  
	session_start();  
	if(!isset($_SESSION["username"]))
	{
	 header("location:http://wifi.itpacporto.com.br/captive/corporativa/forgot.php");
	}
	include_once '../../config/database_corporativa.php';
?>


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

				<form class="login100-form validate-form" method="post" action="update.php">
					<center><img src="../assets-login/images/itpac-02.png" alt="IMG"></center>
					<br>

					<center><h4>
						
					</h4></center>

					<br><center><h6>digite a senha desejada.</h6></center>

					<input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>">

					<br><div class="wrap-input100 validate-input" data-validate = "Digite a Senha">
						<input class="input100" type="password" id="txtSenha" name="value" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-certificate" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Digite a Senha">
						<input class="input100" type="password" name="repetir_senha" oninput="validaSenha(this)" placeholder="Repita a Senha">
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
						<a class="txt2" href="http://wifi.itpacporto.com.br/captive/corporativa/portal.html">
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

	<script type="text/javascript">
		function validaSenha (input){ 
    		if (input.value != document.getElementById('txtSenha').value) {
    			input.setCustomValidity('as senhas não conferem');
  			} else {
    			input.setCustomValidity('');
  			}
		}
	</script>

</body>
</html>