<!DOCTYPE html>
<html>
    <body>
        <div>
            <div style="text-align: center; margin-top:15px;">TOP 10 YÊU THÍCH</div>
            <div>
                <?php
                    require_once '/xampp/htdocs/Assignment_DuAnMau/dao/hang-hoa.php';
                    $hh_array = hang_hoa_select_top10();
                    foreach ($hh_array as $hh) {
                        $href = "$SITE_URL/hang-hoa/chi-tiet.php?ma_hh=$hh[0]";
                        echo "
                            <div style=' margin-left:20px; margin-top:10px;'>
                                <img src='$CONTENT_URL/images/products/$hh[4]' width='30px' height='30px' />
                                <a href='$href' style='text-decoration:none;'>$hh[1]</a>
                            </div>
                        ";
                    }
                ?>
            </div>
        </div>
    </body>
</html>
