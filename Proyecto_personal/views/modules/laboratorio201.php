<h1>Laboratorio 201</h1>

<div class="container">
                                                                                       
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>ACD</th>
        <th>Seria</th>
        <th>Ubicaion</th>
        <th>Monitor</th>
        <th>Detalle</th>
        <th>Tarea</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>MJHBDK3</td>
        <td>Laboratorio 201</td>
        <td>35</td>
          <td><button class="btn btn-default " data-toggle="modal" data-target="#myModal" >Detalle</button></td>
          <td><button class="btn btn-default" data-toggle="modal" data-target="#myModal2">Tarea</button></td>
      </tr>
    </tbody>
  </table>
      <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
      <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">REGISTRO DE TAREA</h4>
        </div>
        <div class="modal-body">
          <p>Llene los campos</p>
            <div class="container">
  <form class="form-horizontal col-xs-5" action="/action_page.php">
      
      
      <div class="form-group">
      <label class="control-label col-sm-2">Estado:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="txtEstado"  value="Pendiente" name="txtEstado">
      </div>
    </div>
      
       <div class="form-group">
      <label class="control-label col-sm-2">Tipo:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="txtTipo"  placeholder="Prev. o correc." name="txtTipo">
      </div>
    </div>
      
       <div class="form-group">
      <label class="control-label col-sm-2">F.Inicio:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="fecha" placeholder="Ingrese el Fecha" name="fecha">
      </div>
    </div>
      
      
      
        
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" id="btnGuardar" name="btnGuardar">Guardar</button>
      </div>
    </div>
  </form>
</div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-default" data-toggle="modal" data-target="#myModal3" data-dismiss="modal" >Siguiente</button>
        </div>
      </div>
      
    </div>
  </div>
      
            <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">TAREA EN UN EQUIPO</h4>
        </div>
        <div class="modal-body">
          <p>Llene los campos</p>
            <div class="container">
  <form class="form-horizontal col-xs-5" action="/action_page.php">
      
      
      <div class="form-group">
      <label class="control-label col-sm-2">ID Tarea:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="txtIdTarea"  value="Pendiente" name="txtIdTarea">
      </div>
    </div>
      
       <div class="form-group">
      <label class="control-label col-sm-2">Serial: </label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="txtSerial"  placeholder="Prev. o correc." name="txtSerial">
      </div>
    </div>
      
        <div class="form-group">
      <label for="comment">Descripcion:</label>
      <textarea class="form-control" rows="5" id="txtDesc" name="txtDesc"></textarea>
    </div>
      
      
      
        
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" id="btnGuardar" name="btnGuardar">Guardar</button>
      </div>
    </div>
  </form>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
  </div>
</div>