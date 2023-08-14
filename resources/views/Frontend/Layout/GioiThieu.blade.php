@include('Frontend.Component.Header');
<link rel="stylesheet" href="/Frontend/css/gioithieu.css">
<div class="container mt-5">
    <div class="row">
        <div class="col-8 animated-slide-left">
            <h3 class="text-center">Về chúng tôi</h3>
            <p>Như ý nghĩa của tên Thương hiệu, trang phục của MinhHungShop hướng hướng đến tiêu chí tạo ra những sản phẩm thời trang đạt tiêu chuẩn tốt nhất từ kiểu dáng, chất lượng lẫn phong cách thời trang dành riêng cho phái mạnh.</p>
            <p>
                Chúng tôi hiểu rằng sự tự tin về phong cách ăn mặc sẽ giúp phái mạnh tự tin và thành công trong công việc, cuộc sống. Với tiêu chí MINHHUNG STORE là trang phục nam phải mang vẻ đẹp lịch lãm, hợp mốt và tạo sự thoải mái, quan trọng nhất là mang đến cảm giác “được là chính mình” cho người mặc.
            </p>
            <p>
                Thời trang nam MINHHUNG STORE thuyết phục khách hàng bằng những kiểu dáng trang phục thiết kế độc quyền, sự chăm chút, tỉ mỉ và có tâm trong mỗi đường nét cắt may, sử dụng chất liệu vải cao cấp và luôn hòa điệu cùng xu hướng thời trang hiện đại của thế giới. Đây là con đường MINHHUNG STORE theo đuổi và hướng đến phát triển bền vững.
            </p>
            <p>
                Tuy mới được thành lập nhưng MINHHUNG STORE nhanh chóng được đón nhận và yêu thích bởi những thiết kế Đẹp, Chất lượng, luôn bắt kịp dòng chảy thời trang hiện đại và cho ra đời những thiết kế độc đáo, tinh tế, góp làn gió mới vào thị trường thời trang.
                MINHHUNG STORE đáp ứng cho nam giới mọi nhu cầu về thời trang hàng ngày với tất cả các loại trang phục, phụ kiện. Phong cách đặc trưng của MINHHUNG STORE mang đến sự gần gũi, đa dụng và đủ sức tạo nên dấu ấn riêng cho người mặc. Các sản phẩm quần tây, áo sơ mi, quần jeans, áo thun, áo jacket, quần khakis.. đều được thiết kế năng động, dễ dàng kết hợp để mặc đi làm, đi chơi hay du lịch.
            </p>
        </div>
        <div class="col-4 custom-border animated-slide-right">
            <h5>SẢN PHẨM MỚI</h5>
            @foreach($product as $pd)
            <div>
                <?php
                $imgpd = json_decode($pd->imgproduct)
                ?>
                <img class="imgbaivietlq" src="{{ asset('storage/images/products/' . $imgpd[0]) }}" alt="">
                <span>{{$pd->nameproduct}}</span>
            </div>
            @endforeach
        </div>
    </div>
</div>