
<!-- Modal -->
<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo registro</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>

      <div class="modal-body">
        
          <form id="frminsert" onsubmit="return insertarDatos()" method="post">

              <label>email</label>
              <input type="text" id="email" name="email" class="form-control form-control-sm" >

              <label>password</label>
              <input type="text" id="pasword" name="pasword" class="form-control form-control-sm" >

              <label>nombre</label>
              <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" >

              <label>apellido</label>
              <input type="text" id="apellido" name="apellido" class="form-control form-control-sm" >

              <label>alias</label>
              <input type="text" id="alias" name="alias" class="form-control form-control-sm">
              
              
              <br>
               <input type="submit" value="Guardar" class="btn btn-primary">
               
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>


