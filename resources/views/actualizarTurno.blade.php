<!-- Modal -->
<form method="POST" action="#">
@method('PATCH')
    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token3">
    <input type="hidden" name="idActualizarTurno" value="" id="idActualizarTurno">
    <div class="modal fade" id="updateTurno1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Turno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
        <div class="col-sm">

            <div class="form-group">
                <label for="nombres">Hora de inicio*</label>
                <input type="text" class="form-control" id="inicio1" name="nombres" placeholder="Ingresa la hora">                
            </div>

            <div class="form-group">
                <label for="apellidos">Hora de fin*</label>
                <input type="text" class="form-control" id="fin1" name="_apellidos" placeholder="Ingresa la hora">
            </div> 
            </div>
     
     </div>

     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
       <button id="registroUpdateTurno" type="button" class="btn btn-primary" data-dismiss="modal">Actualizar Turno</button>
     </div>
   </div>
 </div>
</div>
</form>