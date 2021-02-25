<?php
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['password']) && isset($_SESSION['phanquyen']))
    {
        include('Model/DBConfig.php'); 
        $db=new Database();
        $db->confirmLogin($_SESSION['id'],$_SESSION['username'],$_SESSION['password'],$_SESSION['phanquyen']);
    }
    else
    {
        echo '<script language="javascript">window.location="login.php";</script>'  ;   
    }
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <base href="http://localhost:88/vinmart/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Trang chủ</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link rel="apple-touch-icon" href="https://marketingai.admicro.vn/wp-content/uploads/2017/03/13.png">
    <link rel="shortcut icon" href="https://marketingai.admicro.vn/wp-content/uploads/2017/03/13.png">
    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <link rel="stylesheet" rel="preload" as="style" onload="this.rel='stylesheet';this.onload=null" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" rel="preload" as="style" onload="this.rel='stylesheet';this.onload=null" href="https://unpkg.com/normalize.css@8.0.0/normalize.css">
    <link rel="stylesheet" rel="preload" as="style" onload="this.rel='stylesheet';this.onload=null" href="https://unpkg.com/milligram@1.3.0/dist/milligram.min.css">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <!--Chống gửi lại biểu mẫu-->
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/logo.png" alt="Vinmart" width="100px" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>Quản lý nhân viên</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="nhan-vien/add.html">Thêm nhân viên</a>
                                    <!-- ?controller=nhan-vien&action=add -->
                                </li>
                                <li>
                                    <a href="nhan-vien/adduser.html">Tạo tài khoản</a>
                                    <!-- ?controller=nhan-vien&action=adduser -->
                                </li>
                                 <li>
                                    <a href="ui-badges.html">Cập nhật</a>
                                </li>
                                 <li>
                                    <a href="nhan-vien/list.html">Danh sách</a>
                                    <!-- ?controller=nhan-vien&action=list -->
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fab fa-bitcoin"></i>Quản lý bán hàng</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="ban-hang/add.html">Lập hóa đơn</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-line-chart"></i>Thống kê</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="thong-ke/hoadon.html">Hóa đơn</a>
                                </li>
                                <li>
                                    <a href="thong-ke/doanhthu.html">Doanh thu</a>
                                </li>
                                <li>
                                    <a href="thong-ke/kiemhang.html">Kiểm hàng</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-boxes"></i>Quản lý kho hàng</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    </i><a href="kho-hang/khohang.html">Phiếu nhập kho</a>
                                </li>
                                <li>
                                    <a href="kho-hang/khohang.html">Kho hàng</a>
                                </li>
                                 <li>
                                    <a href="kho-hang/dsphieunhap.html">Danh sách phiếu nhập</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fab fa-product-hunt"></i>Quản lý mặt hàng</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="mat-hang/add.html">Thêm mặt hàng</a>
                                </li>
                                <li>
                                    <a href="mat-hang/list.html">Danh sách mặt hàng</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-industry"></i>Quản lý nhà cung cấp</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="nha-cung-cap/add.html">Thêm nhà cung cấp</a>
                                </li>
                                <li>
                                    <a href="nha-cung-cap/list.html">Danh sách nhà cung cấp</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <?php
                            if($_SESSION['phanquyen'] == 1)
                            {
                        ?>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>Quản lý nhân viên</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="nhan-vien/add.html">Thêm nhân viên</a>
                                </li>
                                <li>
                                    <a href="nhan-vien/adduser.html">Tạo tài khoản</a>
                                </li>
                                 <li>
                                    <a href="nhan-vien/list.html">Danh sách</a>
                                </li>
                            </ul>
                        </li>
                        <?php
                            }
                        ?>
                        <?php
                            if($_SESSION['phanquyen'] == 1 || $_SESSION['phanquyen'] == 2)
                            {
                        ?>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fab fa-bitcoin"></i>Quản lý bán hàng</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="ban-hang/add.html">Lập hóa đơn</a>
                                    <!-- ?controller=ban-hang&action=add -->
                                </li>
                            </ul>
                        </li>
                         <?php
                            }
                        ?>
                        <?php
                            if($_SESSION['phanquyen'] == 1)
                            {
                        ?>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-line-chart"></i>Thống kê</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="thong-ke/hoadon.html">Hóa đơn</a>
                                    <!-- ?controller=thong-ke&action=hoadon -->
                                </li>
                                <li>
                                    <a href="thong-ke/doanhthu.html">Doanh thu</a>
                                    <!-- ?controller=thong-ke&action=doanhthu -->
                                </li>
                                <li>
                                    <a href="thong-ke/kiemhang.html">Kiểm hàng</a>
                                    <!-- ?controller=thong-ke&action=kiemhang -->
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-boxes"></i>Quản lý kho hàng</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    </i><a href="kho-hang/phieunhapkho.html">Phiếu nhập kho</a>
                                    <!-- ?controller=kho-hang&action=phieunhapkho -->
                                </li>
                                <li>
                                    <a href="kho-hang/khohang.html">Kho hàng</a>
                                    <!-- ?controller=kho-hang&action=kho-hang -->
                                </li>
                                 <li>
                                    <a href="kho-hang/dsphieunhap.html">Danh sách phiếu nhập</a>
                                    <!-- ?controller=kho-hang&action=dsphieunhap -->
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fab fa-product-hunt"></i>Quản lý mặt hàng</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="mat-hang/add.html">Thêm mặt hàng</a>
                                    <!-- ?controller=mat-hang&action=add -->
                                </li>
                                <li>
                                    <a href="mat-hang/list.html">Danh sách mặt hàng</a>
                                    <!-- ?controller=mat-hang&action=list -->
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-industry"></i>Quản lý nhà cung cấp</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="nha-cung-cap/add.html">Thêm nhà cung cấp</a><!-- ?controller=nha-cung-cap&action=add -->
                                </li>
                                <li>
                                    <a href="nha-cung-cap/list.html">Danh sách nhà cung cấp</a><!-- ?controller=nha-cung-cap&action=list -->
                                </li>
                            </ul>
                        </li>
                        <?php
                            }
                        ?>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST" style="margin-top: 25px;">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Tìm kiếm" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                
                                    
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="nhan-vien/list.html">Admin</a>
                                                    </h5>
                                                    <span class="email">hieulev319@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="nhan-vien/list.html">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="nhan-vien/list.html">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="?controller=dang-xuat">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                              
                </div>
                <?php
                    if(isset($_GET['controller']))
                    {
                        $controller=$_GET['controller'];
                    }
                    else{
                        $controller = '';
                    }

                    switch ($controller) {
                        case 'nhan-vien':
                        require_once('Controller/nhan_vien/index.php');
                        break;
                        case 'kho-hang':
                        require_once('Controller/kho_hang/index.php');
                        break;
                        case 'ban-hang':
                        require_once('Controller/ban_hang/index.php');
                        break;  
                        case 'thong-ke':
                        require_once('Controller/thong_ke/index.php');
                        break;   
                        case 'mat-hang':
                        require_once('Controller/mat_hang/index.php');
                        break;
                        case 'nha-cung-cap':
                        require_once('Controller/nha_cung_cap/index.php');
                        break;
                        case 'dang-xuat':{
                            session_destroy();
                            echo '<script language="javascript">window.location="login.php";</script>'  ;
                            break;
                        }
                        default:
                        require_once('Controller/Overview/index.php');
                        break;
                    }
                ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2020 Công Nghệ Mới "<b>Võ Ngọc Tấn Phước</b>". Design by <a href="https://www.facebook.com/profile.php?id=100004021754013">Lê Văn Hiếu</a><br><a href="https://www.facebook.com/haiiuyyen/">Hồ Ninh Hải Uyên</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <!-- scanner-->
<script type="text/javascript" src="js/scanner.js"></script>
<script type="text/javascript">
        window.addEventListener('load', function () {
            let selectedDeviceId;
            const codeReader = new ZXing.BrowserBarcodeReader()
            console.log('ZXing code reader initialized')
            codeReader.getVideoInputDevices()
                .then((videoInputDevices) => {
                    const sourceSelect = document.getElementById('sourceSelect')
                    selectedDeviceId = videoInputDevices[0].deviceId
                    if (videoInputDevices.length > 1) {
                        videoInputDevices.forEach((element) => {
                            const sourceOption = document.createElement('option')
                            sourceOption.text = element.label
                            sourceOption.value = element.deviceId
                            sourceSelect.appendChild(sourceOption)
                        })

                        sourceSelect.onchange = () => {
                            selectedDeviceId = sourceSelect.value;
                        }

                        const sourceSelectPanel = document.getElementById('sourceSelectPanel')
                        sourceSelectPanel.style.display = 'block'
                    }

                    document.getElementById('startButton').addEventListener('click', () => {
                        codeReader.decodeOnceFromVideoDevice(selectedDeviceId, 'video').then((barcode) => {
                            console.log(barcode)
                            document.getElementById('barcode').value = barcode.text
                        }).catch((err) => {
                            console.error(err)
                            document.getElementById('barcode').value = err
                        })
                        console.log(`Started continous decode from camera with id ${selectedDeviceId}`)
                    })

                    document.getElementById('resetButton').addEventListener('click', () => {
                        document.getElementById('barcode').value = '';
                        codeReader.reset();
                        console.log('Reset.')
                    })

                })
                .catch((err) => {
                    console.error(err)
                })
        })
    </script>

    <script>
    //Xuất ra mặt hàng
        var isNew = true;
        getBarcode();

        function getBarcode()
        {
            $("#barcode").empty();
            $("#barcode").blur(function (e)
            {
                $.ajax({
                    url: "View/ban_hang/get_product.php",
                    type: "POST",
                    dataType: "JSON",
                    data:{barcode: $("#barcode").val() },
                    success:function(data)
                    {
                        $("#tenmh").val(data[0].tenmh);
                        $("#dongia").val(data[0].dongia);
                        $("#soluong").focus();
                    }
                });
            });
        }
        //Tính tổng số lượng

        $(function(){
            $("#dongia, #soluong").on("keydown keyup click", soluong);

            function soluong()
            {
                var sum = (
                    Number($("#dongia").val()) * Number($("#soluong").val())
                );
                $("#thanh_tien").val(sum);
            }
        });
        //Tính tiền dư
        $(function(){
            $("#pay, #tonggia").on("keydown keyup click", finaltot);

            function finaltot()
            {
                var sum = (
                    Number($("#pay").val()) - Number($("#tonggia").val())
                );
                $("#due").val(sum);
            }
        });
        //Thêm sản phẩm
        function addProduct()
        {
            var products = {
                barcode: $("#barcode").val(),
                tenmh: $("#tenmh").val(),
                dongia: $("#dongia").val(),
                soluong: $("#soluong").val(),
                thanh_tien: $("#thanh_tien").val(),
                button:'<button type="button" class="btn btn-warning">Delete</button>'
            };
            addRow(products);
            $("#frmInvoice")[0].reset();
        }

        var thanh_tien = 0;
        function addRow(products)
        {
            if($("#barcode").val().length == 0)
            {
                $.alert({
                    title: "Lỗi",
                    content:"Hãy nhập mã barcode",
                    type:"red",
                    autoClose:"ok|2000"
                });
            }
            else
            {
                var $table = $("#product_list tbody");
                var $row = 
                $("<tr>" +
                    "<td><button type='button' name='record' class='btn btn-warning btn-xs' onclick='deleterow(this)'>Delete</button></td>"+
                    "<td>" + products.barcode + "</td>"+
                    "<td>" + products.tenmh + "</td>"+
                    "<td>" + products.dongia + "</td>"+
                    "<td>" + products.soluong + "</td>"+
                    "<td>" + products.thanh_tien + "</td>"+
                    "</tr>"
                    );
                $row.data("barcode",products.barcode);
                $row.data("tenmh",products.tenmh);
                $row.data("dongia",products.dongia);
                $row.data("soluong",products.soluong);
                $row.data("thanh_tien",products.thanh_tien);
                thanh_tien += Number(products.thanh_tien);

                $("#tonggia").val(thanh_tien);
                $table.append($row);
                //remove
                $row.find('deleterow').click(function(event){
                    deleterow($(event.currentTarget).parent('tr'));
                });

            }

        }
        function deleterow(e)
        {
            product_total_cost = parseInt($(e).parent().parent().find('td:last').text(),10);
            thanh_tien -= product_total_cost;
            $("#tonggia").val(thanh_tien);
            $(e).parent().parent().remove();
        }
        //Thêm vào hóa đơn
        function addInvoice()
            {
                var table_data = [];
                $("#product_list tbody tr").each(function(row,tr){
                    var sub = {
                        'barcode' : $(tr).find('td:eq(1)').text(),
                        'tenmh' : $(tr).find('td:eq(2)').text(),
                        'dongia' : $(tr).find('td:eq(3)').text(),
                        'soluong' : $(tr).find('td:eq(4)').text(),
                        'thanh_tien' : $(tr).find('td:eq(5)').text(),
                    };
                    table_data.push(sub);
                });
            

                $.ajax({
                    url:"View/ban_hang/tao_hoa_don.php",
                    type: "POST",
                    dataType: "JSON",
                    data: {nhanvien: $("#nhanvien").val() ,tonggia: $("#tonggia").val(),pay: $("#pay").val(),due: $("#due").val(),data: table_data},
                    success:function(data)
                    {
                        window.alert("Thanh toán thành công");
                        last_id = data.last_id
                        window.location = "View/ban_hang/bill.php?last_id=" + last_id;
                    },


                    error:function(xhr,status,error)
                    {
                        console.log(xhr.responseText);
                    }
                });
            }

</script>

<script>
    var ctx = document.getElementById("bieudo_dt");
    if (ctx) {
      ctx.height = 150;
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7" , "Tháng 8" , "Tháng 9" , "Tháng 10" , "Tháng 11" , "Tháng 12"],
          datasets: [
            {
              label: "Doanh thu",
              data: ['<?php echo $dt1 ?>','<?php echo $dt2 ?>','<?php echo $dt3 ?>','<?php echo $dt4 ?>','<?php echo $dt5 ?>','<?php echo $dt6 ?>','<?php echo $dt7 ?>','<?php echo $dt8 ?>','<?php echo $dt9 ?>','<?php echo $dt10 ?>','<?php echo $dt11 ?>','<?php echo $dt12 ?>'],
              borderColor: "rgba(0, 123, 255, 0.9)",
              borderWidth: "0",
              backgroundColor: "rgba(0, 123, 255, 0.5)"
            }
          ]
        },
        options: {
          legend: {
            position: 'top',
            labels: {
              fontFamily: 'Poppins'
            }

          },
          scales: {
            xAxes: [{
              ticks: {
                fontFamily: "Poppins"

              }
            }],
            yAxes: [{
              ticks: {
                beginAtZero: true,
                fontFamily: "Poppins"
              }
            }]
          }
        }
      });
    }
</script>
</body>

</html>
<!-- end document-->
