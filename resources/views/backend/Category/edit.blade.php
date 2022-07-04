@extends('backend.layouts.main')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sửa Danh mục</h4>
                <div class="col-md-12">
                    @include('backend.layouts.notification')
                    <div>
                        <form class="forms-sample" action="{{route('category.update',$category->id)}}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="exampleInputName1">Tiêu đề <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Title" name="title" value="{{$category->title}}">
                                @error('title')
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Photo upload</label>
                                <!--upload photo unisharp laravel-->
                                <div class="input-group">
                           <span class="input-group-btn">
                             <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                               <i class="fa fa-picture-o"></i> Choose
                             </a>
                           </span>
                                    <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$category->photo}}">
                                </div>
                                <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                @error('photo')
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Đây là danh mục Cha :<span class="text-danger">*</span></label>
                                <input type="hidden" name="is_parent" value="0">

                                <input id="is_parent" type="checkbox" name="is_parent" value="{{$category->is_parent}}"
                                    {{$category->is_parent==1 ? 'checked':''}} > Đúng
                            </div>
                            <div class="form-group {{$category->is_parent==1 ? 'd-none':''}}" id="parent_cat_div">
                                <label for="parent_id">Danh mục Cha</label>
                                <select class="form-control show-tick" id="parent_id" name="parent_id">
                                    <option value="">---Danh mục Cha---</option>
                                    @foreach($parent_cats as $pcats)
                                        <option value="{{$pcats->id}}" {{$pcats->id==$category->parent_id ? 'selected':''}}>{{$pcats->title}}</option>

                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Tình trạng</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="active" {{$category->status='active' ? 'selected' : ''}}>Hoạt động</option>
                                    <option value="inactive" {{$category->status='inactive' ? 'selected' : ''}}>Không hoạt động</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-success mr-2">Cập nhật</button>
                            <button class="btn btn-light">Hủy</button>
                        </form>
                    </div>
                </div>
            </div>
            @endsection

            @section('script')
                <script>
                    $('#is_parent').change(function (e){
                        e.preventDefault();
                        var is_checked=$('#is_parent').prop('checked');
                        // alert(is_checked);
                        if(is_checked){
                            $('#parent_cat_div').addClass('d-none');
                            $('#parent_cat_div').val('');

                        }else {
                            $('#parent_cat_div').removeClass('d-none');

                        }
                    });
                </script>
                <script src="{{asset('vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>
                <script>
                    $('#lfm').filemanager('image');
                </script>
                <script>
                    $('#summary').summernote({
                        placeholder: 'Hãy điền mô tả...',
                        tabsize: 2,
                        height: 100
                    });
                </script>
@endsection
