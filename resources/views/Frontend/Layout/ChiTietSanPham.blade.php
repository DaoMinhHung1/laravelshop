<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/Frontend/css/chitietsp.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>

<body>
    @include('Frontend.Component.Header')
    <div class="container container1 ">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-4 mt-5 animated-slide-left">
                    <?php
                    $imgpd = json_decode($product->imgproduct); 
                    ?>
                    <img class="imgchinh" src="{{ asset('storage/images/products/' . $imgpd[0]) }}" alt="">
                    
                  <div class="mt-3">
                      <img class="imgphu me-4" src="{{ asset('storage/images/products/' . $imgpd[1]) }}" alt="">
                      <img class="imgphu me-4" src="{{ asset('storage/images/products/' . $imgpd[2]) }}" alt="">
                      <img class="imgphu" src="{{ asset('storage/images/products/' . $imgpd[3]) }}" alt="">
                  </div>
                    
            
            </div>


            <div class="col-6 mt-5 animated-slide-right">
                <h3>{{$product->nameproduct}}</h1>
                    <p><strong>Trạng thái:</strong><span>{{$product->statusproduct}}</span></p>
                    <p><strong>Danh mục:</strong><span>{{$product->category->name}}</span></p>
                    <p><strong>Giá tiền:</strong><span> {{$product->priceproduct}}Vnd</span></p>
                    <p><strong>Chất liệu:</strong><span> {{$product->substance}}Vnd</span></p>
                    <form action="{{route('home.themsanpham', ['id' => $product->id])}}">
                        @csrf

                        <div class="form-group">
                            <label for="size"><strong>Kích thước</strong></label><br>
                            <input type="radio" id="size" name="size" value="S" checked>
                            <label for="size_s">S</label>
                            <input type="radio" id="size" name="size" value="M">
                            <label for="size_m">M</label>
                            <input type="radio" id="size" name="size" value="L">
                            <label for="size_l">L</label>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="quantity"> <strong>Số lượng</strong></label>
                            <input class="form-control w-25" type="number" id="quantity" name="quantity" value="1" min="1">
                        </div>
                        <button class="button mt-5">Mua Ngay</button>
                    </form>
            </div>
        </div>
    </div>
    <br>
    <div class="container container2 text-center">
        <div class="row mt-5 mb-5 animated-slide-under">
            <div class="col mt-5">
                <h3 class="text-center mt-5">Mô tả sản phẩm</h3>
                <p class="mt-5">{{$product->desproduct}}</p>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row ">
            <h5 class="mt-5">SẢN PHẨM TƯƠNG TỰ</h5>

            @foreach($producttt as $pd) <!-- Assuming $similarProducts is an array/collection of products -->
            <div class="col-3 mt-5">
                <div class="card zoom-card">
                    <div class="img-container">
                        <img src="{{('/storage/images/' . $pd->imgproduct)}}" class="imgchinhsp" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{$pd->nameproduct}}</strong></h5>
                        <p class="card-text">{{$pd->category->name}}</p>
                        <p class="giatien">{{$pd->priceproduct}} <span>K</span></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @include('Frontend.Component.Footter')
    <!-- <script src="/Frontend/js/chitietsp.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>

</html>