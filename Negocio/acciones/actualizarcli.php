<?php
session_start();
include 'conexion.php';
$idcliente=$_POST['idCliente'];
$nombre=$_POST['nombrecliente'];
$sql=mysqli_query($conexion,"UPDATE clientes SET NombreCliente='".$nombre."' WHERE IdCliente=".$idcliente);
if($sql<0){?>
  <script>
    alert('La información no fue actualizada Correctamente.')
    location.href="../proyecto/menuAdmin.php?id=Clientes";
  </script>
<?php }
else{?>
  <script>
    alert('La información fue actualizada con Éxito.')
    location.href="../proyecto/menuAdmin.php?id=Clientes";
  </script>
<?php }
?>
