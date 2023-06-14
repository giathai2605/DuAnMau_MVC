<div style="display:flex; width:700px;">
    
<div>
<h3>ĐĂNG NHẬP</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
</div>
        <form action="dang-nhap.php" method="post" class="form-control">
            <div>
                <label>Tên đăng nhập</label>
                <input name="ma_kh" value="<?=$ma_kh?>" class="form-control">
            </div>
            <div>
                <label>Mật khẩu</label>
                <input name="mat_khau" type="password" value="<?=$mat_khau?>" class="form-control">
            </div>
            <div>
                <label>
                    <input name="ghi_nho" type="checkbox" checked class="form-check-input">
                    Ghi nhớ tài khoản?
                </label>
            </div>
            <div>
                <button name="btn_login" class="btn btn-outline-primary">Đăng nhập</button>
            </div>
        </form>
  

</div>