@extends('Frontend.Layouts.main')
@section('content')

<main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('{{ asset('frontend/assets/images/backgrounds/login-bg.jpg') }}')">
            <div class="container"></div>
            <div class="form-box">

                <div class="form-tab">
                    <ul class="nav nav-pills nav-fill" role="tablist">
  
                        <li class="nav-item">
                            <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="true">Đăng ký</a>
                        </li>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane fade" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">


</div><!-- .End .tab-pane -->
<div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
    @include('Admin.Layout.notification')


    <form action="{{route('registerSubmit')}}" method="POST">
        @csrf
        <div class="form-group">
            <span>Vui lòng nhập Họ và tên:</span>
            <input type="text" class="form-control" id="register-fullName"  class="form-control @error('fullName') is-invalid @enderror" name="fullName" value="{{ old('fullName') }}" required autocomplete="fullName" autofocus autofocus placeholder="Họ và tên"  >
            @error('fullName')
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @enderror
        </div><!-- End .form-group -->
        <div class="form-group mt-2">
            <span>Vui lòng nhập Email:</span>

            <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Username" >
            @error('email')
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @enderror

        </div>
        <div class="form-group mt-2">
            <span>Vui lòng nhập Password:(Dài hơn 8 ký tự)</span>

            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password" placeholder="Password"  name="password" required autocomplete="current-password">
            @error('password')
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @enderror
        </div>

        <div class="form-footer mt-2">
            <button type="submit" class="btn btn-outline-primary-2 mt-2">
                <span>Đăng Ký</span>
                <i class="icon-long-arrow-right"></i>
            </button>


        </div><!-- End .form-footer -->
    </form>
    <div class="form-choice">
        <div class="row">
            <div class="col-sm-6">
                <a href="#" class="btn btn-login btn-g">
                    <i class="icon-google"></i>
                    Login With Google
                </a>
            </div><!-- End .col-6 -->
            <div class="col-sm-6">
                <a href="#" class="btn btn-login  btn-f">
                    <i class="icon-facebook-f"></i>
                    Login With Facebook
                </a>
            </div><!-- End .col-6 -->
        </div><!-- End .row -->
    </div><!-- End .form-choice -->
</div><!-- .End .tab-pane -->
</div><!-- End .tab-content -->
</div><!-- End .form-tab -->
</div><!-- End .form-box -->
</div><!-- End .container -->
</div><!-- End .login-page section-bg -->
</main><!-- End .main -->
@endsection
