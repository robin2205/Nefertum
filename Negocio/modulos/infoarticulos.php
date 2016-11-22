<?php
session_start();
include '../acciones/conexion.php';
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Artículos.xls");
header("Pragma:no-cache");
header("Expires:0");?>
<!DOCTYPE html PUBLIC>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Informe Artículos</title>
</head>
<body>
<table width="80%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" bgcolor="#75d3f6"><font face="Arial" size=6><CENTER><strong>Informe Artículos</strong></CENTER></font></td>
  </tr>
  <tr bgcolor="white">
    <td width="80"><font face="Arial"><CENTER><strong>Id Artículo</strong></CENTER></font></td>
    <td width="350"><font face="Arial"><CENTER><strong>Descripción Artículo</strong></CENTER></font></td>
  </tr>
<?php
  $sql=mysqli_query($conexion,"select IdArticulo,DescripcionArticulo from articulos");
  while($res=mysqli_fetch_array($sql)){
  	$idArticulo=$res['IdArticulo'];
  	$descripcion=$res['DescripcionArticulo'];?>
<tr>
	<td width="80"><font face="Arial"><?php echo $idArticulo;?></font></td>
	<td width="350"><font face="Arial"><?php echo $descripcion;?></font></td>
</tr>
<?php }
mysqli_free_result($sql);
mysqli_close($conexion);?>
</table>
</body>
</html>
