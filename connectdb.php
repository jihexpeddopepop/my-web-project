<meta charset="utf-8"> 
<?php
	$host="localhost";
	$user="root";
	$pwd="";
	$db="book";

	$con = mysqli_connect("localhost","root","") or die("เชื่อมต่อฐานข้อมูลไม่ได้");
	mysqli_select_db($con,"book") or die ("เลือกฐานข้อมูลไม่ได้");
	mysqli_query($con,"SET NAMES utf8"); //ทำให้อ่านข้อมูลที่เป็นภาษาไทยได้
?>
