
<!DOCTYPE html>
<html>
    <body>
        <h3>QUẢN LÝ KHÁCH HÀNG</h3>
        <?php
        require_once "../../site/global.php";
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php?btn_insert" method="post" enctype="multipart/form-data" class="form-control">
            <div>
                <div>
                    <label>MÃ KHÁCH HÀNG</label>
                    <input name="ma_kh" class="form-control">
                </div>
                <div>
                    <label>HỌ VÀ TÊN</label>
                    <input name="ho_ten" class="form-control">
                </div>
            </div>
            <div>
                <div>
                    <label>MẬT KHẨU</label>
                    <input name="mat_khau" type="password" class="form-control">
                </div>
                <div>
                    <label>XÁC NHẬN MẬT KHẨU</label>
                    <input name="mat_khau2" type="password" class="form-control">
                </div>
            </div>
            <div>
                <div>
                    <label>ĐỊA CHỈ EMAIL</label>
                    <input name="email" class="form-control">
                </div>
                <div>
                    <label>HÌNH ẢNH</label>
                    <input name="hinh" type="file" class="form-control">
                </div>
            </div>
            <div>
                <div>
                    <label>KÍCH HOẠT?</label>
                    <div>
                        <label><input name="kich_hoat" value="0" type="radio" class="form-check-input">Chưa kích hoạt</label>
                        <label><input name="kich_hoat" value="1" type="radio" checked class="form-check-input">Kích hoạt</label>
                    </div>
                </div>
                <div>
                    <label>VAI TRÒ</label>
                    <div>
                        <label><input name="vai_tro" value="0" type="radio" class="form-check-input">Khách hàng</label>
                        <label><input name="vai_tro" value="1" type="radio" class="form-check-input" checked>Nhân viên</label>
                    </div>
                </div>
            </div>
            <div>
                <div style="margin-top: 15px;">
                    <button name="btn_insert" class="btn btn-primary">Thêm mới</button>
                    <button type="reset" class="btn btn-success">Nhập lại</button>
                    <button class="btn btn-info"><a href="index.php?btn_list" style="text-decoration:none; color:aliceblue;">Danh sách</a></button>
                </div>
            </div>
        </form>
    </body>
</html>
