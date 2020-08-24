<!--- Modal Editar -->
<form method="post" action="views/usuarios/crud/edit.php" enctype="multipart/form-data">
	<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			 	<div class="modal-header">
			    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			    		<span aria-hidden="true">&times;</span>
			    	</button>
			    	<h4 class="modal-title">Editar Usuários</h4>
			  	</div>
			  	<div class="modal-body">
				    <div class="form-group">
				      <input type="text" name="USU_NOME" id="usu_nome-input" class="form-control" placeholder="Nome" required>
				    </div>
				  	<div class="form-group">
			      		<input type="text" name="USU_LOGIN" id="usu_login-input" class="form-control" placeholder="Login" required>
			    	</div>
					<div class="form-group">
						<input name="USU_ID" type="hidden" id="usu_id-input" required>
					</div>
					<div class="form-group">
						<input type="password" name="USU_SENHA" class="form-control" placeholder="Senha">
					</div> 
					<div class="form-group">
						<select class="form-control" id="usu_nivel-input" name="USU_NIVEL">
							<option value="1">Administrador</option>
							<option value="2">Usuário</option>
						</select>
					</div>						
					<div class="form-group">
						<select class="form-control" name="USU_STATUS" id="usu_status-input">
							<option value="A">Ativo</option>
							<option value="I">Inativo</option>
						</select>
					</div>
					<div class="form-group">
						<label>Foto</label>
						<input name="arquivo" type="file">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<button type="submit" class="btn btn-success">Editar</button>
					</div>
			  	</div>
			</div>
		<div>
	</div></div>
</form><!-- Fim Modal Editar -->