<!DOCTYPE html>
<html>
    <head>
        <script src="/Assignment_DuAnMau/content/js/list.js"></script>
        
    </head>
    <body>
        <h3>QUẢN LÝ LOẠI HÀNG</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 >$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post" class="form-control">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th colspan="2" style="text-align: center;"> <a href="index.php" style="color:red; text-decoration:none;">Nhập thêm</a></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                    <tr>
                        <th><input type="checkbox" name="ma_loai[]" value="<?=$ma_loai?>"></th>
                        <td><?=$ma_loai?></td>
                        <td><?=$ten_loai?></td>
                        <td style="text-align: center;">
                            <a href="index.php?btn_edit&ma_loai=<?=$ma_loai?>" style="text-decoration:none; " >Sửa</a>
                           
                        </td>
                        <td style="text-align: center;">
                        <a href="index.php?btn_delete&ma_loai=<?=$ma_loai?>"style=" text-decoration:none;" >Xóa</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr style="text-align: center;">
                        <td colspan="4">
                            <button id="check-all" type="button" class="btn btn-outline-primary">Chọn tất cả</button>
                            <button id="clear-all" type="button" class="btn btn-outline-success">Bỏ chọn tất cả</button>
                            <button id="btn-delete" name="btn_delete" class="btn btn-outline-secondary">Xóa các mục chọn</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
        
    </body>
</html>
