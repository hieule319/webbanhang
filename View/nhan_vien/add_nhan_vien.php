<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <!-- Credit Card -->
                <div id="pay-invoice">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center">Thêm nhân viên</h3>
                        </div>
                        <hr>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group has-success">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Tên nhân viên</label>
                                    <input type="text" class="form-control cc-exp" name="hoten" placeholder="">
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Tài khoản</label>
                                    <select name="id" class="">
                                        <option value="">Chọn</option>
                                        <?php
                                            foreach ($data as $row) {
                                        ?>
                                        <option value="<?php echo $row['id'] ?>"><?php echo $row['username'] ?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Địa chỉ</label>
                                    <input type="text" class="form-control cc-exp" name="diachi" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label mb-1">Số điện thoại</label>
                                        <input type="text" class="form-control cc-exp" name="sdt">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label mb-1">Ngày sinh</label>
                                        <input type="date" class="form-control cc-exp" name="ngaysinh" placeholder="">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label for="x_card_code" class="control-label mb-1">Giới tính</label>
                                    <div class="input-group">
                                        <select name="gioitinh" class="">
                                            <option value="">Chọn</option>
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Chọn file</label></div>
                                        <div class="col-12 col-md-9"><input type="file" name="img" class="form-control-file"></div>
                                    </div>
                            <div>
                                <button id="payment-button" type="submit" name="add_nhan_vien" class="btn btn-lg btn-info btn-block">
                                    <span id="payment-button-amount">Thêm mới</span>
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