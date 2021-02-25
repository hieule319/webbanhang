
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <!-- Credit Card -->
                <div id="pay-invoice">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center">Cập nhật mặt hàng</h3>
                        </div>
                        <hr>
                        <form action="" method="post" novalidate="novalidate">
                        <?php
                            foreach ($datas as $ds) {
                        ?>
                            <div class="form-group has-success">
                                <label for="cc-name" class="control-label mb-1">Tên mặt hàng</label>
                                <input type="text" class="form-control cc-name valid" name="tenmh" value="<?php echo $ds['tenmh'] ?>">
                            </div>
                            <div class="form-group has-success">
                                <label for="cc-name" class="control-label mb-1">Mã barcode</label>
                                <input type="text" class="form-control cc-name valid" name="barcode" value="<?php echo $ds['barcode'] ?>">
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label mb-1">Nhà cung cấp</label>
                                        <select name="msncc" id="msncc" class="">
                                            <option value="">Chọn</option>
                                            <?php
                                                foreach ($data as $row) {
                                            ?>
                                            <option value="<?php echo $row['msncc'] ?>"><?php echo $row['tenncc'] ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">Đơn giá</label>
                                        <input type="text" class="form-control cc-name valid" name="dongia" value="<?php  echo $ds['dongia'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label for="x_card_code" class="control-label mb-1">Đơn vị tính</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control cc-cvc" name="donvitinh" value="<?php echo $ds['dvt'] ?>">
                                        <div class="input-group-addon">
                                            <span class="fa fa-question-circle fa-lg" data-toggle="popover" data-container="body" data-html="true" data-title="Security Code"
                                            data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                            data-trigger="hover"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                            <div>
                                <button id="payment-button" type="submit" name="edit_mathang" class="btn btn-lg btn-info btn-block">
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