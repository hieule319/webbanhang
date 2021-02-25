<?php
	$conn = new mysqli("localhost","root","","vinmart");

	// Check connection
	if ($conn -> connect_errno) {
		echo "Failed to connect to MySQL: " . $conn -> connect_error;
		exit();
	}
	error_reporting(0);
	if($_SERVER['REQUEST_METHOD'] == 'GET')
	{
		$stmt = $conn->prepare("insert into hoadon(manhanvien,ngaylap,tonggia,thanh_toan,due) values(?,?,?,?,?)");
		$stmt->bind_param("sssss",$manhanvien,$ngaylap,$tonggia,$thanh_toan,$due);
		$manhanvien = $_GET['manhanvien'];
		$ngaylap = $_GET['date'];
		$tonggia = $_GET['tongtien'];
		$thanh_toan = $_GET['pay'];
		$due = $_GET['due'];
	}
	if($stmt->execute())
	{
		$last_id = $conn->insert_id;
	}
	echo $last_id;
	$stmt->close();
?>