<?php
  session_start();
  require('../../config/database_visitantes.php');

  $id=$_POST['id'];
  $value=$_POST['value'];

  $edit="UPDATE radcheck SET updated_at=NOW(), value='" . md5($value) . "' WHERE id='$id' ";
  $result_edit=mysqli_query($db_link,$edit);

  if(mysqli_affected_rows($db_link) > 0){ 
        echo "
          <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://172.19.32.7:8004/index.php?zone=wifivisitantes&redirurl=http%3A%2F%2Fwww.msftconnecttest.com%2Fredirect'>
            <script type=\"text/javascript\">
              alert(\"Senha alterada com sucesso!\");
            </script>
          ";
          }else{
          //
          echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://wifi.itpacporto.com.br/captive/visitantes/recover.php'>
              <script type=\"text/javascript\">
                alert(\"erro ao alterar a senha!\");
              </script>
            ";
          }
           
?>