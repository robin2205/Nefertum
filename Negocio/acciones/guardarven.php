<?php
function filtro($var){
  $filtrado=str_replace("'","&#39;",$var);
  return $filtrado;}
session_start();
include 'conexion.php';
$IdCliente=$_POST['IdCliente'];
$IdCliente=filtro($IdCliente);
$IdArticulo=$_POST['IdArticulo'];
$IdArticulo=filtro($IdArticulo);
$costo=$_POST['costo'];
$pvp=$_POST['pvp'];
$deuda=$_POST['pvp'];
$pago=$_POST['pago'];
if($pago==""){
  $pago=0;}
$fecha=$_POST['fecha'];
if($pago!=0){
  $deuda=$pvp-$pago;}
$sql="INSERT INTO ventas(IdCliente,IdArticulo,Costo,PVP,Deuda)
VALUES('$IdCliente','$IdArticulo','$costo','$pvp','$deuda')";
$resultado=mysqli_query($conexion,$sql);
$sql2=mysqli_query($conexion,"SELECT MAX(IdVenta) AS IdVenta FROM ventas");
if($fila=mysqli_fetch_row($sql2)){
  $idVenta=trim($fila[0]);
  $sql3="INSERT INTO registro_pagos(IdVenta,Pago,Fecha)
  VALUES('$idVenta','$pago','$fecha')";
  mysqli_query($conexion,$sql3);}
if($resultado<0){?>
  <script>
    alert('La información no fue Registrada Correctamente.')
    location.href="../proyecto/menuAdmin.php?id=Ventas";
  </script>
<?php }
else{?>
  <script>
    alert('La información fue registrada con Éxito.')
    location.href="../proyecto/menuAdmin.php?id=Ventas";
  </script>
<?php }?>
