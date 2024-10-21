<?php include('connectdb.php'); ?>
<?php


if (mysqli_query($con, $sql)) {
    echo "<script>";
  echo "insert.php";
  echo "</script>";

  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
  
  mysqli_close($con);

?>