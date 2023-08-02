@include('Backend.Component.Header')
<div class="col-10">
    <h3>Thêm Điện thoại</h3>
    <div class="container mt-5">
        <form action="{{ route('product.add') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-3">
                    <label class="form-label">Tên Sản phẩm</label>
                    <input name="nameproduct" id="nameproduct" class="form-control" required>
                </div>
                <div class="col-3">
                    <label class="form-label">Mã Sản Phẩm</label>
                    <input name="maproduct" id="maproduct" class="form-control" required>
                </div>
                <div class="col-3">
                    <label class="form-label">Giá Sản Phẩm</label>
                    <input name="priceproduct" id="priceproduct" class="form-control" required>
                </div>
                <div class="col-3">
                    <label class="form-label">Ảnh Sản Phẩm</label>
                    <input name="imgproduct" id="imgproduct" type="file" class="form-control" required>
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

                        <label class="form-label">Mô tả Sản Phẩm</label>
                        <textArea name="desproduct" class="form-control" id="desproduct" required> </textArea>

                    </div>
                </div>

                <div class="row">
                    <div class="col mt-5 text-center">
                        <button type="submit" class="btn btn-success"> Thêm sản phẩm </button>
                        <button class="btn btn-danger"> Hủy </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>