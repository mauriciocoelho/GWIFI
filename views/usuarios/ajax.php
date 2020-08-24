<?php             
    require_once ("../../config/database.php");
    $action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
    if($action == 'ajax'){
      // escaping, additionally removing everything that could be (html/javascript-) code
       $q = mysqli_real_escape_string($db_link,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
       $aColumns = array('USU_ID', 'USU_NOME');//Colunas de busca
       $sTable = "usuario";
       $sWhere = "";
      if ( $_GET['q'] != "" )
      {
        $sWhere = "WHERE (";
        for ( $i=0 ; $i<count($aColumns) ; $i++ )
        {
          $sWhere .= $aColumns[$i]." LIKE '%".$q."%' OR ";
        }
        $sWhere = substr_replace( $sWhere, "", -3 );
        $sWhere .= ')';
      }

    include '../../views/layouts/paginate.php'; //incluir o arquivo paginação
    //variaveis de paginação
    $page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
    $per_page = 12; //quantidade de registros que deve mostrar por pagina
    $adjacents  = 4; //espaço entre as páginas depois de varias variáveis
    $offset = ($page - 1) * $per_page;
    //conta o numero total de linha na tabela*/ 
    $count_query   = mysqli_query($db_link,"SELECT count(*) AS numrows FROM $sTable  $sWhere");
    if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
    $total_pages = ceil($numrows/$per_page);
    $reload = './index.php';
    //consulta a base de dados
    $sql="SELECT * FROM  $sTable $sWhere LIMIT $offset,$per_page";
    $query = mysqli_query($db_link, $sql);
    //loop through fetched data
    if ($numrows>0){
      
    ?>
	 <table class="table table-hover mails m-0 table table-actions-bar" id="datatable-editable">
    <thead>
      <tr>
        <th width="50" height="10" style="text-align:center">Código</th>
        <th>Foto</th>
        <th>Nome</th>
        <th width="150" style="text-align:center">Login</th>
        <th width="250" style="text-align:center">Nivel de Acesso</th>
        <th width="250" style="text-align:center">Status</th>
        <th width="80" style="text-align:center">Operação</th>
      </tr>
    </thead>
    <?php 
      while($row = mysqli_fetch_assoc($query)){ 
        $USU_ID=$row['USU_ID'];
        $USU_NOME=$row['USU_NOME'];
        $USU_LOGIN=$row['USU_LOGIN'];
        $USU_NIVEL=$row['USU_NIVEL'];
        $USU_FOTO=$row['USU_FOTO'];
    ?>
    <tbody>
      <tr>
        <td width="50" height="10" style="text-align:center"><?php echo $USU_ID; ?></td>
        <?php
        	if ($USU_FOTO=="") { ?>
        		 <td><img class="img-circle" alt="User Image" width="50px" height="50px" src='assets/img/user-default.png'></td>
        	<?php
        	}else{ ?>
        		<td><img class="img-circle" width="50px" height="50px" src='assets/img/uploads/usuarios/<?php echo $row['USU_FOTO']; ?>'></td>
        	<?php
        	}
        ?>
        <td><?php echo $USU_NOME; ?></td>
        <td width="150" style="text-align:center"><?php echo $USU_LOGIN; ?></td>  
        <td width="250" style="text-align:center"><?php 
          if ($row['USU_NIVEL'] == 1)
            echo 'Administrador';
          if ($row['USU_NIVEL'] == 2)
            echo 'Usuário';
          ?>
        </td>   
        <td width="250" style="text-align:center"><span class="label label-success"><?php 
          if ($row['USU_STATUS'] == 'A')
            echo 'Ativo';
          ?></span>
          <span class="label label-danger"><?php 
          if ($row['USU_STATUS'] == 'I')
            echo 'Inativo';
          ?></span>
        </td>                              
        <td width="80" style="text-align:center">
          <!-- Botão Editar -->
          <a href="#" class="pencil" data-toggle="modal" data-target="#ModalEdit" 
                                     data-whateverusu_id="<?php echo $row['USU_ID']; ?>" 
                                     data-whateverusu_nome="<?php echo $row['USU_NOME']; ?>"
                                     data-whateverusu_login="<?php echo $row['USU_LOGIN']; ?>" 
                                     data-whateverusu_nivel="<?php echo $row['USU_NIVEL']; ?>"
                                     data-whateverusu_status="<?php echo $row['USU_STATUS']; ?>"><em class="fa fa-pencil" style="color: #1E90FF"></em></a>
          <!-- Botão Deletar -->
          <a href="#" class="trash" data-toggle="modal" data-target="#ModalDelete<?php echo $row['USU_ID']; ?>"><em class="fa fa-trash"></em></a></div>
          <!-- Modal Deletar -->
          <?php
            include('../../views/usuarios/modal/delete.php');
          ?>
          <!-- Fim Modal Deletar -->
        </td>
      </tr>    
    </tbody>
    <?php
      }?>
  </table>
  <!-- ============================================================== -->
  <!-- Paginação -->
  <!-- ============================================================== -->
  <div class="table-pagination pull-right">
    <div class="col-md-12">
      <?php
        echo paginate($reload, $page, $total_pages, $adjacents);
      ?>
    </div>
  </div>    
    <?php      
      } else {
    ?>
  <div class="col-md-12">
    <br><h4><center>Não há nenhum registro</center></h4>
    <?php
	     }
      }
    ?>
  </div>
    <!-- ============================================================== -->
    <!-- Fim Paginação -->
    <!-- ============================================================== -->
</div>