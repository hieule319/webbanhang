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
		$stmt = $conn->prepare("insert into chitiet_hd(mahoadon,mahanghoa,dongia,soluong,thanh_tien) values(?,?,?,?,?)");
		$stmt->bind_param("sssss",$mahoadon,$mahanghoa,$dongia,$soluong,$thanh_tien);

		$mahoadon = $_GET['mahoadon'];
		$mahanghoa = $_GET['mahanghoa'];
		$dongia = $_GET['dongia'];
		$soluong = $_GET['soluong'];
		$thanh_tien = $_GET['thanh_tien'];
	}
	if($stmt->execute())
	{

	}
	else
	{

	}

	$stmt->close();
?>