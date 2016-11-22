<?php
session_start();
include 'conexion.php';
$idVenta=$_POST['Idventa'];
$deuda=$_POST['deuda'];
$pago=$_POST['pago'];
$fecha=$_POST['fecha'];
$nuevopago=$deuda-$pago;
if($deuda!=0){
		$sql=mysqli_query($conexion,"UPDATE ventas SET Deuda='$nuevopago' WHERE IdVenta=$idVenta");
		$sql2=mysqli_query($conexion,"INSERT INTO registro_pagos(IdVenta,Pago,Fecha) VALUES('$idVenta','$pago','$fecha')");
    if($sql<0){?>
      <script>
        alert('La información no fue actualizada Correctamente.')
        location.href="../proyecto/menuAdmin.php?id=Ventas";
      </script>
    <?php }
    else{?>
      <script>
        alert('La información fue actualizada con Éxito.')
        location.href="../proyecto/menuAdmin.php?id=Ventas";
      </script>
<?php }}
else {?>
  <script>
    alert('La deuda ya está pagada. Esta información no se puede Actualizar.')
    location.href="../proyecto/menuAdmin.php?id=Ventas";
  </script>
<?php }?>
