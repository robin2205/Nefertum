<?php
session_start();
include '../acciones/conexion.php';
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Ventas.xls");
header("Pragma:no-cache");
header("Expires:0");?>
<!DOCTYPE html PUBLIC>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Informe Ventas</title>
</head>
<body>
<table width="80%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="7" bgcolor="#75d3f6"><font face="Arial" size=6><CENTER><strong>Informe Ventas</strong></CENTER></font></td>
  </tr>
  <tr bgcolor="white">
    <td width="80"><font face="Arial"><CENTER><strong>Id Venta</strong></CENTER></font></td>
    <td width="200"><font face="Arial"><CENTER><strong>Cliente</strong></CENTER></font></td>
	<td width="250"><font face="Arial"><CENTER><strong>Artículo</strong></CENTER></font></td>
	<td width="60"><font face="Arial"><CENTER><strong>Costo</strong></CENTER></font></td>
    <td width="60"><font face="Arial"><CENTER><strong>PVP</strong></CENTER></font></td>
	<td width="80"><font face="Arial"><CENTER><strong>Ganancia</strong></CENTER></font></td>
	<td width="60"><font face="Arial"><CENTER><strong>Deuda</strong></CENTER></font></td>
  </tr>
<?php
  $nombreCliente;
  $descripcionArticulo;
  $ganancia;
  $sql=mysqli_query($conexion,"select IdVenta,IdCliente,IdArticulo,Costo,PVP,Deuda from ventas",0);
  while($res=mysqli_fetch_array($sql)){
  	$idVenta=$res['IdVenta'];
  	//CAPTURO IdCliente
  	$idCliente=$res['IdCliente'];
  	//SENTENCIA PARA BUSCAR EN LA TABLA CLIENTES Y TRAER EL NOMBRE DEL CLIENTE
  	$sql2="select *from clientes where IdCliente=".$idCliente;
  	$resultado2=mysqli_query($conexion,$sql2);
  	while($fila2=mysqli_fetch_assoc($resultado2)){
  		$nombreCliente=$fila2['NombreCliente'];}
  	//CAPTURO IdArticulo
  	$idArticulo=$res['IdArticulo'];
  	//SENTENCIA PARA BUSCAR EN LA TABLA ARTICULOS Y TRAER LA DESCRIPCIÓN DEL ARTICULO
  	$sql3="select *from articulos where IdArticulo=".$idArticulo;
  	$resultado3=mysqli_query($conexion,$sql3);
  	while($fila3=mysqli_fetch_assoc($resultado3)){
  		$descripcionArticulo=$fila3['DescripcionArticulo'];}
  	$costo=$res['Costo'];
  	$pvp=$res['PVP'];
  	$deuda=$res['Deuda'];
  	$ganancia=$pvp-$costo;?>
<tr>
	<td width="80"><font face="Arial"><?= $idVenta;?></font></td>
	<td width="200"><font face="Arial"><?= $nombreCliente;?></font></td>
	<td width="250"><font face="Arial"><?= $descripcionArticulo;?></font></td>
	<td width="60"><font face="Arial"><?= $costo;?></font></td>
	<td width="60"><font face="Arial"><?= $pvp;?></font></td>
	<td width="80"><font face="Arial"><?= $ganancia;?></font></td>
	<td width="60"><font face="Arial"><?= $deuda;?></font></td>
</tr>
<?php }
mysqli_free_result($sql);
mysqli_close($conexion);?>
</table>
</body>
</html>
