<?php
session_start();
include 'conexion.php';
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$sql="select * from usuarios where Usuario='$usuario' and Contrasena='$contrasena'";
$resultado=mysqli_query($conexion,$sql);
if(mysqli_num_rows($resultado)>0){
	$fila=mysqli_fetch_array($resultado);
  $estado=$fila['Estado'];
	$perfil=$fila['Perfil'];
  if($estado=="Activo"&&$perfil==1){
    $_SESSION["usuario"]=$usuario;
    header('Location:../proyecto/menuAdmin.php');}
	else{?>
		<script>
		  alert('El usuario no esta Activo')
		  location.href="../index.php";
		</script>
<?php }}
else{?>
	<script>
		alert('Usuario o Contraseña incorrectos')
		location.href="../index.php";
	</script>
<?php }?>
