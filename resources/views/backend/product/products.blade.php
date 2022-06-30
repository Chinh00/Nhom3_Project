@extends('backend.layouts.main')
@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Data table
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data table</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Data table</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                  <a href="{{route('products.add')}}" class="btn btn-outline-primary m-2">Thêm mới</a>
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th class="text-center">STT</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Price(VND)</th>
                            <th class="text-center">Offer_price</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Ratings</th>
                            <th class="text-center">Created_at</th>
                            <th class="text-center">Deleted</th>
                            <th class="text-center" >Fucntion</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($products as $key)
                            <tr>
                                <th>{{$key->id}}</th>
                                <th>{{$key->name}}</th>
                                <th>{{number_format($key->price)}}</th>
                                <th>{{$key->offer_price}}</th>
                                <th>{{$key->quantity}}</th>
                                <th>{{$key->ratings}}</th>
                                <th>{{$key->created_at}}</th>
                                <th>

                                    <form action="products/deleted" method="post">
                                      @csrf
                                      <input type="hidden" name="id" value="{{$key->id}}">
                                      <input type="hidden" name="deleted" value="{{$key->deleted}}">
                                      @if ($key->deleted == 1)
                                      <button class="btn btn-danger" type="submit">Deleted</button>
                                      @else
                                      <button class="btn btn-primary" type="submit">Restore</button>
                                      @endif
                                    </form>
                                </th>
                                <th colspan="2">
                                    <a href="" class="btn btn-primary mb-2">View</a>
                                    <a href="" class="btn btn-warning">Update</a>
                                </th>
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
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
@endsection
@section('scripts')
<script>
    //DESC database
    $('.Categories').DataTable({
        "order": [[ 0, "desc" ]], //or asc
    });
</script>
@endsection



@section('js')
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
      <script src="{{asset('template/backend/js/data-table.js')}}"></script>
@endsection
