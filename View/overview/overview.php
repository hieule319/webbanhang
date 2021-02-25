<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Tổng quan</h2>
                    </div>
                </div>
                <div class="row m-t-25">
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c1">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                    </div>
                                    <div class="text">
                                        <?php foreach ($tong_hd as $row) { ?>
                                        <h2><?php echo $row['Tong HD'] ?></h2>
                                        <?php } ?>
                                        <span>Tổng số hóa đơn</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <canvas id="widgetChart1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c2">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="fas fa-boxes"></i>
                                    </div>
                                    <div class="text">
                                        <?php
                                            foreach ($kho_hang as $row2) {
                                        ?>
                                        <h4 style="color: white"><?php echo $row2['tenmh'].":"." " ?><?php echo $row2['soluong'] ?></h4>
                                        <?php  } ?>
                                        <span>Kho hàng</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <canvas id="widgetChart2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c3">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-calendar-note"></i>
                                    </div>
                                    <div class="text">
                                        <h2><?php echo $d ?></h2>
                                        <span>Ngày hiện tại</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <canvas id="widgetChart3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c4">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-money"></i>
                                    </div>
                                    <div class="text">
                                        <?php foreach ($dt as $row1) { ?>
                                        <h2><?php echo $row1['Tong DT'] ?> VNĐ</h2>
                                        <?php } ?>
                                        <span>Tổng doanh thu</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <canvas id="widgetChart4"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="au-card m-b-30">
                            <div class="au-card-inner">
                                <h3 class="title-2 m-b-40">Doanh thu các tháng</h3>
                                <canvas id="bieudo_dt"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>