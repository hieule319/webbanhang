<?php
    if(isset($_GET['action']))
    {
        $action=$_GET['action'];
    }
    else{
        $action = '';
    }
    switch ($action) {
        case 'hoadon':{
            $tbl = "hoadon";
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
                $ngaylap = $_POST['ngaylap'];
                $data = $db->getDatatbl2("select * from hoadon where ngaylap = '$ngaylap' ORDER BY mahoadon desc ");
            }
            else
            {
                $data = $db->getDatatbl2("select * from hoadon ORDER BY mahoadon desc limit $pagination,$current_page");
            }
            $datas = $db->getALL($tbl);
            $datas_count = mysqli_num_rows($datas);
            $page = ceil($datas_count/15);
            require_once('View/thong_ke/hoadon.php');
            break;   
        }
        case 'kiemhang':{
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $d = date("Y-m-d");
            $year = date("Y");
             if(isset($_POST['filter_data']))
            {
                $date = $_POST['ngaylap'];
                $month = $_POST['thang'];
                if($date =="" AND $month != "")
                {
                    $data = $db->getDatatbl2("Select mathang.tenmh,mathang.dongia, SUM(chitiet_hd.soluong) as 'Tổng mặt hàng' From chitiet_hd INNER JOIN mathang ON chitiet_hd.mahanghoa = mathang.barcode INNER JOIN hoadon ON chitiet_hd.mahoadon = hoadon.mahoadon WHERE hoadon.ngaylap BETWEEN '$year:$month:1' AND '$year:$month:31' Group by chitiet_hd.mahanghoa");
                }
                else
                {
                    $data = $db->getDatatbl2("Select mathang.tenmh,mathang.dongia, SUM(chitiet_hd.soluong) as 'Tổng mặt hàng' From chitiet_hd INNER JOIN mathang ON chitiet_hd.mahanghoa = mathang.barcode INNER JOIN hoadon ON chitiet_hd.mahoadon = hoadon.mahoadon WHERE hoadon.ngaylap = '$date' Group by chitiet_hd.mahanghoa");
                }
            }
            else
            {
                $data = $db->getDatatbl2("Select mathang.tenmh,mathang.dongia, SUM(chitiet_hd.soluong) as 'Tổng mặt hàng' From chitiet_hd INNER JOIN mathang ON chitiet_hd.mahanghoa = mathang.barcode INNER JOIN hoadon ON chitiet_hd.mahoadon = hoadon.mahoadon WHERE hoadon.ngaylap = '$d' Group by chitiet_hd.mahanghoa");
            }
            require_once('View/thong_ke/kiem_hang.php');
            break;
        }
        case 'doanhthu':
        {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $d = date("Y-m-d");
            $year = date("Y");
            $month = date("m");
            $tong_tien = 0;
            if(isset($_POST['doanhthu']))
            {
                $data = $db->getDatatbl2("select * from hoadon where ngaylap = '$d'");
                foreach ($data as $row) {
                    $tong_tien = $tong_tien + $row['tonggia'];
                }
                $datas = $db->getDatatbl2("select * from doanhthu where ngaylap = '$d'");
                foreach ($datas as $row1) {
                    $madt = $row1['madt'];
                }
                if($datas == null)
                {
                    $db->themxoasua("INSERT INTO doanhthu (ngaylap,tongdoanhthu) VALUES ('$d','$tong_tien')");
                }
                else{
                    $db->themxoasua("UPDATE doanhthu SET tongdoanhthu = '$tong_tien' WHERE madt = '$madt'");
                }
                $ds = $db->getDatatbl2("select * from doanhthu WHERE ngaylap BETWEEN '$year:$month:1' AND '$year:$month:31' ORDER BY madt desc");
            }
            else
            {
                $ds = $db->getDatatbl2("select * from doanhthu WHERE ngaylap BETWEEN '$year:$month:1' AND '$year:$month:31' ORDER BY madt desc");
            }
            require_once('View/thong_ke/doanh_thu.php');
            break;
        }
        case 'chitiethd':
        {
            if(isset($_GET['mahoadon']))
            {
                $mahoadon = $_GET['mahoadon'];
                $data = $db->getDatatbl2("SELECT * FROM chitiet_hd INNER JOIN mathang ON chitiet_hd.mahanghoa = mathang.barcode WHERE mahoadon = '$mahoadon'");
            }
            require_once('View/thong_ke/chi_tiet_hd.php');
            break;
        }
        default:
        {
            require_once('View/thong_ke/list.php');
            break;
        }
    }
?>