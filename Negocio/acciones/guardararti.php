<?php
session_start();
include 'conexion.php';
$descripcion=$_POST['descripcion'];
$sql=mysqli_query($conexion,"INSERT INTO articulos(DescripcionArticulo) VALUES('$descripcion')");
if($sql<0){?>
  <script>
    alert('La información no fue Registrada Correctamente.')
    location.href="../proyecto/menuAdmin.php?id=Articulos";
  </script>
<?php }
else{?>
  <script>
    alert('La información fue registrada con Éxito.')
    location.href="../proyecto/menuAdmin.php?id=Articulos";
  </script>
<?php }
?>
