<?php
require_once "/xampp/htdocs/Assignment_DuAnMau/site/global.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Assignment_DuAnMau/content/css/admin.css">
   
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="<?=$CONTENT_URL?>/js/list.js" type="text/javascript"></script>
    <title>Admin</title>
<style>
    .list-hh{
        list-style: none;
        text-align: center;
    }
    .list-hh li{
        display: inline-block;
        padding-left: 20px;
    }
</style>
</head>

<body>
    <div class="container">
        <header>
            <h1>QUẢN TRỊ WEBSITE</h1>
        </header>
                
        <?php require_once '/xampp/htdocs/Assignment_DuAnMau/admin/trang-chinh/menu.php';?>
        <?php
                require_once $VIEW_NAME;
            ?>

    
        </div>
    </body>
</html>