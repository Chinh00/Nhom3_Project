@extends('./Admin/Layout/main')
@section('css')
  <link rel="shortcut icon" href="{{asset('../../backend/images/favicon.png')}}" />
  <link rel="stylesheet" href="{{asset('../../backend/vendors/summernote/dist/summernote-bs4.css')}}">
@endsection
@section('content-wrapper')
    <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
                Thêm sản phẩm
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thêm sản phẩm</li>
                </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample"  action="/admin/products/add" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Name -->
                    <div class="form-group">
                      <label for="exampleInputName1">Tên sản phẩm</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Tên sản phẩm" name="name">
                    </div>
                    <!-- Price -->
                    <div class="form-group">
                      <label for="exampleInputEmail3">Giá sản phẩm</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Giá của sản phẩm" name="price">
                    </div>
                    <!-- Quantity -->
                    <div class="form-group">
                      <label for="exampleInputEmail4">Số lượng tồn kho</label>
                      <input type="text" class="form-control" id="exampleInputEmail4" placeholder="Số sản phẩm tồn trong kho" name="quantity">
                    </div>
                    <!-- Images -->
                    <div class="form-group">
                      <label name="image_link">Hình ảnh</label>
                      <input type="file" name="image_link" class="file-upload-default" id="mutiple_image" onchange="encodeImageFileAsURL(this)">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                      <div>
                        <img id="img" alt="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label name="image">Nhiều hình ảnh</label>
                      <input type="file" name="image[]" class="file-upload-default" multiple onchange="encodeImageFileAs(this)">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                      <div  id="images">
                        
                      </div>
                    </div>
                    <!-- Type -->
                    <div class="form-group">
                      <label for="type">Loại hàng</label>
                      <select class="form-control form-control-lg" id="type" name="type">
                        <option value="1" selected>Mới</option>
                        <option value="0">Cũ</option>
                      </select>
                    </div>
                    <!-- Discount -->
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Giảm giá</label>
                      <select class="form-control form-control-lg selectpicker" id="exampleFormControlSelect1" name="discount">
                        <option value=""></option>
                        @foreach($discount as $key)
                            <option value="{{$key->id}}" data-subtext="Heinz">{{$key->title}}</option>
                        @endforeach
                      </select>
                    </div>
                    <!-- Categories -->
                    <div class="form-group">
                      <label for="exampleFormControlSelect2">Danh mục</label>
                      <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="category">
                        @foreach($categories as $key)
                          @if($key->status == "1")
                            <option value="{{$key->id}}">{{$key->title}}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                    <!-- Configruation -->
                    <div class="form-group">
                      <div class="fs-3 text-center mb-3">Cấu hình sản phẩm</div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kích thước màn hình</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="6.1 inches, ...(inches)" name="size">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Công nghệ màn hình</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputEmail2" placeholder="LCD, IPS, ..." name="technology_display">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Camera</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputMobile" placeholder="108px, 50px, ..." name="camera">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Chipset</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputPassword2" placeholder="A13 Bionic, ..." name="chipset">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Dung lượng RAM</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="4GB, 6GB, ..." name="ram">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Bộ nhớ trong</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="32GB, 64GB, ..." name="rom">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Pin</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="2000MAh, ... (MAh)" name="pin">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Thẻ SIM</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="Nano-SIM + eSIM, ..." name="sim">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Hệ điều hành</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="IOS, Androi, ..." name="system">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Độ phân giải màn hình</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="1920x1080, ... (pixel)" name="resolution">
                        </div>
                      </div>
                    </div>
                    <!-- Content -->
                    <div class="form-group">
                      <div class="card-body">
                        <h4 class="card-title">Thông tin sản phẩm</h4>
                        <textarea name="content" id="summernoteExample"></textarea>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Thêm mới</button>
                    <a href="/admin/products" class="btn btn-light">Hủy</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
@section('js')
  <script src="{{asset('../../backend/js/data-table.js')}}"></script>
  <script src="{{asset('../../backend/vendors/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('../../backend/vendors/tinymce/themes/modern/theme.js')}}"></script>
  <script src="{{asset('../../backend/vendors/summernote/dist/summernote-bs4.min.js')}}"></script>
  <script src="{{asset('../../backend/js/editorDemo.js')}}"></script>
  <script src="{{asset('../../backend/js/file-upload.js')}}"></script>
  <script>
    function encodeImageFileAsURL(element) {
      var file = element.files[0];
      var reader = new FileReader();
      reader.onloadend = function() {
        $('#img').attr('src', reader.result);
        $('#img').css({"width": "125px", "margin" : "10px"});
      }
      reader.readAsDataURL(file);
    }
    function encodeImageFileAs(element) {
      
      var file = element.files;
      var a = []
      for(const key of file){
        a.push(key);
      };
      var html = '';
      console.log(a);
      for (var i = 0; i < a.length; i++){
        let file = a[i];
          let reader = new FileReader();
          reader.onload = function() {
            let img = '<img src="' + reader.result + '" style="' + 'width: 125px; margin: 10px;' + '">';
            html += img;
            console.log(html);
            $('#images').after(img);
          };
          reader.readAsDataURL(file);
      }
      $('#images').html(html);
      

      
    }
       

  </script>
@endsection
                  