<?php
  session_start();
  require('../../system/conecta.php');

  $username=$_POST['username'];
  $value=$_POST['value'];
  $nome=$_POST['nome'];
  $dtnascimento = $_REQUEST['dtnascimento'];
  
  $dtnascimento = explode(" ", $dtnascimento);
  list($date, $hora) = $dtnascimento;
  $data_sem_barra = array_reverse(explode("/", $date));
  $data_sem_barra = implode("-", $data_sem_barra);
  $data_sem_barra = $data_sem_barra . " " . $hora;

      $register = "INSERT INTO radcheck (username,nome,value,op,attribute,dtnascimento,created_at,updated_at) VALUES('$username','$nome', '" . md5($value) . "',':=','MD5-Password','$data_sem_barra',NOW(),NOW())" or die("error" . mysqli_errno($db_link));
      $result = mysqli_query($db_link, $register);


      //Verificar se salvou no banco de dados através "register" o qual verifica se existe o ID do último dado inserido
      if(mysqli_affected_rows($db_link) > 0){
        $_SESSION['msg'] = "<div class='alert alert-success autohidebut'> Usuário cadastrado com <b>sucesso!</b> </div>";
        header("Location:http://172.19.32.7:8004/index.php?zone=wifiprofessores&redirurl=http%3A%2F%2Fwww.msftconnecttest.com%2Fredirect");
      }else{
        $_SESSION['msg'] = "<div class='alert alert-danger autohidebut'> Erro ao <b>cadastrar</b> o usuário </div>";
        header("Location:../register.php");
      }
?>