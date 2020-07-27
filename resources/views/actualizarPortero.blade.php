<!-- Modal -->
<form method="POST" action="#">
@method('PATCH')
    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token1">
    <input type="hidden" name="idActualizar" value="" id="idActualizar">
    <div class="modal fade" id="updatePortero" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Portero</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
        <div class="col-sm">

            <div class="form-group">
                <label for="nombres">Nombres*</label>
                <input type="text" class="form-control" id="nombres1" name="nombres" placeholder="Ingresa los nombres">                
            </div>

            <div class="form-group">
                <label for="apellidos">Apellidos*</label>
                <input type="text" class="form-control" id="apellidos1" name="_apellidos" placeholder="Ingresa los apellidos">
            </div> 

            <div class="form-group">
                <label for="apellidos">Dirección*</label>
                <input type="text" class="form-control" id="direccion1" name="_direccion" placeholder="Ingresa la dirección">
            </div>   

            <div class="form-group">
                <label for="apellidos">Teléfono*</label>
                <input type="text" class="form-control" id="telefono1" name="_telefono" placeholder="Ingresa el teléfono">
            </div>            

            <div class="form-group">
                <label for="apellidos">Correo*</label>
                <input type="text" class="form-control" id="correo1" name="_correo" placeholder="Ingresa el correo">
            </div>            
        </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button id="registroUpdate" type="button" class="btn btn-primary" data-dismiss="modal">Actualizar Portero</button>
      </div>
    </div>
  </div>
</div>
 </form>