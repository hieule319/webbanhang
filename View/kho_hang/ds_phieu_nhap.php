<script type="text/javascript">
    var tableToExcel = (function() {
          var uri = 'data:application/vnd.ms-excel;base64,'
            , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><meta http-equiv="content-type" content="application/vnd.ms-excel; charset=UTF-8"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
            , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
            , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
          return function(table, name) {
            if (!table.nodeType) table = document.getElementById(table)
            var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
            window.location.href = uri + base64(format(template, ctx))
          }
        })()
</script> 
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Danh sách phiếu nhập kho</strong>
                            </div>
                            <div class="card-body">
                                <table id="tblExport" class="table table-striped table-bordered">
                                    <form method="POST">
                                        <div style="float: left; margin-bottom: 5px;">
                                            <select name="month" class="">
                                                <option value="">Tháng</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                        <div style="float: left; margin-bottom: 5px; margin-left: 5px;">
                                            <select name="year" class="">
                                                <option value="">Năm</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                            </select>
                                        </div>
                                        <div style="float: left; margin-bottom: 5px; margin-left: 5px;">
                                            <button class="btn btn-primary" name="filter_data" id="filter_data">Lọc</button>
                                        </div>
                                    </form>
                                    <thead>
                                        <tr style="background: black; color: white;">
                                        	<th>STT</th>
                                            <th>Tên mặt hàng</th>
                                            <th>Số lượng</th>
                                            <th>Ngày nhập</th>
                                            <th>Tổng đơn giá (VNĐ)</th>
                                            <th colspan="2">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
                                    		$stt =1;
                                    		foreach ($data as $row) {
                                    	?>
                                        <tr>
                                        	<td><?php echo $stt ?></td>
                                            <td><?php echo $row['tenmh'] ?></td>
                                            <td><?php echo $row['soluong'] ?></td>
                                            <td><?php echo $row['ngaynhap'] ?></td>
                                            <td><?php echo $row['tongtgia']?></td>
                                            <td>
                                            	<a href="kho-hang/edit/<?php echo $row['machitietnhap'] ?>.html"><i class="fa fa-edit" style="color: green; font-size: 25px"></i></a>
                                                <!-- index.php?controller=kho-hang&action=edit&machitietnhap=<?php echo $row['machitietnhap'] ?> -->
                                            </td>
                                            <td>
                                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="index.php?controller=kho-hang&action=delete&machitietnhap=<?php echo $row['machitietnhap'] ?>"><i class="fa fa-trash" style="color: red; margin-left: 30px; font-size: 30px"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                        	$stt++;
                                        	}
                                        ?>
                                    </tbody>
                                </table>
                                <input type="button" onclick="tableToExcel('tblExport', 'W3C Example Table')" value="Xuất file Excel" class="btn btn-success" style="margin-top: 5px;">
                                <div style="float: right; margin-top: 5px;">
                                	<nav aria-label="Page navigation example">
                                		<ul class="pagination">
                                			<li class="page-item">
                                				<a class="page-link" href="#" aria-label="Previous">
                                					<span aria-hidden="true">&laquo;</span>
                                					<span class="sr-only">Previous</span>
                                				</a>
                                			</li>
                                			<?php
                                				for ($i=1; $i <= $page; $i++) { 
                                			?>
                                			<li class="page-item"><a class="page-link" href="kho-hang/dsphieunhap/<?php echo $i ?>.html"><?php echo $i ?></a></li>
                                            <!-- ?controller=kho-hang&action=ds-phieu-nhap&page=<?php echo $i ?> -->
                                			<?php
                                				}
                                			?>
                                			<li class="page-item">
                                				<a class="page-link" href="#" aria-label="Next">
                                					<span aria-hidden="true">&raquo;</span>
                                					<span class="sr-only">Next</span>
                                				</a>
                                			</li>
                                		</ul>
                                	</nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->