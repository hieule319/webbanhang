<div align="center" style="background: red;">
	<h2>Hóa đơn</h2>
</div>
<div class="container-fluid bg-2 text-center" style="margin-top: 35px;">
	<div class="col-sm-12">
		<form class="form-horizontal" id="frmInvoice">
			<table class="table table-bordered">
				<h4 style="float: left;">Thêm sản phẩm</h4>
				<tr>
					<th>Barcode</th>
					<th>Tên sản phẩm</th>
					<th>Giá</th>
					<th>Số lượng</th>
					<th>Số tiền</th>
					<th>Chọn</th>
				</tr>
				<tr>
					<td><input type="text" class="form-control" id="barcode" name="barcode" placeholder="Barcode" required></td>
					<td><input type="text" class="form-control" id="tenmh" name="tenmh" placeholder="Tên sản phẩm" disabled></td>
					<td><input type="text" class="form-control" id="dongia" name="dongia" placeholder="Giá" disabled></td>
					<td><input type="number" class="form-control" id="soluong" name="soluong" placeholder="Số lượng" required></td>
					<td><input type="text" class="form-control" id="thanh_tien" name="thanh_tien" placeholder="Thành tiền" disabled></td>
					<td><button type="button" class="btn btn-primary" id="add" name="add" onclick="addProduct()" >Thêm</button></td>
				</tr>

			</table>

			<table class="table table-bordered" id="product_list">
				<h4  style="float: left;">Sản phẩm</h4>
				<thead>
					<tr>
						<th style=" width: 40px;">Bỏ</th>
						<th>Barcode</th>
						<th>Tên sản phẩm</th>
						<th>Giá</th>
						<th>Số lượng</th>
						<th>Thành tiền</th>
					</tr>
				</thead>
				<tbody>

				</tbody>
			</table>
		</form>
	</div>

	<div class="col-sm-8" align="left">
		<h1 class="title">Scan barcode</h1>
		<div>
			<a class="button" id="startButton" style="background-color:white;">Start</a>
			<a class="button" id="resetButton" style="background-color:white;">Reset</a>
		</div>

		<div>
			<video id="video" width="600" height="400" style="border: 1px solid gray"></video>
		</div>

		<div id="sourceSelectPanel" style="display:none">
			<label for="sourceSelect">Thay đổi camera:</label>
			<select id="sourceSelect" style="max-width:300px">
			</select>
		</div>
	</div>

	<div class="col-sm-4" align="right">
		<div class="form-group" align="left">
			<label>Tổng tiền</label>
			<input type="text" class="form-control" id="tonggia" name="tonggia" placeholder="Tổng tiền" disabled>
		</div>
		<div class="form-group" align="left">
			<label>Nhận tiền</label>
			<input type="text" class="form-control" id="pay" name="pay" placeholder="Nhận tiền" required>
		</div>
		<div class="form-group" align="left">
			<label>Tiền thối</label>
			<input type="text" class="form-control" id="due" name="due" placeholder="Tiền thối" required>
		</div>
		<div class="form-group" align="left">
			<label>Nhân viên lập</label>
				<select name="nhanvien" id="nhanvien" class="form-control">
					<option value="0">Chọn</option>
					<?php
						foreach ($data as $row) {
					?>
					<option value="<?php echo $row['manhanvien'] ?>"><?php echo $row['hoten'] ?></option>
					<?php
						}
					?>
				</select>
		</div>
		<div class="form-group" align="right">
			<button type="button" class="btn btn-info" id="save" onclick="addInvoice()" >Save&Print</button>
			<button type="button" class="btn btn-warning" id="reset" onclick="">Reset</button>
		</div>
	</div>