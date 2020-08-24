<?php
session_start();
  require('../../../config/database.php');
  $USU_ID=$_POST['USU_ID'];
  $USU_NOME=$_POST['USU_NOME'];
  $USU_LOGIN=$_POST['USU_LOGIN'];
  $USU_NIVEL =$_POST['USU_NIVEL'];
  $USU_SENHA=$_POST['USU_SENHA'];
  $USU_STATUS=$_POST['USU_STATUS'];
  $arquivo=$_FILES['arquivo']['name'];
 
  if ($arquivo == "")
			{
        if ($USU_SENHA == "")
				{
					$editar = "UPDATE usuario SET USU_NOME='$USU_NOME',USU_LOGIN='$USU_LOGIN',USU_NIVEL='$USU_NIVEL',USU_STATUS='$USU_STATUS',UPDATED_AT=NOW() WHERE USU_ID='$USU_ID' ";
					$result=mysqli_query($db_link,$editar);
					if(mysqli_affected_rows($db_link) > 0){
	          $_SESSION['msg'] = "<div class='alert alert-success autohidebut'><font color='gray'> Cadastro atualizado com <b>sucesso!</b></font></div>";
	            header("Location:../../../main.php?view=usuarios");
          }else{
            $_SESSION['msg'] = "<div class='alert alert-danger autohidebut'> Erro ao <b>atualizar</b> o usuario </div>";
              header("Location:../../../main.php?view=usuarios");
          }
				}
        else
        {
					$editar = "UPDATE usuario SET USU_NOME='$USU_NOME',USU_LOGIN='$USU_LOGIN',USU_NIVEL='$USU_NIVEL',USU_STATUS='$USU_STATUS',UPDATED_AT=NOW(),USU_SENHA='". md5($USU_SENHA) . "' WHERE USU_ID='$USU_ID'";
					$result=mysqli_query($db_link,$editar);
					if(mysqli_affected_rows($db_link) > 0){
            $_SESSION['msg'] = "<div class='alert alert-success autohidebut'><font color='gray'> Cadastro atualizado com <b>sucesso!</b></font></div>";
              header("Location:../../../main.php?view=usuarios");
          }else{
            $_SESSION['msg'] = "<div class='alert alert-danger autohidebut'> Erro ao <b>atualizar</b> o usuario </div>";
              header("Location:../../../main.php?view=usuarios");
          }

				}
      }     
      
      else
			{

		      //Pasta onde o arquivo vai ser salvo
		      $_UP['pasta'] = '../../../assets/img/uploads/usuarios/';
		      
		      //Tamanho máximo do arquivo em Bytes
		      $_UP['tamanho'] = 1024*1024*100; //5mb
		      
		      //Array com a extensões permitidas
		      $_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
		      
		      //Renomeiar
		      $_UP['renomeia'] = false;
		      
		      //Array com os tipos de erros de upload do PHP
		      $_UP['erros'][0] = 'Não houve erro';
		      $_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
		      $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
		      $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
		      $_UP['erros'][4] = 'Não foi feito o upload do arquivo';
		      
		      //Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
		      if($_FILES['arquivo']['error'] != 0){
		        die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
		        exit; //Para a execução do script
		      }
		      
		      //Faz a verificação da extensao do arquivo
		      $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
		      if(array_search($extensao, $_UP['extensoes'])=== false){    
		        echo "
		          <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../main.php?view=usuarios'>
		          <script type=\"text/javascript\">
		            alert(\"Cliente nao cadastrado! a extesão da img inválida.\");
		          </script>
		        ";
		      }
		      
		      //Faz a verificação do tamanho do arquivo
		      else if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
		        echo "
		          <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../main.php?view=usuarios'>
		          <script type=\"text/javascript\">
		            alert(\"Cliente nao cadastrado! a img muito grande.\");
		          </script>
		        ";
		      }
		      
		      //O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta img
			    else
			    {
			        //Primeiro verifica se deve trocar o nome do arquivo
			        if($_UP['renomeia'] == true){
			          //Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
			          $USU_FOTO = time().'.jpg';
			        }else{
			          //mantem o nome original do arquivo
			          $USU_FOTO = $_FILES['arquivo']['name'];
			        }
			        //Verificar se é possivel mover o arquivo para a pasta escolhida
			        if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $USU_FOTO))
			        {
			            //Upload efetuado com sucesso, exibe a mensagem
			            if ($USU_SENHA == '')
			            {
			             	$editar = "UPDATE usuario SET USU_NOME='$USU_NOME',USU_LOGIN='$USU_LOGIN',USU_NIVEL='$USU_NIVEL',USU_STATUS='$USU_STATUS',UPDATED_AT=NOW(),USU_FOTO='$USU_FOTO' WHERE USU_ID='$USU_ID' ";
				             	$result=mysqli_query($db_link,$editar);
							        if(mysqli_affected_rows($db_link) > 0){
			                  $_SESSION['msg'] = "<div class='alert alert-success autohidebut'><font color='gray'> Cadastro atualizado com <b>sucesso!</b></font></div>";
			                  header("Location:../../../main.php?view=usuarios");
			                }else{
			                  $_SESSION['msg'] = "<div class='alert alert-danger autohidebut'> Erro ao <b>atualizar</b> o usuario </div>";
			                  header("Location:../../../main.php?view=usuarios");
			                }
			            }else
			            {
			             	$editar = "UPDATE usuario SET USU_NOME='$USU_NOME',USU_LOGIN='$USU_LOGIN',USU_NIVEL='$USU_NIVEL',USU_STATUS='$USU_STATUS',UPDATED_AT=NOW(),USU_SENHA='". md5($USU_SENHA) . "',USU_FOTO='$USU_FOTO' WHERE USU_ID='$USU_ID'";
				             	$result=mysqli_query($db_link,$editar);
							        if(mysqli_affected_rows($db_link) > 0){
			                  $_SESSION['msg'] = "<div class='alert alert-success autohidebut'><font color='gray'> Cadastro atualizado com <b>sucesso!</b></font></div>";
			                  header("Location:../../../main.php?view=usuarios");
			                }else{
			                  $_SESSION['msg'] = "<div class='alert alert-danger autohidebut'> Erro ao <b>atualizar</b> o usuario </div>";
			                  header("Location:../../../main.php?view=usuarios");
			                }
			            }
			        }
			    }
			}
		?>
