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

<style>
    .full-image-container {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        align-items: center;
        justify-content: center;
        z-index: 9999;
    }

    .full-image {
        max-width: 90%;
        max-height: 90%;
    }
</style>

<body>
    @include('Frontend.Component.Header')
    <div class="container container1 ">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-4 mt-5 animated-slide-left">
                <?php
                $imgpd = json_decode($product->imgproduct);
                ?>
                <img class="imgchinh clickable-image" src="{{ asset('storage/images/products/' . $imgpd[0]) }}" alt="">

                <div class="mt-3">
                    <img class="imgphu me-4 clickable-image" src="{{ asset('storage/images/products/' . $imgpd[1]) }}" alt="">
                    <img class="imgphu me-4 clickable-image" src="{{ asset('storage/images/products/' . $imgpd[2]) }}" alt="">
                    <img class="imgphu clickable-image" src="{{ asset('storage/images/products/' . $imgpd[3]) }}" alt="">
                </div>
            </div>

            <div class="full-image-container" id="fullImageContainer">
                <img class="full-image" id="fullImage" src="" alt="">
            </div>


            <div class="col-6 mt-5 animated-slide-right">
                <h3>{{$product->nameproduct}}</h1>
                    <p><strong>Trạng thái:</strong><span>{{$product->statusproduct}}</span></p>
                    <p><strong>Danh mục:</strong><span>{{$product->category->name}}</span></p>
                    <p><strong>Giá tiền:</strong><span> {{$product->priceproduct}}Vnd</span></p>
                    <p><strong>Chất liệu:</strong><span> {{$product->substance}}</span></p>
                    <p><strong>Thiết kế:</strong> {{$product->desproduct}}</p>
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
        <div class="row animated-slide-under">
            <div class="col-1"></div>
            <div class="col-10 ">
                <h3 class="mt-5">Mô tả sản phẩm</h3>
                <p>Size S từ 42kg – 51kg , cao dưới 1m65</p>
                <p>Size M từ 52kg – 68kg, cao dưới 1m7</p>
                <p>Size L từ 69kg – 76kg, từ 1m70 – 1m79</p>
                <p>Size XL từ 74kg – 90kg, từ 1m78 – 1m85</p>

                <img style="height: 500px;" src="/Frontend/img/sizeao.jpg" alt="">
            </div>
            <div class="col-1"></div>
        </div>
    </div>


    <div class="container" style="margin-top: 900px;">
        <div class="row">
            <div class="col-1"></div>
             <div class="col-10">
                <h5 class="mt-5">SẢN PHẨM TƯƠNG TỰ</h5>
                <div class="row">
                    @foreach($producttt as $pd)
                    <?php
                    $imgpdtt = json_decode($pd->imgproduct);
                    ?>
                    <div class="col-3">
                        <div class="card zoom-card">
                            <div class="img-container">
                                <img class="imgspthem clickable-image" src="{{ asset('storage/images/products/' . $imgpdtt[0]) }}" alt="">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{$pd->nameproduct}}</strong></h5>
                                <p class="card-text">{{$pd->category->name}}</p>
                                <p class="giatien">{{$pd->priceproduct}} <span>K</span></p>
                                <form action="{{ route('home.chitietsp', ['id' => $pd->id]) }}">
                                    <button class="button">Mua</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>

    @include('Frontend.Component.Footter')
    <!-- <script src="/Frontend/js/chitietsp.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        const clickableImages = document.querySelectorAll('.clickable-image');
        const fullImageContainer = document.getElementById('fullImageContainer');
        const fullImage = document.getElementById('fullImage');

        clickableImages.forEach(image => {
            image.addEventListener('click', () => {
                const imageUrl = image.getAttribute('src');
                fullImage.setAttribute('src', imageUrl);
                fullImageContainer.style.display = 'flex';
            });
        });

        fullImageContainer.addEventListener('click', () => {
            fullImageContainer.style.display = 'none';
        });
    </script>
</body>

</html>