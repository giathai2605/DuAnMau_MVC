<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>QUẢN LÝ LOẠI HÀNG</h3>
        <?php
        require_once "../../site/global.php";
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post" class="form-control">
            <div>
                <label>Mã loại</label>
                <input name="ma_loai" value="auto number" readonly class="form-control">
            </div>
            
            <div>
                <label>Tên loại</label>
                <input name="ten_loai" class="form-control">
            </div>
            <div style="margin-top:15px; text-align:center;">
                <button name="btn_insert" class="btn btn-outline-primary">Thêm mới</button>
                <button type="reset" class="btn btn-outline-success">Nhập lại</button>
                <button class="btn btn-outline-secondary"> <a href="index.php?btn_list" style="text-decoration:none; color:black;">Danh sách</a></button>
            </div>
        </form>
</body>
</html>
