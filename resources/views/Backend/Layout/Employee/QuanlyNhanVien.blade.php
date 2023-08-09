@include('Backend.Component.Header')
<div class="col-10">
    <h3>Quản lý Nhân Viên</h3>
    <div class="container">
        <div class="row mt-5 ">
            <div class="col-12">
                <div class="table-responsive">

                    <table class="table table-bordered text-center  ">
                        <thead>
                            <tr>
                                <th scope="col">Tên</th>
                                <th scope="col">Ảnh</th>
                                <th scope="col">Số ĐT</th>
                                <th scope="col">Email</th>
                                <th scope="col">Địa Chỉ</th>
                                <th scope="col">Chức vụ</th>
                                <th scope="col">Xóa</th>
                                <th scope="col">Sửa</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($employees as $employee)
                            <tr>

                                <td>{{$employee->nameemploy}}</td>
                                <td>
                                    <img class="imgproduct" src="{{ ('storage/images/employee/' . $employee->imgemploy)}}" alt="">
                                </td>
                                <td>{{$employee->phoneemploy}}</td>
                                <td>{{$employee->emailemploy}}</td>
                                <td>{{$employee->addressemploy}}</td>
                                <td>{{$employee->jobemploy}}</td>
                                <td>
                                    <form action="{{ route('nhanvien.delete', ['id' => $employee->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{route('nhanvien.edit', ['id' => $employee->id]) }}">
                                        <button type="submit" class="btn btn-warning">Sửa</button>
                                    </form>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>