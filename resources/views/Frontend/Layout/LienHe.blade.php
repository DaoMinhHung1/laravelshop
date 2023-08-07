@include('Frontend.Component.Header')
<link rel="stylesheet" href="/Frontend/css/lienhe.css">
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-8 mt-5 animated-slide-left text-center">
                <h3 class="text-center">Liên hệ với chúng tôi!</h3>
                <p><strong>Minh Hùng Shop</strong></p>
                <p>
                    <strong>
                        Nếu bạn có bất kì câu hỏi hoặc thắc mắc xin vui lòng liên hệ theo thông tin dưới đây:
                    </strong>
                </p>
                <p>
                    <strong>
                        Cửa hàng MHUNG Store – 58/8 – Quận 12, TP.HCM
                    </strong>
                </p>
                <p>
                    <strong>
                        Địa chỉ Fanpage: <a href="https://www.facebook.com/profile.php?id=100038829472770">https://www.facebook.com/profile.php?id=100038829472770</a>
                    </strong>
                </p>
                <p>
                    <strong>
                        Thời gian làm việc: 08h00 – 23h00 (Cả tuần – Kể cả ngày lễ)
                        Hotline: 0945055899
                    </strong>
                </p>
                <p>
                    <strong>
                        Hoặc để lại thông tin tại:
                        Website: <a href="https://www.facebook.com/profile.php?id=100038829472770">https://www.facebook.com/profile.php?id=100038829472770</a>
                        <p>Email: daominhhung2203@gmail.com</p>
                    </strong>
                </p>
                <p>
                    <strong>
                        Chúng tôi sẽ cố gắng giải đáp mọi thắc mắc và yêu cầu nhanh nhất !
                    </strong>
                </p>
                <p>
                    <strong>
                        Đóng góp của bạn góp phần làm nâng cao chất lượng phục vụ của chúng tôi – Xin chân thành cảm ơn !
                    </strong>
                </p>
            </div>
            <div class="col-4 mt-5 animated-slide-right">
                <p>Mọi ý kiến đóng góp, liên hệ, khiếu nại khác vui lòng điền đầy đủ thông tin và gửi đến chúng tôi. Bộ phận hỗ trợ khách hàng sẽ phản hồi sớm nhất khi nhận được thông tin.</p>
                <form action="{{ route('home.guilienhe') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Họ Và Tên.."  required/>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Số Điện Thoại.." required/>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email.."  required/>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="title" id="title" class="form-control" placeholder="Tiêu Đề.."  required/>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="des" id="des" rows="4" placeholder="Nội dung" required></textarea>
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