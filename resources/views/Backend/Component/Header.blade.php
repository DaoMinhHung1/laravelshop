<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Document</title>
    <link href="/Backend/css/trangchu.css" rel="stylesheet" />
</head>

<body>

    <Header class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3>Admin</h3>
                </div>
                <div class="col-6 text-end">
                    <img class="avatar" src="/Frontend/img/minhhung.png" alt="">
                    <span>Đăng xuất</span>
                </div>
            </div>
        </div>
    </Header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 listdanhmuc">
                <ul class="list-group">
                    <a href="">
                        <li class="list-group-item">Trang chủ</li>
                    </a>
                    <li class="list-group-item dropdown">
                        <!-- Dropdown trigger button -->
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Quản lý
                        </a>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/showqa">Quản lý Quần Áo</a>
                            <a class="dropdown-item" href="/showak">Quản lý Áo Khoác</a>
                            <a class="dropdown-item" href="/showg">Quản lý Giày</a>
                            <a class="dropdown-item" href="/showpk">Quản lý Phụ Kiện</a>
                            <a class="dropdown-item" href="/add">Thêm</a>
                        </div>
                    </li>
                    <a href="/home"> 
                        <li class="list-group-item">Quay về</li>
                    </a>
                </ul>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>