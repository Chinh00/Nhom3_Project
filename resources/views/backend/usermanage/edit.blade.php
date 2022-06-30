@extends('backend.layouts.main')
@section('content')
    <div class="col-12 mt-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Check thông tin và Thêm quyền</h4>
                <div class="col-md-12">
                    @include('backend.layouts.notification')
                    <div>
                        <div class="col-md-12">
                            @if($errors->any())

                                <div class="alert alert-danger ">
                                    <ul>
                                        @foreach($errors->all() as $errors)
                                            <li>{{$errors}}</li>
                                        @endforeach
                                    </ul>
                                </div>

                            @endif
                        </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Họ tên</label>
                                <label type="text" class="form-control" id="exampleInputName1"  name="fullName" >{{$user->fullName}}</label>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Tên tài khoản</label>
                                <label type="text" class="form-control" id="exampleInputName1"  name="userName">{{$user->userName}}</label>
                            </div>

                            <div class="form-group">
                                <label>Ảnh đại diện</label>
                                <!--upload photo unisharp laravel-->

                                <img src="{{$user->photo}}" id="holder" style="margin-top:15px;height:100px;width: 100px" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Email</label>
                                <label type="email" class="form-control" id="exampleInputName1" placeholder="Nguyen1111@gmail.com" name="email" >{{$user->email}}</label>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">SĐT</label>
                                <label type="text" class="form-control" id="exampleInputName1" placeholder="0123456789" name="phone" value="">{{$user->phone}}</label>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Địa chỉ</label>
                                <label type="text" class="form-control" id="exampleInputName1" placeholder="Điền địa chỉ" name="address" value="">{{$user->address}}</label>
                            </div>


                        <form class="forms-sample" action="{{route('user.update',$user->id)}}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="exampleSelectGender">Vai trò</label>
                                <select class="form-control" id="role" name="role">
                                    <option value="staff" {{$user->role=='staff' ? 'selected' : ''}}>Nhân viên</option>
                                    <option value="customer" {{$user->role=='customer' ? 'selected' : ''}}>Khách hàng</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Status</label>
                                <select class="form-control" id="exampleSelectGender" name="status">
                                    <option value="active" {{$user->status=='active' ? 'selected' : ''}}>Hoạt động</option>
                                    <option value="inactive" {{$user->status=='inactive' ? 'selected' : ''}}>Ngừng hoạt động</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Xác nhận</button>
                            <button class="btn btn-light">Hủy bỏ</button>
                        </form>
                    </div>
                </div>
            </div>
            @endsection

            @section('script')
                <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
                <script>
                    $('#lfm').filemanager('image');
                </script>

@endsection
