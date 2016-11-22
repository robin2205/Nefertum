<?php
session_start();
include 'conexion.php';
$idarticulo=$_POST['idArticulo'];
$descripcion=$_POST['descripcionArti'];
$sql=mysqli_query($conexion,"UPDATE articulos SET DescripcionArticulo='".$descripcion."' WHERE IdArticulo=".$idarticulo);
if($sql<0){?>
  <script>
    alert('La información no fue actualizada Correctamente.')
    location.href="../proyecto/menuAdmin.php?id=Articulos";
  </script>
<?php }
else{?>
  <script>
    alert('La información fue actualizada con Éxito.')
    location.href="../proyecto/menuAdmin.php?id=Articulos";
  </script>
<?php }
?>
