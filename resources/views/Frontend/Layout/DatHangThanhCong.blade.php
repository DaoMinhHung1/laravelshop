@include('Frontend.Component.Header')
<link href="/Frontend/css/chitietsp.css" rel="stylesheet" />
<div class="container mt-5 text-center">
    <div class="row">
        <div class="col border border-5">
            <form action="{{route('home.xacnhandonhang')}}" method="post">
                @csrf
                <h3>Đặt hàng thành công</h3>
                <h5>Đơn hàng của mình</5>
                    @foreach($bills as $bill)
                    <div class="row mt-5 ">
                        <div class="col-6">
                            <p class="text-start"> <strong>Ngày Hóa Đơn :</strong> {{$bill->ngayhoadon}}</p>
                            <p class="text-start "> <strong>Mã Đơn Hàng :</strong> {{$bill->mabill}} </p>
                            <p class="text-start"> <strong>Tên Khách Hàng :</strong> {{$bill->nameuser}}</p>
                            <p class="text-start"> <strong>Số Điện Thoại :</strong> {{$bill->phoneuser}}</p>
                            <p class="text-start"> <strong>Địa Chỉ :</strong> {{$bill->addressuser}}</p>

                        </div>
                        <div class="col-6">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>Tên</th>
                                        <th>Ảnh</th>
                                        <th>Size</th>
                                        <th>Số lượng</th>
                                        <th>TỔng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?php
                                            $namepddd = json_decode($bill->namepd)
                                            ?>
                                            @foreach ($namepddd as $name)
                                            <p>{{$name}}</p>
                                            @endforeach
                                        </td>
                                        <td>
                                            <?php
                                            $imgggpd = json_decode($bill->imgpd)
                                            ?>
                                            @foreach ($imgggpd as $img)
                                            <img class="imggiohang" src="{{ asset('storage/images/products/' . $img) }}" alt="">
                                            @endforeach
                                        </td>
                                        <td>{{$bill->sizepd}}</td>
                                        <td>{{$bill->quantity}}</td>
                                        <td>{{$bill->tongtien}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endforeach
                    <button type="submit" class="btn btn-success mt-5">Xác nhận</button>
                    <p class="mt-5">MINHHUNG SHOP xin cảm ơn bạn đã tin tưởng và đặt hàng bên cửa hàng cua mình. Chúc các bạn có thời gian trải nghiệm thật vui</p>
            </form>
        </div>
    </div>
</div>
@include('Frontend.Component.Footter')