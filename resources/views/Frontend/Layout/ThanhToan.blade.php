@include('Frontend.Component.Header')
<link href="/Frontend/css/chitietsp.css" rel="stylesheet" />
<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Ảnh</th>
                        <th>Giá</th>
                        <th>Size</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0; ?>
                    @foreach($cart as $tt)
                    <tr>
                        <td>{{$tt['name']}}</td>
                        <td>
                            <img class="imggiohang" src="{{ ('storage/images/products/' . $tt['img']) }}" alt="">
                        </td>
                        <td>{{$tt['price']}}</td>
                        <td>{{$tt['size']}}</td>
                    </tr>
                    <?php $total += $tt['price'] * $tt['quantity']; ?>
                    @endforeach
                </tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Tổng tiền</td>
                    <td>{{$total}}</td>
                </tr>
            </table>
        </div>
        <div class="col-6">
            <div class="border border-2">
                <form action="{{route('home.tinhtienbill')}}" method="POST">
                    @csrf
                    <h3 class="text-center">Thanh toán</h3>
                    <p class="d-flex justify-content-center">
                        <input class="form-control w-50 text-center" name="nameuser" type="text" placeholder="Họ và tên... " required>
                    </p>
                    <p class="d-flex justify-content-center">
                        <input class="form-control w-50 text-center" name="phoneuser" type="text" placeholder="Số điện thoại.." required>
                    </p>
                    <p class="d-flex justify-content-center">
                        <input class="form-control w-50 text-center" name="addressuser" type="text" placeholder="Địa chỉ..." required>
                    </p>
                    <div class="text-center mb-5">
                        <button type="submit" class="btn btn-success">Đặt hàng</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('Frontend.Component.Footter')