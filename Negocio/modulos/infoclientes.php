<?php
session_start();
include '../acciones/conexion.php';
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Clientes.xls");
header("Pragma:no-cache");
header("Expires:0");?>
<!DOCTYPE html PUBLIC>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Informe Clientes</title>
</head>
<body>
<table width="80%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" bgcolor="#75d3f6"><font face="Arial" size=6><CENTER><strong>Informe Clientes</strong></CENTER></font></td>
  </tr>
  <tr bgcolor="white">
    <td width="80"><font face="Arial"><CENTER><strong>Id Cliente</strong></CENTER></font></td>
    <td width="350"><font face="Arial"><CENTER><strong>Nombre Cliente</strong></CENTER></font></td>
    <td width="80"><font face="Arial"><CENTER><strong>Deuda</strong></CENTER></font></td>
  </tr>
<?php
  $sql=mysqli_query($conexion,"select IdCliente,NombreCliente from clientes");
  while($res=mysqli_fetch_array($sql)){
  	$idCliente=$res['IdCliente'];
  	$nombre=$res['NombreCliente'];
    $sql2=mysqli_query($conexion,"SELECT SUM(Deuda) AS deuda FROM ventas WHERE IdCliente=".$idCliente);
    if($fila2=mysqli_fetch_assoc($sql2)){
      $deuda=$fila2['deuda'];}
    if($deuda==NULL){
      $deuda=0;}?>
<tr>
	<td><font face="Arial"><?=$idCliente;?></font></td>
	<td><font face="Arial"><?=$nombre;?></font></td>
  <td><font face="Arial"><?=$deuda;?></font></td>
</tr>
<?php }
mysqli_free_result($sql);
mysqli_close($conexion);?>
</table>
</body>
</html>
