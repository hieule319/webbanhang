<?php
	include("../../Model/DBConfig.php");
	$db =  new Database();
	$conn = $db->connect();
	if($_SERVER['REQUEST_METHOD'] == 'GET')
	{
		$last_id = $_GET['last_id'];
		$sql = "select i.mahoadon,i.mahanghoa,i.soluong,i.dongia,i.thanh_tien,p.ngaylap,p.giolap,p.tonggia,p.thanh_toan,p.due,pr.tenmh from hoadon p, chitiet_hd i,mathang pr where p.mahoadon  = i.mahoadon and pr.barcode = i.mahanghoa and i.mahoadon = '$last_id' ";
		$orderResult = $conn->query($sql);
		$orderdata = $orderResult->fetch_array();

		$mahoadon = $orderdata[0];
		$mahanghoa = $orderdata[1];
		$soluong = $orderdata[2];
		$dongia = $orderdata[3];
		$thanh_tien = $orderdata[4];
		$ngaylap = $orderdata[5];
		$giolap = $orderdata[6];
		$tonggia = $orderdata[7];
		$thanh_toan = $orderdata[8];
		$due = $orderdata[9];
		$tenmh = $orderdata[10];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Bill</title>
	<link rel="stylesheet" type="text/css" href="components/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="components/bootstrap/dist/css/bootstrap.min.css">
	<style type="text/css">
		@media print{
			.button
			{
				display: none;
			}
		}
		@media print
		{
			@page {
				margin-top: 0;
				margin-bottom: 0;
			}
			body{
				padding-top: 72px;
				padding-bottom: 72px;
			}
		}
	</style>
</head>
<body style="background: #f9f9f9">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="print" style="border: 1px solid #a1a1a1; width: 88mm; background: white; padding: 10px; margin: 0 auto; text-align: center;">
					<div align="center">
						<h3>Purchase Invoice</h3>
					</div>
					<div align="left">
						Date: <b><?php echo $ngaylap ?></b><br>
						Time: <b><?php echo $giolap ?></b>
					</div>
					<div align="right">
						Invoice No: <b><?php echo $last_id ?></b>
					</div>
					<br>
					<table class="table table-responsive">
						<thread>
							<tr>
								<td class="text-center"><b>No</b></td>
								<td class="text-center"><b>Item</b></td>
								<td class="text-center"><b>Qty</b></td>
								<td class="text-center"><b>Price</b></td>
								<td class="text-center"><b>Total</b></td>
							</tr>
						</thread>
						<?php
							$stt= 1;
							$orderResult = $conn->query($sql);
							while ($row = $orderResult->fetch_array()) 
							{
				
						?>
						<tr>
							<td class="text-center"><b><?php echo $stt ?></b></td>
							<td class="text-center"><b><?php echo $row[10] ?></b></td>
							<td class="text-center"><b><?php echo $row[2] ?></b></td>
							<td class="text-center"><b><?php echo $row[3] ?></b></td>
							<td class="text-center"><b><?php echo $row[4] ?></b></td>
						</tr>
						<?php
							$stt++;
							}
						?>
					</table>
					<div align="right">
						Sub Total: <b><?php echo $tonggia ?></b>
					</div>
					<div align="right">
						Pay: <b><?php echo $thanh_toan ?></b>
					</div>
					<div align="right">
						Due: <b><?php echo $due ?></b>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="components/jquery/dist/jquery.js"></script>
	<script src="components/jquery/dist/jquery.min.js"></script>
	<script src="components/jquery.validate.min.js"></script>
	<script src="components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="components/bootstrap/dist/js/bootstrap.js"></script>
	<script src="components/jquery-confirm-master/js/jquery-confirm.js"></script>
	<script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

	<script>
		myFuntion();
		function myFuntion()
		{
			window.print();
		}
		window.onafterprint = function(e){
			closePrintView();
		};
		function closePrintView()
		{
			window.location.href = \'javascript:history.go(-1)'\;
		}
	</script>
</body>
</html>
<?php } ?>