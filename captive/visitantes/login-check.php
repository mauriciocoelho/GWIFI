<?php
  session_start();
  require('../../config/database_visitantes.php');

  $username=$_POST['username'];
  $dtnascimento=$_POST['dtnascimento'];

  $dtnascimento = explode(" ", $dtnascimento);
  list($date, $hora) = $dtnascimento;
  $data_sem_barra = array_reverse(explode("/", $date));
  $data_sem_barra = implode("-", $data_sem_barra);
  $data_sem_barra = $data_sem_barra . " " . $hora;


  $verifica_login="SELECT * FROM radcheck WHERE username='$username' AND dtnascimento='$data_sem_barra '";
  $result_verifica_login=mysqli_query($db_link, $verifica_login); 

  if (@mysqli_num_rows($result_verifica_login)==1){
    $_SESSION=mysqli_fetch_array($result_verifica_login,MYSQLI_ASSOC);
    header('location:http://wifi.itpacporto.com.br/captive/visitantes/recover.php');
  }else{
    $_SESSION['msg'] = "<br><center><h6><font color='red'> Login ou Senha estão <b>inválidos</b></font></h6></center>";
    header("Location:http://wifi.itpacporto.com.br/captive/visitantes/forgot.php");
  }
    
?>