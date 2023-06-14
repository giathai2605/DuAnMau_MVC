<?php
require_once '/xampp/htdocs/Assignment_DuAnMau/site/global.php';

if(exist_param("gioi-thieu")){
    $VIEW_NAME = "trang-chinh/gioi-thieu.php";
}
else if(exist_param("lien-he")){
    $VIEW_NAME = "trang-chinh/lien-he.php";
}
else if(exist_param("gop-y")){
    $VIEW_NAME = "trang-chinh/gop-y.php";
}
else if(exist_param("hoi-dap")){
    $VIEW_NAME = "trang-chinh/hoi-dap.php";
}
else{
    require_once '/xampp/htdocs/Assignment_DuAnMau/dao/hang-hoa.php';
    $items = hang_hoa_select_dac_biet_limit9();
    $VIEW_NAME = "trang-chinh/trang-chu.php";
}

require '/xampp/htdocs/Assignment_DuAnMau/site/layout.php';
?>
