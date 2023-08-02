@include('Backend.Component.Header')
<div class="col-10">
    <h3>Chỉnh Sửa Điện thoại</h3>
    <div class="container mt-5">
    <form action="{{route('dienthoai.update', ['id' => $dienthoai->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-3">
                <label class="form-label">Tên Điện Thoại</label>
                <input name="nameproduct" id="nameproduct" value="{{$dienthoai->nameproduct}}" class="form-control" required>
            </div>
            <div class="col-3">
                <label class="form-label">Mã Điện Thoại</label>
                <input name="maproduct" id="maproduct" value="{{$dienthoai->maproduct}}" class="form-control" required>
            </div>
            <div class="col-3">
                <label class="form-label">Giá Điện Thoại</label>
                <input name="priceproduct" id="priceproduct" value="{{$dienthoai->priceproduct}}" class="form-control" required>
            </div>
            <div class="col-3">
                <label class="form-label">Ảnh Điện Thoại</label>
                <input name="imgproduct" id="imgproduct" value="{{$dienthoai->imgproduct}}" type="file" class="form-control" required>
                <img class="imgproduct" src="{{ asset('storage/images/' . $dienthoai->imgproduct) }}" alt="">

            </div>
            <div class="row mt-5">
                <div class="col">

                    <label class="form-label">Mô tả Điện Thoại</label>
                    <textArea name="desproduct" id="desproduct"  class="form-control" required>{{$dienthoai->desproduct}} </textArea>

                </div>
            </div>
            <div class="row">
                <div class="col mt-5 text-center">
                    <button type="submit" class="btn btn-success"> Chỉnh sửa sản phẩm</button>
                    <button class="btn btn-danger"> Hủy </button>
                </div>
            </div>
        </div>
    </form>
        
    </div>
</div>
</div>
</div>