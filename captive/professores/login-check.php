<?php
  session_start();
  require('../../config/database.php');

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
    header('location:http://wifi.itpacporto.com.br/captive/professores/recover.php');
  }else{
      echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://wifi.itpacporto.com.br/captive/professores/forgot.php'>
              <script type=\"text/javascript\">
                alert(\"CPF ou Data de Nascimento invalidos!\");
              </script>
            ";
          }
    
?>