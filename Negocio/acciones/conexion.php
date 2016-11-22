<?php
//Conexión con la Base de datos
$conexion=mysqli_connect("localhost","root","","bdnego");
//FUNCIÓN PARA TRAER LAS TILDES CORRECTAMENTE DESDE LA BASE DE DATOS
mysqli_set_charset($conexion,'utf8');?>
