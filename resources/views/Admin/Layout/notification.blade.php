
@if(session('success'))
      <script>
        $(document).ready(function(){
            $('#some-id').trigger('click');
        });
</script>
<script src="{{asset('../../backend/js/toastDemo.js')}}"></script>
    <script src="{{asset('../../backend/js/desktop-notification.js')}}"></script>

@endif
@if(session('info'))
      <script>
        $(document).ready(function(){
            $('#update').trigger('click');
        });
      </script>
      <script src="{{asset('../../backend/js/toastDemo.js')}}"></script>
    <script src="{{asset('../../backend/js/desktop-notification.js')}}"></script>

@endif
@if(session('danger'))
      <script>
        $(document).ready(function(){
            $('#delete').trigger('click');
        });
      </script>
      <script src="{{asset('../../backend/js/toastDemo.js')}}"></script>
    <script src="{{asset('../../backend/js/desktop-notification.js')}}"></script>

@endif
    
