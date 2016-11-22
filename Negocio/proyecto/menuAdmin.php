<?php
session_start();
include '../acciones/conexion.php';
if(isset($_SESSION['usuario'])){?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Menú Principal</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="../datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Atma" rel="stylesheet">
    <link rel="icon" href="../Imagenes/logo2.png" type="image/x-icon">
    <script>
    function validar_texto(e){
    	tecla=(document.all)?e.keyCode:e.which;
    	if (tecla==8) return true;
    	patron=/[A-Za-z\sáéíóúñ]/;
    	tecla_final=String.fromCharCode(tecla);
    	return patron.test(tecla_final);}
    function validar_numero(e){
    	tecla=(document.all)?e.keyCode:e.which;
    	if (tecla==8) return true;
    	patron=/\d/;
    	tecla_final=String.fromCharCode(tecla);
    	return patron.test(tecla_final);}
    </script>
  </head>
  <body id="cuerpo">
    <img id="background2" src="../Imagenes/fondo.jpg">
    <div class="container-fluid">
      <br>
      <div class="row">
        <div class="col-md-12">
          <?php include('../modulos/menunavegacion.php');?>
        </div>
        <div class="col-md-12">
          <div class="panel panel-primary">
            <div class="panel-body" id="panel-body">
            <?php
            /*LA ETIQUETA error_reporting SIRVE PARA CONTROLAR
            LOS MENSAJES DE ERROR, EL 0 SIRVE PARA NO MOSTRAR
            ERRORES EN PANTALLA*/
            error_reporting(0);
            /*CREAMOS UNA VARIABLE PARA CAPTURAR LA URL O PÁGINA A MOSTRAR
            CON LA ETIQUETA strip_tags SE ELIMINAN TODAS LAS ETIQUETAS HTML
            Y ASÍ EVITAR UN XSS*/
            $accion=strip_tags($_GET['id']);
            /*HACEMOS UNA VALIDACIÓN DE QUE SI LA VARIABLE
            ESTA VACIA, SE MOSTRARÁ LA PAGÍNA PRINCIPAL*/
            if(accion==""){
              include("../modulos/inicio.php");}
            else{
              switch($accion){
                case 'Inicio':
                  include("../modulos/inicio.php");
                  break;
                case 'Articulos':
                  include("../modulos/articulos.php");
                  break;
                case 'nuevoArti':
                  include("../modulos/nuevoArti.php");
                  break;
                case 'Clientes':
                  include("../modulos/clientes.php");
                  break;
                case 'nuevoCli':
                  include("../modulos/nuevoCli.php");
                  break;
                case 'Ventas':
                  include("../modulos/ventas.php");
                  break;
                case 'nuevaVenta':
                  include("../modulos/nuevaVenta.php");
                  break;
                case 'Usuarios':
                  include("../modulos/usuarios.php");
                  break;
                case 'nuevoUsu':
                  include("../modulos/nuevoUsu.php");
                  break;
                default:
                  include('../modulos/inicio.php');
                  break;}}?>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <p>&copy; 2016 Robinson, Inc.</p>
      </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../datatables/jquery.dataTables.min.js"></script>
    <script src="../datatables/dataTables.bootstrap.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
      $('#modalc').on('click',function(){
        $('.modalClientes').addClass('animated fadeInUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oAnimationEnd animationend');});});
    $(document).ready(function(){
      $('#modala').on('click',function(){
        $('.modalArticulos').addClass('animated slideInLeft').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oAnimationEnd animationend');});});
    $(document).ready(function(){
      $('#editarv').on('click',function(){
        $('.editarVentas').addClass('animated zoomInDown').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oAnimationEnd animationend');});});
    $(document).ready(function(){
      $('#actuav').on('click',function(){
        $('.actualizarVentas').addClass('animated rotateInUpRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oAnimationEnd animationend');});});
    $(document).ready(function(){
      $('#modalco').on('click',function(){
        $('.modalContacto').addClass('animated bounceInRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oAnimationEnd animationend');});});
    $(document).ready(function(){
      $('#modalot').on('click',function(){
        $('.modalOtros').addClass('animated fadeInDown').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oAnimationEnd animationend');});});
    /*TABLA CLIENTES*/
    $('#tablaclientes').DataTable({
    "language":{
        "sProcessing":      "Procesando...",
        "sLengthMenu":      "Mostrar _MENU_ registros",
        "sZeroRecords":     "No se encontraron resultados",
        "sEmptyTable":      "No hay datos disponibles en esta tabla",
        "sInfo":            "Registros del _START_ al _END_ de un total de _TOTAL_.",
        "sInfoEmpty":       "Registros del 0 al 0 de un total de 0.",
        "sInfoFiltered":    "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":     "",
        "sSearch":          "Buscar:",
        "sUrl":             "",
        "sInfoThousands":   ",",
        "sLoadingRecords":  "Cargando...",
        "oPaginate":{
            "sFirst":       "Primero",
            "sLast":        "Último",
            "sNext":        "Siguiente",
            "sPrevious":    "Anterior"},
        "oAria":{
            "sSortAscending":  ":Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ":Activar para ordenar la columna de manera descendente"}}});
    $(function(){
      $("#tablaclientes").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "info": true,
        "autoWidth": false});});
    /*TABLA ARTÍCULOS*/
    $('#tablaarticulos').DataTable({
    "language":{
        "sProcessing":      "Procesando...",
        "sLengthMenu":      "Mostrar _MENU_ registros",
        "sZeroRecords":     "No se encontraron resultados",
        "sEmptyTable":      "No hay datos disponibles en esta tabla",
        "sInfo":            "Registros del _START_ al _END_ de un total de _TOTAL_.",
        "sInfoEmpty":       "Registros del 0 al 0 de un total de 0.",
        "sInfoFiltered":    "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":     "",
        "sSearch":          "Buscar:",
        "sUrl":             "",
        "sInfoThousands":   ",",
        "sLoadingRecords":  "Cargando...",
        "oPaginate":{
            "sFirst":       "Primero",
            "sLast":        "Último",
            "sNext":        "Siguiente",
            "sPrevious":    "Anterior"},
        "oAria":{
            "sSortAscending":  ":Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ":Activar para ordenar la columna de manera descendente"}}});
    $(function(){
      $("#tablaarticulos").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "info": true,
        "autoWidth": false});});
    /*TABLA VENTAS*/
    $('#tablaventas').DataTable({
    "language":{
        "sProcessing":      "Procesando...",
        "sLengthMenu":      "Mostrar _MENU_ registros",
        "sZeroRecords":     "No se encontraron resultados",
        "sEmptyTable":      "No hay datos disponibles en esta tabla",
        "sInfo":            "Registros del _START_ al _END_ de un total de _TOTAL_.",
        "sInfoEmpty":       "Registros del 0 al 0 de un total de 0.",
        "sInfoFiltered":    "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":     "",
        "sSearch":          "Buscar:",
        "sUrl":             "",
        "sInfoThousands":   ",",
        "sLoadingRecords":  "Cargando...",
        "oPaginate":{
            "sFirst":       "Primero",
            "sLast":        "Último",
            "sNext":        "Siguiente",
            "sPrevious":    "Anterior"},
        "oAria":{
            "sSortAscending":  ":Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ":Activar para ordenar la columna de manera descendente"}}});
    $(function(){
      $("#tablaventas").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "info": true,
        "autoWidth": false});});
    </script>
  </body>
</html>
<?php }
else{
	echo '<script> window.location="../index.php";</script>';}?>
