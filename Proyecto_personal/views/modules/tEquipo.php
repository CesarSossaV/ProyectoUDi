<h1>Registros De Tareas En Equipos</h1>

<div class="container">
  <form class="form-horizontal col-xs-6" action="/action_page.php">
      
    <div class="form-group">
      <label class="control-label col-sm-2" >ACD:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtIdEquipo" placeholder="ACD De Item" name="txtIdEquipo">
      </div>
    </div>
      
      
    <div class="form-group">
      <label class="control-label col-sm-2">Serial:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="txtSerial" placeholder="Ingrese el Serial" name="txtSerial">
      </div>
    </div>
      
      
      <div class="form-group">
      <label class="control-label col-sm-2">Marca:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="txtMarca" placeholder="Ingrese la Marca" name="txtMarca">
      </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2">Modelo:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="txtModelo" placeholder="Ingrese el Modelo" name="txtModelo">
      </div>
    </div>
      
       <div class="form-group">
      <label class="control-label col-sm-2">Fecha Adquicicion:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="fecha" placeholder="Ingrese el Fecha" name="fecha">
      </div>
    </div>
      
      
      <div class="form-group">
      <label for="comment">Caracteristicas:</label>
      <textarea class="form-control" rows="5" name="txtDescripcion" id="txtDescripcion"></textarea>
    </div>
        
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" id="txtRegistrar" name="txtRegistrar">Registrar</button>
      </div>
    </div>
  </form>
</div>