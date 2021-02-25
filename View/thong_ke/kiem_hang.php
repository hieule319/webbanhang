<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-header">
                        <strong class="card-title">Kiểm kê hàng hóa</strong>
                    </div>
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <form method="POST">
                                <div style="float: left; margin-bottom: 5px; border: 1px inset white">
                                    <input type="date" name="ngaylap">
                                </div>
                                <div style="float: left; margin-bottom: 5px;">
                                    <select name="thang">
                                        <option>Tháng</option>
                                        <option value="1">Tháng 1</option>
                                        <option value="2">Tháng 2</option>
                                        <option value="3">Tháng 3</option>
                                        <option value="4">Tháng 4</option>
                                        <option value="5">Tháng 5</option>
                                        <option value="6">Tháng 6</option>
                                        <option value="7">Tháng 7</option>
                                        <option value="8">Tháng 8</option>
                                        <option value="9">Tháng 9</option>
                                        <option value="10">Tháng 10</option>
                                        <option value="11">Tháng 11</option>
                                        <option value="12">Tháng 12</option>
                                    </select>
                                </div>
                                <div style="float: left; margin-bottom: 5px; margin-left: 5px;">
                                    <button class="btn btn-primary" name="filter_data" id="filter_data">Lọc</button>
                                </div>
                            </form>
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th class="text-right">Đơn giá</th>
                                    <th class="text-right">Số lượng bán</th>
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
                                    <td class="text-right"><?php echo $row['dongia'] ?></td>
                                    <td class="text-right"><?php echo $row['Tổng mặt hàng'] ?></td>
                                </tr>
                                <?php
                                    $stt ++;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <a href="thong-ke/kiemhang.html"><input type="button"  value="Xem thống kê" class="btn btn-success" style="margin-top: 5px;"></a>
                </div>
            </div>
        </div>
    </div>
</div>