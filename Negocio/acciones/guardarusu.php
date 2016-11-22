<?php
session_start();
include 'conexion.php';
$idusuario=$_POST['Idusuario'];
$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$estado=$_POST['estado'];
$perfil=$_POST['perfil'];
$sql=mysqli_query($conexion,"select * from usuarios where IdUsuario=$idusuario");
if($fila=mysqli_fetch_assoc($sql)){
  if($idusuario==$fila['IdUsuario']){?>
    <script>
      alert('La Identificación del Usuario ya existe. Por favor verifique la información que está Registrando.')
      location.href="../proyecto/menuAdmin.php?id=Usuarios";
    </script>
<?php }}
else{
  $sql2=mysqli_query($conexion,"select * from usuarios where Usuario='".$usuario."'");
  if($fila2=mysqli_fetch_assoc($sql2)){
    if($usuario==$fila2['Usuario']){?>
      <script>
        alert('El usuario que esta asignando ya existe. Por favor verifique la información que está Registrando.')
        location.href="../proyecto/menuAdmin.php?id=Usuarios";
      </script>
<?php }}
else{
  $sql3=mysqli_query($conexion,"INSERT INTO usuarios(IdUsuario,Nombre,Usuario,Contrasena,Estado,Perfil)
  VALUES($idusuario,'$nombre','$usuario','$contrasena','$estado',$perfil)");
  if($sql3<0){?>
    <script>
      alert('La información no fue Registrada Correctamente.')
      location.href="../proyecto/menuAdmin.php?id=Usuarios";
    </script>
<?php }
else{?>
  <script>
    alert('La información fue registrada con Éxito.')
    location.href="../proyecto/menuAdmin.php?id=Usuarios";
  </script>
<?php }}}?>
