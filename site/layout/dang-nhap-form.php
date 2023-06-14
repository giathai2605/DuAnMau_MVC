 <div class="aside">
     <div class="tai_khoan">TÀI KHOẢN
         <hr>
     </div>
     <div>
         <form action="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php" method="post" class="main-form needs-validation">
             <div>
                 <div><label for="" form-control-label>Tên đăng nhập</label></div>
                 <input name="ma_kh" value="<?= $ma_kh ?>" type="text" placeholder="Mã khách hàng" class="form-control ">
             </div>
             <div>
                 <div><label for="" form-control-label>Mật khẩu</label></div>
                 <input name="mat_khau" type="password" value="<?= $mat_khau ?>" placeholder="********" class="form-control ">
             </div>
             <div>
                 <div>
                     <label class="form-check-label">
                         <input name="ghi_nho" type="checkbox" checked class="form-check-input">
                         Ghi nhớ tài khoản?
                     </label>
                 </div>
             </div>
             <div>
                 <button name="btn_login" class="btn btn-outline-primary">Đăng nhập</button>
             </div>
             <div>
                 <li><a href="<?= $SITE_URL ?>/tai-khoan/quen-mk.php" style="text-decoration:none;">Quên mật khẩu</a></li>
                 <li><a href="<?= $SITE_URL ?>/tai-khoan/dang-ky.php" style="text-decoration:none;">Đăng ký thành viên</a></li>
             </div>
         </form>
     </div>
 </div>