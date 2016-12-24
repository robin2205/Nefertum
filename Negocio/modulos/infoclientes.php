<?php
session_start();
require_once '../acciones/conexion.php';
require_once '../Classes/PHPExcel.php';
$objPHP=new PHPExcel();
$objPHP->getProperties()
->setCreator("CreativeSoft SAS")
->setLastModifiedBy("CreativeSoft SAS")
->setTitle("Informe Clientes")
->setSubject("Informe")
->setDescription("Informe")
->setKeywords("Informe Clientes")
->setCategory("Reporte");
/***********************************************************************************/
$titurepo="Informe Clientes";
$titucabe=array('Id Cliente','Nombre Cliente','Deuda');
$objPHP->setActiveSheetIndex(0)
->mergeCells('A1:C1');
$objPHP->setActiveSheetIndex(0)
->setCellValue('A1',$titurepo)
->setCellValue('A2',$titucabe[0])
->setCellValue('B2',$titucabe[1])
->setCellValue('C2',$titucabe[2]);
$sql=mysqli_query($conexion,"SELECT * FROM clientes");
$i=3;
while($fila=mysqli_fetch_array($sql)){
  $objPHP->setActiveSheetIndex(0)
  ->setCellValue('A'.$i,$fila['IdCliente'])
  ->setCellValue('B'.$i,$fila['NombreCliente']);
  $sql2=mysqli_query($conexion,"SELECT SUM(Deuda) AS deuda FROM ventas WHERE IdCliente=".$fila['IdCliente']);
  if($fila2=mysqli_fetch_assoc($sql2)){
    $deuda=$fila2['deuda'];
    if($deuda==NULL){
      $deuda=0;}
    $objPHP->setActiveSheetIndex(0)
    ->setCellValue('C'.$i,$deuda);}
  $i++;}
mysqli_free_result($sql);
mysqli_free_result($sql2);
mysqli_close($conexion);
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
$objPHP->getActiveSheet()->getColumnDimension('A')->setWidth(15);
$objPHP->getActiveSheet()->getColumnDimension('B')->setWidth(50);
$objPHP->getActiveSheet()->getColumnDimension('C')->setWidth(15);
$objPHP->getActiveSheet()->getRowDimension("1")->setRowHeight(35);
$objPHP->getActiveSheet()->getRowDimension("2")->setRowHeight(22);
for($f=3;$f<$i;$f++){
  $objPHP->getActiveSheet()->getRowDimension($f)->setRowHeight(15);}
#Se renombra la hoja
$objPHP->getActiveSheet()->setTitle('Informe Clientes');
#Se establece la hoja activa, para que cuando se abra el documento se muestre primero
$objPHP->setActiveSheetIndex(0);
#Se modifican los encabezados del HTTP para indicar que se envia un archivo de Excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename=Informe Clientes.xlsx');
header('Cache-Control: max-age=0');
header('Pragma: no-cache');
$objPHP=PHPExcel_IOFactory::createWriter($objPHP,'Excel2007');
$objPHP->save('PHP://output');
exit;?>
