<?php
session_start();
require_once '../acciones/conexion.php';
require_once '../Classes/PHPExcel.php';
function filtro($var){
  $filtrado=str_replace("'","&#39;",$var);
  return $filtrado;}
$opcion=$_POST['rseleccion'];
$cliente=$_POST['cliente'];
$cliente=filtro($cliente);
$sql=mysqli_query($conexion,"SELECT NombreCliente FROM clientes WHERE IdCliente=".$cliente);
if($fila=mysqli_fetch_assoc($sql)){
  $nombre=$fila['NombreCliente'];}
if($opcion=="infovencli"){
  $objPHP=new PHPExcel();
  $objPHP->getProperties()
  ->setCreator("CreativeSoft SAS")
  ->setLastModifiedBy("CreativeSoft SAS")
  ->setTitle("Informe Ventas por Cliente")
  ->setSubject("Informe")
  ->setDescription("Informe")
  ->setKeywords("Informe Ventas por Cliente")
  ->setCategory("Reporte");
  /***********************************************************************************/
  $titurepo="Ventas ".$nombre;
  $titucabe=array('Id Venta','Artículo','Costo','PVP','Ganancia','Deuda');
  $objPHP->setActiveSheetIndex(0)
  ->mergeCells('A1:F1');
  $objPHP->setActiveSheetIndex(0)
  ->setCellValue('A1',$titurepo)
  ->setCellValue('A2',$titucabe[0])
  ->setCellValue('B2',$titucabe[1])
  ->setCellValue('C2',$titucabe[2])
  ->setCellValue('D2',$titucabe[3])
  ->setCellValue('E2',$titucabe[4])
  ->setCellValue('F2',$titucabe[5]);
  $sql2=mysqli_query($conexion,"SELECT * FROM ventas WHERE IdCliente=".$cliente);
  $i=3;
  while($fila2=mysqli_fetch_array($sql2)){
    $objPHP->setActiveSheetIndex(0)
    ->setCellValue('A'.$i,$fila2['IdVenta']);
    $sql3=mysqli_query($conexion,"SELECT DescripcionArticulo FROM articulos WHERE IdArticulo=".$fila2['IdArticulo']);
    if($fila3=mysqli_fetch_assoc($sql3)){
      $objPHP->setActiveSheetIndex(0)
      ->setCellValue('B'.$i,$fila3['DescripcionArticulo']);}
    $objPHP->setActiveSheetIndex(0)
    ->setCellValue('C'.$i,$fila2['Costo'])
    ->setCellValue('D'.$i,$fila2['PVP'])
    ->setCellValue('E'.$i,$fila2['PVP']-$fila2['Costo'])
    ->setCellValue('F'.$i,$fila2['Deuda']);
    $i++;}
  mysqli_free_result($sql2);
  mysqli_free_result($sql3);
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
  $objPHP->getActiveSheet()->getStyle('A1:F1')->applyFromArray($estititurepo);
  $objPHP->getActiveSheet()->getStyle('A2:F2')->applyFromArray($estititucabe);
  $objPHP->getActiveSheet()->setSharedStyle($estiinfo,'A3:F'.($i-1));
  $objPHP->getActiveSheet()->getColumnDimension('A')->setWidth(10);
  $objPHP->getActiveSheet()->getColumnDimension('B')->setWidth(50);
  $objPHP->getActiveSheet()->getColumnDimension('C')->setWidth(10);
  $objPHP->getActiveSheet()->getColumnDimension('D')->setWidth(10);
  $objPHP->getActiveSheet()->getColumnDimension('E')->setWidth(12);
  $objPHP->getActiveSheet()->getColumnDimension('F')->setWidth(11);
  $objPHP->getActiveSheet()->getRowDimension("1")->setRowHeight(35);
  $objPHP->getActiveSheet()->getRowDimension("2")->setRowHeight(22);
  for($f=3;$f<$i;$f++){
    $objPHP->getActiveSheet()->getRowDimension($f)->setRowHeight(15);}
  $objPHP->getActiveSheet()->setTitle('Ventas por Cliente');
  $objPHP->setActiveSheetIndex(0);
  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
  header('Content-Disposition: attachment; filename=Ventas por Cliente.xlsx');
  header('Cache-Control: max-age=0');
  header('Pragma: no-cache');
  $objPHP=PHPExcel_IOFactory::createWriter($objPHP,'Excel2007');
  $objPHP->save('PHP://output');
  exit;
}
else if($opcion=="infoartcli"){
  $objPHP=new PHPExcel();
  $objPHP->getProperties()
  ->setCreator("CreativeSoft SAS")
  ->setLastModifiedBy("CreativeSoft SAS")
  ->setTitle("Informe Artículos por Cliente")
  ->setSubject("Informe")
  ->setDescription("Informe")
  ->setKeywords("Informe Artículos por Cliente")
  ->setCategory("Reporte");
  /***********************************************************************************/
  $titurepo="Artículos ".$nombre;
  $titucabe=array('Artículo','PVP','Deuda');
  $objPHP->setActiveSheetIndex(0)
  ->mergeCells('A1:C1');
  $objPHP->setActiveSheetIndex(0)
  ->setCellValue('A1',$titurepo)
  ->setCellValue('A2',$titucabe[0])
  ->setCellValue('B2',$titucabe[1])
  ->setCellValue('C2',$titucabe[2]);
  $sql2=mysqli_query($conexion,"SELECT * FROM ventas WHERE IdCliente=".$cliente);
  $i=3;
  while($fila2=mysqli_fetch_array($sql2)){
    $sql3=mysqli_query($conexion,"SELECT * FROM articulos WHERE IdArticulo=".$fila2['IdArticulo']);
    if($fila3=mysqli_fetch_assoc($sql3)){
      $objPHP->setActiveSheetIndex(0)
      ->setCellValue('A'.$i,$fila3['DescripcionArticulo']);}
    $objPHP->setActiveSheetIndex(0)
    ->setCellValue('B'.$i,$fila2['PVP'])
    ->setCellValue('C'.$i,$fila2['Deuda']);
    $i++;}
  mysqli_free_result($sql2);
  mysqli_free_result($sql3);
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
  $objPHP->getActiveSheet()->getStyle('A1:C1')->applyFromArray($estititurepo);
  $objPHP->getActiveSheet()->getStyle('A2:C2')->applyFromArray($estititucabe);
  $objPHP->getActiveSheet()->setSharedStyle($estiinfo,'A3:C'.($i-1));
  $objPHP->getActiveSheet()->getColumnDimension('A')->setWidth(50);
  $objPHP->getActiveSheet()->getColumnDimension('B')->setWidth(11);
  $objPHP->getActiveSheet()->getColumnDimension('C')->setWidth(11);
  $objPHP->getActiveSheet()->getRowDimension("1")->setRowHeight(35);
  $objPHP->getActiveSheet()->getRowDimension("2")->setRowHeight(22);
  for($f=3;$f<$i;$f++){
    $objPHP->getActiveSheet()->getRowDimension($f)->setRowHeight(15);}
  $objPHP->getActiveSheet()->setTitle('Artículos por Cliente');
  $objPHP->setActiveSheetIndex(0);
  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
  header('Content-Disposition: attachment; filename=Artículos por Cliente.xlsx');
  header('Cache-Control: max-age=0');
  header('Pragma: no-cache');
  $objPHP=PHPExcel_IOFactory::createWriter($objPHP,'Excel2007');
  $objPHP->save('PHP://output');
  exit;
}
else if($opcion=="infopagcli"){
  $objPHP=new PHPExcel();
  $objPHP->getProperties()
  ->setCreator("CreativeSoft SAS")
  ->setLastModifiedBy("CreativeSoft SAS")
  ->setTitle("Informe Pagos por Cliente")
  ->setSubject("Informe")
  ->setDescription("Informe")
  ->setKeywords("Informe Pagos por Cliente")
  ->setCategory("Reporte");
  /***********************************************************************************/
  $titurepo="Pagos ".$nombre;
  $titucabe=array('Artículos','PVP','Deuda','Pagos','Fechas');
  $objPHP->setActiveSheetIndex(0)
  ->mergeCells('A1:E1');
  $objPHP->setActiveSheetIndex(0)
  ->setCellValue('A1',$titurepo)
  ->setCellValue('A2',$titucabe[0])
  ->setCellValue('B2',$titucabe[1])
  ->setCellValue('C2',$titucabe[2])
  ->setCellValue('D2',$titucabe[3])
  ->setCellValue('E2',$titucabe[4]);
  $sql2=mysqli_query($conexion,"SELECT * FROM ventas WHERE IdCliente=".$cliente);
  $i=3;
  while($fila2=mysqli_fetch_array($sql2)){
    $sql3=mysqli_query($conexion,"SELECT * FROM articulos WHERE IdArticulo=".$fila2['IdArticulo']);
    if($fila3=mysqli_fetch_assoc($sql3)){
      $objPHP->setActiveSheetIndex(0)
      ->setCellValue('A'.$i,$fila3['DescripcionArticulo']);}
    $objPHP->setActiveSheetIndex(0)
    ->setCellValue('B'.$i,$fila2['PVP'])
    ->setCellValue('C'.$i,$fila2['Deuda']);
    $sql4=mysqli_query($conexion,"SELECT * FROM registro_pagos WHERE IdVenta=".$fila2['IdVenta']);
    while($fila4=mysqli_fetch_array($sql4)){
      $objPHP->setActiveSheetIndex(0)
      ->setCellValue('D'.$i,$fila4['Pago'])
      ->setCellValue('E'.$i,$fila4['Fecha']);
      $i++;}}
  mysqli_free_result($sql2);
  mysqli_free_result($sql3);
  mysqli_free_result($sql4);
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
  $objPHP->getActiveSheet()->getStyle('A1:E1')->applyFromArray($estititurepo);
  $objPHP->getActiveSheet()->getStyle('A2:E2')->applyFromArray($estititucabe);
  $objPHP->getActiveSheet()->setSharedStyle($estiinfo,'A3:E'.($i-1));
  $objPHP->getActiveSheet()->getColumnDimension('A')->setWidth(50);
  $objPHP->getActiveSheet()->getColumnDimension('B')->setWidth(11);
  $objPHP->getActiveSheet()->getColumnDimension('C')->setWidth(11);
  $objPHP->getActiveSheet()->getColumnDimension('D')->setWidth(11);
  $objPHP->getActiveSheet()->getColumnDimension('E')->setWidth(13);
  $objPHP->getActiveSheet()->getRowDimension("1")->setRowHeight(35);
  $objPHP->getActiveSheet()->getRowDimension("2")->setRowHeight(22);
  for($f=3;$f<$i;$f++){
    $objPHP->getActiveSheet()->getRowDimension($f)->setRowHeight(15);}
  $objPHP->getActiveSheet()->setTitle('Pagos por Cliente');
  $objPHP->setActiveSheetIndex(0);
  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
  header('Content-Disposition: attachment; filename=Pagos por Cliente.xlsx');
  header('Cache-Control: max-age=0');
  header('Pragma: no-cache');
  $objPHP=PHPExcel_IOFactory::createWriter($objPHP,'Excel2007');
  $objPHP->save('PHP://output');
  exit;
}
mysqli_free_result($sql);
mysqli_close($conexion);
