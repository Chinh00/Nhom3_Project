@extends('./Admin/Layout/main')

@section('content-wrapper')


    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Thêm homecategories</h4>
                <div class="col-md-12">
                    <div>
                        <div class="col-md-12">
                        </div>
                        <form class="forms-sample" action="/admin/homecategories/create" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="parent_id">Danh mục</label>
                                <select class="form-control" id="status" name="parent_id">
                                    <option value="" selected></option>
                                    @foreach($parent_cats as $key)
                                        <option value="{{$key->id}}">{{$key->title}}</option>
                                    @endforeach
                                </select>
                            </div>




                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="/admin/homecategories" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>



@endsection


@section('script')

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

