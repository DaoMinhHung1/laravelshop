@include('Backend.Component.Header')
<div class="col-10">
    <h3>Quản lý Điện thoại</h3>
    <div class="container">
        <div class="row mt-5 ">
            <div class="col-12">
                <div class="table-responsive">

                    <table class="table table-bordered text-center  ">
                        <thead>
                            <tr>
                                <th scope="col">Mã</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Ảnh</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Xóa</th>
                                <th scope="col">Sửa</th>

                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($products as $dienthoai)
                            <tr>
                                <td>{{$dienthoai->maproduct}}</td>
                                <td>{{$dienthoai->nameproduct}}</td>
                                <td>
                                    <img class="imgproduct" src="{{ ('storage/images/' . $dienthoai->imgproduct)}}"
                                        alt="">
                                </td>
                                <td>{{$dienthoai->priceproduct}}</td>
                                <td>{{$dienthoai->desproduct}}</td>
                                <td>
                                <form action="{{ route('dienthoai.delete', ['id' => $dienthoai->id]) }}" method="POST">
                                 @csrf
                                 @method('DELETE')
                                     <button type="submit" class="btn btn-danger">Xóa</button>
                                  </form>
                                </td>
                                <td>
                                    <form action="{{route('dienthoai.edit', ['id' => $dienthoai->id]) }}"> 
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