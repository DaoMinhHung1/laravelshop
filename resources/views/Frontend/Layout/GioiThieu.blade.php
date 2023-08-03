@include('Frontend.Component.Header');
<link rel="stylesheet" href="/Frontend/css/gioithieu.css">
<div class="container">
    <div class="row">
        <div class="col-8 animated-slide-left">
            Như ý nghĩa của tên gọi, trang phục của Routine hướng đến việc trở thành thói quen, 
            lựa chọn hàng ngày cho nam giới trong mọi tình huống. Bởi Routine hiểu rằng, sự tự tin về phong cách 
            ăn mặc sẽ làm nền tảng, tạo động lực cổ vũ mỗi người mạnh dạn theo đuổi những điều mình mong muốn. 
            Trong đó, trang phục nam phải mang vẻ đẹp lịch lãm, hợp mốt và tạo sự thoải mái, 
            quan trọng nhất là mang đến cảm giác “được là chính mình” cho người mặc.

            Thời trang Routine thuyết phục khách hàng bằng từng kiểu dáng trang phục thiết kế độc quyền, 
            sự sắc sảo trong mỗi đường nét cắt may, sử dụng chất liệu vải cao cấp và luôn hòa điệu cùng xu hướng quốc tế. 
            Đây là con đường Routine theo đuổi và hướng đến phát triển bền vững.

            Thành lập từ năm 2013, đến nay hệ thống cửa hàng của Routine đang là địa chỉ “One stop fashion shop” 
            cung ứng cho nam giới mọi nhu cầu về thời trang với tất cả các loại trang phục, phụ kiện. 
            Phong cách tối giản đặc trưng của Routine mang đến sự gần gũi, đa dụng và đủ sức tạo nên dấu ấn riêng cho người mặc. 
            Các sản phẩm quần tây, áo sơ mi, quần jeans, áo thun, áo jacket... đều được thiết kế năng động, dễ dàng kết hợp để mặc đi làm, đi chơi hay du lịch. 
            Routine hiện có hệ thống 27 cửa hàng tại TP.HCM, Hà Nội, Hải phòng, Đà Nẵng, Kiên Giang và Vũng Tàu. Thương hiệu thường xuyên ra mắt bộ sưu tập riêng, bắt kịp xu hướng thời trang quốc tế.
        </div>
        <div class="col-4 custom-border animated-slide-right">
            @foreach($product as $pd)
            <div>
                <img class="imgbaivietlq" src="{{('/storage/images/'. $pd->imgproduct)}}" alt="">
                <span>{{$pd->nameproduct}}</span>
            </div>
            @endforeach
        </div>
    </div>
</div>