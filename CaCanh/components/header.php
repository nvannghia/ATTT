<?php 
 require 'configuration/database.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <style>
       .form-container{
        display: flex;
        justify-content: center;
        align-items: center;
       }
       .btn-style{
        width:350px;height:40px;
        margin-right:5px;
       }
    </style>
     <!-- Latest compiled JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cuahangcacanh.vn</title>
</head>
<body>
    <!-- Phần của Phương Nam -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Trang Chủ</a>
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
                <form class="d-flex form-container" style="border:none; width:50%">
                    <input class="form-control me-2" style="width:100%;height:40px;margin-right:5px" type="text" placeholder="Search">
                    <button class="btn btn-primary " style="width:70px;height:40px;margin-right:5px" type="button">Search</button>
                    <button type="button"  class="btn btn-primary btn-style"> Đăng Nhập</button>
                    <button type="button"  class="btn btn-primary btn-style">Đăng Ký</button>
                </form>
                
            </div>
        </div>
        </nav>
    <!--  -->

   

    
