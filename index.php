<?php  session_start(); ?>
<!DOCTYPE html>
<html>
	<head>	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ITPAC PORTO | LOGIN</title>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/datepicker3.css" rel="stylesheet">
		<link href="assets/css/styles.css" rel="stylesheet">
		
		<link rel="icon" type="image/jpg" href="assets/img/logo_1.png"/>
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
    	<div class="row">
    		<div class="col-xs-4"></div>
    		<div class="col-xs-4">
				<div class="login-logo" style="text-align:center">
		    		<img src="assets/img/logo.png">
		  		</div>
  			</div>
  			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
  				<div class="login-panel panel panel-danger">
  					<div class="panel-heading">Login</div>
  					<div class="panel-body">
				    	<form action="config/login-check.php" method="post">
				      		<fieldset>
				      		<div class="form-group">
						      	<?php
									if(isset($_SESSION['msg'])){
									echo $_SESSION['msg'];
									unset($_SESSION['msg']);
									}
				      			?>
						    </div>
							<div class="form-group">
								<input class="form-control" placeholder="Login" name="USU_LOGIN" type="text">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Senha" name="USU_SENHA" type="password">
							</div>
							<div class="row">
        						<div class="col-xs-4"></div>
        						<div class="col-xs-4">
          							<button type="submit" class="btn btn-danger btn-block btn-flat">Entrar</button>
        						</div>
      						</div>
						</form> 
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		<script src="assets/js/jquery-1.11.1.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
	</body>
</html>