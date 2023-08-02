<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Điện thoại</title>
    <link href="/Frontend/css/chitietsp.css" rel="stylesheet" />
</head>

<body>
    @include('Frontend.Component.Header')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="titletrendinghome mt-3">Tất cả sản phẩm Điện thoại</h3>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <ul class="list-group">
                    <li class="list-group-item">Tất cả</li>
                    <li class="list-group-item">Điện thoại IPhone</li>
                    <li class="list-group-item">Điện thoại SamSung</li>
                </ul>

            </div>
            @foreach($dienthoais as $dienthoai)
            <div class="col-2">
                <div class="card">
                    <img class="imgdtproduct mx-auto mt-3" src="{{ ('/storage/images/'. $dienthoai->imgproduct)}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{$dienthoai->nameproduct}}</strong></h5>
                        <p class="card-text">{{$dienthoai->desproduct}}</p>
                        <p class="giatien">{{$dienthoai->priceproduct}} <span>đ</span></p>

                        <form action="{{ route('home.chitietsp', ['id' => $dienthoai->id]) }}">
                            <button class="button">Mua</button>
                        </form>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @include('Frontend.Component.Footter');
</body>

</html>