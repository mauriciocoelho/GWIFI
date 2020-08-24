<?php  
	session_start();  
	if(!isset($_SESSION["USU_NOME"]))
	{
	 header("location:http://localhost/GWIFI/");
	}
?>

  <?php include "views/layouts/header.php" ?>
  
  <?php include "views/layouts/sidebar.php" ?>
    
  <div class="content-wrapper">
    
    <?php include "core/core.php" ?>       

  </div><!-- /.content-wrapper -->

  <?php include "views/layouts/footer.php" ?>   
  