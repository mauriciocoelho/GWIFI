<?php
  session_start();
  require('../../../config/database_visitantes.php');

  $username=$_POST['username'];
  $name=$_POST['name'];
  $value=$_POST['value'];
  $dtnascimento = $_REQUEST['dtnascimento'];
  $op=$_POST['op'];

  $dtnascimento = explode(" ", $dtnascimento);
  list($date, $hora) = $dtnascimento;
  $data_sem_barra = array_reverse(explode("/", $date));
  $data_sem_barra = implode("-", $data_sem_barra);
  $data_sem_barra = $data_sem_barra . " " . $hora;

      $register = "INSERT INTO radcheck (username,name,value,op,attribute,dtnascimento,created_at,updated_at) VALUES('$username','$name','" . md5($value) . "','$op','MD5-Password','$data_sem_barra',NOW(),NOW())" or die("error" . mysqli_errno($db_link));
      $result = mysqli_query($db_link, $register);


      //Verificar se salvou no banco de dados através "register" o qual verifica se existe o ID do último dado inserido
      if(mysqli_affected_rows($db_link) > 0){
        $_SESSION['msg'] = "<div class='alert alert-success autohidebut'> Usuário cadastrado com <b>sucesso!</b> </div>";
        header("Location: ../../../main.php?view=professores");
      }else{
        $_SESSION['msg'] = "<div class='alert alert-danger autohidebut'> Erro ao <b>cadastrar</b> o usuário </div>";
        header("Location: ../../../main.php?view=professores");
      }
?>