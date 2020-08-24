<?php
	$username="radius";
	$password="radpass";
	$host="172.19.0.153";
	$database="radius";
	$db_link=mysqli_connect($host,$username,$password,$database)or die("Erro na conexao com o Banco de Dados".mysqli_error($db_link));
	if (mysqli_connect_error()){
	echo "Não foi possível conectar-se ao MySql. Por favor, tente novamente";
		
	exit();
	}

?>