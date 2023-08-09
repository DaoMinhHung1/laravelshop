@include('Frontend.Component.Header')
<link href="/Frontend/css/chitietsp.css" rel="stylesheet" />
<div class="container mt-2">
    <div class="row">
        <div class="col d-flex mt-3">
            <span>
                <a href="/home">
                    <svg class="" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                    </svg>
                </a>
            </span>
            <span class="ms-2">/</span>
            <h6 class="ms-2">Thông tin giỏ hàng của bạn</h6>
        </div>
    </div>
    @php
    $cart = session('cart', []);
    @endphp
    @if(count($cart) > 0)
    <div class="row mt-5">
        <div class="col">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Giá</th>
                        <th>Ảnh</th>
                        <th>Số lượng</th>
                        <th>Size</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <?php $totalPrice = 0; ?>
                @foreach($cart as $productId => $item)
                <tbody>
                    <tr>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['price']}}</td>
                        <td>
            <img class="imggiohang" src="{{ asset('storage/images/products/' . $item['img']) }}" alt="">    
        </td>
                        <td>{{$item['quantity']}}</td>
                        <td>{{$item['size']}}</td>
                        <td>
                            <form action="{{ route('home.xoagiohang', ['productId' => $productId]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Xóa</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                <?php $totalPrice += $item['price'] * $item['quantity'];
                ?>
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Tổng tiền:</td>
                    <td>{{$totalPrice}}</td>
                </tr>
            </table>
            <div class="text-center">
                <a href="{{route('home.thanhtoan')}}">
                    <button class="btn btn-success">Thanh toán</button>
                </a>
            </div>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col text-center">
            <h3>Bạn chưa chọn sản phẩm nào</h3>
            <img src="/Frontend/img/giohangtrong.jpg" alt="">
            <p>Hãy nhanh tay chọn ngay sản phẩm yêu thích!</p>
        </div>
    </div>
    @endif
</div>

@include('Frontend.Component.Footter')