<?php
session_start();
include '../acciones/conexion.php';
$id=$_REQUEST['idVenta'];
$sql2=mysqli_query($conexion,"select IdCliente from ventas where IdVenta=".$id);
if($res2=mysqli_fetch_assoc($sql2)){
  $idcliente=$res2['IdCliente'];}
$sql3=mysqli_query($conexion,"select NombreCliente from clientes where IdCliente=".$idcliente);
if($res3=mysqli_fetch_assoc($sql3)){
  $nombrecliente=$res3['NombreCliente'];}
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Pagos.xls");
header("Pragma:no-cache");
header("Expires:0");?>
<!DOCTYPE html PUBLIC>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Informe Pagos</title>
</head>
<body>
<table width="80%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="4" bgcolor="#75d3f6"><font face="Arial" size=6><CENTER><strong>Informe Pagos <?=$nombrecliente;?></strong></CENTER></font></td>
  </tr>
  <tr bgcolor="white">
    <td width="80"><font face="Arial"><CENTER><strong>Id Venta</strong></CENTER></font></td>
    <td width="250"><font face="Arial"><CENTER><strong>Artículo</strong></CENTER></font></td>
    <td width="80"><font face="Arial"><CENTER><strong>Pagos</strong></CENTER></font></td>
    <td width="100"><font face="Arial"><CENTER><strong>Fechas</strong></CENTER></font></td>
  </tr>
  <?php
    $sql=mysqli_query($conexion,"select Pago,Fecha from registro_pagos where IdVenta=".$id);
    while($res=mysqli_fetch_array($sql)){
    	$pago=$res['Pago'];
    	$fecha=$res['Fecha'];
      $sql5=mysqli_query($conexion,"select IdArticulo from ventas where IdVenta=".$id);
      if($res5=mysqli_fetch_assoc($sql5)){
        $idarticulo=$res5['IdArticulo'];}
      $sql4=mysqli_query($conexion,"select DescripcionArticulo from articulos where IdArticulo=".$idarticulo);
      if($res4=mysqli_fetch_assoc($sql4)){
        $descripcion=$res4['DescripcionArticulo'];}?>
    <tr>
    	<td><font face="Arial"><?=$id;?></font></td>
    	<td><font face="Arial"><?=$descripcion;?></font></td>
    	<td><font face="Arial"><?=$pago;?></font></td>
    	<td><font face="Arial"><?=$fecha;?></font></td>
    </tr>
    <?php }
    mysqli_free_result($sql);
    mysqli_close($conexion);?>
</table>
</body>
</html>
