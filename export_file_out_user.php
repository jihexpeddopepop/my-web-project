<?php session_start(); ?>
<?php include('connectdb.php'); ?>


<?php
require('fpdf/fpdf.php');
$pdf=new FPDF();

class PDF extends FPDF
{
 
function Header()
{
}
 
//Page footer
function Footer()
{}
 
//Simple table
function BasicTable($header,$data)
{
$this->SetFillColor(255,0,0);
$this->SetDrawColor(128,0,0);
$w=array(30,15,20,10,10,10,10,10,15,15,15,15,15);
 
    //Header
    for($i=0;$i<count($header);$i++)
        $this->Cell(40,10,$header[$i],1,0,'C',true);
    $this->Ln();
    //Data
    foreach ($data as $eachResult)
    { //width
        $this->Cell(40,12,$eachResult["book_detail_date"],1);
        $this->Cell(40,12,$eachResult["book_detail_title"],1);
        $this->Cell(40,12,$eachResult["deptname1"],1);
        $this->Cell(40,12,$eachResult["deptname2"],1);
        $this->Ln();
 
    }
}

}
 

$pdf->AddPage();
$pdf->AddFont('AngsanaNew','','angsa.php');
$pdf->AddFont('AngsanaNew','B','angsab.php');
$pdf->AddFont('AngsanaNew','I','angsai.php');

$pdf->Ln(8);
$pdf->SetFont('AngsanaNew','B',22);
$pdf->Cell(0,10,iconv( 'UTF-8','TIS-620', 'เอกสารส่งออก'),0,1,"C");
// $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620', 'เอกสารส่งออก'),0,1,"C");
// $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620', 'เอกสารส่งออก'),0,1,"C");

// Header
$pdf->Ln(5);
$pdf->SetFont('AngsanaNew','B',18);
$pdf->Cell(30,10,iconv( 'UTF-8','TIS-620', 'วันที่'),1,0,"C");
$pdf->Cell(50,10,iconv( 'UTF-8','TIS-620', 'ชื่อหนังสือ'),1,0,"C");
$pdf->Cell(50,10,iconv( 'UTF-8','TIS-620', 'จากหน่วยงาน'),1,0,"C");
$pdf->Cell(50,10,iconv( 'UTF-8','TIS-620', 'ถึงหน่วยงาน'),1,1,"C");

if ($_GET["dep2"] =="all")
{
    $strSQL = "SELECT b1.book_detail_id, b1.book_detail_no, b1.book_detail_title, b1.book_detail_detail,b2.book_dept_name AS deptname1,b3.book_dept_name AS deptname2
    , b1.book_detail_date, b1.book_detail_file 
    FROM book_detail b1 
    LEFT OUTER JOIN book_dept b2 ON b2.book_dept_id = b1.book_detail_dept1
    LEFT OUTER JOIN book_dept b3 ON b3.book_dept_id = b1.book_detail_dept2
    where b1.book_detail_date between  '{$_GET['d1']}'  and  '{$_GET['d2']}'";

}
else
{
    $strSQL = "SELECT b1.book_detail_id, b1.book_detail_no, b1.book_detail_title, b1.book_detail_detail,b2.book_dept_name AS deptname1,b3.book_dept_name AS deptname2
, b1.book_detail_date, b1.book_detail_file 
FROM book_detail b1 
LEFT OUTER JOIN book_dept b2 ON b2.book_dept_id = b1.book_detail_dept1
LEFT OUTER JOIN book_dept b3 ON b3.book_dept_id = b1.book_detail_dept2
where b1.book_detail_dept2 = '{$_GET["dep2"]}'
and b1.book_detail_date between  '{$_GET['d1']}'  and  '{$_GET['d2']}'";

}



$objQuery = mysqli_query($con,$strSQL);
// $resultData = array();
for ($i=0;$i<mysqli_num_rows($objQuery);$i++) {
    $result = mysqli_fetch_array($objQuery);
    //Loop Row Result
    $pdf->SetFont('AngsanaNew','',18);
    $pdf->Cell(30,7,iconv( 'UTF-8','TIS-620', $result['book_detail_date']),1,0,"C");
    $pdf->Cell(50,7,iconv( 'UTF-8','TIS-620', $result['book_detail_title']),1,0,"C");
    $pdf->Cell(50,7,iconv( 'UTF-8','TIS-620', $result['deptname1']),1,0,"C");
    $pdf->Cell(50,7,iconv( 'UTF-8','TIS-620', $result['deptname2']),1,1,"C");
    // array_push($resultData,$result);
}


echo "<hr>";
// $h = iconv( 'UTF-8','TIS-620', $header);
// $pdf->BasicTable($h,$resultData);
$t=time();
$r="_mistonline.in";
$name=$d."_".$t."_".$r.".pdf";
echo "<br>PDF <a href=".$name.">DOWNLOAD</a>";
$pdf->Output($name,"F");?>