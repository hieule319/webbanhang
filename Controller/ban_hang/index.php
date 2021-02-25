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
            $tbl ="nhanvien";
            $data = $db->getALLdata($tbl);
        }
        require_once('View/ban_hang/lap_hoa_don.php');
        break;
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