@extends('backend.layouts.main')
@section('content')
    <div class="col-12 mt-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Thêm Người dùng</h4>
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
                        <form class="forms-sample" action="{{route('user.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Họ tên</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Nguyen Van A" name="fullName" value="{{old('fullName')}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Tên tài khoản</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Nguyen1111" name="userName" value="{{old('userName')}}">
                            </div>

                            <div class="form-group">
                                <label>Ảnh đại diện</label>
                                <!--upload photo unisharp laravel-->
                                <div class="input-group">
                                   <span class="input-group-btn">
                                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                       <i class="fa fa-picture-o"></i> Chọn ảnh
                                     </a>
                                   </span>
                                    <input id="thumbnail" class="form-control" type="text" name="photo">
                                </div>
                                <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Email</label>
                                <input type="email" class="form-control" id="exampleInputName1" placeholder="Nguyen1111@gmail.com" name="email" value="{{old('email')}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">SĐT</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="0123456789" name="phone" value="{{old('phone')}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Địa chỉ</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Điền địa chỉ" name="address" value="{{old('address')}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectGender">Status</label>
                                <select class="form-control" id="exampleSelectGender" name="status">
                                    <option value="active" {{old('status')=='active' ? 'selected' : ''}}>Hoạt động</option>
                                    <option value="inactive" {{old('status')=='inactive' ? 'selected' : ''}}>Ngừng hoạt động</option>
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
