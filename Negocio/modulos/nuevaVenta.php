<h1 class="page-header" id="h1">Ventas</h1>
<p id="p">Por favor, ingrese la Venta nueva que desea Registrar.</p>
<div class="row">
  <div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-primary" id="panel-body2">
      <div class="panel-heading" id="titulo"><h3 class="panel-title">Venta Nueva</h3></div>
      <div class="panel-body">
        <form class="form-inline" action="../acciones/guardarven.php" method="post">
          <section class="main row">
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Cliente</label>
              <select class="form-control" id="IdCliente" name="IdCliente" required>
                <option></option>
                <?php
                $sql="select * from clientes ORDER BY NombreCliente ASC";
                $resultado=mysqli_query($conexion,$sql);
                while($fila=mysqli_fetch_array($resultado)){
                  echo "<option value='".$fila["IdCliente"]."'>".$fila["NombreCliente"]."</option>";}?>
              </select>
            </div>
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Artículo</label>
              <select class="form-control" id="IdArticulo" name="IdArticulo" required>
                <option></option>
                <?php
                $sql="select * from articulos ORDER BY DescripcionArticulo ASC";
                $resultado=mysqli_query($conexion,$sql);
                while($fila=mysqli_fetch_array($resultado)){
                  echo "<option value='".$fila["IdArticulo"]."'>".$fila["DescripcionArticulo"]."</option>";}?>
              </select>
            </div>
          </section>
          <div class="row">
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Costo</label>
              <input class="form-control" type="text" id="costo" name="costo" onkeypress="return validar_numero(event)" maxlength="7" required placeholder="Enter the item cost">
            </div>
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">PVP</label>
              <input class="form-control" type="text" id="pvp" name="pvp" onkeypress="return validar_numero(event)" maxlength="7" required placeholder="Enter the Retail Price">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Deuda</label>
              <input class="form-control" type="text" id="deuda" name="deuda" maxlength="7" disabled>
            </div>
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Pago</label>
              <input class="form-control" type="text" id="pago" name="pago" maxlength="7" onkeypress="return validar_numero(event)" placeholder="Enter the made Payment">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Fecha</label>
              <input class="form-control" type="date" name="fecha" id="fecha" required>
            </div><br>
            <div class="form-group col-xs-6 col-md-3">
              <input type="submit" name="boton" class="btn btn-primary" value="Guardar" id="btnguardarv">
            </div>
            <div class="form-group col-xs-6 col-md-3">
              <a href="menuAdmin.php?id=Ventas" class="btn btn-info" id="btn">Atrás</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
