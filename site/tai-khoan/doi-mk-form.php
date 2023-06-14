
       
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="doi-mk.php" method="post" class="form-control">
        <h3>ĐỔI MẬT KHẨU</h3>
            <div>
                <label>Tên đăng nhập</label>
                <input name="ma_kh" class="form-control">
            </div>
            <div>
                <label>Mật khẩu cũ</label>
                <input name="mat_khau" type="password" class="form-control">
            </div>
            <div>
                <label>Mật khẩu mới</label>
                <input name="mat_khau2" type="password" class="form-control">
            </div>
            <div>
                <label>Xác nhận mật khẩu mới</label>
                <input name="mat_khau3" type="password" class="form-control">
            </div>
            <div style="text-align:centet; margin-top:15px;">
                <button name="btn_change" class="btn btn-outline-primary">Đổi mật khẩu</button>
            </div>
        </form>
 
