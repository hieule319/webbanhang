<?php
    if(isset($_GET['action']))
    {
        $action=$_GET['action'];
    }
    else{
        $action = '';
    }
    switch ($action) {
        case 'phieunhapkho':{
            $tbl = "mathang";
            $data = $db->getALLdata($tbl);
            if(isset($_POST['nhap_kho']))
            {
                $mahanghoa = $_POST['mahanghoa'];
                $ds = $db->getDatatbl2("select barcode from mathang where mahanghoa = '$mahanghoa'");
                foreach ($ds as $row1) {
                    $barcode = $row1['barcode'];
                }
                $ngaynhap = $_POST['ngaynhap'];
                $soluong = $_POST['soluong'];
                $tongtgia = $_POST['tongtgia'];
                if($db->themxoasua("INSERT INTO ct_nhapkho (machitietnhap,mahanghoa,soluong,ngaynhap,tongtgia) VALUES (null,'$mahanghoa', '$soluong','$ngaynhap','$tongtgia')"))
                {
                    $table = "khohang";
                    $datas = $db->getDataIDKhohang($table,$mahanghoa);
                    foreach ($datas as $row) {
                        $mahh = $row['mahanghoa'];
                        $sl = $row['soluong'];
                    }
                    if($mahh)
                    {
                        $soluong = $soluong + $sl;
                        $db->themxoasua("UPDATE $table SET soluong = $soluong WHERE mahanghoa = '$mahh'");
                        echo '<script language="javascript">alert("Nhập kho thành công");</script>';
                    }
                    else
                    {
                        $db->themxoasua("INSERT INTO khohang (makho,mahanghoa,ngaynhap,soluong,barcode) VALUES (null,'$mahanghoa', '$ngaynhap','$soluong','$barcode')");   
                        echo '<script language="javascript">alert("Nhập kho thành công");</script>';
                    }
                }
                else
                {
                    echo '<script language="javascript">alert("Nhập kho thất bại");</script>';
                }
            }
            require_once('View/kho_hang/phieunhapkho.php');
            break;
        }
        case 'dsphieunhap':
        {
            $tbl = "ct_nhapkho";
            $current_page = 15;
            if(!isset($_GET['page']))
            {
                $page = 1;
            }
            else
            {
                $page = $_GET['page'];
            }
            $pagination = ($page - 1)*$current_page;
            if(isset($_POST['filter_data']))
            {
                $month = $_POST['month'];
                $year = $_POST['year'];
                $data = $db->getDatatbl2("select * from ct_nhapkho INNER JOIN mathang ON ct_nhapkho.mahanghoa = mathang.mahanghoa WHERE ngaynhap BETWEEN '$year:$month:1' AND '$year:$month:31' ORDER BY machitietnhap desc limit $pagination,$current_page");
                if(!$data)
                {
                    echo '<p style="color:red; text-align:center;">Không có dữ liệu</p>';
                }
            }
            else
            {
                $data = $db->getDatatbl2("select * from ct_nhapkho INNER JOIN mathang ON ct_nhapkho.mahanghoa = mathang.mahanghoa ORDER BY machitietnhap desc limit $pagination,$current_page ");
            }
            $datas = $db->getALL($tbl);
            $datas_count = mysqli_num_rows($datas);
            $page = ceil($datas_count/15);
            require_once('View/kho_hang/ds_phieu_nhap.php');
            break;
        }
        case 'edit':
        {
            if(isset($_GET['machitietnhap']))
            {
                $machitietnhap  = $_GET['machitietnhap'];
                $today = date("Y-m-d");
                //CT_Nhapkho
                $data = $db->getDataIDct_nhapkho("select * from ct_nhapkho WHERE machitietnhap = '$machitietnhap'");
                foreach ($data as $row) {
                    $ngaynhap = $row['ngaynhap'];
                    $mahanghoa = $row['mahanghoa'];
                    $sl_cu = $row['soluong'];
                }
                //Kho hàng
                $table = "khohang";
                $datas = $db->getDataIDKhohang($table,$mahanghoa);
                foreach ($datas as $row2) {
                    $sl = $row2['soluong'];
                }
                //Kiểm tra
                if($ngaynhap == $today)
                {
                    $soluong = $_POST['soluong'];
                    $tongtgia = $_POST['tongtgia'];
                    if(isset($_POST['edi_nhap_kho']))
                    {
                        if($db->themxoasua("UPDATE ct_nhapkho SET soluong = '$soluong', tongtgia = '$tongtgia' WHERE machitietnhap  = '$machitietnhap'"))
                        {
                            $sl = ($sl - $sl_cu) + $soluong;
                            if($db->themxoasua("UPDATE khohang SET soluong = '$sl' WHERE mahanghoa  = '$mahanghoa'"))
                            {
                                echo '<script language="javascript">alert("Cập nhật thành công");</script>';
                                echo '<script language="javascript">window.location="kho-hang/dsphieunhap.html";</script>';
                            }
                        }
                    }
                }
                else
                {
                    echo '<script language="javascript">alert("Đã hết hạn cập nhật");</script>';
                    echo '<script language="javascript">window.location="kho-hang/dsphieunhap.html";</script>';
                }
            }
            require_once('View/kho_hang/edit_nhapkho.php');
            break;
        }
        case 'khohang':
        {
            $tbl = "khohang";
            $current_page = 15;
            if(!isset($_GET['page']))
            {
                $page = 1;
            }
            else
            {
                $page = $_GET['page'];
            }
            $pagination = ($page - 1)*$current_page;
            if(isset($_POST['filter_data']))
            {
                $soluong = $_POST['soluong'];
                $data = $db->getDatatbl2("select * from khohang INNER JOIN mathang ON khohang.mahanghoa = mathang.mahanghoa WHERE soluong <= '$soluong' ORDER BY makho desc limit $pagination,$current_page ");
                if(!$data)
                {
                    echo '<p style="color:red; text-align:center;">Không có dữ liệu</p>';
                }
            }
            else
            {
                $data = $db->getDatatbl2("select * from khohang INNER JOIN mathang ON khohang.mahanghoa = mathang.mahanghoa ORDER BY makho desc limit $pagination,$current_page ");
            }
            $datas = $db->getALL($tbl);
            $datas_count = mysqli_num_rows($datas);
            $page = ceil($datas_count/15);
            require_once('View/kho_hang/kho_hang.php');
            break;
        }
        default:
        {
            require_once('View/kho_hang/list.php');
            break;
        }
    }
?>