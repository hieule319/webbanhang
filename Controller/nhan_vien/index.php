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
            $tbl = "taikhoan";
            $data = $db->getALLdata($tbl);
            if(isset($_POST['add_nhan_vien']))
            {
                $hoten = $_POST['hoten'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                $ngaysinh = $_POST['ngaysinh'];
                $gioitinh = $_POST['gioitinh'];
                $id = $_POST['id'];
                $name = $_FILES['img']['name'];
                $type = $_FILES['img']['type'];
                $temp = $_FILES['img']['tmp_name'];
                $size = $_FILES['img']['size'];
                if($db->myUpload($name,$size,$type,$temp,"images"))
                {
                    if($db->themxoasua("INSERT INTO nhanvien (manhanvien,hoten,diachi,ngaysinh,gioitinh,sdt,img,id) VALUES (null,'$hoten','$diachi','$ngaysinh','$gioitinh','$sdt','$name','$id')"))
                    {
                        echo '<script language="javascript">alert("Thêm nhân viên thành công");</script>';
                    }  
                    else
                    {
                        echo '<script language="javascript">alert("Thêm nhân viên thất bại");</script>';
                    } 
                }
            }
            require_once('View/nhan_vien/add_nhan_vien.php');
            break;   
        }
        case 'adduser':{
            $tbl = "taikhoan";
            $data = $db->getALLdata($tbl);
            foreach ($datas as $row) {
                $user = $row['username'];
            }
            if(isset($_POST['add_user']))
            {
                $username = $_POST['username'];
                $password = md5($_POST['password']);
                $phanquyen = $_POST['phanquyen'];
                if($username == $user)
                {
                    echo '<script language="javascript">alert("Tên tài khoản bị trùng");</script>';
                }
                else
                {
                    if($db->themxoasua("INSERT INTO taikhoan (id,username,password,phanquyen) VALUES (null,'$username','$password','$phanquyen')"))
                    {
                        echo '<script language="javascript">alert("Tạo tài khoản thành công");</script>';
                    }
                    else
                    {
                        echo '<script language="javascript">alert("Tạo tài khoản thất bại");</script>';
                    }
                }
            }
            require_once('View/nhan_vien/add_user.php');
            break;
        }
        case 'edit':
        {
            if(isset($_GET['manhanvien']))
            {
                $manhanvien = $_GET['manhanvien'];
                $data = $db->getData("select * from nhanvien INNER JOIN taikhoan ON nhanvien.id = taikhoan.id where manhanvien = '$manhanvien'");
                if(isset($_POST['edit_nhan_vien']))
                {
                    $hoten = $_POST['hoten'];
                    $diachi = $_POST['diachi'];
                    $sdt = $_POST['sdt'];
                    $ngaysinh = $_POST['ngaysinh'];
                    $gioitinh = $_POST['gioitinh'];
                    $name = $_FILES['img']['name'];
                    $type = $_FILES['img']['type'];
                    $temp = $_FILES['img']['tmp_name'];
                    $size = $_FILES['img']['size'];
                    if($name == '')
                    {
                        if($db->themxoasua("UPDATE nhanvien SET hoten = '$hoten',diachi = '$diachi',ngaysinh = '$ngaysinh',gioitinh = '$gioitinh',sdt = '$sdt' WHERE manhanvien = '$manhanvien'"))
                        {
                            echo '<script language="javascript">alert("Cập nhật thành công");</script>';
                            echo '<script language="javascript">window.location="nhan-vien/list.html";</script>';
                        }  
                        else
                        {
                            echo '<script language="javascript">alert("Cập nhật thất bại");</script>';
                        } 
                    }
                    else
                    {
                        if($db->myUpload($name,$size,$type,$temp,"images"))
                        {
                            if($db->themxoasua("UPDATE nhanvien SET hoten = '$hoten',diachi = '$diachi',ngaysinh = '$ngaysinh',gioitinh = '$gioitinh',sdt = '$sdt',img = '$name'  WHERE manhanvien = '$manhanvien'"))
                            {
                                echo '<script language="javascript">alert("Cập nhật thành công");</script>';
                                echo '<script language="javascript">window.location="nhan-vien/list.html";</script>';
                            }  
                            else
                            {
                                echo '<script language="javascript">alert("Cập nhật thất bại");</script>';
                            } 
                        }
                    }
                }
            }
            require_once('View/nhan_vien/edit_nhan_vien.php');
            break;
        }
        case 'list':
        {
            $tbl = "nhanvien";
            $data = $db->getDatatbl($tbl);
            $datas = $db->getALL($tbl);
            $datas_count = mysqli_num_rows($datas);
            $page = ceil($datas_count/10);
            require_once('View/nhan_vien/ds_nhan_vien.php');
            break;
        }
        default:
        {
            require_once('View/nhan_vien/list.php');
            break;
        }
    }
?>