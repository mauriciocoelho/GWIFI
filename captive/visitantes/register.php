<?php
  session_start();
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

				<form class="login100-form validate-form" method="post" action="add.php">
					<center><img src="../assets-login/images/itpac-02.png" alt="IMG"></center>
					<br>

					<center><h4>
						cadastre-se
					</h4></center>

					<br><center><h6>Crie sua conta rápido e fácil</h6></center>

					<?php
				        if(isset($_SESSION['msg'])){
				            echo $_SESSION['msg'];
				            unset($_SESSION['msg']);
				        }
			        ?>	

					<br><div class="wrap-input100 validate-input" data-validate = "Digite o Nome">
						<input class="input100" type="text" name="name" onkeypress="return somenteLetras();" placeholder="Nome Completo">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Digite o CPF">
						<input class="input100" type="text" name="username" id="cpf" onkeypress="return somenteNumeros(event);" onblur="ValidaCPF(this)" placeholder="CPF (Somente números)">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-certificate" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Digite a Data de Nascimento">
						<input class="input100" type="text" id="dtnascimento-input" name="dtnascimento" placeholder="Data de Nascimento">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-calendar" aria-hidden="true"></i>
						</span>
					</div>

					<!--<div class="wrap-input100 validate-input" data-validate = "Digite o email">
						<input class="input100" type="email" name="email" placeholder="E-mail">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>-->

					<div class="wrap-input100 validate-input" data-validate = "Digite a Senha">
						<input class="input100" type="password" name="value" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>					
					
					<div class="container-login100-form-btn">
						<input type="submit" name="accept" class="login100-form-btn" value="Cadastrar" >
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							
						</span>
						<a class="txt2" href="http://172.19.32.7:8004/index.php?zone=wifivisitantes&redirurl=http%3A%2F%2Fwww.msftconnecttest.com%2Fredirect">
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
	<script src="../../assets/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="../../assets/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <script type="text/javascript">
		$("#dtnascimento-input").mask("00/00/0000");		
	</script>

	<script type="text/javascript">		
		/*função deixa digitar somente Letras*/
		function somenteLetras(){
			tecla = event.keyCode;
				if (tecla >= 48 && tecla <= 57){
	    			return false;
				}else{
	   			return true;
			}
		}
		/*função deixa digitar somente numeros*/
		function somenteNumeros(e){		
			var charCode = e.charCode ? e.charCode : e.keyCode; 
            if (charCode < 48 || charCode > 57) {
                return false;
            }
            /*limitar numero de caracteres */
            if ( ((document.querySelector('#cpf').value).trim()).length >=11 ){
            	return false;	        
            }            
		}
	</script>
	<script type="text/javascript">
		function ValidaCPF(elemento) {
			cpf = elemento.value;
			cpf = cpf.replace(/[^\d]+/g, '');
			    // Elimina CPFs invalidos conhecidos    
					if (cpf.length != 11 ||
			    	cpf == "00000000000" ||
				    cpf == "11111111111" ||
				    cpf == "22222222222" ||
				    cpf == "33333333333" ||
				    cpf == "44444444444" ||
				    cpf == "55555555555" ||
				    cpf == "66666666666" ||
				    cpf == "77777777777" ||
				    cpf == "88888888888" ||
			    	cpf == "99999999999")
			    	window.location.href = "http://wifi.itpacporto.com.br/captive/visitantes/register.php"; 
			  		// Valida 1o digito 
			 	add = 0;
			  	for (i = 0; i < 9; i++)
			    	add += parseInt(cpf.charAt(i)) * (10 - i);
			  	rev = 11 - (add % 11);
			  	if (rev == 10 || rev == 11)
			    	rev = 0;
			  	if (rev != parseInt(cpf.charAt(9)))
			  		window.location.href = "http://wifi.itpacporto.com.br/captive/visitantes/register.php";
			  	// Valida 2o digito 
			  	add = 0;
			  	for (i = 0; i < 10; i++)
			    	add += parseInt(cpf.charAt(i)) * (11 - i);
			  		rev = 11 - (add % 11);
			  		if (rev == 10 || rev == 11)
			    		rev = 0;
			  			if (rev != parseInt(cpf.charAt(10)))
			  				window.location.href = "http://wifi.itpacporto.com.br/captive/visitantes/register.php"; 
			}
	</script>
</body>
</html>