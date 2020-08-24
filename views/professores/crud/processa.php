<?php

	include_once("../../../config/database.php");
	
	//$dados = $_FILES['arquivo'];
	//var_dump($dados);
	
	if(!empty($_FILES['arquivo']['tmp_name'])){
		$arquivo = new DomDocument();
		$arquivo->load($_FILES['arquivo']['tmp_name']);
		//var_dump($arquivo);
		
		$linhas = $arquivo->getElementsByTagName("Row");
		//var_dump($linhas);
		
		$primeira_linha = true;
		
		foreach($linhas as $linha){
			if($primeira_linha == false){
				$username = $linha->getElementsByTagName("Data")->item(0)->nodeValue;
				echo "Username: $username <br>";
				
				$name = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
				echo "Nome Completo: $name <br>";
				
				$dtnascimento = $linha->getElementsByTagName("Data")->item(2)->nodeValue;
				echo "Data de Nascimento: $dtnascimento <br>";
				
				$value = $dtnascimento;				

				echo "<hr>";

				//Inserir o usuário no BD
				$result_professor = "INSERT INTO radcheck (username,attribute,value,op,name,dtnascimento,created_at,updated_at) VALUES ('$username','MD5-Password','" . md5($value) . "',':=','$name','$dtnascimento',NOW(),NOW())";
				$resultado_professor = mysqli_query($db_link, $result_professor);
			}
			$primeira_linha = false;
		}		
	}

	//Verifica se foi importado e redireciona para a pagina index 
    if(mysqli_affected_rows($db_link) > 0){
        $_SESSION['msg'] = "<div class='alert alert-success autohidebut'> Arquivo importado com <b>sucesso!</b> </div>";
        header("Location: ../../../main.php?view=professores");
    }else{
        $_SESSION['msg'] = "<div class='alert alert-danger autohidebut'> Erro ao <b>importar</b> o arquivo </div>";
        header("Location: ../../../main.php?view=professores");
    }
?>