<?php
                    foreach ($items as $item) {
                ?>
                    <div class="detail-product">
                        <a href="../hang-hoa/chi-tiet.php?ma_hh=<?=$item['ma_hh']?>">
                            <img src="<?=$CONTENT_URL?>/images/products/<?=$item['hinh']?>" width="235px" height="235px"/>
                            <h3><?= $item['don_gia'] ?>$</h3>
                            <h2><?= $item['ten_hh'] ?></h2>
                        </a>
                    </div>                
                <?php
                    }
                ?>
