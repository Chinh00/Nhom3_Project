
<!-- plugins:js -->
<script src="{{asset('template/backend/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('template/backend/vendors/js/vendor.bundle.addons.js')}}"></script>

<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->

<script src="{{asset('template/backend/js/off-canvas.js')}}"></script>
<script src="{{asset('template/backend/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('template/backend/js/misc.js')}}"></script>
<script src="{{asset('template/backend/js/settings.js')}}"></script>
<script src="{{asset('template/backend/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('template/backend/js/dashboard.js')}}"></script>
<!-- plugins:js -->
  <script src="{{asset('../../vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('../../vendors/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('template/backend/js/off-canvas.js')}}"></script>
  <script src="{{asset('template/backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('template/backend/js/misc.js')}}"></script>
  <script src="{{asset('template/backend/js/settings.js')}}"></script>
  <script src="{{asset('template/backend/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('template/backend/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- End custom js for this page-->
<!-- Datatable-->
<script src="{{asset('template/backend/vendors/jquery/jquery.min.js')}}"></script>
<script src="{{asset('template/backend/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('template/backend/vendors/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('template/backend/vendors/jquery/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{asset('template/backend/vendors/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('template/backend/vendors/jquery/js/demo/datatables-demo.js')}}"></script>
{{--Summernote--}}
{{--<script src="{{asset('template/backend/summernote/summernote.js')}}"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
{{--datatable--}}
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>
{{--button boostrap--}}
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>


@yield('script')
