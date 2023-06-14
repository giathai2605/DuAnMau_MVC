<!DOCTYPE html>
<html>
    <head>
 
    </head>
    <body>
        <h3>QUẢN LÝ HÀNG HÓA</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <ul class="list-hh">
            <li><a href="?btn_list&page_no=0">|&lt;</a></li>
            <li><a href="?btn_list&page_no=<?=$_SESSION['page_no']-10?>">&lt;&lt;</a></li>
            <li><a href="?btn_list&page_no=<?=$_SESSION['page_no']+10?>">&gt;&gt;</a></li>
            <li><a href="?btn_list&page_no=<?=$_SESSION['page_count']-10?>">&gt;|</a></li>
        </ul>
        <form action="index.php" method="post" class="form-control">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>MÃ HH</th>
                        <th>TÊN HH</th>
                        <th>ĐƠN GIÁ</th>
                        <th>GIẢM GIÁ</th>
                        <th>LƯỢT XEM</th>
                        <th colspan="2" style=" text-align:center;"><a href="index.php" style="text-decoration: none; color:red;">Nhập thêm</a></th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                    <tr>
                        <th><input type="checkbox" name="ma_hh[]" value="<?=$ma_hh?>" class="checkbox1"></th>
                        <td><?=$ma_hh?></td>
                        <td><?=$ten_hh?></td>
                        <td>$<?=number_format($don_gia, 2)?></td>
                        <td><?=number_format($giam_gia*100)?>%</td>
                        <td><?=$so_luot_xem?></td>
                        <td style="text-align: center;">
                            <a href="index.php?btn_edit&ma_hh=<?=$ma_hh?>" style="text-decoration: none;">Sửa</a>
                            
                        </td>
                        <td style="text-align: center;">
                        <a href="index.php?btn_delete&ma_hh=<?=$ma_hh?>" style="text-decoration: none;">Xóa</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr style="text-align: center;">
                        <td colspan="7">
                            <button id="check-all" type="button" class="btn btn-outline-primary">Chọn tất cả</button>
                            <button id="clear-all" type="button" class="btn btn-outline-success">Bỏ chọn tất cả</button>
                            <button id="btn-delete" name="btn_delete" class="btn btn-outline-secondary">Xóa các mục chọn</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </body>
    <script >
      var ma_hh=document.querySelectorAll('.checkbox1');
        var check= document.getElementById('check-all');
        var uncheck=document.getElementById('clear-all');
         check.addEventListener("click",function (){
           ma_hh.forEach(element => {
            element.checked=true;
           });
         })
         uncheck.addEventListener("click",function (){
           ma_hh.forEach(element => {
            element.checked=false;
           });
         })
         </script>
</html>
