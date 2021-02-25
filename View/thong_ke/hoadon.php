
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Danh sách hóa đơn</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <form method="POST">
                                        <div style="float: left; margin-bottom: 5px; border: 4px inset white">
                                            <input type="date" name="ngaylap">
                                        </div>
                                        <div style="float: left; margin-bottom: 5px; margin-left: 5px;">
                                            <button class="btn btn-primary" name="filter_data" id="filter_data">Lọc</button>
                                        </div>
                                    </form>
                                    <thead>
                                        <tr style="background: black; color: white;">
                                        	<th>STT</th>
                                            <th>Mã hóa đơn</th>
                                            <th>Mã nhân viên</th>
                                            <th>Ngày lập</th>
                                            <th>Tổng tiền</th>
                                            <th>Nhận</th>
                                            <th>Trả lại</th>
                                            <th>Chi tiết HĐ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
                                    		$stt =1;
                                    		foreach ($data as $row) {
                                    	?>
                                        <tr>
                                        	<td><?php echo $stt ?></td>
                                            <td><?php echo $row['mahoadon'] ?></td>
                                            <td><?php echo $row['manhanvien'] ?></td>
                                            <td><?php echo $row['ngaylap'] ?></td>
                                            <td><?php echo $row['tonggia'] ?></td>
                                            <td><?php echo $row['thanh_toan'] ?></td>
                                            <td><?php echo $row['due'] ?></td>
                                            <td>
                                                <a href="thong-ke/chitiethd/<?php echo $row['mahoadon'] ?>.html"><i class="fas fa-info-circle" style="color: green; font-size: 25px"></i></a>
                                                <!-- index.php?controller=thong-ke&action=chi-tiet-hd&mahoadon=<?php echo $row['mahoadon'] ?> -->
                                            </td>
                                        </tr>
                                        <?php
                                        	$stt++;
                                        	}
                                        ?>
                                    </tbody>
                                </table>
                                <form action="thong-ke/doanhthu.html" method="POST" style="margin-top: 5px">
                                    <input type="submit" name="doanhthu" value="Thống kê doanh thu">
                                </form>
                                <div style="float: right;">
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
                                			<li class="page-item"><a class="page-link" href="thong-ke/hoadon/<?php echo $i ?>.html"><?php echo $i ?></a></li>
                                            <!-- ?controller=thong-ke&action=hoa-don&page=<?php echo $i ?> -->
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