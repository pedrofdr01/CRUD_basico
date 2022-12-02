<!-- Modal de Delete -->

<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="color: black" class="modal-title" id="modalLabel">Excluir Usuário</h4>
            </div>
            <div style="color: black" class="modal-body">
                Deseja realmente excluir o Usuário?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <a id="confirm" class="btn btn-default" href="delete.php?id=<?php echo $row['id']; ?>">Sim</a>
            </div>
        </div>
    </div>
</div>