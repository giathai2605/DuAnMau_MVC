<!DOCTYPE html>
<html>
    <body>
        <div>
            <div>TÀI KHOẢN</div>
            <div>
                <div>
                 
                    <img src='/Assignment_DuAnMau/content/images/users/<?=$_SESSION['user']['hinh']?>' width="80px" height="80px" style="border-radius: 80px;display:block; margin: 0 auto;">
                    <br>
                    <h4 style="text-align:center;"><?= $_SESSION['user']['ho_ten']?></h4>
                </div>
              <ul style="margin-left:5px;">
              <li><a href="<?=$SITE_URL?>/tai-khoan/dang-nhap.php?btn_logoff" style="text-decoration:none;">Đăng xuất</a></li>
                <li><a href="<?=$SITE_URL?>/tai-khoan/doi-mk.php" style="text-decoration:none;">Đổi mật khẩu</a></li>
                <li><a href="<?=$SITE_URL?>/tai-khoan/cap-nhat-tk.php" style="text-decoration:none;">Cập nhật tài khoản</a></li>
                <?php
                    if($_SESSION['user']['vai_tro'] == TRUE){
                        echo "<li><a href='$ADMIN_URL/trang-chinh' style='text-decoration:none;'>Quản trị website</a></li>";
                    }
                ?>
                 </ul>
            </div>
        </div>        
    </body>
</html>
