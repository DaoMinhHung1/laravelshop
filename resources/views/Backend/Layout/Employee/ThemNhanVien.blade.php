@include('Backend.Component.Header')
<div class="col-10">
    <h3>Thêm Sản Phẩm</h3>
    <div class="container mt-5">
        <form action="{{ route('nhanvien.adddd') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-3">
                    <label class="form-label">Tên Nhân Viên</label>
                    <input name="nameemploy" id="nameemploy" class="form-control" required>
                </div>

                <div class="col-3">
                    <label class="form-label">Ảnh Nhân Viên</label>
                    <input name="imgemploy" id="imgemploy" type="file" class="form-control"  required>
                </div>

                <div class="col-3">
                    <label class="form-label">Tuổi</label>
                    <input name="ageemploy" id="ageemploy" class="form-control" required>
                </div>

                <div class="col-3">
                    <label class="form-label">Số ĐT</label>
                    <input name="phoneemploy" id="phoneemploy" class="form-control" required>
                </div>

                <div class="col-3">
                    <label class="form-label">Email</label>
                    <input name="emailemploy" id="emailemploy" class="form-control" required>
                </div>

                <div class="col-3">
                    <label class="form-label">Địa Chỉ</label>
                    <input name="addressemploy" id="addressemploy" class="form-control" required>
                </div>

                <div class="col-3">
                    <label class="form-label">Chức vụ</label>
                    <input name="jobemploy" id="jobemploy" class="form-control" required>
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