<h1 class="page-header" id="h1">Usuarios</h1>
<p><strong><em>Observación: El Perfil 1 es Admin; el Perfil 0, corresponde a otros Usuarios</em></strong></p>
<a href="menuAdmin.php?id=nuevoUsu" class="btn btn-primary" id="btnusuario">Nuevo Usuario</a>
<div class="table-responsive">
  <table class="table table-bordered table-hover table-condensed">
    <tr>
      <td>
        <div class="titulos">
          <table class="table table-hover table-condensed">
            <tr>
              <th width="30" style="text-align:center">Id.Usuario</th>
              <th width="190" style="text-align:center">Nombre</th>
              <th width="50" style="text-align:center">Usuario</th>
              <!--<th width="40" style="text-align:center">Contraseña</th>-->
              <th width="50" style="text-align:center">Estado</th>
              <th width="40" style="text-align:center">Perfil</th>
              <th width="120">Edición</th>
            </tr>
          </table>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="datosArticulos">
          <table class="table table-bordered table-condensed">
            <?php
              $sql=mysqli_query($conexion,"select *from Usuarios");
              while($fila=mysqli_fetch_assoc($sql)){?>
                <tr>
                  <td width="30" style="text-align:center"><?=$fila['IdUsuario'];?></td>
                  <td width="200"><?=$fila['Nombre'];?></td>
                  <td width="60"><?=$fila['Usuario'];?></td>
                  <!--<td width="50" style="color:#fff"><?=$fila['Contrasena'];?></td>-->
                  <td width="65" style="text-align:center"><?=$fila['Estado'];?></td>
                  <td width="45" style="text-align:center"><?=$fila['Perfil'];?></td>
                  <td width="120"><a class="btn btn-xs btn-success" data-toggle="modal" data-target=".editarUsuario"
                    data-id="<?=$fila['IdUsuario']?>"
                    data-id2="<?=$fila['Nombre']?>"
                    data-id3="<?=$fila['Usuario']?>"
                    data-id4="<?=$fila['Contrasena']?>"
                    data-id5="<?=$fila['Estado']?>"
                    data-id6="<?=$fila['Perfil']?>">Editar</a></td>
                </tr>
            <?php }?>
          </table>
        </div>
      </td>
    </tr>
  </table>
</div>
<script type="text/javascript">
  $(document).ready(function(e){
    $('.editarUsuario').on('show.bs.modal',function(e){
      var idusuario=$(e.relatedTarget).data().id;
      $(e.currentTarget).find('#Idusuario').val(idusuario);});});
  $(document).ready(function(e){
    $('.editarUsuario').on('show.bs.modal',function(e){
      var nombre=$(e.relatedTarget).data().id2;
      $(e.currentTarget).find('#nombre').val(nombre);});});
  $(document).ready(function(e){
    $('.editarUsuario').on('show.bs.modal',function(e){
      var usuario=$(e.relatedTarget).data().id3;
      $(e.currentTarget).find('#usuario').val(usuario);});});
  $(document).ready(function(e){
    $('.editarUsuario').on('show.bs.modal',function(e){
      var contrasena=$(e.relatedTarget).data().id4;
      $(e.currentTarget).find('#contrasena').val(contrasena);});});
  $(document).ready(function(e){
    $('.editarUsuario').on('show.bs.modal',function(e){
      var estado=$(e.relatedTarget).data().id5;
      $(e.currentTarget).find('#estado').val(estado);});});
  $(document).ready(function(e){
    $('.editarUsuario').on('show.bs.modal',function(e){
      var perfil=$(e.relatedTarget).data().id6;
      $(e.currentTarget).find('#perfil').val(perfil);});});
</script>
<div class="modal editarUsuario" id="editarVentas" role="dialog" tabindex="-1" aria-labelledby="basicModal" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">X</button>
        <h3 class="modal-title">Editar Usuario</h3>
      </div>
      <div class="modal-body custom-height-modal">
        <form name="editarUsuario" action="../acciones/actualizarusu.php" method="post">
          <div class="main row">
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Id Usuario</label>
              <input class="form-control" type="text" id="Idusuario" name="Idusuario" readonly>
            </div>
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Nombre</label>
              <input class="form-control" type="text" id="nombre" name="nombre" maxlength="40" placeholder="Enter the user's full name" required autofocus>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Usuario</label>
              <input class="form-control" type="text" id="usuario" name="usuario" maxlength="10" placeholder="Enter the assigned user" required>
            </div>
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Contraseña</label>
              <input class="form-control" type="password" id="contrasena" name="contrasena" readonly>
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
              <input class="form-control" type="text" id="perfil" name="perfil" readonly>
            </div>
          </div>
          <input type="submit" class="btn btn-success" value="Modificar">
          <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
        </form>
      </div>
    </div>
  </div>
</div>
