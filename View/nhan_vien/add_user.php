<div class="row" style="padding: 10px">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <!-- Credit Card -->
                <div id="pay-invoice">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center">Tạo tài khoản</h3>
                        </div>
                        <hr>
                        <form action="" method="post">
                            <div class="form-group has-success">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Username</label>
                                    <input type="text" class="form-control cc-exp" name="username" placeholder="">
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Password</label>
                                    <input type="password" class="form-control cc-exp" name="password" placeholder="">
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <div class="form-group">
                                    <label for="x_card_code" class="control-label mb-1">Phân quyền</label>
                                    <select name="phanquyen" class="">
                                        <option value="">Chọn</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Nhân viên</option>
                                    </select>
                                </div>
                            </div>
                                <button id="payment-button" type="submit" name="add_user" class="btn btn-lg btn-info btn-block">
                                    <span id="payment-button-amount">Thêm mới</span>
                                </button>
                        </form>
                    </div>
                </div>

            </div>
        </div> <!-- .card -->

    </div><!--/.col-->
    <div class="col-lg-3"></div>
</div>