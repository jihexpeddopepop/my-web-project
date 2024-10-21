<?php session_start(); ?>
<?php include('connectdb.php'); ?>
<?php


if($_GET['id'] != ""){
  if($_SESSION["book_login_level_id"]  == '1')
  {
    $sql = "delete from book_detail
    where book_detail_id= '".$_GET['id']."'
    ";
  }
  else
  {
    $sql = "delete from book_detail
    where book_detail_id= '".$_GET['id']."'
    and book_detail_dept2 = '".$_SESSION['booK_dept_id']."'
    ";
  }





if (mysqli_query($con, $sql)) {
  echo "<script>";
  echo "alert('ลบข้อมูลสำเร็จ')";
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