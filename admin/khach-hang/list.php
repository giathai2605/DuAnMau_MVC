<?php require_once "/xampp/htdocs/Assignment_DuAnMau/site/global.php"; 

?>
<!DOCTYPE html>
<html>
    <head>
        <script src="../../content/js/list.js"></script>
    </head>
    <body>
        <h3 style="margin-top: 10px; margin-bottom:10px; ">QUẢN LÝ KHÁCH HÀNG</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post" class="form-control">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>MÃ KH</th>
                        <th>HỌ VÀ TÊN</th>
                        <th>ĐỊA CHỈ EMAIL</th>
                        <th>HÌNH ẢNH</th>
                        <th>KÍCH HOẠT</th>
                        <th>VAI TRÒ</th>
                        <th colspan="2" style="text-align: center ;"><a href="index.php" style="text-decoration: none; color:red;">Nhập thêm</a></th>
       
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                    <tr>
                        <th><input type="checkbox" name="ma_kh[]" value="<?=$ma_kh?>"></th>
                        <td><?=$ma_kh?></td>
                        <td><?=$ho_ten?></td>
                        <td><?=$email?></td>
                        <td><?=$hinh?></td>
                        <td><?=$kich_hoat?'Đã kích hoạt':'Chưa kích hoạt'?></td>
                        <td><?=$vai_tro?'Nhân viên':'Khách hàng'?></td>
                        <td style="text-align:center;">
                            <a href="index.php?btn_edit&ma_kh=<?=$ma_kh?>" style="text-decoration:none;">Sửa</a>
                          
                        </td>
                        <td style="text-align:center;">
                        <a href="index.php?btn_delete&ma_kh=<?=$ma_kh?>" style="text-decoration:none;">Xóa</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot style="text-align: center;">
                    <tr>
                        <td colspan="7">
                            <button id="check-all" type="button" class="btn btn-primary">Chọn tất cả</button>
                            <button id="clear-all" type="button" class="btn btn-success">Bỏ chọn tất cả</button>
                            <button id="btn-delete" name="btn_delete" class="btn btn-info">Xóa các mục chọn</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </body>
</html>
