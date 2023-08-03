@include('Frontend.Component.Header')
<link rel="stylesheet" href="/Frontend/css/lienhe.css">
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-6 mt-5 animated-slide-left">
                <h3>Liên hệ với chúng tôi!</h3>
                <p>Minh Hùng Shop</p>
                <p>Đây là website tôi làm bằng PHP LARAVEL dùng để học hỏi kinh nghiệm và phát triển bản thân. Nếu ai không hài lòng thì hãy gửi liên hệ với tôi! </p>
                <div>
                    <p><strong>Địa chỉ:</strong>58/8, khu phố 7, phường Tân Thới Nhất, Quận 12</p>
                    <p><strong>Hot Line</strong>082 348 8817</p>
                    <p><strong>Email</strong>daominhhung2203@gmail.com</p>
                </div>
            </div>
            <div class="col-6 mt-5 animated-slide-right">
                <p>Mọi ý kiến đóng góp, liên hệ, khiếu nại khác vui lòng điền đầy đủ thông tin và gửi đến chúng tôi. Bộ phận hỗ trợ khách hàng sẽ phản hồi sớm nhất khi nhận được thông tin.</p>
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Họ Và Tên.." />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Số Điện Thoại.." />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Email.." />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Tiêu Đề.." />
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="4" placeholder="Nội dung"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Gửi liên hệ</button>
                </form>
            </div>

        </div>
        <div class="row">
            <div class="col">
               
            </div>
        </div>
    </div>
</section>
@include('Frontend.Component.Footter')