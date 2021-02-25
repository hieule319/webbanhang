        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Kho hàng</strong>
                            </div>
                            <div class="card-body">
                                <table id="tblExport" class="table table-striped table-bordered">
                                	<form method="POST">
                                        <div style="float: left; margin-bottom: 5px;">
                                            <select name="soluong" class="">
                                            	<option>Số lượng sản phẩm</option>
                                                <option value="50">Dưới 50 sản phẩm</option>
                                                <option value="100">Dưới 100 sản phẩm</option>
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
                                            <th>Đơn vị tính</th>
                                            <th>Đơn giá (VNĐ)</th>
                                            <th>Lượng hàng tồn</th>
                                            <th>Ngày nhập</th>
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
                                            <td><?php echo $row['dvt'] ?></td>
                                            <td><?php echo $row['dongia'] ?></td>
                                            <td><?php echo $row['soluong'] ?></td>
                                            <td><?php echo $row['ngaynhap'] ?></td>
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
                                			<li class="page-item"><a class="page-link" href="kho-hang/khohang/<?php echo $i ?>.html"><?php echo $i ?></a></li>
                                            <!-- ?controller=kho-hang&action=kho-hang&page=<?php echo $i ?> -->
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