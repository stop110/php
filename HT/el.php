<?php  
		header("Content-type: text/html; charset=utf-8"); 
/** PHPExcel */  
include 'phpexcel/classes/phpexcel.php';
include 'phpexcel/Classes/PHPExcel/Writer/Excel2007.php';
include 'phpexcel/Classes/PHPExcel/Writer/Excel5.php';
include 'phpexcel/Classes/PHPExcel/IOFactory.php';
  
// Create new PHPExcel object  
$objPHPExcel = new PHPExcel();  
  
// Set properties  
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")  
                             ->setLastModifiedBy("Maarten Balliauw")  
                             ->setTitle("Office 2007 XLSX Test Document")  
                             ->setSubject("Office 2007 XLSX Test Document")  
                             ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")  
                             ->setKeywords("office 2007 openxml php")  
                             ->setCategory("Test result file");  
$objPHPExcel->getActiveSheet()->mergeCells('A1:D1');  
$objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);  
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);  
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);  
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);  
  
// Add some data  
  
  
$objPHPExcel->setActiveSheetIndex(0)  
            ->setCellValue('A1', '报名数据汇总' . date('Y-m-d H:i:s'))  
            ->setCellValue('A2', 'ID')  
            ->setCellValue('B2', '姓名')  
            ->setCellValue('C2', '手机')  
            ->setCellValue('D2', '报名时间');      
  
	//数据库连接  
	include "DB.php";
	mysql_query("SET NAMES UTF8"); //设定编码方式为UTF8  	
	$sql="SELECT id,mobile,username,createddate FROM entered ORDER BY id ASC";
	$resultgroups=mysql_query($sql);   
    $numrows=mysql_num_rows($resultgroups);  
    if ($numrows>0)  
    {  
        $count=2;  
        while($data=mysql_fetch_array($resultgroups))  
        {  
            $count+=1;  
            $l1="A"."$count";  
            $l2="B"."$count";  
            $l3="C"."$count";  
            $l4="D"."$count";  
            $objPHPExcel->setActiveSheetIndex(0)              
                        ->setCellValue($l1, $data['id'])  
                        ->setCellValue($l2, $data['username'])  
                        ->setCellValue($l3, $data['mobile'])  
                        ->setCellValue($l4, $data['createddate']);  
        }  
    }          
    
// Rename sheet  
$objPHPExcel->getActiveSheet()->setTitle('报名活动汇总');  
  
  
// Set active sheet index to the first sheet, so Excel opens this as the first sheet  
$objPHPExcel->setActiveSheetIndex(0);  
  
 ob_end_clean();//清除缓冲区,避免乱码 
// Redirect output to a client’s web browser (Excel5)  
header('Content-Type: application/vnd.ms-excel');  
header('Content-Disposition: attachment;filename="报名活动汇总(' . date('Ymd') . ').xls"');  
header('Cache-Control: max-age=0');  
  
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');  
$objWriter->save('php://output');  
exit;  
?>  