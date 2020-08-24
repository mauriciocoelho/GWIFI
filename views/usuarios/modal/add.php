<!-- Modal -->
<form id="add-row-form" action="views/usuarios/crud/add.php" method="post" enctype="multipart/form-data">
	<div class="modal fade" id="Modalcad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
          			</button>
        			<h4 class="modal-title">Cadastrar Usuário</h4>
      			</div>
      			<div class="modal-body">
        			<div class="form-group">
          				<input type="text" name="USU_NOME" id="username-input" class="form-control" placeholder="Usuário" required>
        			</div>        			
			        <div class="form-group">
			          <input type="text" name="USU_LOGIN" id="login-input" class="form-control" placeholder="Login" required>
			        </div>
			        <div class="form-group">
          				<input type="password" name="USU_SENHA" id="senha-input" class="form-control" placeholder="Senha" required>
        			</div>
        			<div class="form-group">
          				<select class="form-control" name="USU_NIVEL" id="USU_NIVEL-input">
            				<option value="1">Administrador</option>
							<option value="2">Usuário</option>
          				</select>
        			</div>
					<div class="form-group">
						<label>Foto</label>
						<input name="arquivo" type="file">
					</div>
			        <div class="form-group">
			          <input type="hidden" name="USU_STATUS" id="USU_STATUS-input" class="form-control" value="A">
			        </div>
      			</div>
			    <div class="modal-footer">
			    	<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			        <button type="sumit" class="btn btn-success" id="add-row">Salvar</button>
			    </div>
    		</div>
  		</div>
	</div>
</form>
<!---Fim Modal -->