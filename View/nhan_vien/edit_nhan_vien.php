<div class="row" style="padding: 10px">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <!-- Credit Card -->
                <div id="pay-invoice">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center">Cập nhật</h3>
                        </div>
                        <hr>
                        <form action="" method="post" enctype="multipart/form-data">
                            <?php
                                foreach ($data as $row) {
                            ?>
                            <div class="form-group has-success">
                                <div class="form-group">
                                    <center><img src="images/<?php echo $row['img'] ?>" width="250px"></center>
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Tên nhân viên</label>
                                    <input type="text" class="form-control cc-exp" name="hoten" placeholder="" value="<?php echo $row['hoten'] ?>">
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Tài khoản</label>
                                    <input type="text" class="form-control cc-exp" placeholder="" value="<?php echo $row['username'] ?>">
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Địa chỉ</label>
                                    <input type="text" class="form-control cc-exp" name="diachi" placeholder="" value="<?php echo $row['diachi'] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label mb-1">Số điện thoại</label>
                                        <input type="text" class="form-control cc-exp" name="sdt" value="<?php echo $row['sdt'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label mb-1">Ngày sinh</label>
                                        <input type="date" class="form-control cc-exp" name="ngaysinh" placeholder="" value="<?php echo $row['ngaysinh'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label for="x_card_code" class="control-label mb-1">Giới tính</label>
                                    <input type="text" class="form-control cc-exp" name="gioitinh" placeholder="" value="<?php echo $row['gioitinh'] ?>">
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                            <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Chọn file</label></div>
                                        <div class="col-12 col-md-9"><input type="file" name="img" class="form-control-file"></div>
                                    </div>
                            <div>
                                <button id="payment-button" type="submit" name="edit_nhan_vien" class="btn btn-lg btn-info btn-block">
                                    <span id="payment-button-amount">Cập nhật</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div> <!-- .card -->

    </div><!--/.col-->
    <div class="col-lg-3"></div>
</div>