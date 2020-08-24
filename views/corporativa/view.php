<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">Corporativo</li>
		</ol>
	</div><!--/.row-->
		
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Corporativo
				<div class="pull-right action-buttons">
					<a href="#" class="trash" data-toggle="modal" data-target="#Modalcad">
						<em class="btn btn-success">Novo</em>
					</a>
				</div>
			</h1>
			<!-- =============== pesquisar ================= -->
			<div class="form-group input-group">
				<input type="text" id="q" class="form-control" placeholder="Pesquisar..." onkeyup="load(1)">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-danger btn-md" id="btn-todo" onclick="load(1)">Pesquisar</button>
				</span>
			</div>
			<?php
				if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
				}
      		?>
		</div>
	</div><!--/.row-->			

	<div class="row">
		<div class="col-md-12">
				
			<div class="panel panel-danger">
				<div class="panel-heading">
					Usuário Corporativo					
					<span class="pull-right clickable panel-toggle panel-button-tab-left">
						<em class="fa fa-toggle-up"></em>
					</span>
				</div>

				<div class="panel-body">
					<ul class="todo-list">						
						<div class="box-body">
							<!-- Tabela -->           					 
				            <div class="table-responsive">
				            	<div id="loader" class="text-center"> <img src="assets/img/gif_loader.gif"></div>
				              	<div class="outer_div"></div><!-- Dados ajax Final -->
				            </div>
        					<!-- Fim Tabela -->								
						</div>
					</ul>
				</div>
				
			</div><!-- panel-danger -->

		</div><!--/.col-->

	</div>

	<?php include_once('modal/add.php')	?>

	<?php include_once('modal/edit.php') ?>    

	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/chart.min.js"></script>
	<script src="assets/js/chart-data.js"></script>
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	<script src="assets/js/bootstrap-datepicker.js"></script>
	<script src="assets/js/custom.js"></script>

	<!-- Script Modal -->
	<script type="text/javascript">
	  $('#ModalEdit').on('show.bs.modal', function (event) {
	    var button = $(event.relatedTarget)
	    var id = button.data('whateverid')
	    var name = button.data('whatevername')
	    var username = button.data('whateverusername')
	    var op = button.data('whateverop')
	    var cpf = button.data('whatevercpf')
	    var modal = $(this)
	    modal.find('#id-input').val(id)
	    modal.find('#name-input').val(name)
	    modal.find('#username-input').val(username)
	    modal.find('#op-input').val(op)
	    modal.find('#cpf-input').val(cpf)
	  })
	</script><!--- Fim Script Modal -->

	<!-- ajax -->
	<script>
		$(document).ready(function(){
			load(1);
		});
		function load(page){
			var q= $("#q").val();
			var parametros={"action":"ajax","page":page,"q":q};
				$("#loader").fadeIn('slow');
					$.ajax({
					url:'views/corporativa/ajax.php',
					data: parametros,
						beforeSend: function(objeto){
							$('#loader').html('<div style="position: absolute;top: 40%;left: 50%;margin-right: -50%;transform: translate(-50%, -50%)"><img src="assets/img/gif_loader.gif"></div>');
					},
					success:function(data){
						$(".outer_div").html(data).fadeIn('slow');
						$('#loader').html('');
					
						}
					})
				}
	</script>
	</body>
</html>