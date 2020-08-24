<?php
  session_start();
  require('../../../config/database_corporativa.php');

  $name=$_POST['name'];
  $username=$_POST['username'];
  $cpf=$_POST['cpf'];
  $value=$_POST['value'];
  $op=$_POST['op'];


  $register = "INSERT INTO radcheck (name,username,cpf,value,op,created_at,updated_at) VALUES('$name','$username','$cpf', '" . md5($value) . "','$op',NOW(),NOW())" or die("error" . mysqli_errno($db_link));
  $result = mysqli_query($db_link, $register);

    //Verificar se salvou no banco de dados através "register" o qual verifica se existe o ID do último dado inserido
  if(mysqli_affected_rows($db_link) > 0){
    $_SESSION['msg'] = "<div class='alert alert-success autohidebut'> Usuário cadastrado com <b>sucesso!</b> </div>";
    header("Location:../../../main.php?view=corporativa");
  }else{
    $_SESSION['msg'] = "<div class='alert alert-danger autohidebut'> Erro ao <b>cadastrar</b> o usuário </div>";
    header("Location:../../../main.php?view=corporativa");
  }
?>