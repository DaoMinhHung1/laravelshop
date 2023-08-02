@include('Backend.Component.Header')
<div class="col-10">
    <h3>Chỉnh Sửa Điện thoại</h3>
    <div class="container mt-5">
        <form action="{{route('product.update', ['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-3">
                    <label class="form-label">Tên</label>
                    <input name="nameproduct" id="nameproduct" value="{{$product->nameproduct}}" class="form-control" required>
                </div>
                <div class="col-3">
                    <label class="form-label">Mã</label>
                    <input name="maproduct" id="maproduct" value="{{$product->maproduct}}" class="form-control" required>
                </div>
                <div class="col-3">
                    <label class="form-label">Giá</label>
                    <input name="priceproduct" id="priceproduct" value="{{$product->priceproduct}}" class="form-control" required>
                </div>

                <div class="col-3">
                    <label class="form-label">Ảnh</label>
                    <input name="imgproduct" id="imgproduct" value="{{$product->imgproduct}}" type="file" class="form-control" required>
                    <img class="imgproduct" src="{{ asset('storage/images/' . $product->imgproduct) }}" alt="">
                </div>
                <div class="col-3">
                    <label class="form-label">Tình trạng Sản Phẩm</label>
                    <select name="statusproduct" id="statusproduct" class="form-control" required>
                        <option value="Còn hàng">Còn hàng</option>
                        <option value="Hết hàng">Hết hàng</option>
                    </select>
                </div>

                <div class="col-3 mt-2">
                    <div class="form-label">
                        <label for="category">Danh Mục Sản Phẩm</label>
                        <select class="form-control" id="category" name="category" required>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">

                        <label class="form-label">Mô tả</label>
                        <textArea name="desproduct" id="desproduct" class="form-control" required>{{$product->desproduct}} </textArea>

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