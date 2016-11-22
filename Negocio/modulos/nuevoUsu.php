<h1 class="page-header" id="h1">Usuarios</h1>
<p id="p">Por favor, ingrese el Usuario nuevo que desea Registrar.</p>
<div class="row">
  <div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-primary">
      <div class="panel-heading" id="titulo"><h3 class="panel-title">Usuario Nuevo</h3></div>
      <div class="panel-body" id="panel-body2">
        <form class="form-inline" action="../acciones/guardarusu.php" method="post">
          <section class="main row">
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Id Usuario</label>
              <input class="form-control" type="text" id="Idusuario" name="Idusuario" onkeypress="return validar_numero(event)" maxlength="11" required placeholder="Enter user ID" autofocus>
            </div>
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Nombre</label>
              <input class="form-control" type="text" id="nombre" name="nombre" onkeypress="return validar_texto(event)" maxlength="40" required placeholder="Enter the user's full name">
            </div>
          </section>
          <div class="row">
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Usuario</label>
              <input class="form-control" type="text" id="usuario" name="usuario" onkeypress="return validar_texto(event)" maxlength="10" required placeholder="Enter the assigned user">
            </div>
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Contraseña</label>
              <input class="form-control" type="password" id="contrasena" name="contrasena" maxlength="10" required placeholder="Enter the Password">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Estado</label>
              <select class="form-control" id="estado" name="estado" required>
                <option></option>
                <option>Activo</option>
                <option>Inactivo</option>
              </select>
            </div>
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Perfil</label>
              <input class="form-control" type="text" id="perfil" name="perfil" maxlength="1" onkeypress="return validar_numero(event)" required placeholder="Enter 1 o 0 for user Profile">
            </div>
          </div><br>
          <div class="row">
            <div class="form-group col-xs-6 col-md-3">
              <input type="submit" name="boton" class="btn btn-primary" value="Guardar" id="btnguardarv">
            </div>
            <div class="form-group col-xs-6 col-md-3">
              <a href="menuAdmin.php?id=Usuarios" class="btn btn-info" id="btn">Atrás</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
