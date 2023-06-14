<!DOCTYPE html>
<html>
    <body>
        <div class="product">
        <?php
            foreach ($items as $item) {
                extract($item);
        ?>
            <div class="detail-product">
          
                    <a href="chi-tiet.php?ma_hh=<?=$ma_hh?>">
                        <img src="<?=$CONTENT_URL?>/images/products/<?=$hinh?>" width="235px" height="235px">  
                        <h3>$<?=number_format($don_gia, 2)?></h3>
                        <h2><?=$ten_hh?></h2>
                    </a>

            </div>
        <?php
            }
        ?>
        </div>
    </body>
</html>
