<?php
require('fpdf/fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
/*
เพิ่ม Font เข้ามาเท่าที่จะใช้เพราะจะทำ
ให้ไฟล์ pdf ของเรามีขนาดใหญ่
*/
$pdf->AddFont('AngsanaNew','','angsa.php');
$pdf->AddFont('AngsanaNew','B','angsab.php');
$pdf->AddFont('AngsanaNew','I','angsai.php');
//กำหนดแบบอักษร
$pdf->SetFont('AngsanaNew','',18);
$pdf->Cell(0,10,'ตัวอย่าง Font ภาษาไทย');
$pdf->Ln(8);
$pdf->SetFont('AngsanaNew','B',20);
$pdf->Cell(0,10,'Font ภาษาไทย AngsanaNew 20 ตัวหนา');
$pdf->Ln(8);
$pdf->SetFont('AngsanaNew','I',25);
$pdf->Cell(0,10,'Font ภาษาไทย AngsanaNew 25 ตัวเอียง');$pdf->Output();
?>