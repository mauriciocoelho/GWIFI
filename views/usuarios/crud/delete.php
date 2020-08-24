<?php
  session_start();
  require('../../../config/database.php');

  $USU_ID = $_GET['USU_ID'];
  $sql = "Delete from usuario where md5(USU_ID) = '$USU_ID'";

  //Verificar se salvou no banco de dados através "sql" o qual verifica se existe o ID do último dado inserido
  if($db_link->query($sql) === true){
    $_SESSION['msg'] = "<div class='alert alert-success autohidebut'> Usuário deletado com <b>sucesso!</b> </div>";
    header("Location:../../../main.php?view=usuarios");
  }else{
    $_SESSION['msg'] = "<div class='alert alert-danger autohidebut'> Erro ao <b>deletar</b> o usuário </div>";
    header("Location:../../../main.php?view=usuarios");
  }
?>