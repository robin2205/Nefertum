<?php
session_start();
require_once '../acciones/conexion.php';
require_once '../Classes/PHPExcel.php';
$id=$_REQUEST['idVenta'];
$sql=mysqli_query($conexion,"SELECT IdCliente FROM ventas WHERE IdVenta=".$id);
if($fila=mysqli_fetch_assoc($sql)){
  $idcliente=$fila['IdCliente'];}
$sql2=mysqli_query($conexion,"SELECT NombreCliente FROM clientes WHERE IdCliente=".$idcliente);
if($fila2=mysqli_fetch_assoc($sql2)){
  $nombrecliente=$fila2['NombreCliente'];}
  $objPHP=new PHPExcel();
  $objPHP->getProperties()
  ->setCreator("CreativeSoft SAS")
  ->setLastModifiedBy("CreativeSoft SAS")
  ->setTitle("Informe Pagos")
  ->setSubject("Informe")
  ->setDescription("Informe")
  ->setKeywords("Informe Pagos")
  ->setCategory("Reporte");
  /***********************************************************************************/
  $titurepo="Pagos ".$nombrecliente;
  $titucabe=array('Id Venta','Artículo','Pagos','Fechas');
  $objPHP->setActiveSheetIndex(0)
  ->mergeCells('A1:D1');
  $objPHP->setActiveSheetIndex(0)
  ->setCellValue('A1',$titurepo)
  ->setCellValue('A2',$titucabe[0])
  ->setCellValue('B2',$titucabe[1])
  ->setCellValue('C2',$titucabe[2])
  ->setCellValue('D2',$titucabe[3]);
  $sql3=mysqli_query($conexion,"SELECT Pago,Fecha FROM registro_pagos WHERE IdVenta=".$id);
  $i=3;
  while($fila3=mysqli_fetch_array($sql3)){
    $objPHP->setActiveSheetIndex(0)
    ->setCellValue('C'.$i,$fila3['Pago'])
    ->setCellValue('D'.$i,$fila3['Fecha']);
    $sql4=mysqli_query($conexion,"SELECT IdArticulo FROM ventas WHERE IdVenta=".$id);
    if($fila4=mysqli_fetch_assoc($sql4)){
      $idarticulo=$fila4['IdArticulo'];}
    $sql5=mysqli_query($conexion,"SELECT DescripcionArticulo FROM articulos WHERE IdArticulo=".$idarticulo);
    if($fila5=mysqli_fetch_assoc($sql5)){
      $objPHP->setActiveSheetIndex(0)
      ->setCellValue('B'.$i,$fila5['DescripcionArticulo']);}
      $objPHP->setActiveSheetIndex(0)
      ->setCellValue('A'.$i,$id);
    $i++;}
  mysqli_free_result($sql3);
  mysqli_free_result($sql4);
  mysqli_free_result($sql5);
  /***********************************************************************************/
  #ESTILOS
  $estititurepo=array(
    'font'=>array(
      'name'=>'Arial',
      'bold'=>true,
      'size'=>24,
      'color'=>array('rgb'=>'FFFFFF')),
    'fill'=>array(
      'type'=>PHPExcel_Style_Fill::FILL_SOLID,
      'color'=>array('argb'=>'145dff')),
    'borders'=>array(
      'allborders'=>array(
        'style'=>PHPExcel_Style_Border::BORDER_THIN,
        'color'=>array('rgb'=>'000000'))),
    'alignment'=>array(
      'horizontal'=>PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
      'vertical'=>PHPExcel_Style_Alignment::VERTICAL_CENTER,
      'rotation'=>0,
      'wrap'=>TRUE));
  $estititucabe=array(
    'font'=>array(
      'name'=>'Arial',
      'bold'=>true,
      'size'=>12,
      'color'=>array('rgb'=>'000000')),
    'fill'=>array(
      'type'=>PHPExcel_Style_Fill::FILL_SOLID,
      'color'=>array('rgb'=>'dddddd')),
    'borders'=>array(
      'allborders'=>array(
        'style'=>PHPExcel_Style_Border::BORDER_THIN,
        'color'=>array('rgb'=>'000000'))),
    'alignment'=>array(
      'horizontal'=>PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
      'vertical'=>PHPExcel_Style_Alignment::VERTICAL_CENTER,
      'rotation'=>0,
      'wrap'=>TRUE));
  $estiinfo=new PHPExcel_Style();
  $estiinfo->applyFromArray(array(
    'font'=>array(
      'name'=>'Arial',
      'size'=>11,
      'color'=>array('rgb'=>'000000')),
    'fill'=>array(
      'type'=>PHPExcel_Style_Fill::FILL_SOLID,
      'color'=>array('rgb'=>'FFFFFF')),
    'borders'=>array(
      'allborders'=>array(
        'style'=>PHPExcel_Style_Border::BORDER_THIN,
        'color'=>array('rgb'=>'000000'))),
    'alignment'=>array(
      'rotation'=>0,
      'wrap'=>TRUE)
  ));
  $objPHP->getActiveSheet()->getStyle('A1:XFD1048576')->getFill()->setFillType(
  PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFFFFF');
  $objPHP->getActiveSheet()->getStyle('A1:D1')->applyFromArray($estititurepo);
  $objPHP->getActiveSheet()->getStyle('A2:D2')->applyFromArray($estititucabe);
  $objPHP->getActiveSheet()->setSharedStyle($estiinfo,'A3:D'.($i-1));
  $objPHP->getActiveSheet()->getColumnDimension('A')->setWidth(10);
  $objPHP->getActiveSheet()->getColumnDimension('B')->setWidth(40);
  $objPHP->getActiveSheet()->getColumnDimension('C')->setWidth(11);
  $objPHP->getActiveSheet()->getColumnDimension('D')->setWidth(13);
  $objPHP->getActiveSheet()->getRowDimension("1")->setRowHeight(35);
  $objPHP->getActiveSheet()->getRowDimension("2")->setRowHeight(22);
  for($f=3;$f<$i;$f++){
    $objPHP->getActiveSheet()->getRowDimension($f)->setRowHeight(15);}
  $objPHP->getActiveSheet()->setTitle('Informe Pagos');
  $objPHP->setActiveSheetIndex(0);
  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
  header('Content-Disposition: attachment; filename=Pagos.xlsx');
  header('Cache-Control: max-age=0');
  header('Pragma: no-cache');
  $objPHP=PHPExcel_IOFactory::createWriter($objPHP,'Excel2007');
  $objPHP->save('PHP://output');
  exit;
mysqli_free_result($sql);
mysqli_free_result($sql2);
mysqli_close($conexion);
