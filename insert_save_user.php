<?php
  session_start();
?>
<?php include('connectdb.php'); ?>
<?php
 if(isset($_FILES['txt_book_detail_file'])){
  $errors= array();
  $file_name = md5(date("Y-m-d h:m:s")).".pdf"; 
  $file_size =$_FILES['txt_book_detail_file']['size'];
  $file_tmp =$_FILES['txt_book_detail_file']['tmp_name'];
  $file_type=$_FILES['txt_book_detail_file']['type'];
  $file_ext=strtolower(end(explode('.',$_FILES['txt_book_detail_file']['name'])));
  
  $extensions= array("pdf");
  
  if(in_array($file_ext,$extensions)=== false){
     $errors[]="extension not allowed, please choose a PDF file.";
  }
  
  if($file_size > 5097152){
     $errors[]='File size must be excately 2 MB';
  }
  
  if(empty($errors)==true){
     move_uploaded_file($file_tmp,"uploads/".$file_name);
  }else{
     print_r($errors);
  }
}

if($_POST['txt_book_detail_no'] != ""){
 
		
    $sql = "INSERT INTO book_detail (book_detail_no
    , book_detail_title, book_detail_detail
    , book_detail_dept1, book_detail_dept2
    , book_detail_date, book_detail_file)
    VALUES ('{$_POST['txt_book_detail_no']}'
    , '{$_POST['txt_book_detail_title']}'
    , '{$_POST['txt_book_detail_detail']}'
    , '{$_POST['txt_book_detail_dept1']}'
    , '{$_POST['txt_book_detail_dept2']}'
    , '{$_POST['txt_book_detail_date']}', '{$file_name}')";


if (mysqli_query($con, $sql)) {
  echo "<script>";
  echo "alert('บันทึกข้อมูลสำเร็จ')";
  echo "</script>";

  echo "<script>";
  echo "window.history.back()";
  echo "</script>";

  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
  
  mysqli_close($con);
}
?>