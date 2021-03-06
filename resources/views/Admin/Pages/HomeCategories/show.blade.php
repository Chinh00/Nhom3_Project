@extends('./Admin/Layout/main')

@section('content-wrapper')

    <div class="page-header">
        <h3 class="page-title">
            Danh mục
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh mục</li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Quản lý danh mục</h3>
            <h6 class="text-small">Tổng Banner: {{\App\Models\Home_Categories::count()}}</h6>
            <div class="row">
                <div class="col-12 ">
                    @include('Admin.Layout.notification')

                    <div class="table-responsive">
                        <a href="{{route('homecategories.create')}}" class="btn btn-outline-primary m-2">Thêm mới</a>
                        <table id="order-listing" class="table table-bordered Categories">
                            <thead>
                            <tr>
                                <th class="text-center ">STT</th>
                                <th class="text-center">Danh mục</th>
                                <th class="text-center">Thuộc danh mục</th>
                                <th class="text-center">Thời gian tạo</th>
                                <th class="text-center">Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($homeCategory as $key)
                                @php
                                   $parent_id = \App\Models\Categories::where('id',$key->category_id)->value('parent_id');
                                @endphp

                                <tr>
                                    <th>{{$key->id}}</th>
                                    <td>{{\App\Models\Categories::where('id',$key->category_id)->value('title')}}</td>
                                    <td>{{\App\Models\Categories::where('id',$parent_id)->value('title')}}</td>

                                    <th>{{$key->created_at}}</th>

                                    <td>
                                        <a href="/admin/homecategories/edit/{{$key->id}}" data-toggle="tooltip" title="edit"
                                           class="float-left m-1 btn btn-xl btn-outline-dark "><i
                                                class="fas fa-edit"></i></a>
                                        <form class="float-left ml-2" method="POST" action="{{route('homecategories.destroy',$key->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger float-left m-1" onclick="return confirm('Có chắc muốn xóa không ?')"><i class="fas fa-trash"></i></button>
                                        </form>



                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tr>
                                <th class="text-center ">STT</th>
                                <th class="text-center">Danh mục</th>
                                <th class="text-center">Thuộc danh mục</th>
                                <th class="text-center">Thời gian tạo</th>
                                <th class="text-center">Hành động</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script src="{{asset('backend/js/data-table.js')}}"></script>

@endsection

@section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.dltBtn').click(function (e){
            var form=$(this).closest('form');
            var dataID=$(this).data('id');
            e.preventDefault();
            swal({
                title: "Bạn chắc chứ?",
                text: "Khi đã *chia tay* thì không quay lại đâu đó!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                        swal("Xóa thành công!", {
                            icon: "success",
                        });
                    } else {
                        swal("Chưa xóa được rồi!");
                    }
                });


        })
    </script>


    <script>
        $('input[name=toggle]').change(function (){
            var mode=$(this).prop('checked');
            var id=$(this).val();
            // alert(id);
            $.ajax({
                url:"{{route('categoryStatus')}}",
                type:"POST",
                data:{
                    _token:'{{csrf_token()}}',
                    mode:mode,
                    id:id,
                },
                success:function(response){
                    if(response.status){
                        alert(response.msg);
                    }
                    else {
                        alert('Hãy thử lại');

                    }
                }
            })
        })
    </script>

@endsection
