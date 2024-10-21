<!doctype html>
<html>
<?php session_start(); ?>
  <?php include('connectdb.php');  ?>
  <?php if($_SESSION["book_login_level_id"] == "") { Header("Location:../login/"); } ?>
  <?php
 

	  $query_list = "SELECT b1.book_detail_id, b1.book_detail_no, b1.book_detail_title, b1.book_detail_detail, b1.book_detail_dept1, b1.book_detail_dept2
    ,b2.book_dept_name AS deptname1, b3.book_dept_name AS deptname2
    , b1.book_detail_date, b1.book_detail_file
    FROM book_detail b1 
    LEFT OUTER JOIN book_dept b2 ON b2.book_dept_id = b1.book_detail_dept1 
    LEFT OUTER JOIN book_dept b3 ON b3.book_dept_id = b1.book_detail_dept2
    where b1.book_detail_id = '".$_GET['id']."' and b1.book_detail_dept1 = '{$_SESSION["booK_dept_id"]}' limit 1 ";
    $result_list = mysqli_query($con, $query_list);
    while($row_list = mysqli_fetch_assoc($result_list)) 
    {
   ?>
<head>
<meta charset="utf-8">
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
<a href="insert_user.php?id= <?php echo $row_list['book_detail_id'];?>" > <button type="button"  class="btn btn-danger" > ย้อนกลับ </button></a>
<title>แก้ไขข้อมูลหนังสือเวียน</title>
<link rel="icon" href="/home/img/banner/home-left-8.png" type="image/png">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
</head>
<body>

<form method="POST" action="form_update_save.php"  enctype="multipart/form-data" class="form-horizontal"  >
<fieldset>

<!-- Form Name -->
<br>
<center><legend><h2>แก้ไขหนังสือเวียน</h2></legend></center>
<br>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="book_detail_no">เลขหนังสือ</label>  
  <div class="col-md-4">
  <input id="book_detail_no" name="txt_book_detail_no" type="text" placeholder="เลขหนังสือ" 
  class="form-control input-md" value="<?php echo $row_list['book_detail_no']; ?>" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="book_detail_title">ชื่อหนังสือ</label>
  <div class="col-md-4"> 
  <input id="book_detail_title" name="txt_book_detail_title" type="text" placeholder="ชื่อหนังสือ" 
  class="form-control input-md" value="<?php echo $row_list['book_detail_title']; ?>" required="">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="book_detail_detail">รายละเอียด</label>
  <div class="col-md-4">      
    <input id="book_detail_detail" name="txt_book_detail_detail" type="text" placeholder="รายละเอียด" 
    class="form-control input-md" value="<?php echo $row_list['book_detail_detail']; ?>" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="book_detail_dept1">จากหน่วยงาน</label>  
  <div class="col-md-4">
  <select name="txt_book_detail_dept1" id="txt_book_detail_dept1" >
<?php
	  $query_dept1 = "select * from book_dept where book_dept_id = '{$_SESSION["booK_dept_id"]}' ";
    $result_dept1 = mysqli_query($con, $query_dept1);
?>
	  <option value='<?php echo $row_list['book_detail_dept1']; ?>' selected='selected'> <?php echo $row_list['deptname1']; ?></option>
<?php
    while($row_dept1 = mysqli_fetch_assoc($result_dept1)) {
    echo "<option value=".$row_dept1['book_dept_id'].">".$row_dept1['book_dept_name']."</option>";
      }
	  ?>
    </select></div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="book_detail_dept2">ถึงหน่วยงาน</label>  
  <div class="col-md-4">
  <select name="txt_book_detail_dept2" id="txt_book_detail_dept2">
<?php
	  $query_dept2 = "select * from book_dept  ";
    $result_dept2 = mysqli_query($con, $query_dept2);
?>
    <option value='<?php echo $row_list['book_detail_dept2']; ?>' selected='selected'> <?php echo $row_list['deptname2']; ?></option>
<?php
    while($row_dept2 = mysqli_fetch_assoc($result_dept2)) {
      echo "<option value=".$row_dept2['book_dept_id'].">".$row_dept2['book_dept_name']."</option>";
        }
      ?>
    </select></div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="book_detail_date">วันที่รับหนังสือ</label>
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
        <input class="form-control" id="date" name="txt_book_detail_date" placeholder="DD-MM-YYYY" type="text" value= "<?php echo $row_list['book_detail_date']; ?>"/>
       </div>
      </div>
     </div>
     <!-- <div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
       <input name="_honey" style="display:none" type="text"/>
       <button class="btn btn-primary " name="submit" type="submit">
        Submit
       </button>
    </div>
     </div> -->
  
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
		var date_input=$('input[name="txt_book_detail_date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>


<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="img">แนบไฟล์</label>

  <div class="col-md-4">
    <input id="txt_book_detail_file" name="txt_book_detail_file" class="input-file" type="file">
    
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <input id="txt_book_detail_id" name="txt_book_detail_id" class="input-file" type="hidden" value="<?php echo $row_list['book_detail_id']; ?>">
  <div class="col-md-4">
  <button input type="submit" name="submit" class="btn btn-success">บันทึกข้อมูล</button>
  <button type=button value="Refresh" class="btn btn-danger" onClick="javascript:location.reload();" >ยกเลิก</button>
  </div>
</div>

<!-- Button Refres -->
<div class="form-group">
  <label class="col-md-4 control-label"  for="Refres"></label>
  <!-- <input type=button value="Refresh" onClick="javascript:location.reload();"> -->
  
  <!-- <div class="col-md-4">
  <button type=button value="Refresh" class="btn btn-danger" onClick="javascript:location.reload();" >ยกเลิก</button> -->
  </div>
</div>



</fieldset>
<?php } ?>
</form>


<br>
 




</body>
</html>

