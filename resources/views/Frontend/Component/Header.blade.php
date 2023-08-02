<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/Frontend/css/home.css" rel="stylesheet" />
</head>

<body>

</body>

</html>

<Header class="bg-dark">
    <p class="titlename">Hotline: 0776723790</h1>

    <div class="">
        <a class="linkhd" href="" class="">Đăng ký </a>
        <a class="linkhd" href="" class="">Đăng nhập</a>
        <a class="linkhd" href="" class="">Liên hệ</a>
    </div>

</Header>
<div class="bg-shop mt-3">
    <h1>Minh Hùng</h1>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Trang chủ</a>
                </li>
                <li class="nav-item dropdown" id="dropdownMenu">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Danh Mục Sản Phẩm
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{route('home.quanao')}}">Quần Áo</a></li>
                        <li><a class="dropdown-item" href="{{route('home.aokhoac')}}">Áo Khoác</a></li>
                        <li><a class="dropdown-item" href="{{route('home.giay')}}">Giày</a></li>
                        <li><a class="dropdown-item" href="{{route('home.phukien')}}">Phụ Kiện</a></li>
                        <!-- Thêm các mục sản phẩm khác vào đây -->
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gioithieu">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/lienhe">Liên hệ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
</script>

<script>
const dropdownMenu = document.getElementById("dropdownMenu");
const dropdownSubMenu = dropdownMenu.querySelector(".dropdown-menu");

let showTimeout;

dropdownMenu.addEventListener("mouseenter", function() {
    showTimeout = setTimeout(function() {
        dropdownSubMenu.classList.add("show");
    }, 500); // Chờ 500ms (0.5 giây) trước khi hiển thị
});

dropdownMenu.addEventListener("mouseleave", function() {
    clearTimeout(showTimeout);
    dropdownSubMenu.classList.remove("show");
});
</script>