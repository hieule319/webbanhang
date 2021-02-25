<?php
	$conn = new mysqli("localhost","root","","vinmart");

		// Check connection
		if ($conn -> connect_errno) {
			echo "Failed to connect to MySQL: " . $conn -> connect_error;
			exit();
		}
		error_reporting(0);
	if(isset($_GET['user']) && isset($_GET['pass']))
    {
        $user = $_GET['user'];
        $pass = $_GET['pass'];
        $output = array();
		$stmt = $conn->prepare("select username,password,phanquyen from taikhoan where username=? and password=?");
		$stmt->bind_param("ss",$user,$pass);
		$stmt->bind_result($username,$password,$phanquyen);
		if($stmt->execute())
		{
			while ($stmt->fetch()) {
				$output[] = array("username"=>$username,"password"=>$password,"phanquyen"=>$phanquyen);
			}
			echo json_encode($output,JSON_FORCE_OBJECT);
		}
    }
    $stmt->close();
?>