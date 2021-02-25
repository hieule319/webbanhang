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
            if(isset($_POST['add_ncc']))
            {
                $tenncc = $_POST['tenncc'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                if($db->themxoasua("INSERT INTO ncc (msncc,tenncc,diachi,sdt) VALUES (null,'$tenncc', '$diachi','$sdt')"))
                {
                    echo '<script language="javascript">alert("Thêm nhà cung cấp thành công");</script>';
                    header('Location:index.php?controller=nha-cung-cap&action=add');
                }
                else
                {
                    echo '<script language="javascript">alert("Thêm nhà cung cấp thất bại");</script>';
                } 
            }
            require_once('View/nha_cung_cap/add_ncc.php');
            break;
        }
        case 'edit':{
            if(isset($_GET['msncc']))
            {
                $table = "ncc";
                $msncc = $_GET['msncc'];
                $data = $db->getDataIDNcc($table,$msncc);

                if(isset($_POST['edit_ncc']))
                {
                    $tenncc = $_POST['tenncc'];
                    $diachi = $_POST['diachi'];
                    $sdt = $_POST['sdt'];
                    if($db->themxoasua("UPDATE $table SET tenncc = '$tenncc', diachi = '$diachi' ,sdt = '$sdt' WHERE msncc = '$msncc'"))
                    {
                       echo '<script language="javascript">alert("Cập nhật nhà cung cấp thành công");</script>';
                       echo '<script language="javascript">window.location="index.php?controller=nha-cung-cap&action=list";</script>'   ;
                    }
                    else
                    {
                        echo '<script language="javascript">alert("Cập nhật nhà cung cấp thất bại");</script>';
                    }
                }
            }
            require_once('View/nha_cung_cap/edit_ncc.php');
            break;
        }
        case 'delete':
        {
            if(isset($_GET['msncc']))
            {
                $msncc = $_GET['msncc'];
                if($db->themxoasua("delete from ncc where msncc= $msncc"))
                {
                    echo '<script language="javascript">alert("Xóa mặt hàng thành công");</script>';
                    echo '<script language="javascript">window.location="index.php?controller=nha-cung-cap&action=list";</script>';
                }
            }
            break;
        }
        case 'list':
        {
            $tbl = "ncc";
            $data = $db->getDatatbl($tbl);
            $datas = $db->getALL($tbl);
            $datas_count = mysqli_num_rows($datas);
            $page = ceil($datas_count/10);
            require_once('View/nha_cung_cap/list_ncc.php');
            break;
        }
        default:
        {
            require_once('View/thanhvien/list.php');
            break;
        }
    }
?>