@extends('./Admin/Layout/main')
@section('css')
  <link rel="shortcut icon" href="{{asset('../../backend/images/favicon.png')}}" />
@endsection
@section('content-wrapper')
    <!-- partial: Table -->
    <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Thông tin giảm giá
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/products/">Discount</a></li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bảng sản phẩm</h4>
              <!-- Modal starts -->
                 <div class="col-md-4 grid-margin stretch-card">
                    <div class="card-body">
                      <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="ModalLabel">Thông tin thêm mới</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="/admin/discount/add">
                                @csrf
                                <div class="form-group">
                                  <label for="title" class="form-label">Tiêu đề giảm giá</label>
                                  <input type="text" name="title" id="" class="form-control" placeholder="abc..." >
                                </div>
                                <div class="form-group">
                                  <label for="percent" class="form-label">Phần trăm giảm giá</label>
                                  <input type="text" name="percent" id="" class="form-control" placeholder="5, 10, 15, ... (%)" >
                                </div>
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Thời gian bắt đầu</label>
                                  <input type="datetime-local" class="form-control" id="recipient-name" name="time_start">
                                </div>
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Thời gian kết thúc</label>
                                  <input type="datetime-local" class="form-control" id="recipient-name" name="time_end">
                                </div>
                                <div class="d-flex justify-content-around">
                                  <input type="submit" value="Thêm mới" class="btn btn-success">
                                  <button type="button" class="btn btn-light" data-dismiss="modal">Đóng</button>
                                </div>
                              </form>
                              
                            </div>
                            
                          </div>
                        </div>
                      </div>
                      <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal-4" data-whatever="@mdo">Thêm mới</button>
                    </div>
                  </div> 
              <!-- Modal Ends -->
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table table-bordered">
                      <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tiêu đề giảm giá</th>
                            <th>Phần trăm giảm giá (%)</th>
                            <th>Thời điểm bắt đầu</th>
                            <th>Thời điểm kết thúc</th>
                            <th>Trạng thái</th>
                            <th>Thời gian tạo</th>
                            <th>Chức năng</th>
                        </tr>
                      </thead>

                      <tbody>
                          @foreach($data as $key)
                            <tr>
                              <td>{{$key->id}}</td>
                              <td>{{$key->title}}</td>
                              <td>{{$key->percent . "%"}}</td>
                              <td>{{$key->time_start}}</td>
                              <td>{{$key->time_end}}</td>
                              <td>
                                @if($key->status == "1")
                                  <label class="badge badge-primary badge-pill">Hoạt động</label>
                                @else
                                  <label class="badge badge-warning badge-pill">Không hoạt động</label>
                                @endif
                              </td>
                              <td>{{$key->created_at}}</td>
                              <td>
                                <form action="/admin/discount/view" method="get">
                                  @csrf
                                  <input type="hidden" name="id" value="{{$key->id}}">
                                  <input type="submit" value="Chi tiết" class="btn btn-outline-primary">
                                </form>
                                <form action="/admin/discount/deleted" method="post">
                                  @csrf
                                  <input type="hidden" name="id" value="{{$key->id}}">
                                  <input type="submit" value="Xóa" class="btn btn-outline-danger mt-3" onclick="return confirm('Bạn chắc chắn muốn xóa chứ? ')">
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
    <!-- <script src="{{asset('../../backend/js/modal-demo.js')}}"></script> -->
   
    
@endsection
