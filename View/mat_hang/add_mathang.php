<div class="row" style="padding: 10px">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <!-- Credit Card -->
                <div id="pay-invoice">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center">Thêm mặt hàng</h3>
                        </div>
                        <hr>
                        <form action="" method="post" novalidate="novalidate">
                            <div class="form-group has-success">
                                <label for="cc-name" class="control-label mb-1">Tên mặt hàng</label>
                                <input type="text" class="form-control cc-name valid" name="tenmh">
                            </div>
                            <div class="form-group has-success">
                                <label for="cc-name" class="control-label mb-1">Mã barcode</label>
                                <input type="text" class="form-control cc-name valid" id="barcode" name="barcode">
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label mb-1">Nhà cung cấp</label>
                                        <select name="msncc" id="ncc" class="">
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
                                        <input type="text" class="form-control cc-name valid" name="dongia">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label for="x_card_code" class="control-label mb-1">Đơn vị tính</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control cc-cvc" name="donvitinh">
                                        <div class="input-group-addon">
                                            <span class="fa fa-question-circle fa-lg" data-toggle="popover" data-container="body" data-html="true" data-title="Security Code"
                                            data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                            data-trigger="hover"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button id="payment-button" type="submit" name="add_mathang" class="btn btn-lg btn-info btn-block">
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
<center>
    <div class="col-sm-8" align="center">
        <h1 class="title">Scan barcode</h1>
        <div>
            <a class="button" id="startButton" style="background-color:white;">Start</a>
            <a class="button" id="resetButton" style="background-color:white;">Reset</a>
        </div>

        <div>
            <video id="video" width="600" height="400" style="border: 1px solid gray"></video>
        </div>

        <div id="sourceSelectPanel" style="display:none">
            <label for="sourceSelect">Thay đổi camera:</label>
            <select id="sourceSelect" style="max-width:300px">
            </select>
        </div>
    </div>
</center>
