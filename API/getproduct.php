<?php
	$conn = new mysqli("localhost","root","","vinmart");

	// Check connection
	if ($conn -> connect_errno) {
		echo "Failed to connect to MySQL: " . $conn -> connect_error;
		exit();
	}
		error_reporting(0);
		$barcode = $_GET['barcode'];
		$stmt = $conn->prepare("select tenmh,dongia from mathang where barcode = ?");
		$stmt->bind_param("s",$barcode);
		$stmt->bind_result($tenmh,$dongia);
		$output = array();
		if($stmt->execute())
		{
			while ($stmt->fetch()) {
				$output[] = array("tenmh"=>$tenmh,"dongia"=>$dongia);
			}
			echo json_encode($output,JSON_FORCE_OBJECT);
		}
		$stmt->close();
?>