<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>

<body>
    @include('Frontend.Component.Header')
    <!-- Ảnh  -->
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12 p-0">
                <img src="Frontend/img/anhshop.jpg" class="img-fluid full-width-img" alt="">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col titletrendinghome">
                <h1 class="mt-3">Sản phẩm bán chạy</h1>
                <p class="pxecxec">---//---</p>
                <p class="ptitle">Top trending tuần này</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-2">
                <div class="card">
                    <img src="Frontend/img/anhthoitrang.jpg" class="img" alt="Minh Hung">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Set đồ nữ dễ thương</strong></h5>
                        <p class="card-text">Thời trang & phụ kiện</p>
                        <p class="giatien">200.000 <span>đ</span></p>
                        <Button class="button">Mua</Button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="Frontend/img/anhthoitrang.jpg" class="img" alt="Minh Hung">
                    <div class="card-body">
                        <h5 class="card-title">Set đồ nữ dễ thương</h5>
                        <p class="card-text">Thời trang & phụ kiện</p>
                        <p>200.000Vnd</p>
                        <Button>Mua</Button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="Frontend/img/anhthoitrang.jpg" class="img" alt="Minh Hung">
                    <div class="card-body">
                        <h5 class="card-title">Set đồ nữ dễ thương</h5>
                        <p class="card-text">Thời trang & phụ kiện</p>
                        <p>200.000Vnd</p>
                        <Button>Mua</Button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <img src="Frontend/img/anhthoitrang.jpg" class="img" alt="Minh Hung">
                    <div class="card-body">
                        <h5 class="card-title">Set đồ nữ dễ thương</h5>
                        <p class="card-text">Thời trang & phụ kiện</p>
                        <p>200.000Vnd</p>
                        <Button>Mua</Button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('Frontend.Component.Footter')

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>