<?php
require_once '../../site/global.php';
require_once '../../dao/khach-hang.php';

extract($_REQUEST);

if(exist_param("btn_register")){
    if($mat_khau != $mat_khau2){
        $MESSAGE = "Xác nhận mật khẩu không đúng!";
    }
    else if(khach_hang_exist($ma_kh)){
        $MESSAGE = "Mã này đã được sử dụng!";
    }
    else{
        $up_hinh = save_file("up_hinh", "$IMAGE_DIR/users/");
        $hinh = strlen("$up_hinh") > 0 ? $up_hinh : 'user.png';
        try {   
            // var_dump($ma_kh);die;
            khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
            $MESSAGE = "Đăng ký thành viên thành công!";
            // header("location: /Assignment_DuAnMau/site/trang-chinh/?trang-chu");
            // die;
        } 
        catch (Exception $exc) {
            $MESSAGE = "Đăng ký thành viên thất bại!";
        }
    }
}
else{
    global $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $mat_khau2;
}

$VIEW_NAME="tai-khoan/dang-ky-form.php";
require '../layout.php';
