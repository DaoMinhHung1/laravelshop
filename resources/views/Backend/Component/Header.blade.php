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
                <div class="col-6 mt-3">
                    <h3>Admin</h3>
                </div>
                <div class="col-5 text-end mt-2">
                    <img class="avatar" src="/Frontend/img/minhhung.png" alt="">
                </div>
                <div class="col-1 text-end mt-2">
                    <ul class="d-flex list-unstyled ">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </Header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 listdanhmuc">
                <ul class="list-group">
                    <a href="/admin">
                        <li class="list-group-item">Trang chủ</li>
                    </a>
                    <li class="list-group-item dropdown">
                        <!-- Dropdown trigger button -->
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sản Phẩm
                        </a>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/showqa">Quản lý Quần Áo</a>
                            <a class="dropdown-item" href="/showak">Quản lý Áo Khoác</a>
                            <a class="dropdown-item" href="/showg">Quản lý Giày</a>
                            <a class="dropdown-item" href="/showpk">Quản lý Phụ Kiện</a>
                            <a class="dropdown-item" href="/addpd">Thêm</a>
                        </div>
                    </li>
                    <li class="list-group-item dropdown">
                        <!-- Dropdown trigger button -->
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Nhân Viên
                        </a>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/nhanvien">Quản lý Nhân Viên</a>
                            <a class="dropdown-item" href="/addnhanvien">Thêm</a>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <a href="/thongke">Thống kê</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/hoadon">Hóa Đơn</a>
                    </li>
                    <a href="/home">
                        <li class="list-group-item">Quay về</li>
                    </a>
                </ul>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>