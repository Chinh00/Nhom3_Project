@if(\Illuminate\Support\Facades\Auth::user()->role == 'admin' || 'staff')

    <!DOCTYPE html>
<html lang="en">


<head>
    @include('backend.layouts.header')
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('backend.layouts.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
       @include('backend.layouts.sidebar')
        @yield('content')
        <!-- partial -->
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
@include('backend.layouts.footer')
<!-- End custom js for this page-->
@yield('js')
</body>


</html>
@endif
