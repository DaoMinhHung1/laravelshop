<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/Frontend/css/home.css">
</head>

<body>
    @include('Frontend.Component.Header')
    <!-- Ảnh  -->
    <div class="container-fluid top">
        <div class="row">
            <div class="col-12 p-0 animated-slide-banner">
                <div class="owl-carousel">
                    <img src="/Frontend/img/anhshop.jpg" class="img-fluid  item" alt="">
                    <img src="/Frontend/img/anhshop.jpg" class="img-fluid  item" alt="">
                    <img src="/Frontend/img/anhshop.jpg" class="img-fluid  item" alt="">
                </div>
                <div class="owl-dots"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col titletrendinghome">
                <h1 class="mt-3">Sản phẩm bán chạy</h1>
            </div>
        </div>
        <div class="row canhsanphamtrangchu animated-slide-product">
            @foreach($products as $index => $product)
            @if($index % 3 == 0)
        </div>
        <div class="row canhsanphamtrangchu animated-slide-product justify-content-center">
            @endif
            <div class="col-sm-1 col-md-4 col-lg-3 mt-3 canhsanphamtrangchu">
                <div class="card cardhome  zoom-card">
                    <div class="img-container">
                        <img src="{{('/storage/images/' . $product->imgproduct)}}" class="imgchinhsp" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{$product->nameproduct}}</strong></h5>
                        <p class="card-text">{{$product->category->name}}</p>
                        <p class="giatien">{{$product->priceproduct}} <span>K</span></p>
                        <form action="{{route('home.chitietsp', ['id' => $product->id] )}}">
                            <button type="submit" class="button">Mua</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    @include('Frontend.Component.Footter')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                items: 1,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                // Hiển thị 3 ảnh trên một slide
            });
        });
    </script>

</body>

</html>