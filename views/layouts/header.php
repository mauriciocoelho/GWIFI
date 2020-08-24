<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITPAC PORTO | WIFI</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/datepicker3.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="assets/img/logo_1.png"/>
    
    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><span>ITPAC</span>PORTO</a>
          <ul class="nav navbar-top-links navbar-right">
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav navbar-right pull-right">
                <li>
                  <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><?php 
                      if ($_SESSION['USU_FOTO']=="") { ?>                    
                      <td><img class="img-circle" alt="User Image" width="35" src='assets/img/user-default.png'></td>
                    <?php
                        } else { ?>
                      <td><img class="img-circle" width="35" src='assets/img/uploads/usuarios/<?php echo $_SESSION['USU_FOTO']; ?>'></td>
                   <?php
                        }
                      ?>
                  </a>                      
                </li>
                <li>
                  <a href="" class="btn btn-red btn-flat" width="80" data-toggle="modal" data-target="#ModalSair">Sair</a>
                </li>
              </ul>
            </div>
          </ul>          
        </div>
      </div><!-- /.container-fluid -->
    </nav>