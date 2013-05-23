<?php
define('FPDF_FONTPATH','../font/');

require('../fpdf.php');

$pdf=new FPDF();

// เพิ่มฟ้อนต์ภาษาไทยเข้ามา ตัวธรรมดา กำหนด ชื่อ เป็น angsana
$pdf->AddFont('angsana','','angsa.php');

//สร้างหน้าเอกสาร
$pdf->AddPage();

// กำหนดฟ้อนต์ที่จะใช้  อังสนา ตัวธรรมดา ขนาด 14
$pdf->SetFont('angsana','',14);

// พิมพ์ข้อความลงเอกสาร
$pdf->Cell( 0  , 5 , iconv( 'UTF-8','cp874' , 'พิมพ์ให้อยู่ตรงกลาง' ) , 0 , 1 , 'C' );

$pdf->Output();
?>