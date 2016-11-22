<h1 class="page-header" id="h1">Artículos</h1>
<a href="menuAdmin.php?id=nuevoArti" class="btn btn-primary" id="btnarticulo">Nuevo Artículo</a>
<a href="../modulos/infoarticulos.php" class="btn btn-info" id="btninforme">Informe</a>
<div class="table-responsive">
  <div class="col-md-12">
    <div class="box">
      <div class="box-body">
        <table id="tablaarticulos" class="table table-bordered table-hover table-condensed">
          <thead>
            <tr>
              <th width="10">Id</th>
              <th width="550">Descripción Artículo</th>
              <th width="100">Edición</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $sql="select *from articulos";
              $resultado=mysqli_query($conexion,$sql);
              while($fila=mysqli_fetch_assoc($resultado)){?>
              <tr>
                <td width="101"><?=$fila['IdArticulo'];?></td>
                <td width="400"><?=$fila['DescripcionArticulo'];?></td>
                <td width="30"><a class="btn btn-xs btn-success" id="modala" data-toggle="modal" data-target=".modalArticulos" data-id="<?=$fila['IdArticulo']?>" data-id2="<?=$fila['DescripcionArticulo']?>">Editar</a></td>
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
    $('.modalArticulos').on('show.bs.modal',function(e){
      var id=$(e.relatedTarget).data().id;
      $(e.currentTarget).find('#idArticulo').val(id);});});
  $(document).ready(function(e){
    $('.modalArticulos').on('show.bs.modal',function(e){
      var descripcion=$(e.relatedTarget).data().id2;
      $(e.currentTarget).find('#descripcionArti').val(descripcion);});});
</script>
<div class="modal modalArticulos" id="modalArticulos" role="dialog" tabindex="-1" aria-labelledby="basicModal" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">X</button>
        <h3 class="modal-title">Artículos</h3>
      </div>
      <div class="modal-body custom-height-modal">
        <form name="modalArti" action="../acciones/actualizararti.php" method="post">
          <div class="form-group">
            <label class="control-label">Id Artículo</label>
            <input type="text" class="form-control" name="idArticulo" id="idArticulo" readonly/>
          </div>
          <div class="form-group">
            <label class="control-label">Descripción del Artículo</label>
            <input type="text" class="form-control" name="descripcionArti" id="descripcionArti" maxlength="50" placeholder="Description of the article" required autofocus/>
          </div>
          <input type="submit" class="btn btn-success" value="Actualizar">
          <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
        </form>
      </div>
    </div>
  </div>
</div>
