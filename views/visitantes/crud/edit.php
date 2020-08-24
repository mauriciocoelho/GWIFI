<?php
  session_start();
  include_once '../../../config/database_visitantes.php';

  $id=$_POST['id'];
  $username=$_POST['username'];
  $name=$_POST['name'];
  $op=$_POST['op'];  
  $dtnascimento = $_REQUEST['dtnascimento'];
  $value=$_POST['value'];

  $dtnascimento = explode(" ", $dtnascimento);
  list($date, $hora) = $dtnascimento;
  $data_sem_barra = array_reverse(explode("/", $date));
  $data_sem_barra = implode("-", $data_sem_barra);
  $data_sem_barra = $data_sem_barra . " " . $hora;


    if ($value == '') {
 
      $edit="UPDATE radcheck SET username='$username', op='$op', name='$name', dtnascimento='$data_sem_barra', updated_at=NOW() WHERE id='$id'";
      $result=mysqli_query($db_link, $edit);
    }
    else{
      $edit="UPDATE radcheck SET username='$username', op='$op', name='$name', dtnascimento='$data_sem_barra', updated_at=NOW(), value='" . md5($value) . "' WHERE id='$id' ";
      $result=mysqli_query($db_link, $edit);
    }

    //Verificar se salvou no banco de dados através "edit" o qual verifica se existe o ID do último dado inserido
    if(mysqli_affected_rows($db_link) > 0){
      $_SESSION['msg'] = "<div class='alert alert-success autohidebut'> Usuário atualizado com <b>sucesso!</b> </div>";
      header("Location:../../../main.php?view=professores");
    }else{
      $_SESSION['msg'] = "<div class='alert alert-danger autohidebut'> Erro ao <b>atualizar</b> o usuário </div>";
      header("Location:../../../main.php?view=professores");
    }
?>
