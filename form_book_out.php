<!doctype html>

<?php
  session_start();
?>
<html>

<?php include('connectdb.php'); ?>

<?php if($_SESSION["book_login_level_id"] == "") { Header("Location:../login/"); } ?>
<head>
<meta charset="utf-8">
<!-- <link rel="icon" href="/img/banner/home-left-8.png" type="image/png">  -->
<title>ค้นหา</title>
<link rel="icon" href="/home/img/banner/home-left-8.png" type="image/png">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
</head>

<body>

<form method="POST" action=""  enctype="multipart/form-data" class="form-horizontal"  >
<fieldset>

<!-- Form Name -->
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;
<a href="insert.php" > <button type="button"  class="btn btn-danger" > ย้อนกลับ </button></a>
  

<center><legend><h2>หนังสือออก</h2></legend></center> 
<!-- <p align="right"> <?php echo "User: ".$_SESSION["book_login_username"]." / "?>  <a href="../login/logout.php" class="btn btn-danger">ออกจากระบบ</a></p> -->
<br>

<!-- Text date-->
<div class="form-group">
  <label class="col-md-4 control-label" for="book_detail_date">จากวันที่</label>
  <span class="asteriskField">
       *
  </span>  
   <class="form-control input-md" required="">
   <script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>
   <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
   <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
   <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>
   <div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
 
     <div class="form-group ">
      <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="date_1" name="date_1" placeholder="DD-MM-YYYY" type="text"/>
       </div>
      </div>
     </div>
   </div>
  </div>
 </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  </div>
</div>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="date_1"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>


<!-- Text date-->
<div class="form-group">
  <label class="col-md-4 control-label" for="book_detail_date">ถึงวันที่</label>
  <span class="asteriskField">
       *
  </span>  
  <!-- <div class="col-md-4">
  <input id="book_detail_date" name="txt_book_detail_date" type="text" placeholder="วันที่รับหนังสือ" -->
   <class="form-control input-md" required="">
   <script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>
   <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
   <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
   <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>
   <div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
 
     <div class="form-group ">
      <!-- <label class="control-label col-sm-2 requiredField" for="date">
       Date
       <span class="asteriskField">
        *
       </span>
      </label> -->
      <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="date_2" name="date_2" placeholder="DD-MM-YYYY" type="text"/>
       </div>
      </div>
     </div>
   </div>
  </div>
 </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  </div>
</div>
<script>
	$(document).ready(function(){
		var date_input=$('input[name="date_2"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>





<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="book_detail_dept1">หน่วยงานที่รับหนังสือ</label>  
  <div class="col-md-4">
  <select name="txt_book_detail_dept2" id="txt_book_detail_dept2">
<?php
	  $query_dept2 = "select * from book_dept  ";
    $result_dept2 = mysqli_query($con, $query_dept2);

	  echo "<option value='all' selected='selected'>-- เลือกทั้งหมด --</option>";
    while($row_dept2 = mysqli_fetch_assoc($result_dept2)) {
    echo "<option value=".$row_dept2['book_dept_id'].">".$row_dept2['book_dept_name']."</option>";
      }
	  ?>
    </select></div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Search"></label>
  <div class="col-md-4" align="center">
    <button input type="search" name="search"  class="btn btn-success">ค้นหา</button> 
    <button type=button value="Refresh" class="btn btn-danger" onClick="javascript:location.reload();" >ยกเลิก</button>

  </div>
</div>

</fieldset>
</form>

<br>
<br>
<br>
<br>
<br>

<table class="table table-sm table-dark" width="85%" align="center">
    <thead >
      <tr bgcolor="#33CC66">
      <th><h4><center scope="col" >วันที่</h4></th></center>
      <th><h4><center scope="col">ชื่อหนังสือ</h4></th></center>
      <th><h4><center scope="col">หน่วยงานที่รับหนังสือ</h4></th></center>
      <th><h4><center scope="col">ถึงหน่วยงาน</h4></th></center>
      <th><h4><center scope="col">เอกสาร</h4></th></center>
      </tr> 
    </thead>

    <?php
 
 if($_POST["txt_book_detail_dept2" ]== 'all' )
 {
   $query_list = "SELECT b1.book_detail_id, b1.book_detail_no, b1.book_detail_title, b1.book_detail_detail,b2.book_dept_name AS deptname1,b3.book_dept_name AS deptname2
   , b1.book_detail_date, b1.book_detail_file 
   FROM book_detail b1 
   LEFT OUTER JOIN book_dept b2 ON b2.book_dept_id = b1.book_detail_dept1
   LEFT OUTER JOIN book_dept b3 ON b3.book_dept_id = b1.book_detail_dept2
   where b1.book_detail_date between  '{$_POST['date_1']}'  and  '{$_POST['date_2']}' order by b1.book_detail_date ";
   
 }
 else
 {
   $query_list = "SELECT b1.book_detail_id, b1.book_detail_no, b1.book_detail_title, b1.book_detail_detail,b2.book_dept_name AS deptname1,b3.book_dept_name AS deptname2
   , b1.book_detail_date, b1.book_detail_file 
   FROM book_detail b1 
   LEFT OUTER JOIN book_dept b2 ON b2.book_dept_id = b1.book_detail_dept1
   LEFT OUTER JOIN book_dept b3 ON b3.book_dept_id = b1.book_detail_dept2
   where b1.book_detail_dept2 = '{$_POST ["txt_book_detail_dept2"]}'
   and b1.book_detail_date between  '{$_POST['date_1']}'  and  '{$_POST['date_2']}'  order by b1.book_detail_date ";
 }  

 

    $result_list = mysqli_query($con, $query_list);
    while($row_list = mysqli_fetch_assoc($result_list)) {   ?>
    
  <tr>
    <td><center><?php echo $row_list['book_detail_date']; ?></center></td>
    <td><center><?php echo $row_list['book_detail_title']; ?></center></td>
    <td><center><?php echo $row_list['deptname1']; ?></center></td>
    <td><center><?php echo $row_list['deptname2']; ?></center></td>
    <td><center> <a href="uploads/<?php echo $row_list['book_detail_file']; ?>" target="_blank" class="btn btn-primary">ดูเอกสาร</a></center></td>

    </a></td>
    <?php } ?>
  </tr>
</table>
<!-- Button -->










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

if ($_POST ["txt_book_detail_dept2"] =="all")
{
    $strSQL = "SELECT b1.book_detail_id, b1.book_detail_no, b1.book_detail_title, b1.book_detail_detail,b2.book_dept_name AS deptname1,b3.book_dept_name AS deptname2
    , b1.book_detail_date, b1.book_detail_file 
    FROM book_detail b1 
    LEFT OUTER JOIN book_dept b2 ON b2.book_dept_id = b1.book_detail_dept1
    LEFT OUTER JOIN book_dept b3 ON b3.book_dept_id = b1.book_detail_dept2
    where b1.book_detail_date between  '{$_POST['date_1']}'  and  '{$_POST['date_2']}'";
}
else
{
    $strSQL = "SELECT b1.book_detail_id, b1.book_detail_no, b1.book_detail_title, b1.book_detail_detail,b2.book_dept_name AS deptname1,b3.book_dept_name AS deptname2
, b1.book_detail_date, b1.book_detail_file 
FROM book_detail b1 
LEFT OUTER JOIN book_dept b2 ON b2.book_dept_id = b1.book_detail_dept1
LEFT OUTER JOIN book_dept b3 ON b3.book_dept_id = b1.book_detail_dept2
where b1.book_detail_dept2 = '{$_POST ["txt_book_detail_dept2"]}'
and b1.book_detail_date between  '{$_POST['date_1']}'  and  '{$_POST['date_2']}'";
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
$pdf->Output($name,"F");
?>
<p align="center"> &nbsp; 
  <a href="<?php echo $name;?>" target="_blank" class="btn btn-danger">pdf</a> &nbsp; 

  <a href="export_excel_out.php?d1=<?php echo $_POST['date_1'];
   ?>&d2=<?php echo $_POST['date_2']; ?>&dep2=<?php echo $_POST['txt_book_detail_dept2'];
   ?>&act=excel" class="btn btn-success">excel</a> </p>



</body>
</html>
