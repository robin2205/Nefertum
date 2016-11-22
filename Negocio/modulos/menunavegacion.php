<nav class="navbar navbar-default" role="navigation" id="contexto">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".menu-1">
        <span class="sr-only">Menu</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" id="imamenu"><img src="../Imagenes/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse menu-1">
      <ul class="nav navbar-nav">
        <li>
          <a href="menuAdmin.php?id=Inicio"><span class="glyphicon glyphicon-flag"></span>Inicio</a></li>
        <li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" role="button">
            <span class="glyphicon glyphicon-list-alt"></span>Gestiones<span class="color-azul caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="menuAdmin.php?id=Articulos"><span class="glyphicon glyphicon-text-background"></span>Artículos</a></li>
              <li class="divider"></li>
              <li><a href="menuAdmin.php?id=Clientes"><span class="glyphicon glyphicon-user"></span>Clientes</a></li>
            </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" role="button">
            <span class="glyphicon glyphicon-text-height"></span>Transacciones<span class="color-azul caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="menuAdmin.php?id=Ventas"><span class="glyphicon glyphicon-usd"></span>Ventas</a></li>
            </ul>
        </li>
        <!--<li>
          <a><span class="glyphicon glyphicon-king"></span>Administrador<span class="color-azul caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="menuAdmin.php?id=Usuarios"><span class="glyphicon glyphicon-eye-open"></span>Usuarios</a></li>
          </ul>
        </li>-->
        <li>
          <a>
            <span class="glyphicon glyphicon-globe"></span>Servicios<span class="color-azul caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../modulos/infoarticulos.php"><span class="glyphicon glyphicon-info-sign"></span>Informe Artículos</a></li>
              <li class="divider"></li>
              <li><a href="../modulos/infoclientes.php"><span class="glyphicon glyphicon-info-sign"></span>Informe Clientes</a></li>
              <li class="divider"></li>
              <li><a href="../modulos/infoventas.php"><span class="glyphicon glyphicon-info-sign"></span>Informe Ventas</a></li>
              <li class="divider"></li>
              <li><a data-toggle="modal" data-target=".modalOtros" id="modalot"><span class="glyphicon glyphicon-info-sign"></span>Otros Informes</a></li>
            </ul>
        </li>
        <li>
          <a data-toggle="modal" data-target=".modalContacto" id="modalco"><span class="glyphicon glyphicon-envelope"></span>Contacto</a>
        </li>
        <li>
          <a href="../acciones/cerrarsesion.php"><span class="glyphicon glyphicon-off"></span>Cerrar Sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="modal modalContacto" id="modalContacto" role="dialog" tabindex="-1" aria-labelledby="basicModal" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">X</button>
        <h3 class="modal-title">Contacto</h3>
      </div>
      <div class="modal-body custom-height-modal">
        <form name="modalContacto">
          <p>El Administrador de este programa se llama: <strong>Robinson Gallego Alzate.</strong></p>
          <p>Cualquier incidente presentado en el Software (Aplicativo); por favor comunicarse a:<br>
            Móvil: <strong>3003224304</strong><br>
            Correos: <strong>robinson.gallegoalzate@didetexco.com.co<br>pineda2110@hotmail.com</strong></p>
          <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal modalOtros" id="modalOtros" role="dialog" tabindex="-1" aria-labelledby="basicModal" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">X</button>
        <h3 class="modal-title">Otros Informes</h3>
      </div>
      <div class="modal-body custom-height-modal">
        <form name="modalOtros" class="form-inline" action="../modulos/otrosinfo.php" method="post">
          <div class="row">
            <div class="form-group col-xs-12 col-md-6">
              <div class="radio">
                <label class="control-label"><input type="radio" name="rseleccion" value="infovencli" checked>Informe de Ventas por Cliente</label>
              </div>
            </div>
            <div class="form-group col-xs-12 col-md-6">
              <div class="radio">
                <label class="control-label"><input type="radio" name="rseleccion" value="infopagcli">Informe de Pagos por Cliente</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12 col-md-6">
              <div class="radio">
                <label class="control-label"><input type="radio" name="rseleccion" value="infoartcli">Informe de Artículos por Cliente</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Seleccione el Cliente</label>
              <select class="form-control" id="cliente" name="cliente" required>
              <option></option>
              <?php
              $sql=mysqli_query($conexion,"select * from clientes ORDER BY NombreCliente");
              while($fila=mysqli_fetch_array($sql)){
                echo "<option value='".$fila["IdCliente"]."'>".$fila["NombreCliente"]."</option>";}?>
              </select>
            </div>
          </div><br id="espacio">
          <input type="submit" class="btn btn-success" id="btnmodalarti" value="Exportar">
          <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
        </form>
      </div>
    </div>
  </div>
</div>
