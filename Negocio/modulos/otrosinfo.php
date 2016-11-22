<?php
session_start();
include '../acciones/conexion.php';
function filtro($var){
  $filtrado=str_replace("'","&#39;",$var);
  return $filtrado;}
$opcion=$_POST['rseleccion'];
$cliente=$_POST['cliente'];
$cliente=filtro($cliente);
$sql=mysqli_query($conexion,"SELECT NombreCliente FROM clientes WHERE IdCliente=".$cliente);
if($fila=mysqli_fetch_assoc($sql)){
  $nombre=$fila['NombreCliente'];}
if($opcion=="infovencli"){
  header("Content-type: application/vnd.ms-excel");
  header("Content-Disposition: attachment; filename=Informe Ventas por Cliente.xls");
  header("Pragma:no-cache");
  header("Expires:0");?>
  <!DOCTYPE html PUBLIC>
  <html xmlns="http://www.w3.org/1999/xhtml" lang="es">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Informe Ventas por Cliente</title>
  </head>
  <body>
  <table width="80%" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="6" bgcolor="#75d3f6"><font face="Arial" size=6><CENTER><strong>Informe Ventas <?=$nombre?></strong></CENTER></font></td>
    </tr>
    <tr bgcolor="white">
      <td width="80"><font face="Arial"><CENTER><strong>Id Venta</strong></CENTER></font></td>
      <td width="250"><font face="Arial"><CENTER><strong>Artículo</strong></CENTER></font></td>
      <td width="60"><font face="Arial"><CENTER><strong>Costo</strong></CENTER></font></td>
      <td width="60"><font face="Arial"><CENTER><strong>PVP</strong></CENTER></font></td>
      <td width="80"><font face="Arial"><CENTER><strong>Ganancia</strong></CENTER></font></td>
      <td width="60"><font face="Arial"><CENTER><strong>Deuda</strong></CENTER></font></td>
    </tr>
  <?php
    $descripcionArticulo;
    $ganancia;
    $sql2=mysqli_query($conexion,"SELECT *FROM ventas WHERE IdCliente=".$cliente);
    while($res=mysqli_fetch_array($sql2)){
    	$idVenta=$res['IdVenta'];
    	$idArticulo=$res['IdArticulo'];
    	$sql3="SELECT *FROM articulos WHERE IdArticulo=".$idArticulo;
    	$resultado3=mysqli_query($conexion,$sql3);
    	while($fila3=mysqli_fetch_assoc($resultado3)){
    		$descripcionArticulo=$fila3['DescripcionArticulo'];}
    	$costo=$res['Costo'];
    	$pvp=$res['PVP'];
    	$deuda=$res['Deuda'];
    	$ganancia=$pvp-$costo;?>
  <tr>
  	<td><font face="Arial"><?=$idVenta;?></font></td>
  	<td><font face="Arial"><?=$descripcionArticulo;?></font></td>
  	<td><font face="Arial"><?=$costo;?></font></td>
  	<td><font face="Arial"><?=$pvp;?></font></td>
  	<td><font face="Arial"><?=$ganancia;?></font></td>
  	<td><font face="Arial"><?=$deuda;?></font></td>
  </tr>
  <?php }
  mysqli_free_result($sql);
  mysqli_close($conexion);?>
  </table>
  </body>
  </html>
<?php }
else if($opcion=="infoartcli"){
  header("Content-type: application/vnd.ms-excel");
  header("Content-Disposition: attachment; filename=Informe Artículos por Cliente.xls");
  header("Pragma:no-cache");
  header("Expires:0");?>
  <!DOCTYPE html PUBLIC>
  <html xmlns="http://www.w3.org/1999/xhtml" lang="es">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Informe Artículos por Cliente</title>
  </head>
  <body>
  <table width="80%" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="3" bgcolor="#75d3f6"><font face="Arial" size=6><CENTER><strong>Informe Artículos <?=$nombre?></strong></CENTER></font></td>
    </tr>
    <tr bgcolor="white">
      <td width="250"><font face="Arial"><CENTER><strong>Artículo</strong></CENTER></font></td>
      <td width="60"><font face="Arial"><CENTER><strong>PVP</strong></CENTER></font></td>
      <td width="60"><font face="Arial"><CENTER><strong>Deuda</strong></CENTER></font></td>
    </tr>
  <?php
    $descripcionArticulo;
    $sql2=mysqli_query($conexion,"SELECT *FROM ventas WHERE IdCliente=".$cliente);
    while($res=mysqli_fetch_array($sql2)){
    	$idArticulo=$res['IdArticulo'];
    	$sql3="SELECT *FROM articulos WHERE IdArticulo=".$idArticulo;
    	$resultado3=mysqli_query($conexion,$sql3);
    	while($fila3=mysqli_fetch_assoc($resultado3)){
    		$descripcionArticulo=$fila3['DescripcionArticulo'];}
    	$pvp=$res['PVP'];
    	$deuda=$res['Deuda'];?>
  <tr>
  	<td><font face="Arial"><?=$descripcionArticulo;?></font></td>
  	<td><font face="Arial"><?=$pvp;?></font></td>
  	<td><font face="Arial"><?=$deuda;?></font></td>
  </tr>
  <?php }
  mysqli_free_result($sql);
  mysqli_close($conexion);?>
  </table>
  </body>
  </html>
<?php }
else if($opcion=="infopagcli"){
  header("Content-type: application/vnd.ms-excel");
  header("Content-Disposition: attachment; filename=Informe Pagos por Cliente.xls");
  header("Pragma:no-cache");
  header("Expires:0");?>
  <!DOCTYPE html PUBLIC>
  <html xmlns="http://www.w3.org/1999/xhtml" lang="es">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Informe Pagos por Cliente</title>
  </head>
  <body>
  <table width="80%" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="5" bgcolor="#75d3f6"><font face="Arial" size=6><CENTER><strong>Informe Pagos <?=$nombre?></strong></CENTER></font></td>
    </tr>
    <tr bgcolor="white">
      <td width="250"><font face="Arial"><CENTER><strong>Artículo</strong></CENTER></font></td>
      <td width="60"><font face="Arial"><CENTER><strong>PVP</strong></CENTER></font></td>
      <td width="60"><font face="Arial"><CENTER><strong>Deuda</strong></CENTER></font></td>
      <td width="80" rowspan="2" style="vertical-align:middle;"><font face="Arial"><CENTER><strong>Pagos</strong></CENTER></font></td>
      <td width="90" rowspan="2" style="vertical-align:middle;"><font face="Arial"><CENTER><strong>Fechas</strong></CENTER></font></td>
    </tr>
    <?php
      $descripcionArticulo;
      $sql2=mysqli_query($conexion,"SELECT *FROM ventas WHERE IdCliente=".$cliente);
      while($res=mysqli_fetch_array($sql2)){
        $idVenta=$res['IdVenta'];
      	$idArticulo=$res['IdArticulo'];
      	$sql3="SELECT *FROM articulos WHERE IdArticulo=".$idArticulo;
      	$resultado3=mysqli_query($conexion,$sql3);
      	while($fila3=mysqli_fetch_assoc($resultado3)){
      		$descripcionArticulo=$fila3['DescripcionArticulo'];}
      	$pvp=$res['PVP'];
      	$deuda=$res['Deuda'];?>
    <tr>
    	<td><font face="Arial"><?=$descripcionArticulo;?></font></td>
    	<td><font face="Arial"><?=$pvp;?></font></td>
    	<td><font face="Arial"><?=$deuda;?></font></td>
    </tr>
    <tr>
    <?php
    $sql4=mysqli_query($conexion,"SELECT * FROM registro_pagos WHERE IdVenta=".$idVenta);
    while($fila4=mysqli_fetch_assoc($sql4)){
      $pago=$fila4['Pago'];
      $fecha=$fila4['Fecha'];?>
      <td></td>
      <td></td>
      <td></td>
      <td><font face="Arial"><?=$pago;?></font></td>
      <td><font face="Arial"><?=$fecha;?></font></td>
    </tr>
    <?php }}
    mysqli_free_result($sql);
    mysqli_close($conexion);?>
  </table>
  </body>
  </html>
<?php }?>
