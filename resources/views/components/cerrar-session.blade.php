<!-- The Modal -->
<div class="modal" id="ModalCerrarSession">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">GoVista S.A.S.</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        ¿Desea cerrar la sesión?
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger" style="min-width: 80px">Si</button>
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="min-width: 80px">Cancelar</button>
      </div>

    </div>
  </div>
</div>