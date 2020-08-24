<?php
  session_start();
  require('../../config/database_corporativa.php');

  $id=$_POST['id'];
  $value=$_POST['value'];

  $edit="UPDATE radcheck SET updated_at=NOW(), value='" . md5($value) . "' WHERE id='$id' ";
  $result_edit=mysqli_query($db_link,$edit);

  if(mysqli_affected_rows($db_link) > 0){ 
        echo "
          <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://172.19.64.7:8006/index.php?zone=wificorporativa&redirurl=http%3A%2F%2Fwww.msftconnecttest.com%2Fredirect'>
            <script type=\"text/javascript\">
              alert(\"Senha alterada com sucesso!\");
            </script>
          ";
          }else{
          //
          echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://172.19.4.20/gwifi/captive/corporativa/recover.php'>
              <script type=\"text/javascript\">
                alert(\"erro ao alterar a senha!\");
              </script>
            ";
          }
           
?>