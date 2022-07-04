@extends('backend.layouts.main')
@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
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
                    <h6 class="text-small">Tổng Banner: {{\App\Models\Categories::count()}}</h6>
                    <div class="row">
                        <div class="col-12 ">
                            @include('backend.layouts.notification')

                            <div class="table-responsive">
                                <a href="{{route('category.create')}}" class="btn btn-outline-primary m-2">Thêm mới</a>
                                <table id="order-listing" class="table table-bordered Categories">
                                    <thead>
                                    <tr>
                                        <th class="text-center ">STT</th>
                                        <th class="text-center">Tiêu đề</th>
                                        <th class="text-center">Ảnh</th>
                                        <th class="text-center">Danh mục cha</th>
                                        <th class="text-center">Thuộc Danh mục</th>
                                        <th class="text-center">Tình trạng</th>
                                        <th class="text-center">Thời gian tạo</th>
                                        <th class="text-center" >Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($category as $key)
                                        <tr>
                                            <th>{{$key->id}}</th>
                                            <th>{{$key->title}}</th>
                                            <td><img src="{{$key->photo}}" alt="category-image" style="height: 40px; width: 40px"></td>
                                            <td>{{$key->is_parent===1 ? 'Đúng' : 'Không'}}</td>
                                            <td>{{\App\Models\Categories::where('id',$key->parent_id)->value('title')}}</td>
                                            <td>

                                                <input type="checkbox" {{$key->status== 'Active' ? 'checked' : '' }}  data-height="20px" data-width="80px"  name="toggle" value="{{$key->id}}"  data-toggle="toggle" data-on="Active" data-off="Inactive" data-onstyle="success" data-offstyle="danger" >
                                            </td>

                                            <th>{{$key->created_at}}</th>

                                            <td>
                                                <a href="{{route('category.edit',$key->id)}}" data-toggle="tooltip" title="edit" class="float-left m-1 btn btn-xl btn-outline-dark " ><i class="fas fa-edit"></i></a>
                                                <form class="float-left ml-2" method="post" action="{{route('category.destroy',$key->id)}}">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="" data-id="{{$key->id}}" data-toggle="tooltip" title="delete" class=" dltBtn m-1 btn btn-xl btn-outline-danger " ><i class="fas fa-trash-alt"></i></a>

                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tr>
                                        <th class="text-center">STT</th>
                                        <th class="text-center">Tiêu đề</th>
                                        <th class="text-center">Ảnh</th>
                                        <th class="text-center">Danh mục cha</th>
                                        <th class="text-center">Thuộc Danh mục</th>
                                        <th class="text-center">Tình trạng</th>
                                        <th class="text-center">Thời gian tạo</th>
                                        <th class="text-center" >Hành động</th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <!-- partial -->
    </div>
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
    <script>
        //DESC database
        $('.Categories').DataTable({
            "order": [[ 0, "desc" ]], //or asc
        });
    </script>
@endsection
