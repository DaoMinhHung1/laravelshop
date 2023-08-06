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
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0; ?>
                    @foreach($cart as $tt)
                    <tr>
                        <td>{{$tt['name']}}</td>
                        <td>
                            <img class="imggiohang" src="{{ ('storage/images/' . $tt['img']) }}" alt="">
                        </td>
                        <td>{{$tt['price']}}</td>
                    </tr>
                    <?php $total += $tt['price'] * $tt['quantity']; ?>
                    @endforeach
                </tbody>
                <tr>
                    <td></td>
                    <td>Tổng tiền</td>
                    <td>{{$total}}</td>
                </tr>
            </table>
        </div>
        <div class="col-6">
            <div class="border border-2">
                <h3 class="text-center">Thanh toán</h3>
                <p class="d-flex justify-content-center">
                    <input class="form-control w-50 text-center" type="text" placeholder="Họ và tên...">
                </p>
                <p class="d-flex justify-content-center">
                    <input class="form-control w-50 text-center" type="text" placeholder="Số điện thoại..">
                </p>
                <p class="d-flex justify-content-center">
                    <input class="form-control w-50 text-center" type="text" placeholder="Địa chỉ...">
                </p>
                <div class="text-center mb-5">
                    <button class="btn btn-success">Đặt hàng</button>
                </div>
            </div>


        </div>
    </div>
</div>
@include('Frontend.Component.Footter')