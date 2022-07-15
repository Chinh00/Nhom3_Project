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
              <h4 class="card-title">Bảng người dùng</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <a href="" class="btn btn-outline-primary m-2">Thêm mới</a>
                    <table id="order-listing" class="table table-bordered">
                      <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên người dùng</th>
                            <th>Tên tài khoản</th>
                            <th>Email</th>
                            <th>Ảnh đại diện</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Trạng thái</th>
                            <th>Quyền hạn</th>
                            <th>Thời gian tạo tài khoản</th>
                            <th>Chức năng</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($users as $key)
                            <tr>
                              <td>{{$key->id}}</td>
                              <td>{{$key->fullName}}</td>
                              <td>{{$key->userName}}</td>
                              <td>{{$key->email}}</td>
                              <td><img src="{{$key->photo}}" alt=""></td>
                              <td>{{$key->phone}}</td>
                              <td>{{$key->address}}</td>
                              <td>
                                @if($key->status == "1")
                                  <label class="badge badge-primary badge-pill">Hoạt động</label>
                                @else
                                  <label class="badge badge-warning badge-pill">Không hoạt động</label>
                                @endif
                              </td>
                              <th>
                                @if($key->role == "admin")
                                  <label class="badge badge-danger badge-pill">Quản trị viên</label>
                                @else
                                  <label class="badge badge-primary badge-pill">Người dùng</label>
                                @endif
                              </th>
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