<?php
	$conn = new mysqli("localhost","root","","vinmart");

	// Check connection
	if ($conn -> connect_errno) {
		echo "Failed to connect to MySQL: " . $conn -> connect_error;
		exit();
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$stmt = $conn->prepare("insert into hoadon(manhanvien,ngaylap,tonggia,thanh_toan,due) values(?,?,?,?,?)");
		$stmt->bind_param("isiii",$manhanvien,$ngaylap,$tonggia,$thanh_toan,$due);

		$manhanvien = $_POST['nhanvien'];
		$ngaylap = date("Y-m-d");
		$tonggia = $_POST['tonggia'];
		$thanh_toan = $_POST['pay'];
		$due = $_POST['due'];
	}
	if($stmt->execute())
	{
		$last_id = $conn->insert_id;
	}
	$relation_list = $_POST['data'];
	for ($x=0; $x < count($relation_list); $x++) { 
		$stmt1 = $conn->prepare("insert into chitiet_hd(mahoadon,mahanghoa,dongia,soluong,thanh_tien) values(?,?,?,?,?)");
		$stmt1->bind_param("iiiii",$last_id,$mahanghoa,$dongia,$soluong,$thanh_tien);

		$mahanghoa = $relation_list[$x]['barcode'];
		$dongia = $relation_list[$x]['dongia'];
		$soluong = $relation_list[$x]['soluong'];
		$thanh_tien = $relation_list[$x]['thanh_tien'];

		if($stmt1->execute())
		{
			
		}
		else
		{
			
		}

		$stmt1->close();
	}
	$stmt2 = $conn->prepare("UPDATE khohang INNER JOIN chitiet_hd ON khohang.barcode = chitiet_hd.mahanghoa SET khohang.soluong = khohang.soluong - chitiet_hd.soluong where mahoadon = ?");
	$stmt2->bind_param("i",$last_id);
	if ($stmt2->execute()) {
		
	}
	else
	{

	}
	echo json_encode(array ("last_id"=>$last_id));
	$stmt->close();
?>