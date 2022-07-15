@extends('./Admin/Layout/main')
@section('css')
  <link rel="shortcut icon" href="{{asset('../../backend/images/favicon.png')}}" />
@endsection
@section('content-wrapper')
    <!-- partial: Table -->
    <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Data table
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/products/">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data table</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bảng sản phẩm</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <a href="/admin/products/add" class="btn btn-outline-primary m-2">Thêm mới</a>
                    <table id="order-listing" class="table table-bordered">
                      <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Giá</th>
                            <th>Giảm giá</th>
                            <th>Số lượng kho</th>
                            <th>Đánh giá</th>
                            <th>Trạng thái</th>
                            <th>Thể loại</th>
                            <th>Thời gian thêm</th>
                            <th>Thao tác</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($data as $key)
                            <tr>
                              <td>{{$key->id}}</td>
                              <td>{{$key->name}}</td>
                              <td>{{number_format($key->price)}}</td>
                              <td>{{number_format($key->offer_price)}}</td>
                              <td>{{$key->quantity}}</td>
                              <td>{{$key->ratings}}</td>
                              <td>
                                @if($key->status == "1")
                                  <label class="badge badge-primary badge-pill">Hoạt động</label>
                                @else
                                  <label class="badge badge-warning badge-pill">Không hoạt động</label>
                                @endif
                              </td>
                              <td>
                                @if($key->condition == "1")
                                  Mới
                                @else
                                  Cũ
                                @endif
                              </td>
                              <td>{{$key->created_at}}</td>
                              <td>
                                  <a href="" class="btn btn-primary p-2 m-2">Chi tiết</a>
                                  <form action="/admin/products/deleted/{{$key->id}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger p-2 m-2" onclick="return confirm('Có chắc muốn xóa không ?')">Xóa</button>
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
@endsection
@section('js')
    <script src="{{asset('../../backend/js/data-table.js')}}"></script>
@endsection