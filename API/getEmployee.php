<?php
		$conn = new mysqli("localhost","root","","vinmart");

		// Check connection
		if ($conn -> connect_errno) {
			echo "Failed to connect to MySQL: " . $conn -> connect_error;
			exit();
		}
		error_reporting(0);
		if(isset($_GET['hoten']))
		{
			$hoten = $_GET['hoten'];
			$stmt = $conn->prepare("select manhanvien from nhanvien where hoten = ?");
			$stmt->bind_param("s",$hoten);
			$stmt->bind_result($manhanvien);
			$output = array();
			if($stmt->execute())
			{
				while ($stmt->fetch()) {
					$output[] = array("manhanvien"=>$manhanvien);
				}
				echo json_encode($output,JSON_FORCE_OBJECT);
			}
			$stmt->close();
		}
		else
		{
			$stmt = $conn->prepare("select hoten from nhanvien");
			$stmt->bind_result($hoten);
			$output = array();
			if($stmt->execute())
			{
				while ($stmt->fetch()) {
					$output[] = array("hoten"=>$hoten);
				}
				echo json_encode($output,JSON_FORCE_OBJECT);
			}
			$stmt->close();
		}
?>