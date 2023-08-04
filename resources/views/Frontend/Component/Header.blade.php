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

<section class="fixed-top">

    <Header class="bg-dark">
        <h4 class="namethuonghieu">Minh Hùng</h4>
        <p class="titlename">Hotline: 0776723790</h1>
    </Header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Trang chủ</a>
                    </li>
                    <li class="nav-item dropdown" id="dropdownMenu">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Danh Mục Sản Phẩm
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                        @foreach($categories as $ct)
                            <li><a class="dropdown-item" href="/sanpham/{{$ct->name}}">{{$ct->name}}</a></li>
                          @endforeach
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
</section>



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