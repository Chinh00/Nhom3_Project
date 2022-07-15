@extends('./Admin/Layout/main')

@section('content-wrapper')


    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sửa Home Category</h4>
                <div class="col-md-12">
                    <div>
                        <div class="col-md-12">
                        </div>
                        <form class="forms-sample" action="/admin/homecategories/edit/{{$homeCategory->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Danh mục <span class="text-danger">*</span></label>
                                <select class="form-control" id="status" name="parent_id">
                                @foreach($category as $key)
                                        <option value=" {{$key->id}}" {{$key->id == $homeCate ? "selected" : ""}}>{{$key->title}}</option>
                                @endforeach
                                </select>
                                @error('category')
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @enderror


                            </div>



                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="/admin/homecategories" class="btn btn-light">Cancel</a>
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
@endsection

