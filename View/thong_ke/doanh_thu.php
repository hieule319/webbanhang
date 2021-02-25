<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
        	<?php
        		if($tong_tien != 0)
        		{
        	?>
            <div class="row">
                <div class="col-lg-3">
                    <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                        <div class="au-card-inner">
                            <div class="table-responsive">
                                <table class="table table-top-countries">
                                    <tbody>
                                    	<tr>
                                    		<td>Ngày</td>
                                    		<td class="text-right"><?php echo $d; ?></td>
                                    	</tr>
                                        <tr>
                                            <td>Tổng doanh thu</td>
                                            <td class="text-right"><?php echo $tong_tien ." ".VNĐ?></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        	<?php } ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-header">
                        <strong class="card-title">Doanh thu</strong>
                    </div>
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Ngày lập</th>
                                    <th class="text-right">Tổng doanh thu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $stt=1;
                                    foreach ($ds as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $stt ?></td>
                                    <td><?php echo $row['ngaylap'] ?></td>
                                    <td class="text-right"><?php echo $row['tongdoanhthu']." ".VNĐ ?></td>
                                </tr>
                                <?php
                                    $stt ++;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <form action="thong-ke/doanhthu.html" method="POST" style="margin-top: 5px">
                    	<input type="submit" name="doanhthu" value="Thống kê doanh thu">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>