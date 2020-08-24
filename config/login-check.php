<?php
	session_start();
	require('database.php');

	$USU_LOGIN=$_POST['USU_LOGIN'];
	$USU_SENHA=md5($_POST['USU_SENHA']);

	$login="SELECT * FROM usuario WHERE USU_LOGIN='$USU_LOGIN' AND USU_SENHA='$USU_SENHA'";
	$result_login=mysqli_query($db_link, $login); 

	if (@mysqli_num_rows($result_login)==1){
		$_SESSION=mysqli_fetch_array($result_login,MYSQLI_ASSOC);
		header('location:../main.php?view=home');
	}else{
      $_SESSION['msg'] = "<div class='alert alert-danger'> login ou senha estão <b>invalidos!</b></div>";
      header("Location:http://wifi.itpacporto.com.br/");
    }
?>