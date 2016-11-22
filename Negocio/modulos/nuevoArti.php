<h1 class="page-header" id="h1">Artículos</h1>
<p id="p">Por favor, ingrese la Descripción completa del Artículo que desea Registrar.</p>
<div class="row">
  <div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-primary">
      <div class="panel-heading"><h3 class="panel-title">Nuevo Artículo</h3></div>
      <div class="panel-body">
        <form action="../acciones/guardararti.php" method="POST">
          <div class="form-group">
            <label class="control-label">Descripción del Artículo</label>
            <input type="text" id="descripcion" name="descripcion" class="form-control" maxlength="50" placeholder="Description of the Item" required autofocus/><br>
            <input type="submit" class="btn btn-success" value="Guardar">
            <a href="menuAdmin.php?id=Articulos" class="btn btn-info">Atrás</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
