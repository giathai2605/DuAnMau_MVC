<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Shopping Center</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        
<script src="<?=$CONTENT_URL?>/js/jquery.min.js"></script>

<style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.container {
    width: 1000px;
    height: auto;
    margin: 0 auto;
}
header{
    background-color: rgb(241, 202, 248);
    color: rgb(146, 49, 49);
    width: 1000px;
    height: 70px;
}
header h1{
    letter-spacing: 1px;
    margin-left: 20px;
    line-height: 70px;
}
nav{
    background-color: black;
    height: 50px;
    width: 1000px;
    
}

nav ul li{
    display: inline-block;
    list-style: none;
    padding-left: 20px;
    line-height: 50px;
}
nav ul li a{
    text-decoration: none;
    color: rgb(211, 208, 208);
    font-size: 18px;
}
nav ul li a:active{
    font-size: 20px;
    font-weight: bold;
}
nav ul li a:hover{
   color: orangered;
   text-decoration: underline;
}

  article{
    width: 740px;
    height: auto;
  }
  aside{
    width: 250px;
    border: 1px solid gray;
    height: auto;
   
  }
  .content{
    width: 1000px;
    display: flex;
   justify-content: space-between;
   gap: 10px;
   margin-top: 5px;
  }
  .aside{
 margin-left: 5px;
 margin-right: 5px;
  }
  .tai_khoan{
    margin-top: 10px;
    text-align: center;
  }
  label{
    margin-top: 5px;
    margin-bottom: 5px;
  }
  .product{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr ;
    gap: 10px;
    margin-top: 10px;
  }
  .detail-product{
    border: 1px solid gray;
    border-radius: 5px;
  }
  .product a{
    text-decoration: none;
  }
  .detail-product h3{
    color: red;
 text-align: center;
 margin-top: 5px;
 font-size: 25px;
  }
  .detail-product h2{
    color: black;
    font-size: 20px;
    text-align: center;
  }
  .thumbnail{
    width: 690px;
  }
 
footer{
  width: 1000px;
  height: 50px;
  background-color: black;
  margin-top: 10px;
}
footer marquee{
  color: white;
  font-size: 25px;
  line-height: 50px;
}
.cap-nhat-tk{
  width: 650px;
}
</style>
    </head>
    <body>
        <div class="container">