<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/Frontend/css/chitietsp.css" rel="stylesheet" />
</head>

<body>
    @include('Frontend.Component.Header')
    <div class="container container1 ">
        <div class="row">
            <div class="col-2 mt-5 animated-slide-left ">
                <img class="imgphu" src="{{('/storage/images/' . $product->imgproduct)}}" alt="">
                <img class="imgphu mt-3" src="{{('/storage/images/' . $product->imgproduct)}}" alt="">
                <img class="imgphu mt-3" src="{{('/storage/images/' . $product->imgproduct)}}" alt="">
                <img class="imgphu mt-3" src="{{('/storage/images/' . $product->imgproduct)}}" alt="">
            </div>
            <div class="col-4 mt-5 animated-slide-left zoom">
                <img class="imgchinh" src="{{('/storage/images/' . $product->imgproduct)}}" alt="">
            </div>
            <div class="col-4 mt-5 animated-slide-right">
                <h3>{{$product->nameproduct}}</h1>
                    <p><strong>Trạng thái:</strong><span>{{$product->statusproduct}}</span></p>
                    <p><strong>Danh mục:</strong><span>{{$product->category->name}}</span></p>
                    <p><strong>Giá tiền:</strong><span> {{$product->priceproduct}}Vnd</span></p>
                    <button class="button">Đặt hàng</button>
            </div>
        </div>
    </div>
    <br>
    <div class="container container2 text-center">
        <div class="row mt-5 mb-5 animated-slide-under">
            <div class="col">
                <h3 class="text-center">Mô tả sản phẩm</h3>
                <p class="mt-5">{{$product->desproduct}}</p>
            </div>
        </div>
    </div>
    @include('Frontend.Component.Footter')
    <!-- <script src="/Frontend/js/chitietsp.js"></script> -->
</body>

</html>