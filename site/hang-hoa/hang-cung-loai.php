<!DOCTYPE html>
<html>
    <body>
        <div class="panel panel-default">
            <div class="panel-heading">HÀNG CÙNG LOẠI</div>
            <div class="panel-body">
                <ul>
                    <?php
                    $hh_cung_loai = hang_hoa_select_by_loai($ma_loai);
                    foreach ($hh_cung_loai as $hh) {
                        echo "<li><a href='chi-tiet.php?ma_hh=$hh[0]'>$hh[1]</a></li>";
                    }
                    ?>
                </ul>                
            </div>
        </div>
    </body>
</html>
