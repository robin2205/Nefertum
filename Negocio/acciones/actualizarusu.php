<?php
session_start();
include 'conexion.php';
$idusuario=$_POST['Idusuario'];
$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$estado=$_POST['estado'];
$sql=mysqli_query($conexion,"UPDATE usuarios SET Nombre='".$nombre."',Usuario='".$usuario."',Estado='".$estado."' WHERE IdUsuario=$idusuario");
if($sql<0){?>
  <script>
    alert('La información no fue actualizada Correctamente.')
    location.href="../proyecto/menuAdmin.php?id=Usuarios";
  </script>
<?php }
else{?>
  <script>
    alert('La información fue actualizada con Éxito.')
    location.href="../proyecto/menuAdmin.php?id=Usuarios";
  </script>
<?php }?>
