<!DOCTYPE html>
<html>
    <body>
        <h3>QUẢN LÝ HÀNG HÓA</h3>
        <?php
        require_once "../../site/global.php";
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post" enctype="multipart/form-data" class="form-control">
            <div>
                <div>
                    <label>MÃ HÀNG HÓA</label>
                    <input name="ma_hh" readonly value="auto number" class="form-control">
                </div>
                <div>
                    <label>TÊN HÀNG HÓA</label>
                    <input name="ten_hh" class="form-control">
                </div>
                <div>
                    <label>ĐƠN GIÁ</label>
                    <input name="don_gia" class="form-control">
                </div>
            </div>
            <div>
                <div>
                    <label>GIẢM GIÁ</label>
                    <input name="giam_gia" class="form-control">
                </div>
                <div>
                    <label>HÌNH ẢNH</label>
                    <input name="hinh" type="file" class="form-control">
                </div>
                <div>
                    <label>LOẠI HÀNG</label>
                    <select name="ma_loai" class="form-control">
                        <?php
                            foreach ($loai_select_list as $loai) {
                                echo '<option value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div>
                <div>
                    <label>HÀNG ĐẶC BIỆT?</label>
                    <div>
                        <label><input name="dac_biet" value="0" type="radio" class="form-check-input">Đặc biệt</label>
                        <label><input name="dac_biet" value="1" type="radio" checked class="form-check-input">Bình thường</label>
                    </div>
                </div>
                <div>
                    <label>NGÀY NHẬP</label>
                    <input name="ngay_nhap" class="form-control">
                </div>
                <div>
                    <label>SỐ LƯỢC XEM</label>
                    <input name="so_luot_xem" readonly value="0" class="form-control">
                </div>
            </div>
            <div>
                <div>
                    <label>MÔ TẢ</label>
                    <textarea name="mo_ta" rows="4" class="form-control"></textarea>
                </div>
                <div style="margin-top: 15px;text-align:center;">
                    <button name="btn_insert" class="btn btn-outline-primary">Thêm mới</button>
                    <button type="reset" class="btn btn-outline-success">Nhập lại</button>
                    <button class="btn btn-outline-secondary"><a href="index.php?btn_list" style="text-decoration:none;color:black;">Danh sách</a></button>
                </div>
            </div>
        </form>
    </body>
</html>
