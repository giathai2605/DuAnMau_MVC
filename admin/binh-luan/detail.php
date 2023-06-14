<!DOCTYPE html>
<html>
    <head>
        <script src="<?=$CONTENT_URL?>/js/list.js"></script>
    </head>
    <body>
        <h3>CHI TIẾT BÌNH LUẬN</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php?ma_hh=<?=$ma_hh?>" method="post" class="form-control">
            <h3>HÀNG HÓA: <?=$items[0]['ten_hh']?></h3>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>NỘI DUNG</th>
                        <th>NGÀY BL</th>
                        <th>NGƯỜI BL</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                    <tr>
                        <th><input type="checkbox" name="ma_bl[]" value="<?=$ma_bl?>"></th>
                        <td><?=$noi_dung?></td>
                        <td><?=$ngay_bl?></td>
                        <td><?=$ma_kh?></td>
                        <td>
                            <a href="index.php?btn_delete&ma_bl=<?=$ma_bl?>&ma_hh=<?=$ma_hh?>">Xóa</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6">
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
