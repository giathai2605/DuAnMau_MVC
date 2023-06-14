  <?php
    if (strlen($MESSAGE)) {
        echo "<h5>$MESSAGE</h5>";
    }
    ?>
  <div style="width:300px;height:auto; margin-left:225px; margin-top:15px;">
      <form action="quen-mk.php" method="post" class="form-control" style="width:300px;">
          <h3 style="text-align: center;">QUÊN MẬT KHẨU</h3>
          <div>
              <label>Tên đăng nhập</label>
              <input name="ma_kh" type="text" class="form-control">
          </div>
          <div>
              <label>Địa chỉ email</label>
              <input name="email" type="text" class="form-control">
          </div>
          <div>
              <button name="btn_forgot" type="submit" class="btn btn-outline-primary">Tìm lại mật khẩu</button>
          </div>
      </form>
  </div>