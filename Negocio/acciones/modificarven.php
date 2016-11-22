<?php
session_start();
include 'conexion.php';
$idventa=$_POST['Idventa'];
$costo=$_POST['costo'];
$pvp=$_POST['pvp'];
$fecha=$_POST['fecha'];
$sql2=mysqli_query($conexion,"SELECT IdRegistro,Fecha FROM registro_pagos WHERE Fecha=(SELECT MAX(Fecha) FROM registro_pagos WHERE IdVenta=".$idventa.")AND IdVenta=".$idventa);
if($n_registro=mysqli_fetch_assoc($sql2)){
  $numero=$n_registro['IdRegistro'];}
$sql=mysqli_query($conexion,"UPDATE ventas SET Costo=".$costo.",PVP=".$pvp.",Deuda=".$pvp." WHERE IdVenta=".$idventa);
$sql3=mysqli_query($conexion,"UPDATE registro_pagos SET Fecha='".$fecha."' WHERE IdRegistro=".$numero);
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
<?php }?>
