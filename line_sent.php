<?php include("connectdb.php");
$sql_provinces = " SELECT b1.book_detail_id, b1.book_detail_no, b1.book_detail_title, b1.book_detail_detail,b2.book_dept_name AS deptname1,b3.book_dept_name AS deptname2
      , b1.book_detail_date, b1.book_detail_file 
      FROM book_detail b1 
      LEFT OUTER JOIN book_dept b2 ON b2.book_dept_id = b1.book_detail_dept1
      LEFT OUTER JOIN book_dept b3 ON b3.book_dept_id = b1.book_detail_dept2
      order by b1.book_detail_id desc limit 1 ";
$query = mysqli_query($con, $sql_provinces);
foreach ($query as $value) { 
	$value['name_th'];
 } 
?>

<?php
 	$sms_sent = "\n".'เลขที่หนังสือ: '.$value['book_detail_no']."\n".
	 			'ชื่อเรื่อง: '.$value['book_detail_title']."\n".
	            'รายละเอียด: '.$value['book_detail_detail']."\n".
				'จากหน่วยงาน: '.$value['deptname1']."\n".
				'ถึงหน่วยงาน: '.$value['deptname2']."\n".
				'วันที่: '.$value['book_detail_date']."\n"."\n".'';   



?>
<?php 
$chOne = curl_init(); 
curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt( $chOne, CURLOPT_POST, 1); 
curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=$sms_sent"); 
curl_setopt( $chOne, CURLOPT_FOLLOWLOCATION, 1); 
//ADD header array 
$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer 2HKjZIGVy2DZBEyJsbdtABrUSyQ1Yjj3JQ633mT0MlL', ); 
curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec( $chOne ); 
if(curl_error($chOne)) { echo 'error:' . curl_error($chOne); } 
else { $result_ = json_decode($result, true); 
}  
curl_close( $chOne ); 
mysqli_close($con);
?>

