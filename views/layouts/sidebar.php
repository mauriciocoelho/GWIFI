<!-- Barra lateral -->
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">      
        <div class="profile-usertitle">
          <div class="profile-usertitle-name"><?php echo $_SESSION['USU_NOME'];?></div>
          <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    	<ul class="nav menu">
          <?php
          if ($_GET["view"]=="home"){ ?>
	        <li class="active">
	          <a href="?view=home"><em class="fa fa-dashboard">&nbsp;</em> Inicio</a>
	        </li>
          <?php
          }
          else { ?>
          <li>
            <a href="?view=home"><em class="fa fa-dashboard">&nbsp;</em> Inicio</a>
          </li>
          <?php
          }
          ?>
        	
          <?php
          if ($_GET["view"]=="usuarios") { ?>
          <li class="parent ">
            <a data-toggle="collapse" href="#sub-item-1">
              <em class="fa fa-clone">&nbsp;</em> Cadastros<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
          	<ul class="children collapse" id="sub-item-1">            
              <li>
                <a class="" href="?view=usuarios"><span class="fa fa-arrow-right">&nbsp;</span> Usuários </a>
              </li>              
          	</ul>
        	</li>
          <?php
          }
          else { ?>
          <li class="parent ">
            <a data-toggle="collapse" href="#sub-item-1">
              <em class="fa fa-clone">&nbsp;</em> Cadastros<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">            
              <li>
                <a class="" href="?view=usuarios"><span class="fa fa-arrow-right">&nbsp;</span> Usuários </a>
              </li>              
            </ul>
          </li>
          <?php
          }
          ?>

          <?php
          if ($_GET["view"]=="academicos" || $_GET["view"]=="corporativa" || $_GET["view"]=="professores" || $_GET["view"]=="visitantes") { ?>
        	<li class="parent ">
            <a data-toggle="collapse" href="#sub-item-2">
              <em class="fa fa-wifi">&nbsp;</em> Redes <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
          	<ul class="children collapse" id="sub-item-2">    
              <li>
                <a class="" href="?view=academicos"><span class="fa fa-arrow-right">&nbsp;</span> Acadêmicos </a>
              </li>

              <li>
                <a class="" href="?view=corporativa"><span class="fa fa-arrow-right">&nbsp;</span> Corporativa </a>
              </li>
           
              <li>
                <a class="" href="?view=professores"><span class="fa fa-arrow-right">&nbsp;</span> Professores </a>
              </li> 

              <li>
                <a class="" href="?view=visitantes"><span class="fa fa-arrow-right">&nbsp;</span> Visitantes </a>
              </li>            
          	</ul>
        	</li>
          <?php
          }
          else { ?>
          <li class="parent ">
            <a data-toggle="collapse" href="#sub-item-2">
              <em class="fa fa-wifi">&nbsp;</em> Redes <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-2">    
              <li>
                <a class="" href="?view=academicos"><span class="fa fa-arrow-right">&nbsp;</span> Acadêmicos </a>
              </li>

              <li>
                <a class="" href="?view=corporativa"><span class="fa fa-arrow-right">&nbsp;</span> Corporativa </a>
              </li>
           
              <li>
                <a class="" href="?view=professores"><span class="fa fa-arrow-right">&nbsp;</span> Professores </a>
              </li> 

              <li>
                <a class="" href="?view=visitantes"><span class="fa fa-arrow-right">&nbsp;</span> Visitantes </a>
              </li>            
            </ul>
          </li>
          <?php
          }
          ?>

	        <li >
	          <a href="" data-toggle="modal" data-target="#ModalSair"><em class="fa fa-power-off">&nbsp;</em> Logoff</a>
	        </li>     
        
      	</ul>
    </div><!--/.sidebar-->

    <!-- Modal Sair -->
    <form method="post" action="config/logOff.php" enctype="multipart/form-data">
      <div class="modal fade" id="ModalSair" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel"><b>ITPAC </b>PORTO</h4>
            </div>
            <div class="modal-body">
              <p><text-center>Você tem certeza que deseja <b>Sair?</b></text-center></button></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
              <button type="submit" class="btn btn-danger">Sim</button>
            </div>
          </div>
        </div>
      </div>
    </form><!--- Fim Modal Sair -->