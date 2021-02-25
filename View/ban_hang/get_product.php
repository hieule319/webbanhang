<?php
	$conn = new mysqli("localhost","root","","vinmart");

	// Check connection
	if ($conn -> connect_errno) {
		echo "Failed to connect to MySQL: " . $conn -> connect_error;
		exit();
	}

		$barcode = $_POST['barcode'];
		$stmt = $conn->prepare("select mahanghoa,tenmh,dongia,barcode from mathang where barcode = ?");
		$stmt->bind_param("s",$barcode);
		$stmt->bind_result($mahanghoa,$tenmh,$dongia,$barcode);

		if($stmt->execute())
		{
			while ($stmt->fetch()) {
				$output[] = array("mahanghoa"=>$mahanghoa,"tenmh"=>$tenmh,"dongia"=>$dongia,"barcode"=>$barcode);
			}
			echo json_encode($output);
		}
		$stmt->close();

?>