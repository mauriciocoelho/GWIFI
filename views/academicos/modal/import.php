<!-- Modal Deletar -->
<form method="post" action="views/professores/crud/processa.php" enctype="multipart/form-data">
  <div class="modal fade" id="ModalImport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><b>ITPAC </b>PORTO</h4>
        </div>
        <div class="modal-body">
          <input type="file" name="arquivo">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success">Importar</button>
        </div>
      </div>
    </div>
  </div>
</form><!--- Fim Modal Deletar -->