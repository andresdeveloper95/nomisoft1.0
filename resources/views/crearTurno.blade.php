<!-- Modal -->
<form method="POST" action="#">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
    <div class="modal fade" id="crearTurno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Turno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
        <div class="col-sm">
            <div class="form-group">
                <label for="codigo">Código*</label>
                <input type="text" class="form-control" id="_codigo" name="_codigo" placeholder="Ingresa el codigo">
            </div>

            <div class="form-group">
                <label for="nombres">Hora de Inicio*</label>
                <input type="text" class="form-control" id="_horaInicio" name="_horaInicio" placeholder="Ingresa la hora">                
            </div>

            <div class="form-group">
                <label for="apellidos">Hora de Fin*</label>
                <input type="text" class="form-control" id="_horaFin" name="_horaFin" placeholder="Ingresa la hora">
            </div> 
        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button id="registroTurno" type="button" class="btn btn-primary" data-dismiss="modal">Crear Turno</button>
      </div>
    </div>
  </div>
</div>
 </form>