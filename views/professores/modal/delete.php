<!-- Modal Deletar -->
<form method="post" action="views/professores/crud/delete.php?id=<?php echo md5($row['id']);?>" enctype="multipart/form-data">
  <div class="modal fade" id="ModalDelete<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><b>ITPAC </b>PORTO</h4>
        </div>
        <div class="modal-body">
          <p><text-center>Você tem certeza que deseja apagar <b><?php echo $row['name']; ?></b>?</text-center></button></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-danger">Apagar</button>
        </div>
      </div>
    </div>
  </div>
</form><!--- Fim Modal Deletar -->