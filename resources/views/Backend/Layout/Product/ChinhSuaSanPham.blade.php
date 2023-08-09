@include('Backend.Component.Header')
<div class="col-10">
    <h3>Chỉnh Sửa Sản Phẩm</h3>
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
                    <label class="form-label">Chất Liệu</label>
                    <input name="substance" id="substance" class="form-control" value="{{$product->substance}}" required>
                </div>
                <?php
                $imgpd = json_decode($product->imgproduct);
                ?>
                <div class="col-3">
                    <label class="form-label">Ảnh Sản Phẩm</label>
                    <input name="imgproduct[]" type="file" class="form-control" multiple required>
                    <img class="imgproduct" src="{{ asset('storage/images/products/' . $imgpd[0])}}" alt="">
                </div>
                <div class="col-3">
                    <label class="form-label">Ảnh Phụ Sản Phẩm 1</label>
                    <input name="imgproduct[]" type="file" class="form-control" multiple required>
                    <img class="imgproduct" src="{{ asset('storage/images/products/' . $imgpd[1])}}" alt="">
                </div>
                <div class="col-3">
                    <label class="form-label">Ảnh Phụ Sản Phẩm 2</label>
                    <input name="imgproduct[]" type="file" class="form-control" multiple required>
                    <img class="imgproduct" src="{{ asset('storage/images/products/' . $imgpd[2])}}" alt="">
                </div>
                <div class="col-3">
                    <label class="form-label">Ảnh Phụ Sản Phẩm 3</label>
                    <input name="imgproduct[]" type="file" class="form-control" multiple required>
                    <img class="imgproduct" src="{{ asset('storage/images/products/' . $imgpd[3])}}" alt="">
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
                        <button type="submit" class="btn btn-success">Thay đổi</button>
                        <button class="btn btn-danger"> Hủy </button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
</div>
</div>