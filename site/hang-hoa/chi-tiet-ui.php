<!DOCTYPE html>
<html>
    <body>
        <div class="thumbnail">
            <img src='<?= $CONTENT_URL ?>/images/products/<?= $hinh ?>' width="200px" height="200px" >
            <div class="caption">
                <p>
                    <ul>
                        <li>MÃ HH: <?=$ma_hh?></li>
                        <li>TÊN HH: <?=$ten_hh?></li>
                        <li>ĐƠN GIÁ: <?=number_format($don_gia, 2)?></li>
                        <li>GIẢM GIÁ: <?=$giam_gia * 100 ?>%</li>
                    </ul>
                </p>
                <div class="mo_ta"><?= $mo_ta ?></div>
            </div>
            <?php require_once 'binh-luan.php';?>
            <?php require_once 'hang-cung-loai.php';?>
        </div>
    </body>
</html>
