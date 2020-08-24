<!--- Modal Editar -->
<form method="post" action="views/professores/crud/edit.php" enctype="multipart/form-data">
	<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        		<h4 class="modal-title" id="exampleModalLabel">Editar Professor</h4>
	      		</div>
	      		<div class="modal-body">
	        		<div class="form-group">
	          			<input type="text" name="username" id="username-input" class="form-control" placeholder="Usuário" required>
	        		</div>
	        		<div class="form-group">
	          			<input type="text" name="name" id="name-input" class="form-control" placeholder="Nome Completo">
	        		</div>
	        		<div class="form-group">
	          			<input type="text" name="dtnascimento" id=dtnascimento-input class="form-control" placeholder="Data de Nascimento">
	        		</div>
	        		<div class="form-group">
	          			<input type="password" name="value" class="form-control" placeholder="Senha">
	        		</div>
	        		<div class="form-group">
	          			<select class="form-control" name="op" id="op-input">
	            			<option value=":=">Ativo</option>
	            			<option value="==">Inativo</option>
	          			</select>
	        		</div>
	        		<div class="form-group">
	          			<input name="id" type="hidden" id="id-input" required>
	        		</div>
	        		<div class="modal-footer">
	          			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
	          			<button type="submit" class="btn btn-success">Editar</button>
	        		</div>
	   		 	</div>
	  		</div>
		</div>
	</div>
</form><!-- Fim Modal Editar -->