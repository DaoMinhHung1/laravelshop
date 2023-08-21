<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hóa Đơn Đặt Hàng</title>
    <style>
        /* Định dạng CSS cho hóa đơn */
        body {
            font-family: Arial, sans-serif;
        }

        .invoice {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px;
        }

        .invoice h2 {
            margin-top: 0;
        }

        /* ... Thêm các quy tắc CSS khác cho hóa đơn ... */
    </style>
</head>

<body>
@include('Backend.Component.Header')
<div class="col-10">
    @foreach($bills as $bill)
    <div class="invoice">
        <h2>Hóa Đơn Đặt Hàng #{{ $bill->id }}</h2>
        <p>Tên Sản Phẩm: {{ $bill->namepd }}</p>
        <p>Size: {{$bill->sizepd}}</p>
        <p>Số Lượng: {{ $bill->quantity }}</p>
        <p>Tổng Cộng: {{ $bill->tongtien }}</p>
        <!-- ... Thêm thông tin khác về đơn hàng ... -->
    </div>
    @endforeach
</body>

</html>