<h1 class="page-header" id="h1">Clientes</h1>
<a href="menuAdmin.php?id=nuevoCli" class="btn btn-primary" id="btnclientes">Cliente Nuevo</a>
<a href="../modulos/infoclientes.php" class="btn btn-info" id="btninforme">Informe</a>
<div class="table-responsive">
  <div class="col-md-12">
    <div class="box">
      <div class="box-body">
        <table id="tablaclientes" class="table table-bordered table-hover table-condensed">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombre Cliente</th>
              <th>Deuda</th>
              <th>Edición</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $sql="select *from clientes";
          $resultado=mysqli_query($conexion,$sql);
          while($fila=mysqli_fetch_assoc($resultado)){
          $idcliente=$fila['IdCliente'];?>
            <tr>
              <td><?=$fila['IdCliente'];?></td>
              <td><?=$fila['NombreCliente'];?></td>
            <?php
            $sql2=mysqli_query($conexion,"SELECT SUM(Deuda) AS deuda FROM ventas WHERE IdCliente=".$idcliente);
            if($fila2=mysqli_fetch_assoc($sql2)){
              $deuda=$fila2['deuda'];}
            if($deuda==NULL){
              $deuda=0;}?>
              <td><?=$deuda;?></td>
              <td><a class="btn btn-xs btn-success" id="modalc" data-toggle="modal" data-target=".modalClientes" data-id="<?=$fila['IdCliente']?>" data-id2="<?=$fila['NombreCliente']?>">Editar</a></td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(e){
    $('.modalClientes').on('show.bs.modal',function(e){
      var id=$(e.relatedTarget).data().id;
      $(e.currentTarget).find('#idCliente').val(id);});});
  $(document).ready(function(e){
    $('.modalClientes').on('show.bs.modal',function(e){
      var nombre=$(e.relatedTarget).data().id2;
      $(e.currentTarget).find('#nombrecliente').val(nombre);});});
</script>
<div class="modal modalClientes" id="modalClientes" role="dialog" tabindex="-1" aria-labelledby="basicModal" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">X</button>
        <h3 class="modal-title">Clientes</h3>
      </div>
      <div class="modal-body custom-height-modal">
        <form name="modalClientes" action="../acciones/actualizarcli.php" method="post">
          <div class="form-group">
            <label class="control-label">Id Cliente</label>
            <input type="text" class="form-control" name="idCliente" id="idCliente" readonly/>
          </div>
          <div class="form-group">
            <label class="control-label">Nombre completo del Cliente</label>
            <input type="text" id="nombrecliente" name="nombrecliente" class="form-control" maxlength="40" onkeypress="return validar_texto(event)" placeholder="Customer's full name" required autofocus/>
          </div>
          <input type="submit" class="btn btn-success" value="Actualizar">
          <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
        </form>
      </div>
    </div>
  </div>
</div>
