<?php
$fecha_a=date('Y-m-d');
$nueva_fecha=strtotime('-1 day', strtotime($fecha_a));
$nueva_fecha=date('Y-m-d',$nueva_fecha);


 $con=mysqli_connect("localhost","root","","flecha_amarilla");
 $result=mysqli_query($con,"SELECT * FROM servicios
   where (estatus='proceso' AND unidad={$_POST["unidad"]})
   AND ((fecha_registro='{$nueva_fecha}' AND hora_registro>'14:00:00')OR(fecha_registro='{$fecha_a}' AND hora_registro<'14:00:00'))");
 $registros = mysqli_num_rows ($result);

 if ($registros > 0) {
   require_once 'Classes/PHPExcel.php';
   $objPHPExcel = new PHPExcel();

   //Informacion del excel
   $objPHPExcel->
    getProperties()
        ->setCreator("ingenieroweb.com.co")
        ->setLastModifiedBy("ingenieroweb.com.co")
        ->setTitle("Exportar excel desde mysql")
        ->setSubject("Ejemplo 1")
        ->setDescription("Documento generado con PHPExcel")
        ->setKeywords("ingenieroweb.com.co  con  phpexcel")
        ->setCategory("unidades");
        $i=1;
        $objPHPExcel->setActiveSheetIndex(0)
              ->setCellValue('A'.$i,"No. Servicio");
        $objPHPExcel->setActiveSheetIndex(0)
           ->setCellValue('B'.$i,"RUTA");
        $objPHPExcel->setActiveSheetIndex(0)
           ->setCellValue('C'.$i,"EMPRESA");
        $objPHPExcel->setActiveSheetIndex(0)
           ->setCellValue('D'.$i,"DOMICILIO");
        $objPHPExcel->setActiveSheetIndex(0)
           ->setCellValue('E'.$i,"TELEFONO");
        $objPHPExcel->setActiveSheetIndex(0)
           ->setCellValue('F'.$i,"PAQUETES");
        $objPHPExcel->setActiveSheetIndex(0)
           ->setCellValue('G'.$i,"HORARIO");
        $objPHPExcel->setActiveSheetIndex(0)
           ->setCellValue('H'.$i,"UNIDAD");
        $objPHPExcel->setActiveSheetIndex(0)
           ->setCellValue('I'.$i,"NOMBRE");
        $objPHPExcel->setActiveSheetIndex(0)
           ->setCellValue('J'.$i,"CLAVE");
        $objPHPExcel->setActiveSheetIndex(0)
           ->setCellValue('K'.$i,"FECHA");
   $i = 2;
   while ($registro = mysqli_fetch_object ($result)) {
     $objPHPExcel->setActiveSheetIndex(0)
           ->setCellValue('A'.$i, $registro->id);
  $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('B'.$i, $registro->ruta);
  $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('C'.$i, $registro->empresa);
  $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('D'.$i, $registro->domicilio);
  $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('E'.$i, $registro->telefono);
  $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('F'.$i, $registro->paquetes);
  $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('G'.$i, $registro->horario);
  $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('H'.$i, $registro->unidad);
  $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('I'.$i, $registro->nombre);
  $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('J'.$i, $registro->clave);
  $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('K'.$i, $registro->fecha_registro);



      $i++;

   }
}
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="ejemplo1.xlsx"');
header('Cache-Control: max-age=0');

$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
$objWriter->save('php://output');
exit;
mysql_close ();
?>
