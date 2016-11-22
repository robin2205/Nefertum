<h1 class="page-header" id="h1">Ventas</h1>
<a href="menuAdmin.php?id=nuevaVenta" class="btn btn-primary" id="btnventa">Venta Nueva</a>
<a href="../modulos/infoventas.php" class="btn btn-info" id="btninforme">Informe General</a>
<div class="table-responsive">
  <div class="col-md-12">
    <div class="box">
      <div class="box-body">
        <table id="tablaventas" class="table table-bordered table-hover table-condensed">
          <thead>
            <tr>
              <th width="10">Id</th>
              <th width="120">Cliente</th>
              <th width="230">Artículo</th>
              <th width="60">PVP</th>
              <th width="60">Deuda</th>
              <th width="60">Fecha</th>
              <th width="130">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $ganancia;
        			$sql="select * from ventas";
        			$resultado=mysqli_query($conexion,$sql);
        			while($fila=mysqli_fetch_assoc($resultado)){?>
            <tr>
              <td width="69"><?=$fila['IdVenta'];?></td>
              <?php
          			//CAPTURO EL IDCLIENTE
          			$idCliente=$fila['IdCliente'];
          			$sql2="select *from clientes where IdCliente=".$idCliente;
          			$resultado2=mysqli_query($conexion,$sql2);
          			while($fila2=mysqli_fetch_assoc($resultado2)){?>
              <td width="117"><?=$fila2['NombreCliente'];?></td>
              <?php
          			//CAPTURO EL IDARTICULO
          			$idArticulo=$fila['IdArticulo'];
          			$sql3="select *from articulos where IdArticulo=".$idArticulo;
          			$resultado3=mysqli_query($conexion,$sql3);
          			while($fila3=mysqli_fetch_assoc($resultado3)){?>
              <td width="165"><?=$fila3['DescripcionArticulo'];?></td>
        			<td width="45"><?=$fila['PVP'];?></td>
        			<td width="45"><?=$fila['Deuda'];?></td>
              <?php
          			//CAPTURO EL IDVENTA
          			$idVenta=$fila['IdVenta'];
          			$sql4=mysqli_query($conexion,"SELECT MAX(Fecha) AS Fecha FROM registro_pagos where IdVenta=".$idVenta);
          			if($fila4=mysqli_fetch_row($sql4)){?>
              <td width="50"><?=trim($fila4[0]);?></td>
              <td width="100">
                <a class="btn btn-xs btn-success" id="editarv" data-toggle="modal" data-target=".editarVentas"
                  data-id="<?=$fila['IdVenta']?>"
                  data-id2="<?=$fila2['NombreCliente']?>"
                  data-id3="<?=$fila3['DescripcionArticulo']?>"
                  data-id4="<?=$fila['Costo']?>"
                  data-id5="<?=$fila['PVP']?>"
                  data-id6="<?=$fila4[0]?>">Editar</a>
                <a class="btn btn-xs btn-primary" id="actuav" data-toggle="modal" data-target=".actualizarVentas"
                  data-id="<?=$fila['IdVenta']?>"
                  data-id2="<?=$fila2['NombreCliente']?>"
                  data-id3="<?=$fila3['DescripcionArticulo']?>"
                  data-id4="<?=$fila['Deuda']?>"
                  data-id5="<?=$fila['PVP']?>">Consultar</a>
                <a class="btn btn-xs btn-info" id="detalles" href="javascript:Pagos(<?=$fila['IdVenta'];?>);">Detalles Pagos</a>
              </td>
            </tr>
            <?php	}}}}?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
function Pagos(idVenta){
  var id=idVenta;
  if(id!=null){
    window.location="../modulos/infopagos.php?idVenta="+id;}}
//MODAL EDITAR VENTAS
$(document).ready(function(e){
  $('.editarVentas').on('show.bs.modal',function(e){
    var idventa=$(e.relatedTarget).data().id;
    $(e.currentTarget).find('#Idventa').val(idventa);});});
$(document).ready(function(e){
  $('.editarVentas').on('show.bs.modal',function(e){
    var cliente=$(e.relatedTarget).data().id2;
    $(e.currentTarget).find('#IdCliente').val(cliente);});});
$(document).ready(function(e){
  $('.editarVentas').on('show.bs.modal',function(e){
    var articulo=$(e.relatedTarget).data().id3;
    $(e.currentTarget).find('#IdArticulo').val(articulo);});});
$(document).ready(function(e){
  $('.editarVentas').on('show.bs.modal',function(e){
    var costo=$(e.relatedTarget).data().id4;
    $(e.currentTarget).find('#costo').val(costo);});});
$(document).ready(function(e){
  $('.editarVentas').on('show.bs.modal',function(e){
    var pvp=$(e.relatedTarget).data().id5;
    $(e.currentTarget).find('#pvp').val(pvp);});});
$(document).ready(function(e){
  $('.editarVentas').on('show.bs.modal',function(e){
    var fecha=$(e.relatedTarget).data().id6;
    $(e.currentTarget).find('#fecha').val(fecha);});});
//MODAL ACTUALIZAR VENTAS
$(document).ready(function(e){
  $('.actualizarVentas').on('show.bs.modal',function(e){
    var idventa=$(e.relatedTarget).data().id;
    $(e.currentTarget).find('#Idventa').val(idventa);});});
$(document).ready(function(e){
  $('.actualizarVentas').on('show.bs.modal',function(e){
    var cliente=$(e.relatedTarget).data().id2;
    $(e.currentTarget).find('#IdCliente').val(cliente);});});
$(document).ready(function(e){
  $('.actualizarVentas').on('show.bs.modal',function(e){
    var articulo=$(e.relatedTarget).data().id3;
    $(e.currentTarget).find('#IdArticulo').val(articulo);});});
$(document).ready(function(e){
  $('.actualizarVentas').on('show.bs.modal',function(e){
    var deuda=$(e.relatedTarget).data().id4;
    $(e.currentTarget).find('#deuda').val(deuda);});});
$(document).ready(function(e){
  $('.actualizarVentas').on('show.bs.modal',function(e){
    var pvp=$(e.relatedTarget).data().id5;
    $(e.currentTarget).find('#pvp').val(pvp);});});
</script>
<div class="modal editarVentas" id="editarVentas" role="dialog" tabindex="-1" aria-labelledby="basicModal" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">X</button>
        <h3 class="modal-title">Editar Venta</h3>
      </div>
      <div class="modal-body custom-height-modal">
        <form class="form-inline" name="editarVentas" action="../acciones/modificarven.php" method="post">
          <div class="main row">
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Id Venta</label>
              <input class="form-control" type="text" id="Idventa" name="Idventa" readonly>
            </div>
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Cliente</label>
              <input class="form-control" type="text" id="IdCliente" name="IdCliente" readonly>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Artículo</label>
              <input class="form-control" type="text" id="IdArticulo" name="IdArticulo" readonly>
            </div>
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Costo</label>
              <input class="form-control" type="text" id="costo" name="costo" onkeypress="return validar_numero(event)" maxlength="7" required placeholder="Enter the item cost">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">PVP</label>
              <input class="form-control" type="text" id="pvp" name="pvp" onkeypress="return validar_numero(event)" maxlength="7" required placeholder="Enter the Retail Price">
            </div>
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Fecha</label>
              <input class="form-control" type="date" name="fecha" id="fecha" required>
            </div>
          </div><br id="espacio">
          <input type="submit" class="btn btn-success" value="Modificar">
          <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal actualizarVentas" id="actualizarVentas" role="dialog" tabindex="-1" aria-labelledby="basicModal" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">X</button>
        <h3 class="modal-title">Actualizar Venta</h3>
      </div>
      <div class="modal-body custom-height-modal">
        <form class="form-inline" name="editarVentas" action="../acciones/actualizarven.php" method="post">
          <div class="main row">
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Id Venta</label>
              <input class="form-control" type="text" id="Idventa" name="Idventa" readonly>
            </div>
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Cliente</label>
              <input class="form-control" type="text" id="IdCliente" name="IdCliente" readonly>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Artículo</label>
              <input class="form-control" type="text" id="IdArticulo" name="IdArticulo" readonly>
            </div>
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Deuda</label>
              <input class="form-control" type="text" id="deuda" name="deuda" readonly>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">PVP</label>
              <input class="form-control" type="text" id="pvp" name="pvp" readonly>
            </div>
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Pago</label>
              <input class="form-control" type="text" id="pago" name="pago" maxlength="7" onkeypress="return validar_numero(event)" required placeholder="Enter the Payment made" autofocus>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12 col-md-6">
              <label class="hidden-xs control-label">Fecha</label>
              <input class="form-control" type="date" name="fecha" id="fecha" required>
            </div>
          </div><br id="espacio">
          <input type="submit" class="btn btn-success" value="Actualizar">
          <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
        </form>
      </div>
    </div>
  </div>
</div>
