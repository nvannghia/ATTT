<?php 
 require 'configuration/database.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <style>
        body{
            background-image: url('Images/background-nganha.jpg');
         
        }
       .form-container{
        display: flex;
        justify-content: center;
        align-items: center;
       }
       .btn-style{
        width:350px;height:40px;
        margin-right:5px;
       }
       ul>li{
        font-size:20px;
       }

       ul>li:hover{
        font-size:25px;
        font-weight: 700;
        transition: .7s;
       }

       .button{
        color:#fff;
        border:none;
        border-radius:4px;
        box-shadow: 0 5px 0 rgb(13,100,200);
        transition: 0.1s;
       }

       .button:active{
        box-shadow: none;
        transform:translateY(5px);
       }

       
       
    </style>
     <!-- Latest compiled JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cuahangcacanh.vn</title>
</head>
<body>
    <!-- Phần của Phương Nam -->
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgba(0,0,0,0.2);">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" style="font-size:25px;">Trang Chủ</a>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="carts.php">Giỏ Hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Giới Thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Liên Hệ</a>
                    </li>
                </ul>
                <form class="d-flex form-container" style="border:none; width:50%" method="POST" action="searchcart.php" >
                    <input class="form-control me-2" style="width:100%;height:40px;margin-right:5px" type="text" placeholder="Search" name="search">
                    <input class="btn btn-primary" style="width:70px;height:40px;margin-right:5px" type="submit" name="searchs" value="search">
                    <a class="btn btn-primary btn-style" href="login.php" >Đăng Nhập</a>
                    <a class="btn btn-primary btn-style" href="register.php" >Đăng Ký</a>
                </form>
                
            </div>
        </div>
        </nav>
    <!--  -->
   

   

    
