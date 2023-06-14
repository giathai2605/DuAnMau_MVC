<h3>QUẢN LÝ LOẠI HÀNG</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 >$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post" class="form-control">
            <div>
                <label>Mã loại</label>
                <input name="ma_loai" value="<?=$ma_loai?>" readonly class="form-control">
            </div>
            <div>
                <label>Tên loại</label>
                <input name="ten_loai" value="<?=$ten_loai?>" class="form-control" >
            </div>
            <div style="margin-top:15px; text-align:center;">
                <button name="btn_update" class="btn btn-outline-primary">Cập nhật</button>
                <button type="reset" class="btn btn-outline-primary" >Nhập lại</button>
                <button class="btn btn-outline-info"><a href="index.php" style="text-decoration:none; color:black;">Thêm mới</a></button>
                <button class="btn btn-outline-secondary"><a href="index.php?btn_list" style="text-decoration:none; color:black;" >Danh sách</a></button>
            </div>
        </form>

