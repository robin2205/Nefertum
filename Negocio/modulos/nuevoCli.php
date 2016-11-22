<h1 class="page-header" id="h1">Clientes</h1>
<p id="p">Por favor, ingrese el Nombre completo del Cliente que desea Registrar.</p>
<div class="row">
  <div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-primary">
      <div class="panel-heading"><h3 class="panel-title">Cliente Nuevo</h3></div>
      <div class="panel-body">
        <form action="../acciones/guardarcli.php" method="POST">
          <div class="form-group">
            <label class="control-label">Nombre completo del Cliente</label>
            <input type="text" id="nombrecliente" name="nombrecliente" class="form-control" maxlength="40" onkeypress="return validar_texto(event)" placeholder="Customer's full name" required autofocus/><br>
            <input type="submit" class="btn btn-success" value="Guardar">
            <a href="menuAdmin.php?id=Clientes" class="btn btn-info">Atrás</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
