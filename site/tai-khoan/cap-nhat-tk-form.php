<?php
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<form action="cap-nhat-tk.php" method="post" enctype="multipart/form-data" class="form-control cap-nhat-tk">
    <h3 style="display:inline-block;">CẬP NHẬT TÀI KHOẢN</h3>

    <div>
        <div>
            <img src="<?= $CONTENT_URL ?>/images/users/<?= $hinh ?>" style="width:200px;height:200px;">
        </div>
        <div>
            <div>
                <label>Tên đăng nhập</label>
                <input name="ma_kh" value="<?= $ma_kh ?>" readonly class="form-control">
            </div>
            <div>
                <label>Họ và tên</label>
                <input name="ho_ten" value="<?= $ho_ten ?>" class="form-control">
            </div>
            <div>
                <label>Địa chỉ email</label>
                <input name="email" value="<?= $email ?>" class="form-control">
            </div>
            <div>
                <label>Hình</label>
                <input name="up_hinh" type="file" class="form-control">
            </div>
            <div>
                <button name="btn_update" class="btn btn-outline-success">Cập nhật</button>
            </div>
            <!--Giá trị mặc định-->
            <input name="vai_tro" value="<?= $vai_tro ?>" type="hidden">
            <input name="kich_hoat" value="<?= $kich_hoat ?>" type="hidden">
            <input name="mat_khau" value="<?= $mat_khau ?>" type="hidden">
            <input name="hinh" value="<?= $hinh ?>" type="hidden">
        </div>
    </div>
</form>