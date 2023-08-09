@include('Backend.Component.Header')
<div class="col-10">
    <h3>Chỉnh Sửa Nhân Viên</h3>
    <div class="container mt-5">
        <form action="{{route('nhanvien.update', ['id' => $employee->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-3">
                    <label class="form-label">Tên Nhân Viên</label>
                    <input name="nameemploy" id="nameemploy" class="form-control" value="{{$employee->nameemploy}}" required>
                </div>

                <div class="col-3">
                    <label class="form-label">Ảnh Nhân Viên</label>
                    <input name="imgemploy" id="imgemploy" type="file" class="form-control">
                    @if ($employee->imgemploy)
                    <img class="imgproduct" src="{{ asset('storage/images/employee/' . $employee->imgemploy) }}" alt="">
                    @else
                    <img class="imgproduct" src="{{ asset('path-to-default-image') }}" alt="">
                    @endif
                </div>

                <div class="col-3">
                    <label class="form-label">Tuổi</label>
                    <input name="ageemploy" id="ageemploy" class="form-control" value="{{$employee->ageemploy}} " required>
                </div>

                <div class="col-3">
                    <label class="form-label">Số ĐT</label>
                    <input name="phoneemploy" id="phoneemploy" class="form-control" value="{{$employee->phoneemploy}}" required>
                </div>

                <div class="col-3">
                    <label class="form-label">Email</label>
                    <input name="emailemploy" id="emailemploy" class="form-control" value="{{$employee->emailemploy}}" required>
                </div>

                <div class="col-3">
                    <label class="form-label">Địa Chỉ</label>
                    <input name="addressemploy" id="addressemploy" class="form-control" value="{{$employee->addressemploy}}" required>
                </div>

                <div class="col-3">
                    <label class="form-label">Chức vụ</label>
                    <input name="jobemploy" id="jobemploy" class="form-control" value="{{$employee->jobemploy}}" required>
                </div>
                <div class="row">
                    <div class="col mt-5 text-center">
                        <button type="submit" class="btn btn-success">Thay đổi</button>
                        <a href="/nhanvien"><button class="btn btn-danger"> Hủy </button></a>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
</div>
</div>