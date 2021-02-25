
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Danh sách nhà cung cấp</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr style="background: black; color: white;">
                                        	<th>STT</th>
                                            <th>Tên NCC</th>
                                            <th>Địa chỉ</th>
                                            <th>Số điện thoại</th>
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
                                            <td><?php echo $row['tenncc'] ?></td>
                                            <td><?php echo $row['diachi'] ?></td>
                                            <td><?php echo $row['sdt'] ?></td>
                                            <td>
                                            	<a href="nha-cung-cap/edit/<?php echo $row['msncc'] ?>.html"><i class="fa fa-edit" style="color: green; font-size: 25px"></i></a>
                                                <!-- index.php?controller=nha-cung-cap&action=edit&msncc=<?php echo $row['msncc'] ?> -->
                                            </td>
                                            <td>
                                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="index.php?controller=nha-cung-cap&action=delete&msncc=<?php echo $row['msncc'] ?>"><i class="fa fa-trash" style="color: red; margin-left: 5px; font-size: 30px"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                        	$stt++;
                                        	}
                                        ?>
                                    </tbody>
                                </table>
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
                                			<li class="page-item"><a class="page-link" href="nha-cung-cap/list/<?php echo $i ?>.html"><?php echo $i ?></a></li>
                                            <!-- ?controller=nha-cung-cap&action=list&page=<?php echo $i ?> -->
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