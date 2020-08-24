<?php             
    require_once ("../../config/database_visitantes.php");
    $action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
    if($action == 'ajax'){
      // escaping, additionally removing everything that could be (html/javascript-) code
       $q = mysqli_real_escape_string($db_link,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
       $aColumns = array('name', 'username');//Colunas de busca
       $sTable = "radcheck";
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
        <th width="100" height="10" style="text-align:center">Código</th>
        <th>Nome Completo</th>
        <th>Usuário</th>
        <th>Data de Nascimento</th>
        <th width="150" style="text-align:center">Status</th>
        <th>Operação</th>
      </tr>
    </thead>
    <?php 
      while($row = mysqli_fetch_assoc($query)){ 
      $id=$row['id'];
      $name=$row['name'];
      $username=$row['username'];
      $op=$row['op'];
      $dtnascimento=$row['dtnascimento'];
    ?>
    <tbody>
      <tr>
        <td width="100" height="10" style="text-align:center"><?php echo $id; ?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo $username; ?></td>
        <td><?php echo date("d/m/Y", strtotime($row['dtnascimento'])); ?></td>
        <td width="150" style="text-align:center"><span class="label label-danger"><?php
            if ($op == '==')
              echo 'Inativo';
            ?></span>
            <span class="label label-success"><?php
            if ($op == ':=')
              echo 'Ativo';
            ?></span>
        </td>
        <td width="80" style="text-align:center">
          <!-- Botão Editar -->
          <a href="#" class="pencil" data-toggle="modal" data-target="#ModalEdit" 
            data-whateverid="<?php echo $id; ?>" 
            data-whatevername="<?php echo $name; ?>"
            data-whateverusername="<?php echo $username; ?>"
            data-whateverop="<?php echo $op; ?>"
            data-whatevercpf="<?php echo $cpf; ?>"
            data-whateverdtnascimento="<?php echo date("d/m/Y", strtotime($dtnascimento)); ?>"><em class="fa fa-pencil" style="color: #1E90FF"></em></a>
          <!-- Botão Deletar -->
          <a href="#" class="trash" data-toggle="modal" data-target="#ModalDelete<?php echo $id; ?>"><em class="fa fa-trash"></em></a></div>
          <!-- Modal Deletar -->
          <?php include('../../views/academicos/modal/delete.php'); ?>
          <!-- Fim Modal Deletar -->
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