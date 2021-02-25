<?php
    if(isset($_GET['action']))
    {
        $action=$_GET['action'];
    }
    else{
        $action = '';
    }
    switch ($action) {
        case '':
        {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $d = date("d-m-Y");
            $year = date("Y");
            $month = date("m");
            $kho_hang = $db->getDatatbl2("SELECT * FROM khohang INNER JOIN mathang ON khohang.mahanghoa = mathang.mahanghoa WHERE khohang.soluong <=100 ");
            $tong_hd = $db->getDatatbl2("SELECT COUNT(mahoadon) as 'Tong HD' FROM hoadon WHERE ngaylap BETWEEN '$year:$month:1' AND '$year:$month:31'");
            $dt = $db->getDatatbl2("SELECT SUM(tonggia) as 'Tong DT' FROM hoadon WHERE ngaylap BETWEEN '$year:$month:1' AND '$year:$month:31'");
            //Doanh thu ca nam
            for ($i=1; $i <=12 ; $i++) { 
                 $ds[$i] = $db->getDatatbl2("SELECT SUM(tonggia) as 'Tong DT' FROM hoadon WHERE ngaylap BETWEEN '$year:$i:1' AND '$year:$i:31'");
            }
            foreach ($ds[1] as $r1) {
                $dt1 = $r1['Tong DT'];
            }
            foreach ($ds[2] as $r2) {
                $dt2 = $r2['Tong DT'];
            }
            foreach ($ds[3] as $r3) {
                $dt3 = $r3['Tong DT'];
            }
            foreach ($ds[4] as $r4) {
                $dt4 = $r4['Tong DT'];
            }
            foreach ($ds[5] as $r5) {
                $dt5 = $r5['Tong DT'];
            }
            foreach ($ds[6] as $r6) {
                $dt6 = $r6['Tong DT'];
            }
            foreach ($ds[7] as $r7) {
                $dt7 = $r7['Tong DT'];
            }
            foreach ($ds[8] as $r8) {
                $dt8 = $r8['Tong DT'];
            }
            foreach ($ds[9] as $r9) {
                $dt9 = $r9['Tong DT'];
            }
            foreach ($ds[10] as $r10) {
                $dt10 = $r10['Tong DT'];
            }
            foreach ($ds[11] as $r11) {
                $dt11 = $r11['Tong DT'];
            }
            foreach ($ds[12] as $r12) {
                $dt12 = $r12['Tong DT'];
            }
            require_once('View/overview/overview.php');
            
            break;   
        }
        case 'edit':{
            require_once('View/nhan_vien/edit_user.php');
            break;
        }
        case 'delete':
        {
            break;
        }
        case 'list':
        {
            require_once('View/nhan_vien/list.php');
            break;
        }
        default:
        {
            require_once('View/nhan_vien/list.php');
            break;
        }
    }
?>