<?php
session_start();
  require('../../../config/database.php');
    $USU_NOME=$_POST['USU_NOME'];
    $USU_SENHA=$_POST['USU_SENHA'];
    $USU_LOGIN=$_POST['USU_LOGIN'];
    $USU_NIVEL=$_POST['USU_NIVEL'];
    $arquivo= $_FILES['arquivo']['name'];
      
    if ($arquivo == "")
    {
      $register = "INSERT INTO usuario (USU_NOME,USU_SENHA,USU_LOGIN,USU_NIVEL,CREATED_AT,UPDATED_AT) VALUES('$USU_NOME', '" . md5($USU_SENHA) . "','$USU_LOGIN','$USU_NIVEL',NOW(),NOW())" or die("error" . mysqli_errno($db_link));
      $result = mysqli_query($db_link, $register);
            //Verificar se salvou no banco de dados através "register" o qual verifica se existe o ID do último dado inserido
      if(mysqli_affected_rows($db_link) > 0)
      {
        $_SESSION['msg'] = "<div class='alert alert-success autohidebut'> Usuário cadastrado com <b>sucesso!</b> </div>";
        header("Location:../../../main.php?view=usuarios");
      }
      else
      {
        $_SESSION['msg'] = "<div class='alert alert-danger autohidebut'> Erro ao <b>cadastrar</b> o usuário </div>";
        header("Location:../../../main.php?view=usuarios");
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
      if($_FILES['arquivo']['error'] != 0)
      {
        die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
        exit; //Para a execução do script
      }
      //Faz a verificação da extensao do arquivo
      $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
      if(array_search($extensao, $_UP['extensoes'])=== false)
      {
        echo "
          <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../main.php?view=usuarios'>
            <script type=\"text/javascript\">
              alert(\"Usuário não foi cadastrado! a extesão da foto inválida.\");
            </script>
          ";
      }
      //Faz a verificação do tamanho do arquivo
      else if ($_UP['tamanho'] < $_FILES['arquivo']['size'])
      {
        echo "
          <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../main.php?view=usuarios'>
            <script type=\"text/javascript\">
              alert(\"Usuário não foi cadastrado! a foto muito grande.\");
            </script>
            ";
      }
      //O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
      else
      {
        //Primeiro verifica se deve trocar o nome do arquivo
        if($UP['renomeia'] == true)
        {
          //Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
          $USU_FOTO = time().'.jpg';
        }
        else
        {
          //mantem o nome original do arquivo
          $USU_FOTO = $_FILES['arquivo']['name'];
        }
        //Verificar se é possivel mover o arquivo para a pasta escolhida
        if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $USU_FOTO))
        {
          //Upload efetuado com sucesso, exibe a mensagem
          $register = "INSERT INTO usuario (USU_NOME,USU_SENHA,USU_LOGIN,USU_NIVEL,USU_FOTO,CREATED_AT,UPDATED_AT) VALUES('$USU_NOME', '" . md5($USU_SENHA) . "','$USU_LOGIN','$USU_NIVEL','$USU_FOTO',NOW(),NOW())" or die("error" . mysqli_errno($db_link));
          $result = mysqli_query($db_link, $register);
          //Verificar se salvou no banco de dados através "register" o qual verifica se existe o ID do último dado inserido
          if(mysqli_affected_rows($db_link) > 0)
          {
            $_SESSION['msg'] = "<div class='alert alert-success autohidebut'> Usuário cadastrado com <b>sucesso!</b> </div>";
            header("Location:../../../main.php?view=usuarios");
          }
          else
          {
            $_SESSION['msg'] = "<div class='alert alert-danger autohidebut'> Erro ao <b>cadastrar</b> o usuário </div>";
            header("Location:../../../main.php?view=usuarios");
          }
        }
      }          
    }
?>
