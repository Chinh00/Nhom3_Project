@include('./Admin/Layout/header')
@include('./Admin/Layout/footer')
@include('./Admin/Layout/sidebar')
@include('./Admin/Layout/right-sidebar') 

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Melody Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('backend/vendors/iconfonts/font-awesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('backend/vendors/css/vendor.bundle.addons.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="http://www.urbanui.com/" />
  @yield('css')
</head>
<body>
  <div class="container-scroller">
    @yield('header')
    <div class="container-fluid page-body-wrapper">
      @yield('right-sidebar')
      @yield('sidebar')
      <div class="main-panel">
          @yield('content-wrapper')
          @yield('footer')
      </div>
    </div>
    <input type="hidden" name="" id="some-id" onclick="showSuccessToast()">
    <input type="hidden" name="" id="update" onclick="showInfoToast()"> 
    <input type="hidden" name="" id="delete" onclick="showDangerToast()"> 

  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="{{asset('backend/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('backend/vendors/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('backend/js/off-canvas.js')}}"></script>
  <script src="{{asset('backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('backend/js/misc.js')}}"></script>
  <script src="{{asset('backend/js/settings.js')}}"></script>
  <script src="{{asset('backend/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('backend/js/dashboard.js')}}"></script>
  <script src="{{asset('../../backend/js/data-table.js')}}"></script>
  @yield('js')
  <!-- End custom js for this page-->
  @include('./Admin/Layout/notification')
 
       

</body>


</html>

  

