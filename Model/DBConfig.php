<?php
	class Database
	{

		public function connect()
		{
			$conn = new mysqli("localhost","root","","vinmart");
			if(!$conn)
			{
				echo 'Ket noi that bai';
				exit();
			}
			else
			{
				mysqli_set_charset($conn, 'utf8');
			}
			return $conn;
		}
		//Lay du lieu
		//Dang nhap
		public function checkLogin($username,$password)
		{
			$link = $this->connect();
			$pass=md5($password);
			$sql="select * from taikhoan where username='$username' and password='$pass'";
			$ketqua=mysqli_query($link,$sql);
			$i=mysqli_num_rows($ketqua);
			if($i>0)
			{
				while($row=mysqli_fetch_array($ketqua))
				{
					$id=$row['id'];
					$username=$row['username'];	
					$password=$row['password'];	
					$phanquyen=$row['phanquyen'];	
					session_start();
					$_SESSION['id']=$id;
					$_SESSION['username']=$username;
					$_SESSION['password']=$password;
					$_SESSION['phanquyen']=$phanquyen;
					echo '<script language="javascript">window.location="index.php";</script>';
				}	
			}
			else
			{
				echo '<script language="javascript">alert("Đăng nhập không thành công");</script>'	;	
				echo '<script language="javascript">window.location="login.php";</script>'	;	
			}
		}

		function confirmLogin($id,$username,$password,$phanquyen)
		{
			$link=$this->connect();
			$sql="select id from taikhoan where username='$username' and password='$password' and phanquyen='$phanquyen'";
			$ketqua=mysqli_query($link,$sql);
			$i=mysqli_num_rows($ketqua);
			if($i!=1)
			{
				echo '<script language="javascript">window.location="login.php";</script>'	;
			}
		}
		//Lấy tất cả dữ liệu 
		public function getALLdata($tbl)
		{
			$link = $this->connect();
			$sql = "select * from $tbl";
			$ketqua = mysqli_query($link,$sql);
			$data  = array();
			$i = mysqli_num_rows($ketqua);
			if($i>0){
				while ($row = mysqli_fetch_array($ketqua)) {
					$data[] = $row;
				}
			}
			else
			{
				echo 'Chưa có danh sách';
			}
			return $data;
		}
		//Lấy tất cả dữ liệu
		public function getALL($tbl)
		{
			$link = $this->connect();
			$sql = "select * from $tbl ";
			$ketqua = mysqli_query($link,$sql);
			return $ketqua;
		}
		//Lấy dữ liệu phân trang
		public function getDatatbl($tbl)
		{
			$link = $this->connect();
			$current_page = 10;
			if(!isset($_GET['page']))
			{
				$page = 1;
			}
			else
			{
				$page = $_GET['page'];
			}
			$pagination = ($page - 1)*$current_page;
			$sql = "select * from $tbl limit $pagination,$current_page";
			$ketqua = mysqli_query($link,$sql);
			$data  = array();
			$i = mysqli_num_rows($ketqua);
			if($i>0){
				while ($row = mysqli_fetch_array($ketqua)) {
					$data[] = $row;
				}
			}
			else
			{
				echo 'Chưa có danh sách';
			}
			return $data;
		}

		public function getDatatbl2($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			$data  = array();
			$i = mysqli_num_rows($ketqua);
			if($i>0){
				while ($row = mysqli_fetch_array($ketqua)) {
					$data[] = $row;
				}
			}
			return $data;
		}
		//Lấy dữ liệu theo ID
		public function getDataIDMathang($table,$mahanghoa)
		{
			$link = $this->connect();
			$sql = "select * from $table where mahanghoa ='$mahanghoa'";
			$ketqua = mysqli_query($link,$sql);
			$data  = array();
			$i = mysqli_num_rows($ketqua);
			if($i>0){
				while ($row = mysqli_fetch_array($ketqua)) {
					$data[] = $row;
				}
			}
			else
			{
				echo 'Chưa có danh sách';
			}
			return $data;
		}
		public function getDataIDNcc($table,$msncc)
		{
			$link = $this->connect();
			$sql = "select * from $table where msncc ='$msncc'";
			$ketqua = mysqli_query($link,$sql);
			$data  = array();
			$i = mysqli_num_rows($ketqua);
			if($i>0){
				while ($row = mysqli_fetch_array($ketqua)) {
					$data[] = $row;
				}
			}
			else
			{
				echo 'Chưa có danh sách';
			}
			return $data;
		}
		public function getDataIDct_nhapkho($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			$data  = array();
			$i = mysqli_num_rows($ketqua);
			if($i>0){
				while ($row = mysqli_fetch_array($ketqua)) {
					$data[] = $row;
				}
			}
			else
			{
				echo 'Chưa có danh sách';
			}
			return $data;
		}
		public function getDataIDKhohang($table,$mahanghoa)
		{
			$link = $this->connect();
			$sql = "select * from $table where mahanghoa ='$mahanghoa'";
			$ketqua = mysqli_query($link,$sql);
			$data  = array();
			$i = mysqli_num_rows($ketqua);
			if($i>0){
				while ($row = mysqli_fetch_array($ketqua)) {
					$data[] = $row;
				}
			}
			else
			{
				echo 'Chưa có danh sách';
			}
			return $data;
		}
		public function getData($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			$data  = array();
			$i = mysqli_num_rows($ketqua);
			if($i>0){
				while ($row = mysqli_fetch_array($ketqua)) {
					$data[] = $row;
				}
			}
			else
			{
				echo 'Chưa có danh sách';
			}
			return $data;
		}
		//Thêm xóa sửa
		public function themxoasua($sql)
		{
			$link = $this->connect();
			$ketqua = mysqli_query($link,$sql);
			if($ketqua)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		//Upload file
		public function myUpload($name,$size,$type,$temp,$path)
		{
			if($size <= 10000000)
			{
				if($type == 'image/png' || $type == 'image/jpeg')
				{
					if(move_uploaded_file($temp, $path."/".$name))
					{
						return 1;
					}
					else
					{
						return 0;
					}
				}
				else
				{
					echo '<script language="javascript">alert("File phải có định dạng PNG hoặc JPG");</script>';
				}
			}
			else
			{
				echo '<script language="javascript">alert("File phải nhỏ hơn 10MB");</script>';
			}
		}
		//ajax hóa đơn
		public function getProduct()
		{
			$conn = $this->connect();
			if($_SERVER['REQUEST_METHOD'] == 'POST')
			{
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
			}
		}
	}
?>