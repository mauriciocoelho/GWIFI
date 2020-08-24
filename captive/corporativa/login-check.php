<?php
  session_start();
  require('../../config/database_corporativa.php');

  $username=$_POST['username'];
  $cpf=$_POST['cpf'];

  $verifica_login="SELECT * FROM radcheck WHERE username='$username' AND cpf='$cpf' ";
  $result_verifica_login=mysqli_query($db_link, $verifica_login); 

  if (@mysqli_num_rows($result_verifica_login)==1){
    $_SESSION=mysqli_fetch_array($result_verifica_login,MYSQLI_ASSOC);
    header('location:http://wifi.itpacporto.com.br/captive/corporativa/recover.php');
  }else{
      echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://wifi.itpacporto.com.br/captive/corporativa/forgot.php'>
              <script type=\"text/javascript\">
                alert(\"Usuario ou CPF invalidos!\");
              </script>
            ";
          }
    
?>