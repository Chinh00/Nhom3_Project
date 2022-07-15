@extends('./Admin/Layout/main')
@section('css')
  <link rel="shortcut icon" href="{{asset('../../backend/images/favicon.png')}}" />
@endsection
@section('content-wrapper')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Sửa thông tin giảm giá</h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/products/">Discount</a></li>
                <li class="breadcrumb-item"><a href="/admin/products/">Sửa thông tin</a></li>
              </ol>
            </nav>
        </div>
        <div class="card">
            <form action="/admin/discount/update" class="p-2" method="post">
                @csrf
                <input type="hidden" value="{{$res->id}}" name="id">
                <div class="form-group">
                    <label for="title" class="form-title">Tiêu đề giảm giá</label>
                    <input type="text" name="title" id="" class="form-control" placeholder="abc..." value="{{$res->title}}">
                </div>
                <div class="form-group">
                    <label for="percent" class="form-label">Phần trăm giảm giá</label>
                    <input type="text" name="percent" id="" class="form-control" placeholder="5, 10, 15, ... (%)" value="{{$res->percent}}">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Thời gian bắt đầu</label>
                    <input type="datetime-local" class="form-control" id="recipient-name" name="time_start" value="{{$res->time_start}}">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Thời gian kết thúc</label>
                    <input type="datetime-local" class="form-control" id="recipient-name" name="time_end" value="{{$res->time_end}}">
                </div>
                <div class="form-group">
                    <select class="custom-select" name="status">
                        <option value="1" {{$res->status == "1" ? "selected" : ""}}>Hoạt động</option>
                        <option value="0" {{$res->status == "0" ? "selected" : ""}}>Không hoạt động</option>
                    </select>
                </div>
                <div class="d-flex justify-content-around">
                    <input type="submit" value="Sửa" class="btn btn-success">
                    <a href="/admin/discount" class="btn btn-outline-success">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('../../backend/js/data-table.js')}}"></script> 
    <!-- <script src="{{asset('../../backend/js/modal-demo.js')}}"></script> -->
    <script>


    </script>
@endsection
