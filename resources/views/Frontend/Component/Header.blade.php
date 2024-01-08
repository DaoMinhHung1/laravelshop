<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/public/Frontend/css/fontawesome-free-6.4.2-web/css/all.min.css" rel="stylesheet" />
    <link href="/Frontend/css/home.css" rel="stylesheet" />
</head>

<body>

    <section class="fixed-top">
        <Header class="bg-dark">
            <h4 class="namethuonghieu">Minh Hùng</h4>
            <p class="titlename">Hotline: 0776723790</p>
        </Header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <div class="col-4">
                        <!-- <img class="logo" src="/Frontend/img/logoH.png" alt=""> -->
                    </div>
                    <div class="col-6">
                        <div class="navbar navbar-expand-md">
                            <ul class="navbar-nav">
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
                    <div class="col-2 phantimkiem">
                        <input class="form-control inputtk me-3" placeholder="Tìm kiếm..." type="text">
                        <a href="/xemgiohang">
                            <svg class="iconshopping" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <nav class="navbar bg-body-tertiary fixed-top d-sm-none mt-5 bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                    </svg>
                </span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}">Trang Chủ</a>
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
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const dropdownMenu = document.getElementById("dropdownMenu");
        const dropdownSubMenu = dropdownMenu.querySelector(".dropdown-menu");

        let showTimeout;

        dropdownMenu.addEventListener("mouseenter", function() {
            showTimeout = setTimeout(function() {
                dropdownSubMenu.classList.add("show");
            }, 500);
        });

        dropdownMenu.addEventListener("mouseleave", function() {
            clearTimeout(showTimeout);
            dropdownSubMenu.classList.remove("show");
        });
    </script>

</body>

</html>