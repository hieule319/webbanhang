<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-header">
                        <strong class="card-title">Chi tiết hóa đơn</strong>
                    </div>
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th class="text-right">Đơn giá</th>
                                    <th class="text-right">Số lượng</th>
                                    <th class="text-right">Tổng tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $stt=1;
                                    foreach ($data as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $stt ?></td>
                                    <td><?php echo $row['tenmh'] ?></td>
                                    <td class="text-right"><?php echo $row['dongia']." ".VNĐ ?></td>
                                    <td class="text-right"><?php echo $row['soluong'] ?></td>
                                    <td class="text-right"><?php echo $row['thanh_tien']." ".VNĐ ?></td>
                                </tr>
                                <?php
                                    $stt ++;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <a href="thong-ke/hoadon.html"><input type="button"  value="Trở về" class="btn btn-success" style="margin-top: 5px;"></a>
                </div>
            </div>
        </div>
    </div>
</div>