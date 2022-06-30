@section('css')
    <link rel="stylesheet" href="{{asset('template/backend/vendors/iconfonts/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/backend/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('template/backend/vendors/css/vendor.bundle.addons.css')}}">
    <link rel="stylesheet" href="{{asset('template/backend/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('template/backend/images/favicon.png')}}" />
@endsection

@extends('backend.layouts.main')
@section('content')

    <div class="main-panel">        
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
                Form elements
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Product</h4>
                  <p class="card-description">
                    Form add products
                  </p>
                  <form class="forms-sample" method="post" action="{{route('postadd')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="{{old('name')}}">
                      @error('name')
                            <div class="alert alert-danger mt-2">{{$message}}</div>                      
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Price</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Price" name="price" value="{{old('price')}}">
                      @error('price')
                            <div class="alert alert-danger mt-2">{{$message}}</div>                      
                      @enderror
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputPassword4">Disscount</label>
                      <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Disscount" name="disscount">
                    </div> -->
                    <div class="form-group">
                      <label for="exampleSelectGender">Disscount</label>
                        <select class="form-control" id="exampleSelectGender" name="disscount">
                          <option>Chưa có bảng disscount</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Quantity</label>
                      <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Quantity" name="quantity" value="{{old('quantity')}}">
                      @error('quantity')
                            <div class="alert alert-danger mt-2">{{$message}}</div>                      
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Content</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" name="content" placeholder="Content of Product" value="{{old('content')}}"></textarea>
                      @error('content')
                            <div class="alert alert-danger mt-2">{{$message}}</div>                      
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Configuration</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" name="configuration" placeholder="Configuration of Product" value="{{old('configuration')}}"></textarea>
                      @error('configuration')
                            <div class="alert alert-danger mt-2">{{$message}}</div>                      
                      @enderror
                    </div>
                    <div class="form-group">
                        <div class="card">
                                <div class="card-body">
                                    <p class="card-description">Categories</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                @if(isset($data))
                                                        <div class="form-group">
                                                          @foreach($data as $key)
                                                              <div class="form-check">
                                                                <label class="form-check-label" for="{{$key->id}}">
                                                                  <input type="radio" class="form-check-input" name="categories" id="{{$key->id}}" value="{{$key->id}}" {{($key->id == 1 ) ? "checked" : ""}}>
                                                                  {{$key->title}}
                                                                </label>
                                                              </div>
                                                          @endforeach
                                                        </div>
                                                @endif
                                            </div>
                                        
                                        </div>
                                </div>
                          </div>
                        @error('categories')
                            <div class="alert alert-danger mt-2">{{$message}}</div>                      
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Status</label>
                        <select class="form-control" id="exampleSelectGender" name="status">
                          <option>Active</option>
                          <option>Not Active</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Condition</label>
                        <select class="form-control" id="exampleSelectGender" name="condition">
                          <option>Old</option>
                          <option>New</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label>Images</label>
                      <input type="file" name="img[]" class="file-upload-default" multiple>
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                        
                      </div>
                      @error('img')
                            <div class="alert alert-danger mt-2">{{$message}}</div>                      
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="/admin/products" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>


@endsection

@section('js')
    <!-- plugins:js -->
  <script src="{{asset('template/backend/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('template/backend/vendors/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('template/backend/js/off-canvas.js')}}"></script>
  <script src="{{asset('template/backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('template/backend/js/misc.js')}}"></script>
  <script src="{{asset('template/backend/js/settings.js')}}"></script>
  <script src="{{asset('template/backend/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('template/backend/js/file-upload.js')}}"></script>
  <script src="{{asset('template/backend/js/typeahead.js')}}"></script>
  <script src="{{asset('template/backend/js/select2.js')}}"></script>
@endsection
             