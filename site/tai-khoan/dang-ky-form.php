<!DOCTYPE html>
<html>
    <body>
     
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="dang-ky.php" method="post" enctype="multipart/form-data" class="form-control" style="width:500px; margin-left:100px;">
        <h3>ĐĂNG KÝ THÀNH VIÊN</h3>
            <div>
                <label>Tên đăng nhập</label>
                <input name="ma_kh"  class="form-control" > 
            </div>
            <div>
                <label>Mật khẩu</label>
                <input name="mat_khau" type="password"  class="form-control">
            </div>
            <div>
                <label>Xác nhận mật khẩu</label>
                <input name="mat_khau2" type="password"  class="form-control">
            </div>
            <div>
                <label>Họ và tên</label>
                <input name="ho_ten"  class="form-control">
            </div>
            <div>
                <label>Địa chỉ email</label>
                <input name="email"  class="form-control" class="form-control">
            </div>
            <div>
                <label>Hình</label>
                <input name="up_hinh" type="file" class="form-control" class="form-control">
            </div>
            <div>
                <button name="btn_register" class="btn btn-outline-primary" style="margin-top:15px;">Đăng ký</button>
            </div>
            <!--Giá trị mặc định-->
            <input name="vai_tro" value="0" type="hidden">
            <input name="kich_hoat" value="0" type="hidden">
        </form>
    </body>
</html>
