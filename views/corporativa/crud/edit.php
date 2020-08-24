<?php
  session_start();
  require('../../../config/database_corporativa.php');

  $id=$_POST['id'];
  $name=$_POST['name'];
  $username=$_POST['username'];
  $cpf=$_POST['cpf'];
  $op=$_POST['op'];
  $value=$_POST['value'];
    if ($value == '') {
  
    $register="UPDATE radcheck SET name='$name',username='$username',cpf='$cpf',op='$op',updated_at=NOW() WHERE id='$id'";
    $result=mysqli_query($db_link,$register);
  }
    else{
    $register="UPDATE radcheck SET name='$name', username='$username', cpf='$cpf', op='$op', value='" . md5($value) . "',updated_at=NOW() WHERE id='$id' ";
    $result=mysqli_query($db_link,$register);
  }

  //Verificar se salvou no banco de dados através "register" o qual verifica se existe o ID do último dado inserido
  if(mysqli_affected_rows($db_link) > 0){
    $_SESSION['msg'] = "<div class='alert alert-success autohidebut'> Usuário atualizado com <b>sucesso!</b> </div>";
    header("Location:../../../main.php?view=corporativa");
  }else{
    $_SESSION['msg'] = "<div class='alert alert-danger autohidebut'> Erro ao <b>atualizar</b> o usuário </div>";
    header("Location:../../../main.php?view=corporativa");
  }
?>
