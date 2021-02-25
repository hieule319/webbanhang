<?php
    if(isset($_GET['action']))
    {
        $action=$_GET['action'];
    }
    else{
        $action = '';
    }
    switch ($action) {
        case 'add':{
            $tbl = "ncc";
            $data = $db->getALLdata($tbl);
            if(isset($_POST['add_mathang']))
            {
                $tenmh = $_POST['tenmh'];
                $msncc = $_POST['msncc'];
                $dongia = $_POST['dongia'];
                $donvitinh = $_POST['donvitinh'];
                $barcode = $_POST['barcode'];
                if($db->themxoasua("INSERT INTO mathang (mahanghoa,tenmh,dongia,dvt,barcode,msncc) VALUES (null,'$tenmh', '$dongia','$donvitinh','$barcode','$msncc')"))
                {
                    echo '<script language="javascript">alert("Thêm mặt hàng thành công");</script>';
                }
                else
                {
                    echo '<script language="javascript">alert("Thêm mặt hàng thất bại");</script>';
                }
            }
            require_once('View/mat_hang/add_mathang.php');
            break;
        }
        case 'edit':{
            if(isset($_GET['mahanghoa']))
            {
                $tbl = "ncc";
                $data = $db->getALLdata($tbl);

                $table = "mathang";
                $mahanghoa = $_GET['mahanghoa'];
                $datas = $db->getDataIDMathang($table,$mahanghoa);

                if(isset($_POST['edit_mathang']))
                {
                    $tenmh = $_POST['tenmh'];
                    $dongia = $_POST['dongia'];
                    $msncc = $_POST['msncc'];
                    $donvitinh = $_POST['donvitinh'];
                    $barcode = $_POST['barcode'];
                    if($db->themxoasua("UPDATE $table SET tenmh = '$tenmh', dongia = '$dongia' ,dvt = '$donvitinh',barcode = '$barcode',msncc = '$msncc' WHERE mahanghoa = '$mahanghoa'"))
                    {
                        echo '<script language="javascript">alert("Cập nhật mặt hàng thành công");</script>';
                        echo '<script language="javascript">window.location="index.php?controller=mat-hang&action=list";</script>';
                    }
                    else
                    {
                        echo '<script language="javascript">alert("Cập nhật mặt hàng thất bại");</script>';
                    }
                }
            }
            require_once('View/mat_hang/edit_mathang.php');
            break;
        }
        case 'delete':
        {
            if(isset($_GET['mahanghoa']))
            {
                $mahanghoa = $_GET['mahanghoa'];
                if($db->themxoasua("delete from mathang where mahanghoa= $mahanghoa"))
                {
                    echo '<script language="javascript">alert("Xóa mặt hàng thành công");</script>';
                    echo '<script language="javascript">window.location="index.php?controller=mat-hang&action=list";</script>';
                }
            }
            break;
        }
        case 'list':
        {
            $tbl = "mathang";
            $data = $db->getDatatbl($tbl);
            $datas = $db->getALL($tbl);
            $datas_count = mysqli_num_rows($datas);
            $page = ceil($datas_count/10);
            require_once('View/mat_hang/list_mathang.php');
            break;
        }
        default:
        {
            require_once('View/thanhvien/list.php');
            break;
        }
    }
?>