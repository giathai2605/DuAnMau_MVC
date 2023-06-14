<?php 
require_once "/xampp/htdocs/Assignment_DuAnMau/dao/comon.php";
$loai_select_list=executeQuery("select * from loai ", true);
?>
<!DOCTYPE html>
<html>
    <body>
        <h3>QUẢN LÝ HÀNG HÓA</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
            $hh_ma_loai=trim($ma_loai);
        ?>
        <form action="index.php" method="post" enctype="multipart/form-data" class="form-control">
            <div>
                <div>
                    <label>MÃ HÀNG HÓA</label>
                    <input name="ma_hh" readonly value="<?=$ma_hh?>" class="form-control">
                </div>
                <div>
                    <label>TÊN HÀNG HÓA</label>
                    <input name="ten_hh" value="<?=$ten_hh?>" class="form-control">
                   
                </div>
                <div>
                    <label>ĐƠN GIÁ</label>
                    <input name="don_gia" value="<?=$don_gia?>" class="form-control">
                </div>
            </div>
            <div>
                <div>
                    <label>GIẢM GIÁ</label>
                    <input name="giam_gia" value="<?=$giam_gia?>" class="form-control">
                </div>
                <div>
                    <label>HÌNH ẢNH</label>
                    <input name="up_hinh" type="file" class="form-control">
                    <input name="hinh" type="hidden" value="<?=$hinh?>" class="form-control"> (<?=$hinh?>)
                </div>
                <div>
                    <label>LOẠI HÀNG</label>
                    
                    <select name="ma_loai" class="form-control">
                        <?php foreach ($loai_select_list as $loai) :  ?>
                         
                           <option value="<?= trim($loai['ma_loai'])?>" <?php if(trim($loai['ma_loai'])==$hh_ma_loai) echo "selected"; ?>><?= $loai['ten_loai']?></option>
                            <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div>
                <div>
                    <label>HÀNG ĐẶC BIỆT?</label>
                    <div>
                        <label><input name="dac_biet" value="1" type="radio" <?=$dac_biet==1?'':'checked'?> class="form-check-input">Đặc biệt</label>
                        <label><input name="dac_biet" value="0" type="radio"<?=$dac_biet==0?'checked':''?> class="form-check-input">Bình thường</label>
                    </div>
                </div>
                <div>
                    <label>NGÀY NHẬP</label>
                    <input name="ngay_nhap" value="<?=$ngay_nhap?>" class="form-control">
                </div>
                <div>
                    <label>SỐ LƯỢC XEM</label>
                    <input name="so_luot_xem" value="<?=trim($so_luot_xem)?>" readonly   class="form-control">
                </div>
            </div>
            <div>
                <div>
                    <label>MÔ TẢ</label>
                    <textarea name="mo_ta" rows="4" class="form-control"><?=$mo_ta?></textarea>
                </div>
                <div style="margin-top:15px; ">
                    <button name="btn_update" class="btn btn-outline-primary">Cập nhật</button>
                    <button type="reset" class="btn btn-outline-primary">Nhập lại</button>
                  <button class="btn btn-outline-info">  <a href="index.php" style="text-decoration:none; color:black;">Thêm mới</a></button>
                    <button class="btn btn-outline-secondary"><a href="index.php?btn_list" style="text-decoration:none; color:black;">Danh sách</a></button>
                </div>
            </div>
        </form>
    </body>
</html>
