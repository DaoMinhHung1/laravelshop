@include('Backend.Component.Header')
<div class="col-10">
    <h3>Quản lý Quần Áo</h3>
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
                                <th scope="col">Tình trạng</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Xóa</th>
                                <th scope="col">Sửa</th>

                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($products as $product)
                            <tr>
                                <td>{{$product->maproduct}}</td>
                                <td>{{$product->nameproduct}}</td>
                                <td>
                                    <img class="imgproduct" src="{{ ('storage/images/' . $product->imgproduct)}}"
                                        alt="">
                                </td>
                                <td>{{$product->priceproduct}}</td>
                                <td>{{$product->statusproduct}}</td>
                                <td>{{$product->desproduct}}</td>
                                <td>
                                <form action="{{ route('product.delete', ['id' => $product->id]) }}" method="POST">
                                 @csrf
                                 @method('DELETE')
                                     <button type="submit" class="btn btn-danger">Xóa</button>
                                  </form>
                                </td>
                                <td>
                                    <form action="{{route('product.edit', ['id' => $product->id]) }}"> 
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