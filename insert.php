<!doctype html>

<?php
  session_start();
?>
<html>
  <?php 
  include('connectdb.php');   
 
  ?>
  <?php if($_SESSION["book_login_level_id"] == "") { Header("Location:../login/"); } ?>
<head>
<meta charset="utf-8">
<!-- <link rel="icon" href="/img/banner/home-left-8.png" type="image/png">  -->
<title>เพิ่มข้อมูลหนังสือ</title>
<link rel="icon" href="/home/img/banner/home-left-8.png" type="image/png">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
</head>
<body>

<form method="POST" action="insert_save.php"  enctype="multipart/form-data" class="form-horizontal"  >
<fieldset>

<!-- Form Name -->
<p align="right"> <?php echo "User: ".$_SESSION["book_login_username"]." &nbsp; " ?></p>
<br>
<p align="left"> &nbsp; <a href="form_book_in.php" class="btn btn-warning"> หนังสือเข้า </a> 
<a href="form_book_out.php" class="btn btn-info"> หนังสือออก </a>  
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<!-- < ?php echo "User: ".$_SESSION["book_login_username"]." / "?>   -->
<a href="../login/logout.php" class="btn btn-danger">ออกจากระบบ</a></p>


<center><legend><h2>เพิ่มหนังสือ</h2></legend></center>

<br>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="book_detail_no">เลขหนังสือ</label>  
  <div class="col-md-4">
  <input id="book_detail_no" name="txt_book_detail_no" type="text" placeholder="เลขหนังสือ" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input -->
<div class="form-group">
  <label class="col-md-4 control-label" for="book_detail_title">ชื่อหนังสือ</label>
  <div class="col-md-4">                    
  <input id="book_detail_title" name="txt_book_detail_title" type="text" placeholder="ชื่อหนังสือ" class="form-control input-md" required="">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="book_detail_detail">รายละเอียด</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="book_detail_detail" name="txt_book_detail_detail" placeholder="รายละเอียดหนังสือ"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="book_detail_dept1">จากหน่วยงาน</label>  
  <div class="col-md-4">
  <select name="txt_book_detail_dept1" id="txt_book_detail_dept1" required="">
<?php
	  $query_dept1 = "select * from book_dept  ";
    $result_dept1 = mysqli_query($con, $query_dept1);

	  echo "<option value='' selected='selected'>-- กรุณาเลือก --</option>";
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
  <select name="txt_book_detail_dept2" id="txt_book_detail_dept2" required="">
<?php
	  $query_dept2 = "select * from book_dept  ";
    $result_dept2 = mysqli_query($con, $query_dept2);

	  echo "<option value='' selected='selected'>-- กรุณาเลือก --</option>";
    while($row_dept2 = mysqli_fetch_assoc($result_dept2)) {
    echo "<option value=".$row_dept2['book_dept_id'].">".$row_dept2['book_dept_name']."</option>";
      }
	  ?>
    </select></div>
</div>

<!-- Text date-->
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
        <input class="form-control" id="date" name="txt_book_detail_date" required="" placeholder="DD-MM-YYYY" type="text"/>
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

  <div class="col-md-4">
    <button input type="submit" name="submit" class="btn btn-success">บันทึกข้อมูล</button>
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
      <th><h4><center scope="col" >เลขหนังสือ</h4></th></center>
      <th><h4><center scope="col">ชื่อหนังสือ</h4></th></center>
      <!-- <th><h4><center scope="col">รายละเอียดหนังสือ</h4></th></center> -->
      <th><h4><center scope="col">จากหน่วยงาน</h4></th></center>
      <th><h4><center scope="col">ถึงหน่วยงาน</h4></th></center>
      <th><h4><center scope="col">วันที่รับหนังสือ</h4></th></center>
      <!-- <th><h4><center scope="col">ชื่อไฟล์</h4></th></center> -->
      <th><h4><center scope="col"></h4></th></center>
     </tr> 
    </thead>

  <?php
	  $query_list = "SELECT b1.book_detail_id, b1.book_detail_no, b1.book_detail_title, b1.book_detail_detail,b2.book_dept_name AS deptname1, b3.book_dept_name AS deptname2
    , b1.book_detail_date, b1.book_detail_file
    -- b1.book_detail_pic
    FROM book_detail b1 
    LEFT OUTER JOIN book_dept b2 ON b2.book_dept_id = b1.book_detail_dept1 
    LEFT OUTER JOIN book_dept b3 ON b3.book_dept_id = b1.book_detail_dept2";
    $result_list = mysqli_query($con, $query_list);
    while($row_list = mysqli_fetch_assoc($result_list)) {   ?>
  <tr>

    <td><center><?php echo $row_list['book_detail_no']; ?></center></td>
    <td><center><?php echo $row_list['book_detail_title']; ?></center></td>
    <td><center><?php echo $row_list['deptname1']; ?></center></td>
    <td><center><?php echo $row_list['deptname2']; ?></center></td>
    <td><center><?php echo $row_list['book_detail_date']; ?></center></td>
    
    
    <div class="btn-group">
    <td> <center> 

    <a href="uploads/<?php echo $row_list['book_detail_file']; ?>" target="_blank" class="btn btn-primary">เอกสาร</a>
    <a href="form_update.php?id=<?php echo $row_list['book_detail_id'];?>"><button type="button" class="btn btn-success"> แก้ไข </button></a>
    <a href="form_delete.php?id=<?php echo $row_list['book_detail_id'];?>"><button type="button" class="btn btn-danger"> ลบ </button></a></center> 
    </div>
    </a></td>
    <?php } ?>
  </tr>
</table>



</body>
</html>

