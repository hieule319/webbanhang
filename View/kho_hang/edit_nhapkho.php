
<div class="row" style="padding: 5px;">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <!-- Credit Card -->
                <div id="pay-invoice">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center">Cập nhật phiếu nhập kho</h3>
                        </div>
                        <hr>
                        <form action="" method="post" novalidate="novalidate">
                            <div class="row">
                                <?php
                                    foreach ($data as $row) {
                                ?>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label mb-1">Số lượng</label>
                                        <input type="text" class="form-control cc-exp" name="soluong" placeholder="" value="<?php echo $row['soluong'] ?>">
                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="x_card_code" class="control-label mb-1">Tổng giá</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control cc-cvc" name="tongtgia" value="<?php echo $row['tongtgia'] ?>">
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                            <div>
                                <button id="payment-button" type="submit" name="edi_nhap_kho" class="btn btn-lg btn-info btn-block">
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