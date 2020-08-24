<!-- Modal -->
<form id="add-row-form" action="views/corporativa/crud/add.php" method="post">
	<div class="modal fade" id="Modalcad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Cadastrar Usuário Corporativa</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="form-group">
	          <input type="text" name="name" id="name-input" class="form-control" placeholder="Nome Completo" required>
	        </div>
	        <div class="form-group">
	          <input type="text" name="username" id="username-input" class="form-control" placeholder="Usuário" required>
	        </div>
	        <div class="form-group">
	          <input type="text" name="cpf" id="cpf-input" class="form-control" placeholder="CPF" required>
	        </div>
	        <div class="form-group">
	          <input type="password" name="value" id="senha-input" class="form-control" placeholder="Senha" required>
	        </div>
	      </div>
	      <div class="form-group">
	      <input name="op" value=":=" type="hidden" required>
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