<!DOCTYPE html>
<html>

<body>
    <h3>QUẢN LÝ KHÁCH HÀNG</h3>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5>$MESSAGE</h5>";
    }
    ?>
    <form action="index.php" method="post" enctype="multipart/form-data" class="form-control">
        <div>
            <div>
                <label>MÃ KHÁCH HÀNG</label>
                <input name="ma_kh" value="<?= $ma_kh ?>" readonly class="form-control">
            </div>
            <div>
                <label>HỌ VÀ TÊN</label>
                <input name="ho_ten" value="<?= $ho_ten ?>" class="form-control">
            </div>
        </div>
        <div>
            <div>
                <label>MẬT KHẨU</label>
                <input name="mat_khau" value="<?= $mat_khau ?>" type="password" class="form-control">
            </div>
            <div>
                <label>XÁC NHẬN MẬT KHẨU</label>
                <input name="mat_khau2" value="<?= $mat_khau ?>" type="password" class="form-control">
            </div>
        </div>
        <div>
            <div>
                <label>ĐỊA CHỈ EMAIL</label>
                <input name="email" value="<?= $email ?>" class="form-control">
            </div>
            <div>
                <label>HÌNH ẢNH</label>
                <input name="hinh" type="hidden" value="<?= $hinh ?>" class="form-control">
                <input name="up_hinh" type="file" class="form-control"> (<?= $hinh ?>)
            </div>
        </div>
        <div>
            <div>
                <label>KÍCH HOẠT?</label>
                <div>
                    <label>
                        <input <?= !$kich_hoat ? 'checked' : '' ?> name="kich_hoat" value="0" type="radio" class="form-check-input">
                        Chưa kích hoạt
                    </label>
                    <label>
                        <input <?= $kich_hoat ? 'checked' : '' ?> name="kich_hoat" value="1" type="radio" class="form-check-input">
                        Kích hoạt
                    </label>
                </div>
            </div>
            <div>
                <label >VAI TRÒ</label>
                <div>
                    <label>
                        <input <?= $vai_tro==0 ? 'checked' : '' ?> name="vai_tro" value="0" type="radio" class="form-check-input">
                        Khách hàng
                    </label>
                    <label >
                        <input <?= $vai_tro==1 ? 'checked' : '' ?> name="vai_tro" value="1" type="radio" class="form-check-input">
                        Nhân viên
                    </label>
                </div>
            </div>
        </div>
        <div>
            <div style="margin-top:10px;">
                <button name="btn_update" class="btn btn-primary">Cập nhật</button>
                <button type="reset" class="btn btn-success">Nhập lại</button>
                <button class="btn btn-info"><a href="index.php" style="text-decoration:none; color:aliceblue;">Thêm mới</a></button>
            <button class="btn btn-secondary"><a href="index.php?btn_list" style="text-decoration:none; color:aliceblue;">Danh sách</a></button>
            </div>
        </div>
    </form>
</body>

</html>