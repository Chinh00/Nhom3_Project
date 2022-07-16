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
                            <a class="nav-link " id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab" aria-controls="signin-2" aria-selected="true">Đăng nhập</a>
                        </li>
         
                    </ul>
                    <div class="tab-content">

<form action="{{route('loginSubmit')}}" method="POST">
    @csrf
    <div class="form-group">
        <span>Vui lòng nhập Email:</span>

        <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="exampleInputEmail1"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email" >
        @error('email')
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @enderror
    </div>
    <div class="form-group">
        <span>Vui lòng nhập Password:</span>

        <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror"  id="exampleInputPassword1" placeholder="Password" name="password" required autocomplete="current-password">
        @error('password')
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @enderror
    </div>

    <div class="form-footer d-flex">
        <button type="submit" class="btn btn-outline-primary-2 mt-2">
            <span>Đăng nhập</span>
            <i class="icon-long-arrow-right"></i>
        </button>
        

        <div class="mr-1 mt-4"><a href="/register" class="register" style="font-size: 1.6rem">Đăng ký tài khoản mới</a></div>
        <div class="custom-control custom-checkbox mt-2">
            <input type="checkbox" class="custom-control-input" id="signin-remember-2">
            <label class="custom-control-label" for="signin-remember-2">Duy trì đăng nhập</label>
        </div><!-- End .custom-checkbox -->

        <a href="#" class="forgot-link mt-2">Quên mật khẩu?</a>

        
    </div><!-- End .form-footer -->
    
</form>
<div class="form-choice">
    <div class="row">
    
        <div class="col-sm-6">
            <a href="#" class="btn btn-login btn-g">
                <i class="icon-google"></i>
                Đăng nhập với Google
            </a>
        </div><!-- End .col-6 -->
        <div class="col-sm-6">
            <a href="#" class="btn btn-login btn-f">
                <i class="icon-facebook-f"></i>
                Đăng nhập với Facebook
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
