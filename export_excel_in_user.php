<?php session_start(); ?>
<?php include('connectdb.php'); ?>

<?php
if(isset($_GET['act'])){
	if($_GET['act']== 'excel'){
		header("Content-Type: application/xls");
		header("Content-Disposition: attachment; filename=export.xls");
		header("Pragma: no-cache");
		header("Expires: 0");
	}
}

?>



<!DOCTYPE html>
<html> 
	<head>
	<meta charset="utf-8">
    <title>เอกสาร</title>
    <link rel="icon" href="/home/img/banner/home-left-8.png" type="image/png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body><br><br><br>
  <h4><strong><center scope="col">เอกสาร</center></h4></th>
			<table border="1" class="table table-hover">
			<thead>
			  <tr class="info">
              <th><h4><strong><center scope="col">วันที่</h4></th></center></strong>
              <th><h4><strong><center scope="col">ชื่อหนังสือ</h4></th></center></strong>
              <th><h4><strong><center scope="col">หนังสือรับ</h4></th></center></strong>
              <th><h4><strong><center scope="col">หนังสือออก</h4></th></center></strong>
			</tr>
			</thead>

            <?php
			$query_list = "SELECT b1.book_detail_id, b1.book_detail_no, b1.book_detail_title, b1.book_detail_detail,b2.book_dept_name AS deptname1,b3.book_dept_name AS deptname2
            , b1.book_detail_date, b1.book_detail_file 
            FROM book_detail b1 
            LEFT OUTER JOIN book_dept b2 ON b2.book_dept_id = b1.book_detail_dept1
            LEFT OUTER JOIN book_dept b3 ON b3.book_dept_id = b1.book_detail_dept2
            where b1.book_detail_dept1 = '{$_GET["dep2"]}' and b1.book_detail_dept2 = '{$_SESSION["booK_dept_id"]}'
            and b1.book_detail_date between '{$_GET['d1']}'  and  '{$_GET['d2']}'";


			$result_list = mysqli_query($con, $query_list);
			while($row_list = mysqli_fetch_assoc($result_list)) {?>

			 <tbody>
				<tr>
                <td><center><?php echo $row_list['book_detail_date']; ?></center></td>
                <td><center><?php echo $row_list['book_detail_title']; ?></center></td>
                <td><center><?php echo $row_list['deptname1']; ?></center></td>
                <td><center><?php echo $row_list['deptname2']; ?></center></td>
				</tr>
              	<?php } ?>
			 </tbody>
			</table>
	</body>
</html>