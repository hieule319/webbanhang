
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <!-- Credit Card -->
                <div id="pay-invoice">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center">Cập nhật nhà cung cấp</h3>
                        </div>
                        <hr>
                        <form action="" method="post" novalidate="novalidate">
                            <?php
                                foreach ($data as $row) {
                            ?>
                            <div class="form-group has-success">
                                <label for="cc-name" class="control-label mb-1">Tên nhà cung cấp</label>
                                <input type="text" class="form-control cc-name valid" name="tenncc" value="<?php echo $row['tenncc'] ?>">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label mb-1">Địa chỉ</label>
                                        <input type="text" class="form-control cc-exp" name="diachi" placeholder="" value="<?php echo $row['diachi'] ?>">
                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="x_card_code" class="control-label mb-1">Số điện thoại</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control cc-cvc" name="sdt" value="<?php echo $row['sdt'] ?>">
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
                                <button id="payment-button" type="submit" name="edit_ncc" class="btn btn-lg btn-info btn-block">
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