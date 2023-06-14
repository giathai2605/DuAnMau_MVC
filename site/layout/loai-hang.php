 <div>
     <hr>
     <div style="text-align:center ; margin-bottom:5px; "><label for="" class="form-control-label">DANH MỤC</label></div>
     <div>
         <ul>
             <?php
                require_once '/xampp/htdocs/Assignment_DuAnMau/dao/loai.php';
                $loai_array = loai_select_all();
                foreach ($loai_array as $loai) {
                    $href = "$SITE_URL/hang-hoa/liet-ke.php?ma_loai=$loai[0]";
                    echo "<li><a href='$href' class='danhmuc' style='text-decoration:none;'>$loai[1]</a></li>";
                }
                ?>
         </ul>
     </div>
     <div>
         <form action="<?= $SITE_URL ?>/hang-hoa/liet-ke.php">
             <input name="keywords" placeholder="Từ khóa tìm kiếm" class="form-control">
         </form>
     </div>
 </div>