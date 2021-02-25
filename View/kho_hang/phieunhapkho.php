<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <!-- Credit Card -->
                <div id="pay-invoice">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center">Nhập kho</h3>
                        </div>
                        <hr>
                        <form action="" method="post" novalidate="novalidate">
                            <div class="form-group has-success">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Mặt hàng</label>
                                    <select name="mahanghoa" id="mahanghoa" class="">
                                        <option value="">Chọn</option>
                                        <?php
                                            foreach ($data as $row) {
                                        ?>
                                        <option value="<?php echo $row['mahanghoa'] ?>"><?php echo $row['tenmh'] ?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label mb-1">Ngày nhập</label>
                                        <input type="date" class="form-control cc-exp" name="ngaynhap">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label mb-1">Số lượng</label>
                                        <input type="text" class="form-control cc-exp" name="soluong" placeholder="">
                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label for="x_card_code" class="control-label mb-1">Tổng giá</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control cc-cvc" name="tongtgia">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button id="payment-button" type="submit" name="nhap_kho" class="btn btn-lg btn-info btn-block">
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