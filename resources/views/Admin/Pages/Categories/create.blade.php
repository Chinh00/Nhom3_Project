@extends('./Admin/Layout/main')

@section('content-wrapper')


    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Thêm Category</h4>
                <div class="col-md-12">
                    <div>
                        <div class="col-md-12">
                        </div>
                        <form class="forms-sample" action="/admin/category/create" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Tiêu đề <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Title" name="title" value="{{old('title')}}">
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
                                <label name="photo">Hình ảnh</label>
                                    <input type="file" name="photo" class="file-upload-default" onchange="encodeImageFileAsURL(this)">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                        </span>
                                </div>
                                <div class="card mt-3 p-4" style="width: 100%;">
                                    <img id="img" alt="">
                                </div>
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
                                <label for="parent_id">Thuộc danh mục</label>
                                <select class="form-control" id="status" name="parent_id">
                                    <option value="" selected></option>
                                    @foreach($parent_cats as $key)
                                        <option value="{{$key->id}}">{{$key->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Tình trạng</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="1" {{old('status')=='active' ? 'selected' : ''}}>Hoạt động</option>
                                    <option value="0" {{old('status')=='inactive' ? 'selected' : ''}}>Không hoạt động</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="/admin/category" class="btn btn-light">Cancel</a>
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
@section('js')
        <script src="{{asset('../../backend/js/file-upload.js')}}"></script>
        <script>
            function encodeImageFileAsURL(element) {
      var file = element.files[0];
      var reader = new FileReader();
      reader.onloadend = function() {
        $('#img').attr('src', reader.result);
      }
      reader.readAsDataURL(file);
    }
        </script>
@endsection

