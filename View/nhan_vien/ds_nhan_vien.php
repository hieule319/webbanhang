
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Danh sách nhân viên</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr style="background: black; color: white;">
                                            <th>STT</th>
                                            <th>Tên nhân viên</th>
                                            <th>Địa chỉ</th>
                                            <th>Ngày sinh</th>
                                            <th>Giới tính</th>
                                            <th>Số điện thoại</th>
                                            <th>Ảnh</th>
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
                                            <td><?php echo $row['hoten'] ?></td>
                                            <td><?php echo $row['diachi'] ?></td>
                                            <td><?php echo $row['ngaysinh'] ?></td>
                                            <td><?php echo $row['gioitinh'] ?></td>
                                            <td><?php echo $row['sdt'] ?></td>
                                            <td><img src="images/<?php echo $row['img'] ?>" width="100px"></td>
                                            <td>
                                                <a href="nhan-vien/edit/<?php echo $row['manhanvien'] ?>.html"><i class="fa fa-edit" style="color: green; font-size: 25px"></i></a>
                                                <!-- index.php?controller=nhan-vien&action=edit&manhanvien=<?php echo $row['manhanvien'] ?> -->
                                            </td>
                                            <td>
                                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="index.php?controller=nhan-vien&action=delete&manhanvien=<?php echo $row['manhanvien'] ?>"><i class="fa fa-trash" style="color: red;  font-size: 25px"></i></a>
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
                                            <li class="page-item"><a class="page-link" href="nhan-vien/list/<?php echo $i ?>.html"><?php echo $i ?></a></li>
                                            <!-- ?controller=nhan-vien&action=list&page=<?php echo $i ?> -->
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