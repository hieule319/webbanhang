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
		$stmt = $conn->prepare("UPDATE khohang INNER JOIN chitiet_hd ON khohang.barcode = chitiet_hd.mahanghoa SET khohang.soluong = khohang.soluong - chitiet_hd.soluong where mahoadon = ?");
		$stmt->bind_param("s",$mahoadon);
		$mahoadon = $_GET['mahoadon'];
	}
	if($stmt->execute())
	{

	}
	else
	{

	}

	$stmt->close();
?>	