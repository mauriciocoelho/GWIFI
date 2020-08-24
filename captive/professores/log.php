<?php
  session_start();
  require('../../config/database.php');

  $auth_user=$_REQUEST['auth_user'];
  $ip=$_REQUEST['ip'];

  $register="INSERT INTO log (auth_user,ipaddress,session_start) VALUES('$auth_user','$ip',NOW())" or die("error" . mysqli_errno($db_link));
  $result_register=mysqli_query($db_link,$register);

  if(mysqli_affected_rows($db_link) > 0){
        echo "
          <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://www.google.com/'>            
          ";
          }else{
          //
          echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://www.google.com/'>
              
            ";
          }
           
?>