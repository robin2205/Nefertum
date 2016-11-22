<?php
session_start();
include 'conexion.php';
$nombre=$_POST['nombrecliente'];
$sql=mysqli_query($conexion,"INSERT INTO clientes(Nombrecliente) VALUES('$nombre')");
if($sql<0){?>
  <script>
    alert('La información no fue Registrada Correctamente.')
    location.href="../proyecto/menuAdmin.php?id=Clientes";
  </script>
<?php }
else{?>
  <script>
    alert('La información fue registrada con Éxito.')
    location.href="../proyecto/menuAdmin.php?id=Clientes";
  </script>
<?php }
?>
