<?php
require_once "/xampp/htdocs/Assignment_DuAnMau/site/global.php";
?>
<?php require_once "/xampp/htdocs/Assignment_DuAnMau/site/layout/style.php"; ?>
<?php require_once "/xampp/htdocs/Assignment_DuAnMau/site/layout/header.php"; ?>
<?php require_once '/xampp/htdocs/Assignment_DuAnMau/site/layout/menu.php'; ?>

<?php require_once "/xampp/htdocs/Assignment_DuAnMau/site/layout/banner.php"; ?>
<?php if ($VIEW_NAME == "index.php") {
    require_once "./trang-chinh/index.php";
} else {
    require_once $VIEW_NAME;
} ?>
<!--LOGIN-->
<?php require_once '/xampp/htdocs/Assignment_DuAnMau/site/layout/dang-nhap.php'; ?>
<!--CATALOG-->
<?php require_once '/xampp/htdocs/Assignment_DuAnMau/site/layout/loai-hang.php'; ?>
<!--FAVORITE-->
<?php require_once '/xampp/htdocs/Assignment_DuAnMau/site/layout/top10.php'; ?>
<?php require_once '/xampp/htdocs/Assignment_DuAnMau/site/layout/footer.php'; ?>