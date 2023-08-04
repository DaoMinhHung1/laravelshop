<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản Phẩm</title>
    <link href="/Frontend/css/chitietsp.css" rel="stylesheet" />
</head>

<body>
    @include('Frontend.Component.Header', ['categories' => $categories])
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="titletrendinghome mt-3">Tất cả sản phẩm {{$title}}</h3>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2 animated-slide-title borderright">
                <ul class="list-group">
                    @foreach($categoriesWithCount as $category)
                    @php
                    $productCount = $productCountByCategory[$category->id] ?? 0;
                    @endphp
                    <li class="list-group-item">
                        {{ $category->name }} ({{ $productCount }} sản phẩm)
                    </li>
                    @endforeach
                </ul>
            </div>
            @foreach($product as $pd)
            <div class="col-2 me-5 animated-slide-product">
                <div class="card zoom">
                    <div class="imgcontainer">
                        <img class="imgdtproduct" src="{{ ('/storage/images/'. $pd->imgproduct)}}" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{$pd->nameproduct}}</strong></h5>
                        <p class="card-text">{{$pd->desproduct}}</p>
                        <p class="giatien">{{$pd->priceproduct}} <span>đ</span></p>

                        <form action="{{ route('home.chitietsp', ['id' => $pd->id]) }}">
                            <button class="button">Mua</button>
                        </form>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @include('Frontend.Component.Footter')
</body>

</html>