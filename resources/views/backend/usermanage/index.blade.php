@extends('backend.layouts.main')
@section('content')

    <div id="content">


        <!-- Begin Page Content -->
        <div class="container">

            <!-- Page Heading -->
            <div class="row">

                <h3 class="h3  text-gray-800">Quản lý Người dùng </h3>
            </div>
            <div class="col-md-12">
                @include('backend.layouts.notification')
                <div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="col-lg-12 col-md-12 card-header py-3 ">
                            <h4 class="m-0 font-weight-bold text-primary">Bảng Người dùng</h4>
                            <h6 class="float-left mt-2">Tổng User: {{\App\Models\User::count()}} </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Stt</th>
                                        <th>Họ tên</th>
                                        <th>Ảnh đại diện</th>
                                        <th>Tên tài khoản</th>
                                        <th>Email</th>
                                        <th>Vai trò</th>
                                        <th>Trạng thái</th>
                                        <th>Hành động</th>

                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Stt</th>
                                        <th>Họ tên</th>
                                        <th>Ảnh đại diện</th>
                                        <th>Tên tài khoản</th>
                                        <th>Email</th>
                                        <th>Vai trò</th>
                                        <th>Trạng thái</th>
                                        <th>Hành động</th>

                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    @foreach($user as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->fullName}}</td>
                                            <td><img src="{{$item->photo}}" alt="banner-image" style="max-height: 90px;max-width: 120px"></td>
                                            <td>{{$item->userName}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>
                                            @if($item->role=='staff')
                                                <span class="badge badge-primary">Nhân viên</span>
                                            @else
                                                <span class="badge badge-danger">Khách hàng</span>

                                            @endif
                                                </td>
                                            <td>

                                                <input type="checkbox" data-height="20px" data-width="80px"  name="toggle" value="{{$item->id}}" {{$item->status=='active' ? 'checked' : '' }} data-toggle="toggle" data-on="Active" data-off="Inactive" data-onstyle="success" data-offstyle="danger" >
                                            </td>
                                            <td>
                                                <a href="{{route('user.edit',$item->id)}}" data-toggle="tooltip" title="edit" class="float-left m-1 btn btn-xl btn-outline-dark " ><i class="fas fa-edit"></i></a>
                                                <a href="javascript:void(0);"  data-toggle="modal" data-target="#userID{{$item->id}}" title="edit" class="float-left m-1 btn btn-xl btn-outline-dark " ><i class="fas fa-eye"></i></a>

                                                <form class="float-left" method="post" action="{{route('user.destroy',$item->id)}}">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="" data-id="{{$item->id}}" data-toggle="tooltip" title="delete" class=" dltBtn m-1 btn btn-xl btn-outline-danger " ><i class="fas fa-trash-alt"></i></a>

                                                </form>

                                            </td>


                                            <!-- Modal -->
                                            <div class="modal fade" id="userID{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="fullName">{{$item->fullName}}</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div>
                                                                        <strong>Tên tài khoản</strong>
                                                                        <p class="mt-1">{{$item->userName}}</p>
                                                                    </div>
                                                                    <div>
                                                                        <strong>Email</strong>
                                                                        <p class="mt-1">{{$item->email}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div>
                                                                        <strong>SĐT</strong>
                                                                        <p class="mt-1">{{$item->phone}}</p>
                                                                    </div>
                                                                    <div>
                                                                        <strong>Địa chỉ</strong>
                                                                        <p class="mt-1">{{$item->address}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div>
                                                                        <strong>Vai trò</strong>
                                                                        <p class="mt-1">{{$item->role}}</p>
                                                                    </div>
                                                                </div><div class="col-md-6">
                                                                    <div>
                                                                        <strong>Trạng thái</strong>
                                                                        <p class="mt-1">{{$item->status}}</p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            </td>

                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

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
                            text: "Khi đã chia tay thì không quay lại đâu đó!",
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
                            url:"{{route('userStatus')}}",
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

